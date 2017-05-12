<?
namespace Core;

abstract class Model
{

    public $tableName;
    public function getList()
    {
        $allPosts = DB::getInstance()->query("SELECT * FROM ".$this->tableName)->fetchAll();
        return $allPosts;
    }


    function delete($id)
    {
        $stmt = DB::getInstance()->prepare("DELETE FROM $this->tableName WHERE id =:id");
        $stmt->bindValue(':id', $id);
        $response = $stmt->execute();
        return $response;
    }
    function update($vars, $id)
    {
        $strParams = '';
        $params = [];

        function pdoSet($vars){

            foreach($vars as $key=>$value) {
                $strParams = "$key = $value";
                $params[]=$strParams;
            }
            return implode(", ", $params);
        }

        $stmt = DB::getInstance()->query("UPDATE $this->tableName SET ".pdoSet($vars)." WHERE id = $id");
        $response = $stmt->execute();

        return $response;
    }

    function add($vars)
    {
        $fields = array_keys($vars);
        $params = array_map(function($param){
            return ":".$param."";
        }, $fields);

        $columns = implode($fields, ', ');
        $strParams = implode($params, ', ');

        $stmt = DB::getInstance()->prepare("INSERT INTO $this->tableName ($columns) VALUES ($strParams);");

        foreach($vars as $key=>$value) {
            $stmt->bindValue(':'.$key, $value);
        }

        $stmt->execute();

        $result = DB::getInstance()->lastInsertId();

        if($result){
            return $result;
        }
        return false;
    }
}

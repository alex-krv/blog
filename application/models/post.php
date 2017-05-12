<?
namespace Application\Models;

use Core;
use Core\DB;

class Post extends Core\Model
{
    public $tableName = "post";


    //здесь писать запросы с лефтджойн
    public function getList()
    {
        $stmt = DB::getInstance()->prepare("SELECT " . $this->tableName . ".*, theme.label as label FROM " . $this->tableName . " LEFT JOIN theme ON " . $this->tableName .".label = theme.id");
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
    }

    public function getPost($id)
    {
        $stmt = DB::getInstance()->prepare("SELECT " . $this->tableName . ".*, theme.label as label FROM " . $this->tableName . " LEFT JOIN theme ON " . $this->tableName .".label = theme.id WHERE " . $this->tableName . ".id =:id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch();

        return $data;
    }
}

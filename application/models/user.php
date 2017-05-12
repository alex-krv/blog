<?
namespace Application\models;

use Core;
use Core\DB;

class User extends Core\model
{
    public $tableName = "user";
    //соединить пост с создателем райтджойн
    public function getUser($id)
    {
        $stmt = DB::getInstance()->prepare("SELECT * FROM " . $this->tableName . " RIGHT JOIN post ON post.user = " . $this->tableName . ".id WHERE post.id =:id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch();

        return $data;
    }
}

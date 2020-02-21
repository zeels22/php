<?php
namespace App\Models;
use PDO;

class Post extends \Core\Model{
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * from posts ORDER BY created_at');
    
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $results;
    }
    public static function insert($table, $fieldname, $value){
        $db = self::getDB();
        $query = 'INSERT INTO '."`$table`". "(`$fieldname`)".'VALUES' ." (\"$value\")";
        echo "<br>". $query;
        if($db->exec($query)){
            $last_id = $db->lastInsertId();
            return $last_id;
        }
        else{
            return 0;
        }
    }
    public static function select($value, $tablename, $where = 1){
        $db = static::getDB();
        $query = "SELECT $value from $tablename WHERE $where";
        $data = $db->query($query);
        if($data){
            return $data->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return 0;
        }
    }
    public static function deleteFromTable($table, $id){
        $db = static::getDB();
        $query = "DELETE from $table WHERE id = $id";
        
        if($db->exec($query)){
            return 1;
        }else{
            return 0;
        }
    }
    
    public static function updateIntoTable($table, $str, $where = 1){
        $db = static::getDB();
        $query = "UPDATE `$table` SET $str WHERE $where";
        echo $query;
        if($db->exec($query)){
            $last_id = $db->lastInsertId();
            return $last_id;
        }else{
            return 0;
        }
    }
    public static function getParentId($parent_id = 0){
        $db1 = self::getDB();
        $query = "SELECT `category_name`,`id` FROM `categories` WHERE `parent_category` = $parent_id";
        $stmt = $db1->query($query);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public static function getAllCategory(){
        $db = self::getDB();
        $query = "SELECT c.category_name as parent, GROUP_CONCAT( c1.category_name ) as child 
                FROM categories as c 
                JOIN categories as c1 
                ON c.id = c1.parent_category 
                GROUP BY c.category_name";
        $stmt = $db->query($query);
        $child = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($child as $key => $value){
            $childs = explode(",",$value['child']);
            array_pop($value);
            $value['childs'] = $childs;
            $data[$key] = $value;
        }   
        return $data;
    }
   public static function userCheck($email, $pass){
       $db = self::getDB();
       $query = "SELECT uid FROM user_info WHERE email = '$email' AND password = '$pass'";
       $stmt = $db->query($query);
       $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
       if(!empty($data)){
           return $data;
       }else{
           return false;
       }
   }
}
?>
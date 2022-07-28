<!--Реализуйте описанный класс DatabaseShell. Проверьте его работу.-->
<?php

class DatabaseShell
{
    private $link;

    public function __construct($host, $user, $password, $database)
    {
        $this->link = mysqli_connect($host, $user, $password, $database);
        mysqli_query($this->link, "SET NAMES 'utf8mb4'");
    }

    public function save($table, $data)
    {
        $query = "INSERT INTO $table SET $data";
        return mysqli_query($this->link, $query) or die(mysqli_error($this->link));
    }

    public function del($table, $id)
    {
        $query = "DELETE FROM $table WHERE id='$id'";
        return mysqli_query($this->link, $query) or die(mysqli_error($this->link));
    }

    public function delAll($table, $ids)
    {
        foreach ($ids as $id) {
            $this->del($table, $id);
        }
    }

    public function get($table, $id)
    {
        $query = "SELECT * FROM $table WHERE id='$id'";
        return mysqli_fetch_assoc(mysqli_query($this->link, $query));
    }

    public function getAll($table, $ids)
    {
        $arr = [];
        foreach ($ids as $id) {
            $arr[] = $this->get($table, $id);
        }
        return $arr;
    }

    public function selectAll($table, $condition)
    {
        $query = "SELECT * FROM $table WHERE $condition";
        $result = mysqli_query($this->link, $query);
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;
        return $data;
    }
}

$host = '127.0.0.1:3306';
$user = 'phpmyadmin';
$password = '0664041341';
$database = 'test';

$db = new DatabaseShell($host, $user, $password, $database);
//$db->save('NewTable', "title='title3'");
//$db->delAll('NewTable', [1,2]);
//print_r($db->get('NewTable', 4));
//print_r($db->getALL('NewTable', [5, 4]));
//print_r($db->selectAll('NewTable', "title='title3'"));
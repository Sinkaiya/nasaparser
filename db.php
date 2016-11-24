<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class db
{
    public function fetchAll() //Метод, извлекающий из таблицы все данные
    {
        result = mysqli_query("SELECT * FROM" . $this->$_table)
    }
}


var_dump($rssData);

class DB
{
    protected $db=null;
    protected $result=null;

    public function __construct($host, $user, $pass, $base, $charset='utf8')
    {
        $this->db = new mysqli($host, $user, $pass, $base);
        $this->db->set_charset($charset);
    }

    public function query ($query)
    {
        if (!$this->db)
            return false;

        if (is_object($this->result))
            $this->result->free(); //Очищаем предыдущий результат

        $this->result = $this->db->query($query); //Выполняем запрос

        if ($this->db->errno) //Если есть ошибки - выводим их
            die("mysqli error #" . $this->db->errno . ": " . $this->db->error);

        if (is_object($this->result)) // Возвращаем полученные в виде массива данные
        {
            while ($row = $this->result->fetch_assoc())
                $data[] = $row;
            return $data;
        }
        elseif ($this->result == false) //Если результат отрицательный - возвращаем ложь.
            return false;
        else return $this->db->affected_rows; //Если запрос затронул какие-либо строки - возвращаем их количество
    }
}

$db = new MyDB(SQL_HOST, SQL_LOGIN, SQL_PWD, SQL_BASE);
$data = $db->query("SELECT * FROM 'table'");
print_r ($data);

?>
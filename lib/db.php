<?php
require_once ('../common.php');

class DB
{
    private $link = "";

    private $host;
    private $username;
    private $password;
    private $db_name;

    public function __construct($host, $username, $password, $db_name)
    {
        $this->link = new mysqli($host, $username, $password, $db_name);
        mysqli_set_charset($this->link, 'utf8');

        if ($this->link->connect_error)
        {
            die('Ошибка подключения (' . $this->link->connect_errno . ') ' . $this->link->connect_error . '.<br>');
        }
        else
        {
            /*echo 'Установлено соединение с MySQL, ';
            if ($result = mysqli_query($this->link, "SELECT DATABASE()"))
            {
                $row = mysqli_fetch_row($result);
                printf("подключена БД %s.\n", $row[0]);
                mysqli_free_result($result);
                echo '<br><br>';
            }*/
        }
    }

    public function __destruct()
    {
        $this->link->close();
        //echo 'Соединение с MySQL закрыто.';
    }

    public function query($q)
    {
        return $this->link->query ($q);
    }

    public function putIntoDb ($parsedData)
    {
        //$titles = new parser();
        //$arr = $titles->parsedData;

        foreach ($parsedData as $item)
        {
            $title = $item['title'];
            $description = $item['description'];
            $url = $item['url'];
            $pubDate = date ('Y-m-d H:i:s', strtotime($item['pubDate']));
            $uplDate = date('Y-m-d H:i:s');
            $this->query("INSERT INTO content (title, description, image_url, publication_date, upload_date) VALUES ('$title', '$description', '$url', '$pubDate', '$uplDate')");
        }
    }
}

?>
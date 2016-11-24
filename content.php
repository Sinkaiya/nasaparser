<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'db.php';

class nasacontent extends db
{
    protected $_table = 'nasacontent';

    private $_id;
    private $_title;
    private $_image_url;
    private $_description;
    private $_publication_date;
    private $_upload_date;

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function getImageUrl()
    {
        return $this->_image_url;
    }

    public function setImageUrl($image_url)
    {
        $this->_image_url = $image_url;
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }

    public function getPublicationDate()
    {
        return $this->_publication_date;
    }

    public function setPublicationDate($publication_date)
    {
        $this->_publication_date = $publication_date;
    }

    public function getUploadDate()
    {
        return $this->_upload_date;
    }

    public function setUploadDate($upload_date)
    {
        $this->_upload_date = $upload_date;
    }



}


?>
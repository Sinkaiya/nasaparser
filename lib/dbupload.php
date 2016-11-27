<?php
require_once ('../common.php');

class dbupload
{
	private $rss;
	private $connection;

	public function __construct()
	{
		$this->rss = new parser();
		$this->connection = new db ('localhost', 'root', 'kongamato', 'nasa');
		$this->connection->putIntoDb($this->rss->parsedData);
	}
}
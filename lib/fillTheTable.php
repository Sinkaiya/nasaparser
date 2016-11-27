<?php
require_once ('../common.php');

class fillTheTable
{
	private $connection;
	//private $query;

	public function __construct()
	{
		$this->connection = new db('localhost', 'root', 'kongamato', 'nasa');
		$query = $this->connection->query ("SELECT * FROM content ORDER BY id DESC");
		$data = array();
		while ($row = mysqli_fetch_assoc ($query))
			{
				$data[] = $row;
			}
		foreach ($data as $item => $note)
		{
			echo '<div class="row">';
			echo '<div class="cell">' . $note['id'] . '</div>'; 
			echo '<div class="cell">' . $note['title'] . '</div>';
			echo '<div class="cell">' . $note['description'] . '</div>';
			echo '<div class="cell">' . $note['publication_date'] . '</div>';
			echo '<div class="cell">' . $note['upload_date'] . '</div>';
			echo '<div class="cell">0</div>';
			echo '</div>';
		}
	}
}
<?php
require_once ('../common.php');

class fillTheTable
{
	private $connection;
	//private $query;

	public function __construct()
	{
		$this->connection = new db('localhost', 'root', 'kongamato', 'nasa');
		$query = $this->connection->query ("SELECT * FROM content");
		$data = array();
		while ($row = mysqli_fetch_assoc ($query))
			{
				$data[] = $row;
			}
		foreach ($data as $item => $note)
		{
			echo '<div class="row">';
			echo '<div class="centercell">' . $note['id'] . '</div>';
			echo '<div class="centercell"><a href="edit.php">Edit</a> / <a href="edit.php">Delete</a></div>';
			echo '<div class="centercell"><a href="' . $note['image_url'] . '"> ' . $note['title'] . '</a> ' . '</div>';
			echo '<div class="cell">' . $note['description'] . '</div>';
			echo '<div class="centercell">' . $note['publication_date'] . '</div>';
			echo '<div class="centercell">' . $note['upload_date'] . '</div>';
			echo '<div class="centercell">0 comments</div>';
			echo '</div>';
		}
	}
}
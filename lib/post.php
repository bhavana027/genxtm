<?php 
class Post{
	private $db;
	public function __construct(){
		$this->db = new database;
	}
	// get all posts
		public function getallposts(){
		$this->db->query("SELECT posts.*, categories.category 
		AS cname
     	FROM posts
     	INNER JOIN categories
 		ON posts.id = categories.id 
		ORDER BY date DESC ");

	$results = $this->db->resultSet();
	return $results;
	}

	//categories
	public function getcategories(){
		$this->db->query("SELECT * FROM categories ");

	$results = $this->db->resultSet();
	return $results;
	}
public function getByCategory($category){
	$this->db->query("SELECT posts.*, categories.category 
			AS cname
     		FROM posts
     		INNER JOIN categories
 			ON posts.id = categories.id
 			WHERE posts.id = $category
			ORDER BY date DESC ");

	$results = $this->db->resultSet();
	return $results; 
	

}
public function getPost($id){
		$this->db->query("SELECT * FROM posts WHERE id = :id");  
		$this->db->bind(':id',$id);
		$row = $this->db->single();
		return $row;  	
}

  }
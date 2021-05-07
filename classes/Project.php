<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}


	public function checkUserName($username){
	    $query = "SELECT * FROM users WHERE username = '$username'";

	    $getUser = $this->db->select($query);

	    if ($username == ''){
	        echo '<span class="error">Username must not be empty.</span>';
        }elseif($getUser){
            echo "<span class='error'><b>$username is not available!</b></span>";
        }else{
            echo "<span class='success'><b>$username is available!</b></span>";
        }


	}

	public function checkName($name){
	    $query = "SELECT * FROM details WHERE name = '$name'";
	    $getName = $this->db->select($query);

	    if ($name == ''){
	        echo "<span class='error'>Enter your name</span>";
        }elseif ($getName){
            echo "<span class='error'>$name not available!</span>";
        }else{
            echo "<span class='success'>$name available!</span>";
        }
    }

	
}
?>
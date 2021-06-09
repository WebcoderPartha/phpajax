<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}

    public function checkUsername($username){
	    $query = "SELECT * FROM users WHERE username = '$username'";

	    $getUser = $this->db->select($query);

	    if ($username == ''){
	        echo "<span style='color:red'>Please enter username</span>";
	        exit();
        }elseif($getUser){
            echo "<span style='color:red'><b>$username</b> already exists</span>";
            exit();
        }else{
            echo "<span style='color:green'><b>$username</b> available</span>";
            exit();
        }

    }

    public function checkName($name){

	    $query = "SELECT * FROM details WHERE name LIKE '%$name%'";
	    $getName = $this->db->select($query);

	    $result = "";
	    $result .= "<div class='nameClass'><ul>";
	    if ($getName){
	        while($data = $getName->fetch_assoc()){
	            $result .= "<li>".$data['name']."</li>";
            }
        }else{
            $result .= "<li>No data found!</li>";
        }
        $result .= "</ul></div>";
	    echo $result;

    }

	
}
?>
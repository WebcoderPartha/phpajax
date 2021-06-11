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

    public function autoRefresh($content){

	    $query = "INSERT INTO details(name) VALUES('$content')";
	    $insert = $this->db->insert($query);
    }


    public function loadContent(){
	    $query = "SELECT * FROM details ORDER BY id DESC";
	    $getData = $this->db->select($query);
	    $result = '';
	    $result .= "<div class='loadcontent'><ul>";
	    if ($getData){
            while ($data = $getData->fetch_assoc()){
                 $result .= "<li>".$data['name']."</li>";
            }
        }else{
             $result .= "<li>No Data Found!</li>";
        }
        $result .= "</ul></div>";
	    echo $result;
    }

    public function searchKeyword($keyword){

	    $query      = "SELECT * FROM seach WHERE username LIKE '%$keyword%'";
	    $getSearch  = $this->db->select($query);
	    $result = "";
	    $result .= "<table class='tblone'><tr><th>ID:</th><th>Username:</th><th>Name:</th><th>Number:</th></tr>";
	    if ($getSearch){
	        while ($data = $getSearch->fetch_assoc()){
	            $result .= "<tr><td>".$data['id']."</td><td>".$data['username']."</td><td>".$data['name']."</td><td>".$data['number']."</td></tr>";

            }
            echo $result;

        }else{
	        echo "<h2>Data not found</h2>";
        }

    }

    public function autoSaveContent($content,$contentId){

	    if ($contentId != ''){

	        $query  = "UPDATE details SET name = '$content' WHERE id = '$contentId'";
	        $update = $this->db->update($query);

        }else{
	        $query  = "INSERT INTO details(name) VALUES ('$content')";
	        $insert = $this->db->insert($query);
	        $lastId = $this->db->link->insert_id;
	        echo $lastId;
	        exit();
        }

    }

}
?>
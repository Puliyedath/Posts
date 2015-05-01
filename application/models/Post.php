<?php
class Post extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function all() {
        return $this->db->query("select * from posts");
    }

    public function add($post){
        $query = "insert into posts(description) values(?)";
        $this->db->query($query, array($post['description']));
    }

}
?>

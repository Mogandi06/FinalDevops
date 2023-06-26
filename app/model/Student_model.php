<?php
class Student_model{
    private $db;

    public function __construct(){
        $this->db = new Database;

        if($this->db == false){
            echo "<script>console.log('Connection Failed.');</script>";
        } else {
            echo "<script>console.log('Connection Successfully.');</script>";
        }
    }

    public function getAllDataStudent(){
        $result = $this->db->query("select * from tbl_students;");
        $this->db->db_close();

        if($result->num_rows > 0){
            // convert to associative array
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $rows;
        } else {
            return [];
        }
       // return $arr_data;
    }
}
?>
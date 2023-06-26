<?php
class Attendance_model{
    private $db;

    public function __construct(){
        $this->db = new Database;

        if($this->db == false){
            echo "<script>console.log('Connection Failed.');</script>";
        } else {
            echo "<script>console.log('Connection Successfully.');</script>";
        }
    }

    public function getAllDataAttandance(){
        $result = $this->db->query("select * from tbl_attendance_list;");
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
    

    public function insertDataAttendance($data){
        //random
        $prefixes = array("IF", "IT");
        $randomPrefix = $prefixes[array_rand($prefixes)];
        $randomNumber = mt_rand(1000, 9999);

        //data
        $idAttend = "ATD" . bin2hex(random_bytes(5));
        $title = $data['title'];
        $date = $data['date'];
        $time = $data['time'];
        $idClass = $randomPrefix.$randomNumber;
        $course = $data['course'];
        $email = $data['lec_email'];
        $name = $data['lec_name'];
        $roomLat = mt_rand(-90, 90);
        $roomLong = mt_rand(-180, 180);
        $radius = $data['radius'];

        
        $sql = "INSERT INTO tbl_attendance_list (id_attendance, title_short, date_attendance, time_attendance, id_class, name_subject, email_lecturer, name_lecturer, room_latitude, room_longitude, max_radius, created_at) VALUES ('$idAttend','$title','$date','$time','$idClass','$course','$email','$name','$roomLat','$roomLong','$radius',NOW())";
        if($this->db->query($sql) === TRUE) {
            return true;
        }else {
            return false;
        }
    }

    public function deleteDataAttendance($id){
        $sql = "DELETE FROM tbl_attendance_list WHERE id = $id";
        if($this->db->query($sql) === TRUE){
            return true;
        } else {
            return false;
        }
    }

    public function updateDataAttendance($data){
	$id = $data['idClassUpdate'];
        $title = $data['titleUpdate'];
        $date = $data['dateUpdate'];
        $time = $data['timeUpdate'];
        $course = $data['courseUpdate'];
        $email = $data['lec_emailUpdate'];
        $radius = $data['radiusUpdate'];
        $sql = "UPDATE tbl_attendance_list SET date_attendance = '$date', time_attendance = '$time',  name_subject = '$course', email_lecturer = '$email', max_radius = '$radius', title_short = '$title' WHERE id_class = '$id' ";
        if($this->db->query($sql) === TRUE) {
            return true;
        }else {
            return false;
        }
    }
        
}
?>
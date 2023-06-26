<?php
class home extends Controller {
    // Constructor
    public function __construct() {

    }

    // Default method
    public function index() {
        // Associative Arrays (arrays with keys)
        $this->display("home/default");
    }

    public function petshop() {
        // Associative Arrays (arrays with keys)
        $this->display("home/petshop");
    }

    public function dashboard() {
        $arr_data['attendance'] = $this->logic("Attendance_model")->getAllDataAttendance();
        $this->display("home/admin", $arr_data);
    }

    public function page($current_page = 2, $next_page = 3, $prev_page = 1) {
        // Associative Arrays (arrays with keys)
        $arr_data['current'] = $current_page;
        $arr_data['next'] = $next_page;
        $arr_data['previous'] = $prev_page;
        $arr_data['title'] = "Personal Page";
        // Display page and send data
        $this->display('template/header', $arr_data);
        $this->display("home/page", $arr_data);
        $this->display('template/footer');
    }

    // Get status
    private function _status() {
        echo "This is home/status.";
    }

    public function inputstudent() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $status = $this->logic("Home_model")->input_data($_POST);

            if ($status === "SUCCESS") {
                echo "Yeayyy Sukses Tambah data.";
            }

            if ($status === "FAILED") {
                echo "Yah Gagal!";
            }

            if ($status === "ERROR") {
                echo "Ada ERROR Nich";
            }

        } else {
            echo "MUST REQUEST POST";
        }
    }

    public function insert() {
        //var_dump($_POST);
        if ($this->logic("Attendance_model")->insertDataAttendance($_POST) == true) {
            header('Location: ' . APP_PATH . '/home/dashboard');
            exit;
        }
    }

    public function delete($id) {
        //var_dump($_POST);
        if ($this->logic("Attendance_model")->deleteDataAttendance($id) == true) {
            header('Location: ' . APP_PATH . '/home/dashboard');
            exit;
        }
    }

    public function update() {
        //var_dump($_POST);
        if ($this->logic("Attendance_model")->updateDataAttendance($_POST) == true) {
            header('Location: ' . APP_PATH . '/home/dashboard');
            exit;
        }
    }
}
?>

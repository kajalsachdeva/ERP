<?php

include 'config/database.php';

class Model extends dbconnect {

    private $conn;

    public function __construct() {
// you can use $this->conn = $this->connect(); without calling parent()
        $this->conn = new dbconnect();
// $this->conn->connect();
    }

    public function getlogin() {

        $sql = "SELECT id, fullname, email from users WHERE email ='{$_SESSION['useremail']}'";
        $result = mysqli_query($this->conn->connect(), $sql);
        $row = mysqli_fetch_array($result);

        if ($result->num_rows > 0) {

            return $row;
        } else {
            return 0;
        }
    }

    public function getRegiter($values) {
        $sql = "INSERT INTO users (fullname, email, password)VALUES('$values[0]', '$values[1]', '$values[2]')";
        mysqli_query($this->conn->connect(), $sql);
    }

    public function CourseData($couresData) {

        $date = date('Y-m-d');
        $sql = "INSERT INTO course (course_name, description, created_date)"
                . "VALUES('$couresData[0]', '$couresData[1]', '$date')";

        $result = mysqli_query($this->conn->connect(), $sql);
    }

    public function getCourseData() {

        $sql = "select * from course  where status = 1 ";
        $result = mysqli_query($this->conn->connect(), $sql);
        $row = mysqli_fetch_all($result);

        return $row;
    }
public function getPaginationCourseData($start_from, $no_of_records_per_page)
{
     $sql = "select * from course  where status = 1 LIMIT $start_from, $no_of_records_per_page";
        $result = mysqli_query($this->conn->connect(), $sql);
        $row = mysqli_fetch_all($result);

        return $row;
}
    public function courseDetail($update_id) {

        $sql = "select * from course where id = $update_id";
        $result = mysqli_query($this->conn->connect(), $sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }

    public function getcourseDescription($update_id) {
        $sql = "select course_name, description from course where id = $update_id";
        $result = mysqli_query($this->conn->connect(), $sql);
        $row = mysqli_fetch_array($result);

        return $row;
    }

    public function updateCourseData($couresData, $update_id) {
        $updated_date = date('Y-m-d');
        $sql = "UPDATE course SET course_name = '$couresData[0]', description = '$couresData[1]', "
                . "updated_date = '$updated_date'  where id ='$update_id'";
        $result = mysqli_query($this->conn->connect(), $sql);
    }

    public function deleteCourseRecord($update_id) {
        $sql = "UPDATE course SET status = '0' where id ='$update_id'";
        $result = mysqli_query($this->conn->connect(), $sql);
    }

    public function deleteSelectedRecord($update_id) {
        $sql = "UPDATE course SET status = '0' where id ='$update_id'";
        $result = mysqli_query($this->conn->connect(), $sql);
    }

   public function addClientDetail($clientDetail)
   {
       
        $sql = "INSERT INTO client (client-name, client-email, company-detail, contact-number)VALUES('$clientDetail[0]', '$clientDetail[1]', '$clientDetail[2]', '$clientDetail[3]')";
        
     mysqli_query($this->conn->connect(), $sql);
     
   }

}

?>
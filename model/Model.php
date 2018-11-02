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

    public function getClientData() {
        $sql = "select * from client";
        $result = mysqli_query($this->conn->connect(), $sql);
        $clientData = mysqli_fetch_all($result);
        return $clientData;
    }

    public function getTechnologyData() {
        $sql = "select * from technology";
        $result = mysqli_query($this->conn->connect(), $sql);
        $technologyData = mysqli_fetch_all($result);
        return $technologyData;
    }

    public function addProjectDeatil($addProjectDetails) {

        $sql = "INSERT INTO project (project_id, project_name, project_approach, plan_status, project_flag, team_lead, project_manager, start_date,end_date, project_quality, project_description, estimated_hours, client_id, technology_id )"
                . "VALUES('$addProjectDetails[0]', '$addProjectDetails[1]', '$addProjectDetails[2]', '$addProjectDetails[3]', '$addProjectDetails[4]', '$addProjectDetails[5]', '$addProjectDetails[6]', '$addProjectDetails[7]', '$addProjectDetails[8]', '$addProjectDetails[9]', '$addProjectDetails[10]', '$addProjectDetails[11]', '$addProjectDetails[12]', '$addProjectDetails[13]')";
       
        
        mysqli_query($this->conn->connect(), $sql);
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

    public function getPaginationCourseData($start_from, $no_of_records_per_page) {
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

}

?>
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

        $sql = "INSERT INTO project (project_id, project_name, project_approach, plan_status, project_flag, team_lead, project_manager, start_date,end_date, project_quality, project_description, estimated_hours, project_status,  client_id, technology_id, image )"
                . "VALUES('$addProjectDetails[0]', '$addProjectDetails[1]', '$addProjectDetails[2]', '$addProjectDetails[3]', '$addProjectDetails[4]', '$addProjectDetails[5]', '$addProjectDetails[6]', '" . date('Y-m-d', strtotime($addProjectDetails[7])) . "', '" . date('Y-m-d', strtotime($addProjectDetails[8])) . "', '$addProjectDetails[9]', '$addProjectDetails[10]', '$addProjectDetails[11]', '$addProjectDetails[12]', '$addProjectDetails[13]', '$addProjectDetails[14]', '$addProjectDetails[15]' )";


        if (mysqli_query($this->conn->connect(), $sql)) {
            return 1;
        }
    }

    public function viewProjects() {


        $sql = "SELECT pro.`Id`, pro.`project_id`, pro.`project_name`, pro.`team_lead`, customer.`client_name`, pro.`project_manager`, pro.`plan_status`, pro.`project_flag`, pro.`project_quality`, (CASE  
  WHEN pro.`project_status`='1' THEN 'Active'
  WHEN pro.`project_status`='2' THEN 'Delivered'
  WHEN pro.`project_status`='3' THEN 'Hold'
  WHEN pro.`project_status`='4' THEN 'Closed'
  WHEN pro.`project_status`='5' THEN 'Inactive'
END) as pro_status
                FROM `project`AS pro
                INNER JOIN `client` AS customer
                ON customer.`client_id` = pro.`client_id` ORDER BY project_status ASC
                ";
        $result = mysqli_query($this->conn->connect(), $sql);
        $projectData = mysqli_fetch_all($result);
        return $projectData;
    }

    public function deleteProjectRecord($projectId) {
        $sql = "DELETE FROM project WHERE Id = $projectId ";
        mysqli_query($this->conn->connect(), $sql);
    }

    public function editProjectRecord($projectId) {
        $sql = "select * from project where Id = $projectId  ";
        $result = mysqli_query($this->conn->connect(), $sql);
        $project_record = mysqli_fetch_array($result);

        return $project_record;
    }

    public function viewProjectDetail($projectId) {

        $sql = "SELECT pro.project_name, pro.project_approach, (SELECT GROUP_CONCAT(tech.tech_name) AS technologies FROM technology as tech WHERE FIND_IN_SET(tech.tech_id, pro.technology_id)) AS `technologies` , pro.team_lead, customer.client_name, customer.client_email, customer.company_detail, customer.contact_number, pro.estimated_hours, pro.image

        FROM `project` as pro 
        INNER JOIN `client` AS customer
        ON customer.`client_id` = pro.`client_id`
        where pro.Id = $projectId";

        $result = mysqli_query($this->conn->connect(), $sql);

        $project_record_description = mysqli_fetch_array($result);

        return $project_record_description;
    }

    public function updateProjectData($updatedProjectDetail, $projectId) {
        $sql = "UPDATE project SET 	project_id = '$updatedProjectDetail[0]', project_name = '$updatedProjectDetail[1]', "
                . "project_approach = '$updatedProjectDetail[2]', plan_status = '$updatedProjectDetail[3]', "
                . "project_flag = '$updatedProjectDetail[4]', team_lead = '$updatedProjectDetail[5]', "
                . "project_manager = '$updatedProjectDetail[6]', start_date = $updatedProjectDetail[7], "
                . "end_date = '$updatedProjectDetail[8]', project_quality = '$updatedProjectDetail[9]', "
                . "project_description = '$updatedProjectDetail[10]', estimated_hours = $updatedProjectDetail[11], "
                . "project_status = '$updatedProjectDetail[12]', client_id = '$updatedProjectDetail[13]', "
                . "technology_id = '$updatedProjectDetail[14]', image = '$updatedProjectDetail[15]'"
                . "where Id ='$projectId'";

        $result = mysqli_query($this->conn->connect(), $sql);
    }

//********************funtions of Project Task Module***********************
    public function getProjectList() {
        $sql = "select project_id, project_name from project";
        $result = mysqli_query($this->conn->connect(), $sql);
        $project_record = mysqli_fetch_all($result);

        return $project_record;
    }

//**********************End of module funvtions*****************************


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
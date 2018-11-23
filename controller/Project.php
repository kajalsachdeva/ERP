<?php

include_once("model/Model.php");
include 'controller/Controller.php';

class Project extends Controller {

    public function __construct() {
        $this->model = new Model();
    }

    public function addProject() {
        $clientData = $this->model->getClientData();
        $techData = $this->model->getTechnologyData();
        if (isset($_POST['submit'])) {

            if (empty($_POST["project_id"])) {
                $pidErrormsg = '<span class="error"> Please enter project id</span>';
            } else if (!is_numeric($_POST["project_id"])) {
                $pidErrormsg = '<span class="error"> Please enter numeric project id</span>';
            }

            if (empty($_POST['project_name'])) {
                $pnErrorms = '<span class="error"> Please enter project name</span>';
            }

            if (empty($_POST['project_approach'])) {
                $paErrorms = '<span class="error"> Please enter project approach</span>';
            }
            if (empty($_POST['plan_status'])) {
                $psErrorms = '<span class="error"> Please enter plan status</span>';
            }
            if (empty($_POST['team_lead'])) {
                $tlErrorms = '<span class="error"> Please enter team lead</span>';
            }
            if (empty($_POST['project_manager'])) {
                $pmErrorms = '<span class="error"> Please enter project manager</span>';
            }
            if (empty($_POST['client_name'])) {
                $cnErrorms = '<span class="error"> Please enter client name</span>';
            }
            if (empty($project_technologies)) {
                $ptErrorms = '<span class="error"> Please enter project technology</span>';
            }

            $project_technology = $_POST['technology'];

            $project_technologies = "";
            foreach ($_POST["technology"] as $project_technology) {

                $technologies[] = $project_technology;
                $project_technologies = implode(',', $technologies);
            }
            $uploadDir = 'uploads/';
            $filename = basename($_FILES["image"]["name"]);
            $target_path = $uploadDir . date('d_m_Y_H_i_s') . '_' . $filename;

            $file = $_FILES["image"]["tmp_name"];

            if ($_FILES["image"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
            }

            $imageFileType = strtolower(pathinfo($target_path, PATHINFO_EXTENSION));



            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            } else {



                move_uploaded_file($_FILES['image']['tmp_name'], $target_path);
            }
            $errorMsgvariable = array($pidErrormsg, $pnErrorms, $paErrorms, $psErrorms, $tlErrorms, $pmErrorms, $cnErrorms, $ptErrorms);

            $addProjectDetail = array($_POST['project_id'], $_POST['project_name'], $_POST['project_approach'], $_POST['plan_status'],
                $_POST['project_flag'], $_POST['team_lead'], $_POST['project_manager'], $_POST['start_date'], $_POST['end_date'],
                $_POST['project_quality'], $_POST['project_description'], $_POST['estimated_hours'], $_POST['project_status'], $_POST['client_name'], $project_technologies, $target_path);


            $result = $this->model->addProjectDeatil($addProjectDetail);
            if (!array_filter($addProjectDetail)) {
                $this->render('view/AddProject.php', array('clientData' => $clientData, 'techData' => $techData, 'errorMsgVariable' => $errorMsgvariable));
            } else {
                $this->redirect('Project/viewProject' . '?' . 'result=' . $result);
            }
        } else {

            $this->render('view/AddProject.php', array('clientData' => $clientData, 'techData' => $techData));
        }
    }

    public function viewProject() {
        $recordInsertFlag = $_GET['result'];

        $viewAllProjects = $this->model->viewProjects();
        $this->render('view/viewProjects.php', array('viewallproject' => $viewAllProjects, 'result' => $recordInsertFlag));
    }

    public function deleteProjectRecord() {
        $projectId = $_GET['Id'];
        $this->model->deleteProjectRecord($projectId);
        $this->redirect('Project/viewProject');
    }

    public function editProject() {
        $projectId = $_GET['Id'];

        $projectData = $this->model->editProjectRecord($projectId);

        $clientData = $this->model->getClientData();
        $techData = $this->model->getTechnologyData();
        $this->render('view/EditProjectRecord.php', array('projectData' => $projectData, 'clientData' => $clientData, 'techData' => $techData));


        if (isset($_POST['submit'])) {

            $project_technology = $_POST['technology'];
            $project_technologies = "";
            foreach ($_POST["technology"] as $project_technology) {

                $technologies[] = $project_technology;
                $project_technologies = implode(',', $technologies);
            }
            $uploadDir = 'uploads/';
            $filename = basename($_FILES["image"]["name"]);
            if (isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])) {

                echo "image deleted" . unlink($projectData['image']);
                $target_path = $uploadDir . date('d_m_Y_H_i_s') . '_' . $filename;
            } else {
                $target_path = $projectData['image'];
            }

            $file = $_FILES["image"]["tmp_name"];

            if ($_FILES["image"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
            }

            $imageFileType = strtolower(pathinfo($target_path, PATHINFO_EXTENSION));



            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            } else {

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {

                    echo "The file " . basename($_FILES['image']['name']) . " is uploaded";
                } else {

                    echo "Problem uploading file";
                }
            }

            $addProjectDetail = array($_POST['project_id'], $_POST['project_name'], $_POST['project_approach'],
                $_POST['plan_status'], $_POST['project_flag'], $_POST['team_lead'], $_POST['project_manager'],
                $_POST['start_date'], $_POST['end_date'], $_POST['project_quality'], $_POST['project_description'],
                $_POST['estimated_hours'], $_POST['project_status'], $_POST['client_name'], $project_technologies, $target_path);

            $this->model->updateProjectData($addProjectDetail, $projectId);
        }
    }

    public function viewProjectDescription() {
        $projectId = $_GET['Id'];

        $projectData = $this->model->viewProjectDetail($projectId);

        $this->render('view/ProjectDescription.php', $projectData);
    }

    public function projectTask() {
        $projectName = $this->model->getProjectList();
        if (isset($_POST['submit'])) {
            $project_lists = $_POST['project_list'];
            
            $tasks = $_POST['project_task'];
            $time  = $_POST['time_picker'];
            $date = $_POST['date'];
            $details = array($_POST['project_list'], $_POST['project_task'], $_POST['time_picker'], $_POST['date']);
            echo '<pre>';
            print_r($details);
            die;
        } else {
            $this->render('view/ProjectTask.php', $projectName);
        }
    }

}

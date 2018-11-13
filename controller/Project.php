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

            $project_technology = $_POST['technology'];
            $project_technologies = "";
            foreach ($_POST["technology"] as $project_technology) {

                $technologies[] = $project_technology;
                $project_technologies = implode(',', $technologies);
            }

            $addProjectDetail = array($_POST['project_id'], $_POST['project_name'], $_POST['project_approach'], $_POST['plan_status'],
                $_POST['project_flag'], $_POST['team_lead'], $_POST['project_manager'], $_POST['start_date'], $_POST['end_date'],
                $_POST['project_quality'], $_POST['project_description'], $_POST['estimated_hours'], $_POST['project_status'], $_POST['client_name'], $project_technologies);
//           $addProjectDetail = array('project_id' => $_POST['project_id'], 
//                                      'project_name' => $_POST['project_name'],
//                                      'project_approach' => $_POST['project_approach'], 
//                                      'client_name' => $_POST['client_name'],
//                                      'plan_status' => $_POST['plan_status'], 
//                                      'project_flag'=> $_POST['project_flag'], 
//                                      'team_lead'=> $_POST['team_lead'],
//                                      'project_manager'=> $_POST['project_manager'], 
//                                      'start_date'=> $_POST['start_date'], 
//                                      'end_date'=> $_POST['end_date'], 
//                                      'project_quality' =>  $_POST['project_quality'],
//                                      'project_technologies' => $project_technologies, 
//                                      'project_description' =>   $_POST['project_description'],
//                                      'estimated_hours' => $_POST['estimated_hours']);

            $this->model->addProjectDeatil($addProjectDetail);
            $this->render('view/AddProject.php', array('clientData' => $clientData, 'techData' => $techData));
        } else {
            $this->render('view/AddProject.php', array('clientData' => $clientData, 'techData' => $techData));
        }
    }

    public function viewProject() {
        $viewAllProjects = $this->model->viewProjects();
        $this->render('view/viewProjects.php', $viewAllProjects);
    }

    public function deleteProjectRecord() {
        $projectId = $_GET['Id'];
        $this->model->deleteProjectRecord($projectId);
        $this->redirect('Project/viewProject');
    }

    public function editProject() {
        $projectId = $_GET['Id'];
//        echo $projectId;
//    die;
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

            $addProjectDetail = array($_POST['project_id'], $_POST['project_name'], $_POST['project_approach'],
                $_POST['plan_status'], $_POST['project_flag'], $_POST['team_lead'], $_POST['project_manager'], 
                $_POST['start_date'],  $_POST['end_date'], $_POST['project_quality'], $_POST['project_description'], 
                $_POST['estimated_hours'], $_POST['project_status'], $_POST['client_name'], $project_technologies);
          
            $this->model->updateProjectData($addProjectDetail, $projectId);
        }
    }

    public function viewProjectDescription() {
        $projectId = $_GET['Id'];
        $projectData = $this->model->viewProjectDetail($projectId);
        $this->render('view/ProjectDescription.php', $projectData);
    }

}

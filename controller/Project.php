<?php

include_once("model/Model.php");
include 'controller/Controller.php';

class Project extends Controller {

    public function __construct() {
        $this->model = new Model();
    }

    public function addProject() 
            {
                $clientData = $this->model->getClientData();
                $techData = $this->model->getTechnologyData();
                if (isset($_POST['submit'])) {

            if (empty($_POST["project_id"])) 
            {
                $pidErrormsg = '<span class="error"> Please enter project id</span>';
                
            } else if(!is_numeric($_POST["project_id"]))
            {
                $pidErrormsg = '<span class="error"> Please enter numeric project id</span>';
            }
            
            if(empty($_POST['project_name']))
            {
                $pnErrorms = '<span class="error"> Please enter project name</span>';
               
            }
           
            if(empty($_POST['project_approach']))
            {
                $paErrorms = '<span class="error"> Please enter project approach</span>';
                
            }
            if(empty($_POST['plan_status']))
            {
                $psErrorms = '<span class="error"> Please enter plan status</span>';
                
            }
            if(empty($_POST['team_lead']))
            {
                $tlErrorms = '<span class="error"> Please enter team lead</span>';
               
            }
             if(empty($_POST['project_manager']))
            {
                $pmErrorms = '<span class="error"> Please enter project manager</span>';
                
            }
             if(empty($_POST['client_name']))
            {
                $cnErrorms = '<span class="error"> Please enter client name</span>';
               
            }
            if(empty($project_technologies))
            {
                $ptErrorms = '<span class="error"> Please enter project technology</span>';
                
            }
            $project_technology = $_POST['technology'];

            $project_technologies = "";
            foreach ($_POST["technology"] as $project_technology) {

                $technologies[] = $project_technology;
                $project_technologies = implode(',', $technologies);
            }
              $errorMsgvariable = array($pidErrormsg, $pnErrorms, $paErrorms, $psErrorms, $tlErrorms, $pmErrorms, $cnErrorms, $ptErrorms);
            $addProjectDetail = array($_POST['project_id'], $_POST['project_name'], $_POST['project_approach'], $_POST['plan_status'],
                $_POST['project_flag'], $_POST['team_lead'], $_POST['project_manager'], $_POST['start_date'], $_POST['end_date'],
                $_POST['project_quality'], $_POST['project_description'], $_POST['estimated_hours'], $_POST['project_status'], $_POST['client_name'], $project_technologies);

            
         $result =  $this->model->addProjectDeatil($addProjectDetail);
       $this->render('view/AddProject.php', array('clientData' => $clientData, 'techData' => $techData, 'errorMsgVariable' => $errorMsgvariable));
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
                $_POST['start_date'], $_POST['end_date'], $_POST['project_quality'], $_POST['project_description'],
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

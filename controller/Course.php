<?php

include_once("model/Model.php");
include 'controller/Controller.php';

class Course extends Controller {

    public function __construct() {
        $this->model = new Model();
    }

    public function addCourse() {

        if (isset($_POST['submit'])) {

            $couresData = array($_POST['InputCourseName'], $_POST['InputDescripton']);

            $this->model->CourseData($couresData);
            $this->render('view/AddCourse.php', 'false');
        } else {
            $this->render('view/AddCourse.php', 'false');
        }
    }

    public function viewCourse() {
        $no_of_records_per_page = 10;
        if (isset($_GET["page"])) {
            $pn = $_GET["page"];
        } else {
            $pn = 1;
        };

        $start_from = ($pn - 1) * $no_of_records_per_page;
        $result = $this->model->getCourseData();
        $total_records = count($result);

        $total_pages = ceil($total_records / $no_of_records_per_page);
        $paginationresult = $this->model->getPaginationCourseData( $start_from, $no_of_records_per_page);
        $this->render('view/ViewCourse.php', array('result' => $paginationresult, 'totalpages' => $total_pages));
    }

    public function viewCourseDetail() {

        $id = $_GET['Id'];
        $result = $this->model->courseDetail($id);

        $this->render('view/ViewCourseDetail.php', $result);
    }

    public function editCourse() {
        $id = $_GET['Id'];
        $result = $this->model->getcourseDescription($id);
        $this->render('view/GetCourseDetail.php', $result);
        if (isset($_POST['submit'])) {
            $couresData = array($_POST['InputCourseName'], $_POST['InputDescripton']);

            $this->model->updateCourseData($couresData, $id);
        }
    }

    public function deleteCourse() {
        $id = $_GET['Id'];
        $result = $this->model->deleteCourseRecord($id);
        $this->redirect('Course/viewCourse');
    }

    public function deleteSelectedCourse() {

        if (count($_POST["selected_id"]) > 0) {

            $checkbox = $_POST['selected_id'];
            for ($i = 0; $i < count($checkbox); $i++) {
                $del_id = $checkbox[$i];
                //echo $all;
                $this->model->deleteSelectedRecord($del_id);
                $this->redirect('Course/viewCourse');
            }
        }
    }

}

?>
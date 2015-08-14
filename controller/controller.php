<?php
/**
 * Created by PhpStorm.
 * User: Anh Đức
 * Date: 14/8/2015
 * Time: 8:09 PM
 */
include_once 'model/model.php';
include_once 'view/view.php';
class controller {
    public $model;
    public $view;
    function  __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }
    public function action() {
        if(isset($_POST['submit'])) {
            return $this->mayTinh2();
        }
        else {
            return $this->mayTinh1();
        }

    }
    public function mayTinh1() {
        return $this->view->viewMayTinh1();
    }
    public function mayTinh2() {
        $this->model->setGiaTri();
        $kq;
        switch($this->model->pt) {
            case '+': $kq = $this->model->st1 + $this->model->st2; break;
            case '-': $kq = $this->model->st1 - $this->model->st2; break;
            case 'x': $kq = $this->model->st1 * $this->model->st2; break;
            case ':': $kq = $this->model->st1 / $this->model->st2; break;
        }
        return $this->view->viewMayTinh2($kq);
    }
}
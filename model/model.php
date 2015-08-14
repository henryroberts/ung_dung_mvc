<?php

/**
 * Created by PhpStorm.
 * User: Anh ??c
 * Date: 14/8/2015
 * Time: 8:09 PM
 */
class model {
    public $st1;
    public $pt;
    public $st2;
    public function setGiaTri() {
        $this->st1 = $_POST['st1'];
        $this->st2 = $_POST['st2'];
        $this->pt = $_POST['pt'];
    }
}
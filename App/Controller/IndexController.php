<?php

namespace App\Controller;

use MF\Controller\Action;

class IndexController extends Action {

  public function index() {
    $this->view->data = 'Index_Data';
    $this->render('layout', 'index');
  }

  public function about() {
    $this->view->data = 'About_Data';
    $this->render('layout_2', 'about');
  }
}

?>
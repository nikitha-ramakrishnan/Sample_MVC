<?php
  class PagesController {
    public function home() {
      $first_name = 'Nikitha';
      $last_name  = 'Ramakrishnan';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>
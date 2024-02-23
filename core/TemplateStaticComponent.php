<?php

require_once __DIR__ . '/../../core/BaseComponent.php';

class PlaceholderClassName{
    private $data;

    public function __construct($data = []) {
      $this->data = $data;
    }
    function render($param = []){
      echo $this->getTemplate($param);
    }

    function getTemplate($param) {
      ob_start(); 
      ?>
      <!-- START TEMPLATE -->
      <div></div>
      <!-- END TEMPLATE -->
      <?php
      return ob_get_clean();
    }


}

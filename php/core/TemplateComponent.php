<?php

require_once __DIR__ . '/../core/BaseComponent.php';

class TemplateComponent extends BaseComponent {
    private $data;

    public function __construct($url, $token) {
      parent::__construct($url, $token);

      $this->data = [];
      try {
          $this->data = $this->getData();
      } catch (Exception $e) {
          echo $e->getMessage();
      }

  }

    public function getData() {
        $query = [
            "query" => "query QueryName {
                        
                        }",
            "variables" => null,
            "operationName" => "QueryName"
        ];

        $result = $this->sendQuery($query);
        return $result["data"]; // Specify data example ["collaborators"];
    }

    function getTemplate($param) {
      ob_start(); // Avvia l'output buffering
      ?>
      <div></div>
      <?php
      return ob_get_clean(); // Restituisce l'output e termina l'output buffering
  }

  function render(){
    echo $this->getTemplate(null);
  }

}

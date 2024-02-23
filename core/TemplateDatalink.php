<?php

require_once __DIR__ . '/../../core/BaseComponent.php';

class PlaceholderClassName extends BaseComponent {
    private $data;
    private $slug;

    public function __construct($url, $token) {
      parent::__construct($url, $token);
    
      $this->data = [];
      try {
          $this->data = $this->queryData();
      } catch (Exception $e) {
          echo $e->getMessage();
      }

  }

    public function queryData() {
        $query = [
            "query" => "query QueryData {}
              ",
            "variables" => null,
            "operationName" => "QueryData"
        ];
        $result = $this->sendQuery($query);
        return $result["data"][""]; // Specify data in [""];
    }

    public function getData() {
        return $this->data;
    }
}

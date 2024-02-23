<?php

require_once __DIR__ . '/../../core/BaseComponent.php';

class HeaderComponent{
    private $data;

    public function __construct($data = []) {
      $this->data = $data;
    }
    function render($param = []){
      echo $this->getTemplate($param);
    }

    function getTemplate($param) {
      $logoPath = $param["logoPath"] ?? "path/to/your/logo.png";

      ob_start(); 
      ?>
      <!-- START TEMPLATE -->
      <div class="container mt-5">
        <div class="jumbotron text-center">
            <img src="<?= htmlspecialchars($logoPath) ?>" alt="Logo" class="mb-4" style="max-height: 100px;">
            <h1 class="display-4">Welcome to cView!</h1>
            <p class="lead">The micro framework I've devised for crafting static sites and landing pages with ease.</p>
            <hr class="my-4">
            <p>Optimized for projects with a few pages and manageable content through GraphQL-based Headless CMS. Learn more about how to get started:</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Start Here</a>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h2>Simple and Streamlined</h2>
                <p>cView is built to be straightforward and easy to pick up, enabling you to quickly craft your sites without a steep learning curve.</p>
            </div>
            <div class="col-md-4">
                <h2>Perfect for Static Sites</h2>
                <p>Ideal for static websites and landing pages, cView simplifies the development process, making it faster and more efficient.</p>
            </div>
            <div class="col-md-4">
                <h2>Seamless CMS Integration</h2>
                <p>Easily manage your content with Headless CMS based on GraphQL, ensuring a smooth workflow and a dynamic user experience.</p>
            </div>
        </div>
      </div>
      <!-- END TEMPLATE -->
      <?php
      return ob_get_clean();
    }


}

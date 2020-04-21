<?php

require '../views/partials/nav.view.php';

require '../vendor/autoload.php';

require Router::load('../routes.php')
    ->direct(Request::uri());
    
require '../views/partials/footer.view.php';
<?php
    
namespace myApp\utils\hello;
function world(){
    echo "Hello World";
}

namespace myApp;
echo utils\hello\world();

use myApp\utils\hello; echo hello(); //discordo
?>
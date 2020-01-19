<?php

use Controllers;

// outra forma
use Controllers\{
    Admin as Adm,
    Repositories as Rep
};

$p = new Rep.person();
?>
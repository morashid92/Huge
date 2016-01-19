<?php
session_start();
session_destroy();
Redirect::to('admin/index'); 
exit();

?>
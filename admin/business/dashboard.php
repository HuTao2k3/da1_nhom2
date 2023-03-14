<?php
function dashboardIndex(){
    $content  = "QUẢN LÝ WEB"; 
    adminRender('./dashboard/index.php',compact('content'));
}
?>
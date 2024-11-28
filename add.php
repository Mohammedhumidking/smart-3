
<?php
require_once('api.php');
$API = new RouterosAPI();
// if (!empty($user)) {
if ($API->connect("5.5.5.1", "admin", "02010018772")) {
   
    $user = strip_tags($_POST['name']);
    $API->comm("/ip/hotspot/user/add", array("name"=>"$user"));
   
    $respones = [
        "status"=> true,
        "msg" => "Done inserted data"
    ];

    print_r(json_encode($respones));
} else {

    $respones = [
        "status"=> false,
        "msg" => "error"
    ];


} 





?>
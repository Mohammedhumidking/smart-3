<?php

require_once('api.php');
$API = new RouterosAPI();
 $ip = strip_tags($_POST['ip']);
 $user = strip_tags($_POST['user']);
 $password = strip_tags($_POST['password']);

if ($API->connect("$ip", "$user", "$password")) {
    
    session_start();
    header('location: active.php');
    $respones = [
        "status"=> true,
        "msg"=>"good"
    ];

    print_r(json_encode($respones));

} else {
    $respones = [
        "status"=> false,
        "msg"=>"no user name or password"
    ];
    print_r(json_encode($respones));
}
// if ($API->connect("5.5.5.1", "admin", "02010018772")) {
//     $user = strip_tags($_POST['name']);
//    $API->comm("/ip/hotspot/user/add", array("name"=>"$user"));

//     $respones = [
//         "status"=> true,
//         "mag"=>"done insert data Mohammed"
//     ];

//     print_r(json_encode($respones));
// } 

?>
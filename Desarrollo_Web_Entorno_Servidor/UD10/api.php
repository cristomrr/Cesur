<?php
require_once './model/ClubBasquet.php';

//$_SERVER['REQUEST_METHOD'] = 'DELETE';
//$_GET['id'] = 1;

$db = new ClubBasquet();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $result = $db->read();
    header("HTTP/1.1 200 OK");
    $json = json_encode($result);
    echo $json;
    exit();

} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $result = $db->create($_POST['name'], $_POST['position'], $_POST['num'], $_POST['age']);
    header("HTTP/1.1 200 OK");
    $json = json_encode($result);
    echo $json;
    exit();

} else if ($_SERVER['REQUEST_METHOD'] == 'PUT') {

    $result = $db->update($_POST['data'], $_POST['row'], $_POST['id']);
    header("HTTP/1.1 200 OK");
    $json = json_encode($result);
    echo $json;
    exit();

} else if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    $result = $db->delete(($_GET['id']));
    header("HTTP/1.1 200 OK");
    $json = json_encode($result);
    echo $json;
    exit();

}
//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");
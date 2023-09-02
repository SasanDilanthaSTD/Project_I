<?php
session_status();
//---------------------------- stro quaction in array -------------------------------------------------------------
#import  dbconnector class
require "../Classes/DB_Conector.php";
require "../Classes/stress_level.php";
// create connection
$con = DB_Conector::get_connection();
//create object
$stress_obj = new stress_level();
$set_indexing = $stress_obj->get_questions_pss($con);

if ($_POST['set']) {
    /*if (isset($_POST['index'])){
        echo $set_indexing[$_POST['index']]['q'];
        echo $set_indexing[$_POST['index']]['q_id'];
    }*/
    echo json_encode($set_indexing);
}else {
    echo "not set variable";
}

/*
echo "<pre>";
print_r($set_indexing);
echo "</pre>";
*/
//$_SESSION['q_set']= $set_indexing;


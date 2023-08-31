<?php
session_status();
//---------------------------- stro quaction in array -------------------------------------------------------------
#import  dbconnector class
require "../Classes/DB_Conector.php";
//create arry
$set_indexing = array();

// create connection


// set quary
$sql_1 = "SELECT stress_tool.q_id, stress_tool.questions FROM stress_tool WHERE stress_tool.method = 'PSS' ORDER BY RAND()";
$resutl = $con->prepare($sql_1);
// execute
if ($resutl->execute()) {
    while ($result_set = $resutl->fetch(PDO::FETCH_OBJ)) {
        $set_indexing[] = array(
            "q_id" => $result_set->q_id,
            "q" => $result_set->questions
        );
    }
    echo $set_indexing[0]["q"] ."<br><br><br>";

    echo "<pre>";
    print_r($set_indexing);
    echo "</pre>";

    $_SESSION['q_set']= $set_indexing;
}

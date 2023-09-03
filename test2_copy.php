<?php
/*
session_start();
$index = 0;
if (!isset($_SESSION['q_set'])) {
//---------------------------- stro quaction in array -------------------------------------------------------------
#import  dbconnector class
    require "php/Classes/DB_Conector.php";
//create arry
    $set_indexing = array();

// create connection
    $con = DB_Conector::get_connection();
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
        echo $set_indexing[0]["q"] . "<br><br><br>";

        echo "<pre>";
        print_r($set_indexing);
        echo "</pre>";


        $_SESSION['q_set'] = $set_indexing;
        $_SESSION['index'] = $index;
    }


}
$q_set = $_SESSION['q_set'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['btbNext'])) {
        $index = $_SESSION['index'];
        $index++;
        $_SESSION['index'] = $index;
//    $index = $_SESSION['index'];
    }
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MHS HOME</title>
    <?php include_once 'assets/links/MDB/css/mdb_css.php'; ?>

    <link rel="stylesheet" href="assets/css/sub_1.css">

</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                    <div class="col-xl-9">
                        <p style="color: #7e8d9f;font-size: 20px;">REPORT&gt;&gt; <strong>ID: #123-123</strong></p>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12" style="margin-bottom: 20px;">
                        <div class="text-center">
                            <img src="assets/use_image/logo.png" alt="LOGO" class="d-block mx-auto img-fluid" style="max-width: 12rem;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 20px;">
                            <div class="text-center">
                                <p class="text-black"><span class="text-black me-3"> Your Score : </span><span style="font-size: 25px;" id="score">1065</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 mx-1 justify-content-center">
                        <div class="col-md-12 mb-4 mb-md-0">
                            <p class="fw-bold">Status</p>
                            <p class="mb-1">
                                <span class="text-muted me-2">Size:</span><span>8.5</span>
                            </p>
                            <p>
                                <span class="text-gray me-2"><small style="font-size: 12px">( © Base on PSS method - State of New Hampshire Employee Assistance Program)</small></span>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xl-8">
                            <p class="ms-3 fw-bold">Add additional notes</p>
                            <ul class="list-unstyled">
                                <li class="text-muted ms-3">
                                    <i class="fas fa-feather-pointed me-2"></i>
                                    <span class="text-black fw-light me-4">Scores ranging from 0-13 would be considered low stress.</span>
                                </li>
                                <li class="text-muted ms-3 mt-2">
                                    <i class="fas fa-feather-pointed me-2"></i>
                                    <span class="text-black fw-light me-4">Scores ranging from 14-26 would be considered moderate stress.</span>
                                </li>
                                <li class="text-muted ms-3 mt-2">
                                    <i class="fas fa-feather-pointed me-2"></i>
                                    <span class="text-black fw-light me-4">Scores ranging from 27-40 would be considered high perceived stress.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xl-3">
                            <ul class="list-unstyled">
                                <li class="text-muted ms-3"><button type="button" id="btnView" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">View Counseler</button></li>
                                <li class="text-muted ms-3 mt-2"><button type="button" id="btnHome" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">Go to Home Page</button></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="row" id="Counseler" style="display: none">
                        <div class="table-responsive bg-glass shadow-4-strong rounded-6">
                            <table class="table text-white align-middle mb-0 table-borderless  ">
                                <thead>
                                <tr class="text-info">
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="tb-row">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/use_image/nipa.jpg" alt="" style="width: 45px; height: 45px"
                                                 class="rounded-circle"/>
                                            <div class="ms-3">
                                                <p class="fw-bold text-info mb-1">Dr. Nipuna Deshan</p>
                                                <p class="text-muted mb-0">nipu@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-0">

                                        </p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link  btn-sm btn-rounded btn-outline-info">
                                            Contact
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'assets/links/MDB/js/mdb_js.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function (){
        let txtScore = $('#score').text();
        console.log(txtScore);

        $("#btnView").click(function (){
            $("#Counseler").css('display', 'block');
        });
    });
</script>
</body>
</html>


<?php
$cookie = "";
if (isset($_GET)){
    if (isset($_GET['setcookie'])){
        if ($_GET['setcookie'] === 'yes'){
            $unregid = $_GET['id'];
            setcookie('unreg_id',$unregid, time()+3600);
        }
    }
}

if (isset($_COOKIE['unreg'])){
    $cookie = true;
}else{
    $cookie = false;
    setcookie('unreg',"first_time", time()+3600);
}
?>
<!doctype html>
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
    <?php
     if (!$cookie){
         include "pages/stress_level_1.php" ;
     }
    ?>
</div>

<?php include_once 'assets/links/MDB/js/mdb_js.php'; ?>
<!-- Link to Chart.js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script src="assets/js/sub_1.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
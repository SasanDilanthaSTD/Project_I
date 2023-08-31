<

!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MHS HOME</title>
    <?php include_once 'accest/links/MDB/css/mdb_css.php';?>

    <link rel="stylesheet" href="accest/css/sub_1.css">



</head>
<body>
<div class="container mt-5">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-rounded btn-lg" data-mdb-toggle="modal" data-mdb-target="#stress_1">
        <i class="fas fa-brain"></i> test Stress
    </button>
    <?php include "pages/stress_level_1.php"?>
</div>



<?php include_once 'accest/links/MDB/js/mdb_js.php';?>
<!-- Link to Chart.js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script src="accest/js/sub_1.js"></script>
<script src="accest/js/main.js"></script>
</body>
</html>
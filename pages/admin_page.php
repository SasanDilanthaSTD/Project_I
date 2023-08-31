<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN DASHBORD</title>
    <?php include_once '../assets/links/MDB/css/mdb_css.php'; ?>


    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/sub_1.css">



</head>
<body>
<!--Navigaion Bar-->
<?php include_once '../assets/components/side_navbar.php'; ?>

<section class="home">
    <div class="container pt-5">
        <!--   section - admin summery     -->
        <section class="">
            <div class="row gx-lg-5">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <!-- CARD -->
                    <a href="#"
                       class="bg-glass d-flex align-items-center p-4 shadow-4-strong rounded-6 text-reset ripple"
                       data-ripple-color="hsl(0,0%,75%)">
                        <div class="bg-theme p-3 rounded-4">
                            <i class="fas fa-users fa-lg text-white fa-fw"></i>
                        </div>

                        <div class="ms-4">
                            <p class="text-muted mb-2">Page views</p>
                            <p class="mb-0">
                                <span class="h5 me-2">51 345</span>
                                <small class="text-danger text-sm"><i class="fas fa-arrow-down fasm me-1"></i>23.58%</small>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <!-- CARD -->
                    <a href="#"
                       class="bg-glass d-flex align-items-center p-4 shadow-4-strong rounded-6 text-reset ripple"
                       data-ripple-color="hsl(0,0%,75%)">
                        <div class="bg-theme p-3 rounded-4">
                            <i class="fas fa-user-doctor fa-lg text-white fa-fw"></i>
                        </div>

                        <div class="ms-4">
                            <p class="text-muted mb-2">Doctors | Councillor</p>
                            <p class="mb-0">
                                <span class="h5 me-2">124</span>
                                <small class="text-success text-sm"><i
                                            class="fas fa-arrow-up fasm me-1"></i>23.58%</small>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <!-- CARD -->
                    <a href="#"
                       class="bg-glass d-flex align-items-center p-4 shadow-4-strong rounded-6 text-reset ripple"
                       data-ripple-color="hsl(0,0%,75%)">
                        <div class="bg-theme p-3 rounded-4">

                            <i class="fas fa-wallet fa-lg text-white fa-fw"></i>
                        </div>

                        <div class="ms-4">
                            <p class="text-muted mb-2">Earning</p>
                            <p class="mb-0">
                                <span class="h5 me-2">$75,200</span>
                                <small class="text-success text-sm"><i
                                            class="fas fa-arrow-up fasm me-1"></i>23.58%</small>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <!-- CARD -->
                    <a href="#"
                       class="bg-glass d-flex align-items-center p-4 shadow-4-strong rounded-6 text-reset ripple"
                       data-ripple-color="hsl(0,0%,75%)">
                        <div class="bg-theme p-3 rounded-4">
                            <i class="fas fa-comments fa-lg text-white fa-fw"></i>
                        </div>

                        <div class="ms-4">
                            <p class="text-muted mb-2">Messages</p>
                            <p class="mb-0">
                                <span class="h5 me-2">51 345</span>
                                <small class="text-danger text-sm"><i class="fas fa-envelope fasm me-1"></i>23</small>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- section - statistic -->
        <section class="mb-5 pt-5">
            <div class="row gx-lg-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <!--Card-->
                    <div class="bg-glass shadow-4-strong rounded-6">
                        <!--Card header-->
                        <div class="p-4 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <p class="text-muted mb-2">Users</p>
                                    <p class="mb-0">
                                        <span class="h4 me-2">14 567</span>
                                        <small class="text-success text-sm"><i class="fas fa-arrow-up fa-sm me-2"></i>13.45%</small>
                                    </p>
                                </div>
                                <div class="col-6 text-end">
                                    <div class="btn-group shadow-0">
                                        <button type="button"
                                                class="btn btn-link  btn-sm btn-outline-info dropdown-toggle"
                                                data-mdb-toggle="dropdown" aria-expanded="false"><i
                                                    class="fas fa-filter"></i>
                                            Filter
                                        </button>
                                        <ul class="dropdown-menu bg-glass">
                                            <li><a class="dropdown-item text-info" href="#">All</a></li>
                                            <li><a class="dropdown-item text-info" href="#">This Month</a></li>
                                            <li><a class="dropdown-item text-info" href="#">This Year</a></li>
                                            <li>
                                                <hr class="dropdown-divider"/>
                                            </li>
                                            <li><a class="dropdown-item text-info" href="#">Doctors</a></li>
                                            <li><a class="dropdown-item text-info" href="#">Councillors</a></li>
                                            <li><a class="dropdown-item text-info" href="#">Patient</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Card body-->
                        <div class="p-4">
                            <div class="card-body">
                                <canvas id="myChart" style="width: 90vw; height: 40vh"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <!--Card-->
                    <div class="bg-glass shadow-4-strong rounded-6">
                        <!--Card header-->
                        <div class="p-4 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <p class="text-muted mb-2">Users</p>
                                    <p class="mb-0">
                                        <span class="h4 me-2">14 567</span>
                                        <small class="text-success text-sm"><i class="fas fa-arrow-up fa-sm me-2"></i>13.45%</small>
                                    </p>
                                </div>
                                <div class="col-6 text-end">
                                    <div class="btn-group shadow-0">
                                        <button type="button"
                                                class="btn btn-link  btn-sm btn-outline-info dropdown-toggle"
                                                data-mdb-toggle="dropdown" aria-expanded="false"><i
                                                    class="fas fa-filter"></i>
                                            Filter
                                        </button>
                                        <ul class="dropdown-menu bg-glass" style="font-size: 14px">
                                            <li><a class="dropdown-item text-info" href="#">All</a></li>
                                            <li><a class="dropdown-item text-info" href="#">This Month</a></li>
                                            <li><a class="dropdown-item text-info" href="#">This Year</a></li>
                                            <li>
                                                <hr class="dropdown-divider"/>
                                            </li>
                                            <li><a class="dropdown-item text-info" href="#">Doctors</a></li>
                                            <li><a class="dropdown-item text-info" href="#">Councillors</a></li>
                                            <li><a class="dropdown-item text-info" href="#">Patient</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Card body-->
                        <div class="p-4">
                            <div class="card-body">
                                <canvas id="barChart" style="width: 90vw; height: 40vh"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section - user details -->
        <section class="mb-5 pt-5">
            <div class="table-responsive bg-glass shadow-4-strong rounded-6">
                <table class="table text-white align-middle mb-0 table-borderless  ">
                    <thead>
                    <tr class="text-info">
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Role</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
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
                            <span class="badge badge-success rounded-pill d-inline">Accept</span>
                        </td>
                        <td class="text-info">Doctor</td>
                        <td>
                            <p class="text-muted mb-0">

                            </p>
                        </td>
                        <td>
                            <button type="button" class="btn btn-link  btn-sm btn-rounded btn-outline-info">
                                Check
                            </button>
                        </td>
                    </tr>
                    <tr class="tb-row">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../assets/use_image/senu.jpg" class="rounded-circle" alt=""
                                     style="width: 45px; height: 45px"/>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1 text-info">Mr. Senura Adithya</p>
                                    <p class="text-muted mb-0">senu@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-warning rounded-pill d-inline">Pending</span>
                        </td>
                        <td class="text-info">Councillor</td>
                        <td>
                            <p class="text-muted mb-0">

                            </p>
                        </td>
                        <td>
                            <button type="button" class="btn btn-link  btn-sm btn-rounded btn-outline-info">
                                Check
                            </button>
                        </td>
                    </tr>
                    <tr class="tb-row">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../assets/use_image/thusha.jpg" class="rounded-circle" alt=""
                                     style="width: 45px; height: 45px"/>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1 text-info">Dr. Thushari Senewirathne</p>
                                    <p class="text-muted mb-0">thushari@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-warning rounded-pill d-inline">Pending</span>
                        </td>
                        <td class="text-info">Councillor</td>
                        <td>
                            <p class="text-muted mb-0">

                            </p>
                        </td>
                        <td>
                            <button type="button" class="btn btn-link  btn-sm btn-rounded btn-outline-info"
                                    data-mdb-ripple-color="dark">
                                Check
                            </button>
                        </td>
                    </tr>
                    <tr class="tb-row">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../assets/use_image/isur.jpg" alt="" style="width: 45px; height: 45px"
                                     class="rounded-circle"/>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1 text-info">Mr. Isuru Widanapathirana</p>
                                    <p class="text-muted mb-0">dvp@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-danger rounded-pill d-inline">Reject</span>
                        </td>
                        <td class="text-info">Councillor</td>
                        <td>
                            <p class="text-muted mb-0">

                            </p>
                        </td>
                        <td>
                            <button type="button" class="btn btn-link  btn-sm btn-rounded btn-outline-info">
                                Check
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>
</section>

<?php include_once 'assets/links/MDB/js/mdb_js.php'; ?>
<!-- Link to Chart.js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script src="../assets/js/sub_1.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>
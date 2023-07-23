<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN DASHBORD</title>
    <?php include_once 'accest/links/MDB/css/mdb_css.php';?>
    
    <link rel="stylesheet" href="accest/css/admin.css">
</head>
<body>
    <div class="container pt-5">
        <!--   section - admin summery     -->
        <section class="">
            <div class="row gx-lg-5">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <!-- CARD -->
                    <a href="#" class="bg-glass d-flex align-items-center p-4 shadow-4-strong rounded-6 text-reset ripple" data-ripple-color="hsl(0,0%,75%)">
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
                    <a href="#" class="bg-glass d-flex align-items-center p-4 shadow-4-strong rounded-6 text-reset ripple" data-ripple-color="hsl(0,0%,75%)">
                        <div class="bg-theme p-3 rounded-4">
                            <i class="fas fa-user-doctor fa-lg text-white fa-fw"></i>
                        </div>

                        <div class="ms-4">
                            <p class="text-muted mb-2">Doctors | Councillor</p>
                            <p class="mb-0">
                                <span class="h5 me-2">124</span>
                                <small class="text-success text-sm"><i class="fas fa-arrow-up fasm me-1"></i>23.58%</small>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <!-- CARD -->
                    <a href="#" class="bg-glass d-flex align-items-center p-4 shadow-4-strong rounded-6 text-reset ripple" data-ripple-color="hsl(0,0%,75%)">
                        <div class="bg-theme p-3 rounded-4">
                            <i class="fas fa-wallet fa-lg text-white fa-fw"></i>
                        </div>

                        <div class="ms-4">
                            <p class="text-muted mb-2">Earning</p>
                            <p class="mb-0">
                                <span class="h5 me-2">$75,200</span>
                                <small class="text-success text-sm"><i class="fas fa-arrow-up fasm me-1"></i>23.58%</small>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <!-- CARD -->
                    <a href="#" class="bg-glass d-flex align-items-center p-4 shadow-4-strong rounded-6 text-reset ripple" data-ripple-color="hsl(0,0%,75%)">
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

        <!-- section - user details -->
        <section class="mb-5 pt-5">
            <div class="table-responsive bg-glass shadow-4-strong rounded-6">
                <table class="table text-white align-middle mb-0 table-borderless  ">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-row">
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="accest/use_image/nipa.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle"/>
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Dr. Nipuna Deshan</p>
                                        <p class="text-muted mb-0">nipu@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-success rounded-pill d-inline">Accept</span>
                            </td>
                            <td>Doctor</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded btn-outline-white">
                                    Check
                                </button>
                            </td>
                        </tr>
                        <tr class="tb-row">
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="accest/use_image/senu.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px"/>
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Mr. Senura Adithya</p>
                                        <p class="text-muted mb-0">senu@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-warning rounded-pill d-inline">Pending</span>
                            </td>
                            <td>Councillor</td>
                            <td>
                                <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold btn-outline-white" data-mdb-ripple-color="dark">
                                    Check
                                </button>
                            </td>
                        </tr>
                        <tr class="tb-row">
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="accest/use_image/thusha.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px"/>
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Dr. Thushari Senewirathne</p>
                                        <p class="text-muted mb-0">thushari@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-warning rounded-pill d-inline">Pending</span>
                            </td>
                            <td>Councillor</td>
                            <td>
                                <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold btn-outline-white" data-mdb-ripple-color="dark">
                                    Check
                                </button>
                            </td>
                        </tr>
                        <tr class="tb-row">
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="accest/use_image/isur.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle"/>
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Mr. Isuru Widanapathirana</p>
                                        <p class="text-muted mb-0">dvp@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-danger rounded-pill d-inline">Reject</span>
                            </td>
                            <td>Councillor</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded btn-outline-white">
                                    Check
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- section - statistic -->
        <div class="chart-1">

        </div>
    </div>
    <canvas id="polar-chart"></canvas>
    <?php include_once 'accest/links/MDB/js/mdb_js.php';?>
    <script src="accest/js/admin.js"></script>
</body>
</html>
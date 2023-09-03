<?php
require '../php/Classes/user.php';
$user = new user();
$user1 = $user->getuserByUserID(1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/userprofile.css">
    <link rel="stylesheet" href="../assets/css/counselorprofile.css">

</head>
<body>
<!-- Start: nav bar -->
<div>
    <!-- Start: Navbar Right Links -->
    <nav class="navbar navbar-expand-md bg-body py-3">
        <div class="container">
            <a
                class="navbar-brand d-flex align-items-center"
                href="#"
                style="padding-bottom: 0px; margin-top: 0px; padding-top: 0px"
            ><img src="../assets/use_image/Untitled-1.png" style="width: 109px" /></a
            ><button
                data-bs-toggle="collapse"
                class="navbar-toggler"
                data-bs-target="#navcol-1"
            >
            <span class="visually-hidden">Toggle navigation</span
            ><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link itemnew" href="#"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link itemnew" href="#"
                        ><strong>About Us</strong></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link itemnew" href="#"
                        ><strong>Contact Us</strong></a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End: Navbar Right Links -->
</div>
<!-- End: nav bar -->

<section class="vh-100" style="background-color: #e1e1e1; " >
    <div class="container py-5 h-100" >

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0" >
                <div class="gradient-custom" style="border-radius: 0.5rem">
                    <h1 style="color:white; padding-left: 10px; padding-bottom: 5px; font-size: 35px">
                        Doctor Profile
                    </h1>
                </div>
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
<?php
foreach ($user1 as $item){
    ?>
                        <div class="col-md-4 gradient-custom text-center text-white"
                             style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; ">
                            <img src="../assets/use_image/senu.jpg"
                                 alt="Avatar" class="img-fluid my-5" style="width: 150px; border-radius: 0.5rem;" />
                            <h5>Senura Adithya</h5>
                            <p style="color: darkgray">Doctor</p>
                            <i class="far fa-edit mb-5"></i>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h6>Information</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>First Name</h6>
                                        <p class="text-muted">Senura</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Last Name</h6>
                                        <p class="text-muted">Adithya</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>User Name</h6>
                                        <p class="text-muted">senura2000</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Email</h6>
                                        <p class="text-muted">senura@gmail.com</p>
                                    </div>
                                    <a href="profedit.php" style="text-decoration: none">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary doctrbtn" type="button" style="border: none">Edit Profile</button>
                                        </div>
                                    </a>
                                </div>
                                <!--                <h6>Projects</h6>-->
                                <!--                <hr class="mt-0 mb-4">-->
                                <!--                <div class="row pt-1">-->
                                <!--                  <div class="col-6 mb-3">-->
                                <!--                    <h6>Recent</h6>-->
                                <!--                    <p class="text-muted">Lorem ipsum</p>-->
                                <!--                  </div>-->
                                <!--                  <div class="col-6 mb-3">-->
                                <!--                    <h6>Most Viewed</h6>-->
                                <!--                    <p class="text-muted">Dolor sit amet</p>-->
                                <!--                  </div>-->
                                <!--                </div>-->
                                <div class="d-flex justify-content-start">
                                    <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                    <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                    <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                </div>
                            </div>
                        </div>


                        </div>

                    </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary doctrbtn" type="button">Treatment</button>
                    <button class="btn btn-primary doctrbtn" type="button">Appointment</button>
                </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Start: footer -->
<div>
    <!-- Start: Footer Basic -->
    <footer class="text-center" style="background: rgb(255, 255, 255)">
        <div class="container text-muted py-4 py-lg-5">
            <ul class="list-inline" style="margin-top: -25px">
                <li class="list-inline-item me-4">
                    <a class="link-secondary" href="#"
                    ><br /><span
                            style="color: RGBA(86, 94, 100, var(--bs-link-opacity, 1))"
                        >mentalhealthservice@gmail.com</span
                        ></a
                    >
                </li>
                <li class="list-inline-item me-4">
                    <a class="link-secondary" href="#"
                    ><br /><span
                            style="color: RGBA(86, 94, 100, var(--bs-link-opacity, 1))"
                        >+94 76 890 4453</span
                        ></a
                    >
                </li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item me-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        fill="currentColor"
                        viewBox="0 0 16 16"
                        class="bi bi-facebook"
                    >
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                        ></path>
                    </svg>
                </li>
                <li class="list-inline-item me-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        fill="currentColor"
                        viewBox="0 0 16 16"
                        class="bi bi-twitter"
                    >
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                        ></path>
                    </svg>
                </li>
                <li class="list-inline-item">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        fill="currentColor"
                        viewBox="0 0 16 16"
                        class="bi bi-instagram"
                    >
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                        ></path>
                    </svg>
                </li>
            </ul>
            <p class="mb-0">Copyright © 2023 Mental Health Service</p>
        </div>
    </footer>
    <!-- End: Footer Basic -->
</div>
<!-- End: footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

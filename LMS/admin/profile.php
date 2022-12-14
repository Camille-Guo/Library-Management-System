<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Library Management System</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/admin.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>

<body>
    <!-- header -->
    <div class="container">
        <div class="row ">
            <div class="header fixed-top">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="brand">
                        <i class="bi bi-book-half"></i>
                        <span class="navbar-brand ms-3">Library Management System</span>
                    </div>

                    <div class="collapse navbar-collapse mx-3" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle"></i>
                                    Account
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Admin profile</a></li>
                                    <li><a class="dropdown-item" href="#">Admin setting</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">
                                    <i class="bi bi-door-open-fill"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- header end -->
        <!-- body -->
        <div class="row">
            <!-- sidebar -->
            <div class="col-3 mt-5">
                <nav id="sidebar" class="col sidebar">
                    <ul class="nav flex-column vertical-nav ">
                        <li class="nav-item ">
                            <a class="nav-link active" href="./profile.php">
                                <i class="bi bi-person-circle"></i>
                                Admin Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./managebook.php">
                                <i class="bi bi-bookmarks-fill"></i>
                                Manage Books
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./userinfo.php">
                                <i class="bi bi-briefcase-fill"></i>
                                User Info
                            </a>
                        </li>
                    
                        </li>
                        <li class="nav-item mt-5">
                            <a class="nav-link" href="../index.php">
                                <i class="bi bi-door-open-fill"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!-- sidebar end -->
            <!-- main content -->
            <div class="col-8 mt-5">
                <center>
                    <div class="card" style="width: 50%;">
                        <img style="width: 50%;" src="../images/profile.png" class="card-img-top" alt="profile">
                        <div class="card-body">
                            <center>
                                <h1 class="card-title">Name</h1>
                            </center>
                            <p class="card-text">Admin ID: xxxxxx</p>
                            <p class="card-text">Email: xxx@xx.com</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="#" class="btn btn-secondary disabled" tabindex="-1" role="button" aria-disabled="true">Edit Profile</a>
                    </div>
                </center>
            </div> <!-- main content end -->
        </div>
        <!--body end -->
        <!-- footer -->
        <div class="row mt-5">
            <div class="footer fixed-bottom">
                <div class="container mt-3">
                    <b class="copyright">&copy;Library Management System & Group PHP </b>All rights reserved.
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Loan</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/admin.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
    <!-- header start-->
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
        <!-- body start-->
        <div class="row">
            <!-- sidebar start -->
            <div class="col-3 mt-5">
                <nav id="sidebar" class="col sidebar">
                    <ul class="nav flex-column vertical-nav ">
                        <li class="nav-item ">
                            <a class="nav-link" href="./profile.php">
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
                            <a class="nav-link active" href="./userinfo.php">
                                <i class="bi bi-briefcase-fill"></i>
                                User Info
                            </a>
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
            <!-- main content start-->
            <div class="col-8 mt-5">
                <center>
                    <!-- search bar start-->
                    <div class="container-fluid searchbar">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Enter Book Title/Author" aria-label="Search">
                            <button class="btn btn-outline-success btn-search" type="submit">Search</button>
                        </form>
                    </div>
                    <!--search bar end-->
                    <!-- table start-->
                    <table class="table table-striped table-hover table-light mt-1">
                        <tr class="table-secondary">
                            <th>Book ID</th>
                            <th>Book Title</th>
                            <th>Author</th>
                            <th>Copies</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>#xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>#xx</td>
                            <td>
                                <button class="btn btn-info"><a href="#">Edit</a></button>
                                <button class="btn btn-danger"><a href="">Delete</a> </button>
                            </td>
                        </tr>
                    </table>
                    <!-- table end -->
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>| Placements - RGUKT SKLM | Dashboard </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="logo.jfif" rel="icon">
    <link href="logo.jfif" rel="apple-touch-icon">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="css/app.js" type="text/javascript"></script>
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="#.html" class="logo d-flex align-items-center">
                <img src="logo.jfif" alt="">
                <span class="d-none d-lg-block">RGUKT SKLM</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="https://st.depositphotos.com/2101611/4338/v/600/depositphotos_43381243-stock-illustration-male-avatar-profile-picture.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"> Student </span>
                    </a>
                </li>
            </ul>
        </nav>

    </header>
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <i class="fa fa-dedent"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#.html">
                    <i class="fa fa-list-alt"></i>
                    <span>Placements</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#.html">
                    <i class='fa fa-list-alt'></i>
                    <span>Internships</span>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle mt-5000 container">
            <div class="card p-3">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#.html">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Placements</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Rgulogo.jpg" alt="" height="25px" width="50px">
                                        </div>
                                        <div class="ps-3">
                                            <?php
                                            $count = 0;
                                            foreach ($placements as $placement) {
                                                if ($placement->type == 'Job') {
                                                    $count++;
                                                }
                                            }
                                            echo $count;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Internships</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Rgulogo.jpg" alt="" height="25px" width="50px">
                                        </div>
                                        <div class="ps-3">
                                            <?php
                                            $count = 0;
                                            foreach ($placements as $placement) {
                                                if ($placement->type == 'Internship') {
                                                    $count++;
                                                }
                                            }
                                            echo $count;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagetitle mt-5000 container">
                <div class="card p-3" style="height:auto;">
                    <h4>Placement Details </h4>
                    <table id="dtHorizontalExample" class="table table-striped table-hover mt-4 table-bordered table-sm" cellspacing="0" width="100%">
                        <tr>
                            <td>S.No</td>
                            <td>Company Name</td>
                            <td>Type</td>
                            <td>Batch</td>
                            <td>Passout Year</td>
                            <td>Link</td>
                        </tr>
                        @foreach($placements as $placement)
                        <tr>
                            <td>{{$placement->id}}</td>
                            <td>{{$placement->company_name}}</td>
                            <td>{{$placement->type}}</td>
                            <td>{{$placement->branch}}</td>
                            <td>{{$placement->year}}</td>
                            <td><button type="button" class="btn btn-info"><a href="{{$placement->url}}" target="blank">Link</a></button></td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </section>



    </main>
    <footer id="footer" class="footer">
        <div class="copyright">
            <strong><span>
                    <div class="credits">
                        &copy; Designed and Developed by <a href="https://www.linkedin.com/in/duggirala-akhil-151768187/" target="_blank">| Akhil Duggirala |</a>
                    </div>
                </span></strong> All Rights Reserved
            <img src="https://hitwebcounter.com/counter/counter.php?page=8022360&style=0025&nbdigits=5&type=page&initCount=0" title="Free Counter" Alt="web counter" border="0" style="float:right; height:18px" />
        </div>
    </footer>
</body>

</html>
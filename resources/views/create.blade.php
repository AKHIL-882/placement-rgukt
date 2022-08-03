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
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Placements Details</h5>
                                    <div class="container-fluid mt-2">
                                        <div class="row">
                                            <section class="col">
                                                <form action="{{url('/store')}}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-2">
                                                            <label for="#" class="form-label">Company Name</label>
                                                            <input type="text" class="form-control" id="company_name" name="company_name" aria-describedby="emailHelp" placeholder="Enter Company Name">
                                                        </div>
                                                        <div class="col mt-2">
                                                            <label for="#" class="form-label">Role Type</label>
                                                            <select class="form-select" aria-label="Default select example" name="type">
                                                                <option selected>Select Type</option>
                                                                <option value="Internship" name="Internship">Internship</option>
                                                                <option value="Job" name="Job">Job</option>
                                                            </select>
                                                        </div>
                                                        <div class="col mt-2">
                                                            <label for="#" class="form-label">Branch</label>
                                                            <select class="form-select" aria-label="Default select example" name="branch">
                                                                <option selected>Select Branch</option>
                                                                <option value="CSE" name="CSE">CSE</option>
                                                                <option value="ECE" name="ECE">ECE</option>
                                                                <option value="Others" name="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="col mt-2">
                                                            <label for="#" class="form-label">Year</label>
                                                            <select class="form-select" aria-label="Default select example" name="year">
                                                                <option selected>Select Year</option>
                                                                <option value="2022" name="2022">2022</option>
                                                                <option value="2023" name="2023">2023</option>
                                                                <option value="2024" name="2024">2024</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-2">
                                                        <label for="#" class="form-label">URL</label>
                                                        <input type="text" class="form-control" id="url" name="url" aria-describedby="emailHelp" placeholder="Enter registration link">
                                                    </div>
                                                    <input type="submit" class="btn btn-info" value="Save">
                                                    <input type="reset" class="btn btn-warning" value="Reset">
                                                </form>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        </div>
    </footer>
</body>

</html>
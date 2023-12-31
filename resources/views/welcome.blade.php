<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>| Placements - RGUKT SKLM | Dashboard </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="logo.jfif" rel="icon">
    <link href="logo.jfif" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    

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
        

    </header>
    <!-- <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <i class="fa fa-dedent"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>

    </aside> -->
    <!-- End Sidebar-->

    <main id="main" class="main">
        <!-- <div class="pagetitle mt-5000 container">
            <div class="card p-3">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#.html">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
         -->
        <!-- End Page Title -->

        <!-- <section class="section dashboard">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Placements </h5>
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
            </div> -->

            <!-- <div class="pagetitle mt-5000 container">
                <div class="card p-3" style="height:auto;">
                    <h4>Placement Details </h4>
                    <table id="dtHorizontalExample" class="table table-striped table-hover mt-4 table-bordered table-sm" cellspacing="0" width="100%">
                        <tr style="padding:10px">
                            <td>Date</td>
                            <td>Company Name</td>
                            <td>Type</td>
                            <td>Batch</td>
                            <td>Passout Year</td>
                            <td>Link</td>
                        </tr>
                        @foreach($placements as $placement)
                        <tr>
                        <td>{{date('Y-m-d',strtotime($placement->created_at))}}</td>
                            <td>{{$placement->company_name}}</td>
                            <td>{{$placement->type}}</td>
                            <td>{{$placement->branch}}</td>
                            <td>{{$placement->year}}</td>
                            <td><button type="button" class="btn btn-info"><a href="{{$placement->url}}" target="blank">Link</a></button></td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $placements->links('pagination::default') }}
                </div>
            </div> -->
            <div class="pagetitle mt-5000 container">


    <div class="card p-3" style="height:auto;">
        <h4 align="center"><strong> Online Placement Dashboard </strong></h4>
        <div class="table-responsive">
        <table id="dtHorizontalExample" class="table table-striped table-hover mt-4 table-bordered table-sm  text-center" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th></th>
                    <th>Company Name</th>
                    <th>Type</th>
                    <th>Batch</th>
                    <th>Passout Year</th>
                    <th>Link</th>       
                </tr>
            </thead>
            <tbody>
                @php
                    $currentDate = null;
                @endphp

                @foreach($placements as $placement)
                    @php
                        $formattedDate = \Carbon\Carbon::parse($placement->created_at)->format('M d, Y');
                    @endphp

                    @if($formattedDate != $currentDate)
                        <tr style="background-color: #881719; text-align: center;">
                            <td colspan="6"><h5 style="color: white;">{{ $formattedDate }}</h5></td>
                        </tr>
                        @php
                            $currentDate = $formattedDate;
                        @endphp
                    @endif

                    <tr>
                        <td>
                            <i class="fa fa-eye" aria-hidden="true" class="view-button" data-placement-id="{{ $placement->id }}"></i> <span class="view-count">0</span>
                        </td>
                        <td>{{ $placement->company_name }}</td>
                        <td>{{ $placement->type }}</td>
                        <td>{{ $placement->branch }}</td>
                        <td>{{ $placement->year }}</td>
                        <td>
                            <button type="button" class="btn btn-info link-button" data-placement-id="{{ $placement->id }}">
                                <a href="{{ $placement->url }}" target="blank" style="color: white;">Link</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        {{ $placements->links('pagination::default') }}
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Notice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="font-weight: bold">
                        1. Website UI updated! <br>
                        2. You can find the jobs on daily basis <br>
                        3. Pagination added to make it easy to navigate for finding suitable jobs <br>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            if (!sessionStorage.getItem('modalShown')) {
                $('#exampleModal').modal('show');
                sessionStorage.setItem('modalShown', 'true');
            }
            $('.link-button').on('click', function () {
            var placementId = $(this).data('placement-id');
            var viewCountSpan = $(this).closest('tr').find('.view-count');
            var currentCount = parseInt(localStorage.getItem('placement_' + placementId)) || 0;
            var newCount = currentCount + 1;
            localStorage.setItem('placement_' + placementId, newCount);
            viewCountSpan.text(newCount);

            // console.log('Link clicked for placement ID: ' + placementId + ', New Count: ' + newCount);
        });

        $('.view-button').on('click', function () {
            var placementId = $(this).data('placement-id');
            var viewCountSpan = $(this).find('.view-count');
            var currentCount = parseInt(localStorage.getItem('placement_' + placementId)) || 0;
            var newCount = currentCount + 1;
            localStorage.setItem('placement_' + placementId, newCount);
            viewCountSpan.text(newCount);

            // console.log('View clicked for placement ID: ' + placementId + ', New Count: ' + newCount);
        });

        $('.view-count').each(function () {
            var placementId = $(this).closest('tr').find('.link-button').data('placement-id');
            var storedCount = localStorage.getItem('placement_' + placementId);

            if (storedCount !== null) {
                $(this).text(storedCount);
            }
        });
        });
    </script>
</body>

</html>
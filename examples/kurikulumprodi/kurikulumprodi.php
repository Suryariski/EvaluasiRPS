<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Kurikulum Prodi</title>
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <?php 
  session_start();

  $username = $_SESSION['username'];
  $status = $_SESSION['status'];
  ?>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
      <h2>Evaluasi RPS</h2>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../dosen/dosen.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Dosen</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../mahasiswa/Mahasiswa.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Mahasiswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../matakuliah/matakuliah.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Mata Kuliah</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../progamstudi/progamstudi.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Progam Studi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../kurikulumprodi/kurikulumprodi.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Kurikulum Prodi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../rps/rps.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">RPS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../rpsdetail/rpsdetail.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text"> DETAIL RPS</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <span class="text-light font-weight-bold"><?php echo Date("l, d-M-Y") ?></span>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                </div>
            </li>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo "$username"?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome <?php echo "$username"?></h6>
                </div>
                <a href="../../dosen/profile.php" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="../login/login.php" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Log IN</span>
                </a>
                <a href="../login/register.php" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Register</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="../logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="../../index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Kurikulum Prodi</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <a href="register.php"><button class="btn btn-primary">Tambah Kurikulum Prodi</button></a>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="budget">Kode </th>
                    <th scope="col" class="sort" data-sort="status">Kurikulum</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                    <?php
            include 'konek2.php';
            $no   = 1;
            $batas   = 5;
            $halaman = @$_GET['halaman'];
            if(empty($halaman)) {
                $posisi  = 0;
                $halaman = 1;
            } else {
                $posisi  = ($halaman-1) * $batas;
            }
            $query2      = mysqli_query($koneksi, "SELECT * FROM kurikulumprodi");
            $jmldata    = mysqli_num_rows($query2);
            $jmlhalaman = ceil($jmldata/$batas);
            echo "<br> Halaman : ";
            for($i=1; $i<=$jmlhalaman; $i++)
                if ($i != $halaman) {
                    echo " <a href=\"kurikulumprodi.php?halaman=$i\">$i</a> | ";
                } else {
                    echo "<b>$i</b> | ";
                }
            echo "<p>Total anggota : <b>$jmldata</b> orang</p>";
            $query = "SELECT * FROM kurikulumprodi  LIMIT $posisi,$batas";
            $data = mysqli_query($koneksi, $query);
            while ($d = mysqli_fetch_array($data)) {
        ?>

        <tr>

            <td><?php echo $no++; ?></td>
            <td><?php echo $d['kode']; ?></td>
            <td><?php echo $d['kurikulum']; ?></td>
            <td>
                <a href="editt.php?kurikulum=<?php echo $d['kurikulum']; ?>"><button class="btn btn-info">Edit</button></a>
                <a href="hapus.php?kurikulum=<?php echo $d['kurikulum']; ?>"><button class="btn btn-danger">Hapus</button></a>
            </td>
        </tr>
        <?php
            }
        ?>
                  
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
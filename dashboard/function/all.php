<?php 

function TampilWaktu()
{

$tanggal= mktime(date("m"),date("d"),date("Y"));
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
$a = date ("H");


if (($a>=6) && ($a<=11)){
						echo "Selamat Pagi Admin";
					}
						else if(($a>11) && ($a<=15))
					{
						echo "Selamat Siang Admin";
					}
						else if (($a>15) && ($a<=18))
					{
						echo "Selamat Sore Admin";
					}
						else 
					{
					 	echo "Selamat Malam Admin";
					}


				 		
}


function Footer()
{
	echo '
		<footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Telkom University 2018</span>
            </div>
          </div>
        </footer>
	';
}

function sidebar()
{
	echo 
	'
		      <ul class="sidebar navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Activity</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Aktivitas :</h6>
            <a class="dropdown-item" href="dikerjakan.php">Dikerjakan</a>
            <a class="dropdown-item" href="belum_dikerjakan.php">Belum dikerjakan</a>
            <a class="dropdown-item" href="diabaikan.php">Diabaikan</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Aktivitas Lainnya:</h6>
            <a class="dropdown-item" href="tampil_selesai_dikerjakan.php">Selesai Dikerjakan</a>
            <a class="dropdown-item" href="semua_keluhan_masuk.php">Semua Keluhan</a>
            
            
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="charts.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Diagram</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>

                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="register.php">Daftarkan akun admin</a>
            <a class="dropdown-item" href="forgot-password.php">Lupa Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.php">404 Page</a>
            <a class="dropdown-item" href="blank.php">Blank Page</a>
          </div>
        </li>
      </ul>
	';
}


function Navbar()
{
	echo '
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">10</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>
	';
}

function LoopCardSedangDikerjakan()
{  
  echo '<style>.inner  {
  overflow
.inner img {
  transition: all 0.5s ease;
}
.inner:hover img {
  transform: scale(1.2);
}</style>';

  include 'koneksi.php';
  date_default_timezone_set('Asia/Jakarta');  
    $status = true;
    $diabaikan = false;
  $query = $conn->query(" SELECT * from keluhan where status = '$status' and status_diabaikan = '$diabaikan' and status_selesai = 0") or die(mysql_error($conn)) ;

  if ($row = $query->num_rows > 0) {
    while ($data = $query->fetch_assoc()) {
      $waktu = $data['waktu'];
      echo '
      <div class="col-md-4">
                <div class="card  shadow" style="width: 20rem; margin-bottom: 2rem;">
                  <div class="inner">
                  <div class="small" style="padding-left: 2px;">'.waktu_lalu($waktu).'</div>
                    
                    <img src="../datas_user/image/'.$data['foto_kerusakan'].' " class="card-img-top" alt="..." style="    border-top-left-radius: 0!important; 
                      border-top-right-radius: 0!important; height: 200px;">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title" style="font-size: 15px;">
                      Nama Pelapor : '.$data['nama'].'
                    </h5>
                    <p class="card-text">
                    <ul>
                    <li>Jenis Keluhan : <b>'.$data['jenis_keluhan'].'</b></li>
                    <li>Teknisi : <b>'.$data['nama_teknisi'].'</b></li>
                    <li>waktu lapor : <b>'.$data['waktu'].'</b></li>
                    <li>waktu pengerjaan : <b>'.$data['tgl_dikerjakan'].'</b></li>
                    <li>estimasi  : <b>'.$data['estimasi'].'</b></li>
                    </ul>
                    keterangan : 
                      '.$data['keterangan'].'
                    </p>
                    <a href="handle-form-dashboard/handle-selesai-dikerjakan/index.php?id='.$data['id'].' " class="btn btn-success mt-1">selesai</a>
                  </div>
                </div>
              </div>
      ';


}
}else {
  echo '<div class="text-center"><h2>Data Kosong</h2></div>';
}

}




function LoopCardSelesaiDikerjakan()
{  
  echo '<style>.inner  {
  overflow: ;
}
.inner img {
  transition: all 0.5s ease;
}
.inner:hover img {
  transform: scale(1.2);
}</style>';

  include 'koneksi.php';
  date_default_timezone_set('Asia/Jakarta');  

  $query = $conn->query(" SELECT * from keluhan where  status_selesai = 1") or die(mysql_error($conn)) ;

  if ($row = $query->num_rows > 0) {
    while ($data = $query->fetch_assoc()) {
      $waktu = $data['waktu'];
      echo '
      <div class="col-md-4">
                <div class="card  shadow" style="width: 20rem; margin-bottom: 2rem;">
                  <div class="inner">
                  <div class="small" style="padding-left: 2px;">'.waktu_lalu($waktu).'</div>
                    
                    <img src="../datas_user/image/'.$data['foto_kerusakan'].' " class="card-img-top" alt="..." style="    border-top-left-radius: 0!important; 
                      border-top-right-radius: 0!important; height: 200px;">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title" style="font-size: 15px;">
                      Nama Pelapor : '.$data['nama'].'
                    </h5>
                    <p class="card-text">
                    <ul>
                    <li>Jenis Keluhan : <b>'.$data['jenis_keluhan'].'</b></li>
                    <li>tanggal pengerjaan : <b>'.$data['tgl_dikerjakan'].'</b></li>
                    <li>estimasi  : <b>'.$data['estimasi'].'</b></li>
                    <li>tanggal selesai  : <b>'.$data['tgl_selesai_dikerjakan'].'</b></li>
                    </ul>
                    keterangan : 
                      '.$data['keterangan'].'
                    </p>
                    <a href="handle-form-dashboard/handle-hapus-keluhan-selesai/index.php?id='.$data['id'].' " class="btn btn-danger mt-1">hapus keluhan</a>
                  </div>
                </div>
              </div>
      ';


}
}else {
  echo '<div class="text-center"><h2>Data Kosong</h2></div>';
}

}







function LoopCardSemuaKeluhan()
{  
  echo '<style>.inner  {
  overflow: ;
}
.inner img {
  transition: all 0.5s ease;
}
.inner:hover img {
  transform: scale(1.2);
}</style>';

  include 'koneksi.php';
  date_default_timezone_set('Asia/Jakarta');  
  $query = $conn->query(" SELECT * from keluhan") or die(mysql_error($conn)) ;

  if ($row = $query->num_rows > 0) {
    while ($data = $query->fetch_assoc()) {

      $waktu = $data['waktu'];
      if ($data['status'] == 0) {
        $style = "<style> .fa-circle {  font-size: 10px;} </style>";
        $result = '<p>status : <b>belum dikerjakan</b>'.' <i class="fas fa-circle" style="color: red;"></i><p>';
      }else if ($data['status'] == 1){
        $style = "<style> .fa-circle {  font-size: 10px;} </style>";
        $result = '<p>status : <b>sedang dikerjakan</b>'.' <i class="fas fa-circle" style="color: green;"></i><p>';
      } 
      if ($data['status_diabaikan'] == 1) {
       $style = "<style> .fa-circle {  font-size: 10px;} </style>";
        $result = '<p>status : <b>diabaikan</b>'.' <i class="fas fa-circle" style="color: violet;"></i><p>';
      }

      echo '
      <div class="col-md-4">
                <div class="card  shadow" style="width: 20rem; margin-bottom: 2rem;">
                  <div class="inner">
                  <div class="small" style="padding-left: 2px;">'.waktu_lalu($waktu).'</div>
                    
                    <img src="../datas_user/image/'.$data['foto_kerusakan'].' " class="card-img-top" alt="..." style="    border-top-left-radius: 0!important; 
                      border-top-right-radius: 0!important; height: 350px;">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                      Nama : '.$data['nama'].'

                    </h5>
                    
                    '.$style.$result.'

                    <p class="card-text">
                    <p>Jenis Keluhan : <b>'.$data['jenis_keluhan'].'</b>
                    </p>

                    keterangan : 
                      '.$data['keterangan'].'
                    </p>

                </div>
              </div>
              </div>
      ';


}
}else {
  echo '<div class="text-center"><h2>Data Kosong</h2></div>';
}

}





function LoopCardAbaikan()
{
  echo '<style>.inner  {
  overflow: ;
}
.inner img {
  transition: all 0.5s ease;
}
.inner:hover img {
  transform: scale(1.2);
}</style>';

  include 'koneksi.php';
  date_default_timezone_set('Asia/Jakarta');  
    $status = true;
  $query = $conn->query(" SELECT * from keluhan where status_diabaikan = '$status' ") or die(mysql_error($conn)) ;

  if ($row = $query->num_rows > 0) {
    while ($data = $query->fetch_assoc()) {
      $waktu = $data['waktu'];
      echo '
      <div class="col-md-4">
                <div class="card  shadow" style="width: 20rem; margin-bottom: 2rem;">
                  
                  <div class="small" style="padding-left: 2px;">'.waktu_lalu($waktu).'</div>
                    <div class="inner">
                    <img src="../datas_user/image/'.$data['foto_kerusakan'].' " class="card-img-top" alt="..." style="    border-top-left-radius: 0!important; 
                      border-top-right-radius: 0!important; height: 350px;">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                      Nama Pelapor : '.$data['nama'].'
                    </h5>
                    <p class="card-text">
                    <p>Jenis Keluhan : <b>'.$data['jenis_keluhan'].'</b></p>
                    keterangan : 
                      '.$data['keterangan'].'
                    </p>
                    <a href="handle-form-dashboard/handle-abaikan-hapus/index.php?id='.$data['id'].' " class="btn btn-danger mt-1">hapus</a>
                  </div>
                </div>
              </div>
      ';

}}else {
  echo '<div class="text-center"><h2>Data Kosong</h2></div>';
}

}

function waktu_lalu($timestamp)
{
    $selisih = time() - strtotime($timestamp) ;

    $detik = $selisih ;
    $menit = round($selisih / 60 );
    $jam = round($selisih / 3600 );
    $hari = round($selisih / 86400 );
    $minggu = round($selisih / 604800 );
    $bulan = round($selisih / 2419200 );
    $tahun = round($selisih / 29030400 );

    if ($detik <= 60) {
        $waktu = $detik.' detik yang lalu';
    } else if ($menit <= 60) {
        $waktu = $menit.' menit yang lalu';
    } else if ($jam <= 24) {
        $waktu = $jam.' jam yang lalu';
    } else if ($hari <= 7) {
        $waktu = $hari.' hari yang lalu';
    } else if ($minggu <= 4) {
        $waktu = $minggu.' minggu yang lalu';
    } else if ($bulan <= 12) {
        $waktu = $bulan.' bulan yang lalu';
    } else {
        $waktu = $tahun.' tahun yang lalu';
    }
    
    return $waktu;


}

function LoopCardBelumDikerjakan()
{
  echo '<style>
  .inner  {
  overflow: ;
}
.inner img {
  transition: all 0.5s ease;
}
.inner:hover img {
  transform: scale(1.2);
}</style>';

  include 'koneksi.php';
  date_default_timezone_set('Asia/Jakarta');  
    $status = false;
  $query = $conn->query(" SELECT * from keluhan where status = '$status' and status_diabaikan = 0 ") or die(mysql_error($conn)) ;

  if ($row = $query->num_rows > 0) {
    while ($data = $query->fetch_assoc()) {
      $waktu = $data['waktu'];


      echo '
      <div class="col-md-4">
                <div class="card  shadow" style="width: 20rem; margin-bottom: 2rem;">
                  
                  <div class="small" style="padding-left: 2px;">'.waktu_lalu($waktu).'</div>
                    <div class="inner">
                    <img src="../datas_user/image/'.$data['foto_kerusakan'].' " class="card-img-top" alt="..." style="    border-top-left-radius: 0!important; 
                      border-top-right-radius: 0!important; height: 350px;">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                      Nama Pelapor : '.$data['nama'].'
                    </h5>
                    <p class="card-text">
                    <p>Jenis Keluhan : <b>'.$data['jenis_keluhan'].'</b></p>
                    </p>
                    <div class="reponsive-button">
                    <a href="handle-form-dashboard/handle-kerjakan/index.php?id='.$data['id'].'" role="submit" class="btn btn-primary">kerjakan</a>
                    <a href="handle-form-dashboard/handle-abaikan/index.php?id='.$data['id'].'" role="submit" class="btn btn-danger">abaikan</a><br>
                    <a href="lihat-rincian.php?id='.$data['id'].' " class="btn btn-success mt-1">lihat rincian keterangan</a>
                  </div>
                  </div>
                </div>
              </div>
      ';

}}else {
  echo '<div class="text-center"><h2>Data Kosong</h2></div>';
}

}

function LoopCardLihatRincian()
{
  echo '<style>
  .inner  {
  overflow: ;
}
.inner img {
  transition: all 0.5s ease;
}
.inner:hover img {
  transform: scale(1.5);
}</style>';

  include 'koneksi.php';
  date_default_timezone_set('Asia/Jakarta');  
    

      //mengambil id dari parameter
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $id = $_GET['id'];

  $query = $conn->query(" SELECT * from keluhan where id = '$id' ") or die(mysql_error($conn)) ;

  if ($row = $query->num_rows > 0) {
    while ($data = $query->fetch_assoc()) {
      $waktu = $data['waktu'];


      echo '
      <div class="col-md-4">
                <div class="card  shadow" style="width: 20rem; margin-bottom: 2rem;">
                  
                  <div class="small" style="padding-left: 2px;">'.waktu_lalu($waktu).'</div>
                    <div class="inner">
                    <img src="../datas_user/image/'.$data['foto_kerusakan'].' " class="card-img-top" alt="..." style="    border-top-left-radius: 0!important; 
                      border-top-right-radius: 0!important; height: 350px;">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                      Nama Pelapor : '.$data['nama'].'
                    </h5>
                    <p class="card-text">
                    <p>Email : <b>'.$data['email'].'</b></p>
                    <p>Jenis Keluhan : <b>'.$data['jenis_keluhan'].'</b></p>
                    <p>Waktu Lapor : <b>'.$data['waktu'].'</b></p>
                    keterangan : 
                      '.$data['keterangan'].'
                    </p>
    
                  </div>
                </div>
              </div>
      ';

}}else {
  echo '<div class="text-center"><h2>Data Kosong</h2></div>';
}

}
  


function IconCard()
{
  include 'koneksi.php';
  $belum_dikerjakan = 0;
  $Sedang_dikerjakan = 0;
  $keluhan_diabaikan = 0;
  $jumlah_keluhan = 0;

  $status = false;
  $query = $conn->query(" SELECT * from keluhan") or die(mysql_error($conn)) ;

  if ($row = $query->num_rows > 0) {
  while ($data = $query->fetch_assoc()) {

    $jumlah_keluhan++;

    if ($data['status'] == false and $data['status_diabaikan'] == false) {
       $belum_dikerjakan++;
    }
  
    if ($data['status_diabaikan'] == true) {
      $keluhan_diabaikan++;
    }

    if ($data['status'] == true) {
      $Sedang_dikerjakan++;
    }

    }}

  echo '
    <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
      
                    <i class="fas fa-box-open"></i>
                  </div>
                  <div class="mr-5">'.$Sedang_dikerjakan.' Sedang Dikerjakan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="dikerjakan.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">

                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">'.$belum_dikerjakan.' belum di kerjakan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="belum_dikerjakan.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-trash"></i>
                  </div>
                  <div class="mr-5">'.$keluhan_diabaikan.' keluhan diabaikan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="diabaikan.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="far fa-eye"></i>
                  </div>
                  <div class="mr-5">'.$jumlah_keluhan.' jumlah keluhan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="semua_keluhan_masuk.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
  ';
}
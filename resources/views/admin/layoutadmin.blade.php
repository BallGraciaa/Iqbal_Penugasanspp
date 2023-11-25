<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BallGraciaa SPP</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="assett/img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="/assett/css/style.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  @yield('css')
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">     
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">BallGracia</span>
                    <span class="logo-subtitle">Dashboard</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="{{url('utama')}}"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                    <a class="active" href="{{url('datasiswa')}}"><span class="icon document" aria-hidden="true"></span>Data Siswa</a>
                </li>
                <li>  
                    <li>
                        <a class="active" href="{{url('petugas')}}"><span class="icon folder" aria-hidden="true"></span>Data Petugas</a>
                    </li>
                </li>
                <li>
                    <a class="active" href="{{url('kelas')}}"><span class="icon image" aria-hidden="true"></span>Kelas</a>
                </li>
                <li>
                    <a class="active" href="{{url('spp')}}"><span class="icon image" aria-hidden="true"></span>Data Spp</a>
                </li>
    
                <li>
                    <a class="active" href="{{url('history')}}"><span class="icon image" aria-hidden="true"></span>History</a>
                </li>
            </ul>
            
            <ul class="sidebar-body-menu">
               
              
                <li>
                    <a href="##"><span class="icon setting" aria-hidden="true"></span>Generate Laporan</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><source srcset="assett/img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="assett/img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Prof. Dr. Muhamad Iqbal Firdaus S.Ked</span>
                <span class="sidebar-user__subtitle">Founder / Pemilik PT</span>
            </div>
        </a>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
   
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      @yield('tampilkan')
    </main>
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p>2023 © BallGraciaa web dan jangan lupa follow ig saya : BallGraciaa - <a href="elegant-dashboard.com" target="_blank"
          rel="noopener noreferrer">PT IQBAL CORPORATION</a></p>
    </div>
    <ul class="footer-end">
      <li><a href="##">Mayora Grup</a></li>
      <li><a href="##">PT Muhamad Iqbal Grup</a></li>
      <li><a href="##">PT Muhamad iqbal perkasa</a></li>
    </ul>
  </div>
</footer>
  </div>
</div>
<!-- Chart library -->
<script src="assett/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="assett/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="assett/js/script.js"></script>
</body>

</html>
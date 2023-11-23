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
  <link rel="stylesheet" href="assett/css/style.min.css">
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
                    <span class="logo-subtitle">History</span>
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
                    {{-- <a class="active" href="/"><span class="icon home" aria-hidden="true"></span> </a> --}}
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
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Uzbek</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              {{-- <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div> --}}
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="assett/img/avatar/avatar-illustrated-02.webp" type="assett/image/webp"><img src="assett/img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Account settings</span>
            </a></li>
          <li><a class="danger" href="##">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">History Pembayaran</h2>
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
         
       
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
           
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                    <tr class="users-table-info">
                        <th>NIS</th>
                        <th>TANGGAL BAYAR</th>
                        <th>BULAN DIBAYAR</th>
                        <th>TAHUN DIBAYAR</th>
                        <th>ID SPP</th>
                        <th>JUMLAH BAYAR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wg as $inem)
                        <tr>
                            <td>{{ $inem->nis}}</td>
                            <td>{{ $inem->tanggal_bayar}}</td>
                            <td>{{ $inem->bulan_dibayar }}</td>
                            <td>{{ $inem->tahun_dibayar }}</td>
                            <td>{{ $inem->id_spp }}</td>
                            <td>{{ $inem->jumlah_bayar }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
          </div>
          <div class="col-lg-3">
         
           
          </div>
        </div>
      </div>
    </main>
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p>2023 © BallGraciaa web dan jangan lupa follow ig saya : BallGraciaa - <a href="elegant-dashboard.com" target="_blank"
          rel="noopener noreferrer">PT IQBAL CORPORATION</a></p>
    </div>
    <ul class="footer-end">
      <li><a href="##">About</a></li>
      <li><a href="##">Support</a></li>
      <li><a href="##">Puchase</a></li>
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
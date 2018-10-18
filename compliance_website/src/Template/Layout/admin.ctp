<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?= $title ?>
    </title>
    <?= $this->Html->css('../vendors/iconfonts/mdi/css/materialdesignicons.min.css') ?>
    <?= $this->Html->css('../vendors/css/vendor.bundle.base.css') ?>
    <?= $this->Html->css('../vendors/css/vendor.bundle.addons.css') ?>
    <?= $this->Html->css('../vendors/iconfonts/font-awesome/css/font-awesome.css') ?>
    <?= $this->Html->css('../vendors/icheck/skins/all.css') ?>
    
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->script('../vendors/js/vendor.bundle.base.js') ?>
    <?= $this->Html->script('../vendors/js/vendor.bundle.addons.js') ?>
    <?= $this->Html->script('off-canvas.js') ?>
    <?= $this->Html->script('misc.js') ?>
    <?= $this->Html->script('bootstrapValidator.js') ?>
    <?= $this->Html->script('tinymce/tinymce.min.js')?>
    <?= $this->Html->script('tinymce/init-tinymce.js')?>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" type="text/css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
    
    
</head>
<body>
<div class="container-scroller">
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <span class="navbar-brand brand-logo">
          <span style="color:#4FB5DB;">Admin</span><span style="color:#669DE0;">WHN</span>
        </span>
        <a class="navbar-brand brand-logo-mini" href="../../index.html" style="color: black;">
          <span style="color:#4FB5DB;">AD</span><span style="color:#669DE0;">M</span>
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text"> Hello, Admin !</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a href="#" class="dropdown-item mt-2">
                Change Password
              </a>
              <a href="#" class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/admin/dashboards">
              <i class="menu-icon fa fa-desktop"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/companies">
              <i class="menu-icon fa fa-building-o"></i>
              <span class="menu-title">Perusahaan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/departments">
              <i class="menu-icon fa fa-sitemap"></i>
              <span class="menu-title">Departemen</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/users">
              <i class="menu-icon fa fa-user-o"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/groups">
              <i class="menu-icon fa fa-group"></i>
              <span class="menu-title">Grup User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/positions">
              <i class="menu-icon fa fa-vcard"></i>
              <span class="menu-title">Jabatan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/articles">
              <i class="menu-icon fa fa-newspaper-o"></i>
              <span class="menu-title">Artikel</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="/admin/archives">
              <i class="menu-icon fa fa-tasks"></i>
              <span class="menu-title">Arsip</span>
            </a>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon fa fa-tasks"></i>
              <span class="menu-title">Arsip</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basics">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="archivecategories">Kategori Arsip</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="archives">Penyimpanan Arsip</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon fa fa-list-alt"></i>
              <span class="menu-title">Dokumen</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="userrequestreasons">Alasan Pengajuan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="userdoccategories">Kategori Dokumen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="userdoctypes">Tipe Dokumen</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="articlecategories">Kategori Artikel</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/icons/font-awesome.html">
              <i class="menu-icon fa fa-bars"></i>
              <span class="menu-title">Menu</span>
            </a>
          </li>
          
        </ul>
      </nav>

      <div class="main-panel">
          <div class="content-wrapper">
              <!-- Message error/success -->
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
          </div>
        <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                <a href="http://www.bootstrapdash.com/" target="_blank">Admin  Compliance Wahanaartha Group </a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">ledti Team
                </span>
              </div>
            </footer>
        </div>
    </div>
</div>
</body>
</html>

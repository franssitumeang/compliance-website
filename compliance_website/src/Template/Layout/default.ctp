<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Wahana Artha |
        <?= $title ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700') ?>
    <?= $this->Html->css('public/linearicons.css') ?>
    <?= $this->Html->css('public/font-awesome.min.css') ?>
    <?= $this->Html->css('public/bootstrap.css') ?>
    <?= $this->Html->css('public/magnific-popup.css') ?>
    <?= $this->Html->css('public/jquery-ui.css') ?>
    <?= $this->Html->css('public/nice-select.css') ?>
    <?= $this->Html->css('public/animate.min.css') ?>
    <?= $this->Html->css('public/owl.carousel.css') ?>
    <?= $this->Html->css('public/main.css') ?>
    <?= $this->Html->css('public/custom/tooltip.css') ?>
    <?= $this->Html->css('public/custom/thumbnail-slider.css') ?>
    

    <?= $this->Html->script('public/custom/thumbnail-slider.js') ?>
    <?= $this->Html->script('public/custom/tooltip.js') ?>

    <?= $this->Html->script('public/vendor/jquery-2.2.4.min.js') ?>
    <?= $this->Html->script('public/popper.min.js') ?>
    <?= $this->Html->script('public/vendor/bootstrap.min.js') ?>
    <?= $this->Html->script('public/jquery-ui.js') ?>
    <?= $this->Html->script('public/easing.min.js') ?>
    <?= $this->Html->script('public/hoverIntent.js') ?>
    <?= $this->Html->script('public/superfish.min.js') ?>
    <?= $this->Html->script('public/jquery.ajaxchimp.min.js') ?>
    <?= $this->Html->script('public/jquery.magnific-popup.min.js') ?>
    <?= $this->Html->script('public/jquery.nice-select.min.js') ?>
    <?= $this->Html->script('public/owl.carousel.min.js') ?>
    <?= $this->Html->script('public/isotope.pkgd.min.js') ?>
    <?= $this->Html->script('public/mail-script.js') ?>
    <?= $this->Html->script('public/main.js') ?>
    <?= $this->Html->script('bootstrapValidator.js') ?>
    <?= $this->Html->script('tinymce/tinymce.min.js')?>
    <?= $this->Html->script('tinymce/init-tinymce.js')?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    
</head>

<body>
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div id="logo">
                        <a href="/">
                            <?= $this->Html->image('wahana-logo.png', [
                            'alt' => 'Wahana Artha Logo',
                            'height' => 100,
                            'width' => 400
                            ]) ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-center d-flex">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="/">Home</a></li>

                       
                        <li class="menu-has-children"><a href="#">Pengajuan SOP</a>
                            <ul>
                                <li><a href="/publics/user-request/">Daftar Pengajuan OP</a></li>
                                <li><a href="/publics/user-request/add">Buat pengajuan OP</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="#">Pendaftaran Quiz</a>
                            <ul>
                                <li><a href="blog-home.html">QYPO</a></li>
                                <li><a href="blog-home.html">The Comment</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="#">Perusahaan</a>
                            <ul>
                                <?php foreach($headerCompanies as $perusahaan): ?>
                                <li class="menu-has-children"><a href="#"><?= $perusahaan->company_name ?></a>
                                    <ul>
                                        <li><a href="#">Peraturan Perusahaan PT WAH</a></li>
                                        <li><a href="#">Prosedur PT WAH</a></li>
                                        <li><a href="#">SK-Dir PT WAH</a></li>
                                        <li><a href="#">Struktur Organisasi PT WAH</a></li>
                                    </ul>
                                </li>
                                <?php endforeach;?>

                                

                            </ul>
                        </li>

                        <li class="menu-has-children"><a href="/profile">Profil</a></li>

                        <li class="menu-has-children"><a href="#">Dokumen Perusahaan</a>
                            <ul>
                                <li><a href="#">Policy & Procedure</a></li>
                                <li><a href="#">SK-DIR</a></li>
                                <li><a href="#">Risk Profile</a></li>
                                <li><a href="#">Pamflet</a></li>
                                <li><a href="#">Jurnal Audit</a></li>
                                <li><a href="#">Buletin Policy & Procedure</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Forum Diskusi</a></li>
                        <?php if (!$authUser): ?>
                        <li><a href="/login">Login</a></li>
                        <?php endif; ?>
                        <?php if ($authUser): ?>
                        <li class="menu-has-children"><a href="#">Hello, <?= explode(" ", $authUser['name'])[0];?></a>
                            <ul>                                
                                <li><a href="#">Change Password</a></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    <?= $this->fetch('content') ?>
    <?= $this->Flash->render() ?>


    <footer class="footer-area">
        <div class="footer-widget-wrap">
            <div class="container">
                <div class="row section-gap">
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Jam Buka </h4>
                            <ul class="hr-list">
                                <li class="d-flex justify-content-between">
                                    <span>Monday - Friday</span> <span>08.00 am - 07.00 pm</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Saturday</span> <span>08.00 am - 03.00 pm</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Sunday</span> <span>08.00 am - 04.00 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Hubungi Kami</h4>
                            <p class="address">
                                Jl. Gn. Sahari Raya No.32, RT.12/RW.4, Gn. Sahari Utara, Sawah Besar, Kota Jakarta
                                Pusat, Daerah Khusus Ibukota Jakarta 10720
                            </p>
                            <p class="number">
                                Telp : (021) 6012070
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Visitors</h4>
                            <p>> User Online : 50</p>
                            <p>> Today Visitor : 50</p>
                            <p>> Total Visitor : 50</p>
                            <p>> Last Post Date :
                                <script>
                                    var today = new Date();
                                    var dd = today.getDate();
                                    var mm = today.getMonth() + 1; //January is 0!

                                    var yyyy = today.getFullYear();
                                    if (dd < 10) {
                                        dd = '0' + dd;
                                    }
                                    if (mm < 10) {
                                        mm = '0' + mm;
                                    }
                                    var today = dd + '/' + mm + '/' + yyyy;
                                    document.write(today);
                                </script>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-wrap">
                <div class="container">
                    <div class="row footer-bottom d-flex justify-content-between align-items-center">
                        <p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="compliance.Wahanaartha.com">Compliance
                                Wahana Artha</a>
                        </p>
                        <ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </footer>


</body>

</html>

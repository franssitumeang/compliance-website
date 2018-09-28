<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
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
                        <a href="index.html">
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
                        <li><a href="index.html">Home</a></li>
                        <li class="menu-has-children"><a href="">Artikel</a>
                            <ul>
                                <li><a href="blog-home.html">CEO'S Letter</a></li>
                                <li><a href="blog-single.html">Serba Serbi</a>
                                    <ul>
                                        <li><a href="#">Foto HUT Wahana</a></li>
                                        <li><a href="#">HSE Info</a></li>
                                        <li><a href="#">QIPO & THE COMMENT</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-home.html">Event Promotion</a></li>
                                <li><a href="blog-single.html">Risk Profile</a></li>
                                <li><a href="blog-home.html">Pamflet Audit</a></li>
                                <li><a href="blog-single.html">Jurnal</a></li>
                                <li><a href="blog-home.html">Komunitas</a></li>
                                <li><a href="blog-single.html">SS/QCC/QCP</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="">Perusahaan</a>
                            <ul>
                                <li class="menu-has-children"><a href="">PT Wahana Artha Harsaka</a>
                                    <ul>
                                        <li><a href="#">Peraturan Perusahaan PT WAH</a></li>
                                        <li><a href="#">Prosedur PT WAH</a></li>
                                        <li><a href="#">SK-Dir PT WAH</a></li>
                                        <li><a href="#">Struktur Organisasi PT WAH</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">PT Wahana Makmur Sejati</a>
                                    <ul>
                                        <li><a href="#">Peraturan Perusahaan PT WMS</a></li>
                                        <li><a href="#">Prosedur PT WMS</a></li>
                                        <li><a href="#">SK-Dir PT WMS</a></li>
                                        <li><a href="#">Struktur Organisasi PT WMS</a></li>
                                        <li><a href="#">Tabel Proses Approval PT WMS</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">PT Wahana Artha Ritelindo</a>
                                    <ul>
                                        <li><a href="#">Peraturan Perusahaan PT WARI</a></li>
                                        <li><a href="#">Prosedur PT WARI</a></li>
                                        <li><a href="#">SK-Dir PT WARI</a></li>
                                        <li><a href="#">Struktur Organisasi PT WARI</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">PT Tristar Trasindo</a>
                                    <ul>
                                        <li><a href="#">Peraturan Perusahaan PT TST</a></li>
                                        <li><a href="#">Prosedur PT TST</a></li>
                                        <li><a href="#">SK-Dir PT TST</a></li>
                                        <li><a href="#">Struktur Organisasi PT TST</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">PT Wahana Kalyanamitra Mahardika</a>
                                    <ul>
                                        <li><a href="#">Peraturan Perusahaan PT WKM</a></li>
                                        <li><a href="#">Prosedur PT WKM</a></li>
                                        <li><a href="#">SK-Dir PT WKM</a></li>
                                        <li><a href="#">Struktur Organisasi PT WKM</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">PT Wahana Artha Motorental</a>
                                    <ul>
                                        <li><a href="#">Peraturan Perusahaan PT WAMO</a></li>
                                        <li><a href="#">Prosedur PT WAMO</a></li>
                                        <li><a href="#">SK-Dir PT WAMO</a></li>
                                        <li><a href="#">Struktur Organisasi PT WAMO</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">PT Sahari Multi Investama</a>
                                    <ul>
                                        <li><a href="#">Struktur Organisasi PT SMI</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">PT Graha Sahari Multitalenta</a>
                                    <ul>
                                        <li><a href="#">Struktur Organisasi PT GSM (GSTA)</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">PT Kyochon Indonesia</a>
                                    <ul>
                                        <li><a href="#">Prosedur PT KI</a></li>
                                        <li><a href="#">Struktur Organisasi PT KI</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">PT Multiusaha Sejahtera Bersama</a>
                                    <ul>
                                        <li><a href="#">Prosedur PT MSB</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">Yayasan Wahana Artha</a>
                                    <ul>
                                        <li><a href="#">SK Ketua Yayasan Wahana Artha</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="">PT Sahari Raya Investama</a>
                                    <ul>
                                        <li><a href="#">Prosedur PT SRI</a></li>
                                        <li><a href="#">Struktur Organisasi PT SRI</a></li>
                                        <li><a href="#">SK-Dir PT WAMO</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="">Approval</a>
                        </li>
                        <li><a href="gallery.html">Arsip</a></li>
                        <li><a href="about.html">Profil</a></li>
                        <li><a href="contact.html">Kontak</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <footer class="footer-area">
        <div class="footer-widget-wrap">
            <div class="container">
                <div class="row section-gap">
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Opening Hours</h4>
                            <ul class="hr-list">
                                <li class="d-flex justify-content-between">
                                    <span>Monday - Friday</span> <span>08.00 am - 18.00 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Contact Us</h4>
                            <p>
                                Gedung Wahanaartha. Lantai. 6
                                Jl. Gunung Sahari No.32
                                Jakarta Pusat
                            </p>
                            <p class="number">
                                Telp : 021-6281700 Ext. #3 + 665
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Recent Comments</h4>
                            <p>> Febri on <a href="#">Set Tone at the Top</a></p>
                            <p>> Jayanthi on <a href="#">Set Tone at the Top</a></p>
                            <p>> Iwan on <a href="#">WRC Road To Palembang 21-25 April 2017</a></p>
                            <p>> Diana on <a href="#">WMS-Technical Service</a></p>
                            <p>> ASA on <a href="#">WMS-Technical Service</a></p>
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
                            <script>document.write(new Date().getFullYear());</script> Compliance.Wahanaartha.com
                            Designed by Press Customiz
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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

    <?= $this->Html->script('public/custom/thumbnail-slider.js') ?>
    <?= $this->Html->script('public/custom/tooltip.js') ?>
    <?= $this->Html->script('public/vendor/jquery-2.2.4.min.js') ?>
    <?= $this->Html->script('public/popper.min.js') ?>
    <?= $this->Html->script('public/vendor/bootstrap.min.js') ?>
    <?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA') ?>
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

    <script>
        var slides = document.getElementById("thumbnail-slider").getElementsByTagName("li");
        for (var i = 0; i < slides.length; i++) {
            slides[i].onmouseover = function (e) {
                var li = this;
                if (li.thumb) {
                    var content = "<div class='tip-wrap' style='background-image:url(" + li.thumbSrc + ");'><div class='tip-text'>" + li.thumb.innerHTML + "</div></div>";
                    tooltip.pop(li, content);
                }
            };
        }
    </script>
</body>

</html>
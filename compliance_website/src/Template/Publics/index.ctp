<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-12 banner-content" style="bottom: -70px;">
                <h6 class="text-white">Selamat Datang</h6>

                <h1 class="text-white">WAHANA ARTHA GROUP</h1>
                <p class="text-white">
                    Mitra Bagi Perusahaan untuk Mencapai Tujuan Bisnisnya dengan Cara Memastikan Efektivitas Sistem &
                    Sumber Daya
                    yang Terlibat
                </p>
                <a href="#" class="primary-btn text-uppercase">We Are Wahanians</a><br>

                <div id="thumbnail-slider" style="top: 15px;">
                    <div class="inner">
                        <ul>
                            <?php foreach ($articles as $article): ?>
                            <li>
                                <a class="thumb" id="img_<?= $article->id; ?>" href="publics/articles/view/<?= $article->id; ?> ">
                                    <h3><?= $article->title; ?></h3>
                                    <p><?= $article->description; ?><p>
                                </a>
                            </li>
                            <?php endforeach;?>
                            
                            <li>
                                <a class="thumb" href="https://amazingpict.com/wp-content/uploads/2014/01/Honda-CBR-600RR-HD-Wallpaper-for-Gadgets.jpg">
                                    <h3>Quisque Quam Eros</h3>
                                    Vivamus dictum pulvinar sem in ultricies. Vestibulum sit amet posuere dui.
                                </a>
                            </li>
                            <li>
                                <a class="thumb" href="http://naikmotor.com/wp-content/uploads/2016/07/Wahana_Honda_Jakarta_fair_2016.jpg">
                                    <h3>Duis Faucibus Aliquam Tincidunt</h3>
                                    Nunc tempor massa in purus lobortis dapibus ac eget nulla.
                                </a>
                            </li>
                            <li>
                                <a class="thumb" href="https://amazingpict.com/wp-content/uploads/2014/01/Honda-CBR-600RR-HD-Wallpaper-for-Gadgets.jpg">
                                    <h3>Aliquam Rutrum Condimentum</h3>
                                    Fusce quis eros vitae mauris porta vulputate non et orci. A convallis augue aliquet
                                    at.
                                </a>
                            </li>
                            <li>
                                <a class="thumb" href="https://amazingpict.com/wp-content/uploads/2014/01/Honda-CBR-600RR-HD-Wallpaper-for-Gadgets.jpg">
                                    <h3>Mauris a Imperdiet</h3>
                                    In blandit quam. Mauris iaculis libero consequat elit molestie, sed lobortis lorem
                                    posuere.
                                </a>
                            </li>
                            <li>
                                <a class="thumb" href="http://naikmotor.com/wp-content/uploads/2016/07/Wahana_Honda_Jakarta_fair_2016.jpg">
                                    <h3>Nulla Aliquet Eros Tellus</h3>
                                    Eget semper lacus mollis vel. Mauris ut placerat dui, sit amet tristique tellus.
                                </a>
                            </li>
                            <li>
                                <a class="thumb" href="http://naikmotor.com/wp-content/uploads/2016/07/Wahana_Honda_Jakarta_fair_2016.jpg">
                                    <h3>Cras Viverra Nisi Purus</h3>
                                    At gravida nunc condimentum id. Morbi gravida accumsan mauris at scelerisque
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End banner Area -->
<!-- Start menu-area Area -->
<section class="menu-area section-gap" id="menu">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Update Terbaru Dokumen</h1>
                </div>
            </div>
        </div>
        <ul class="filter-wrap filters col-lg-12 no-padding">
            <li class="active" data-filter="*">All Article</li>
            <li data-filter=".peraturan">Peraturan</li>
            <li data-filter=".prosedur">Prosedur</li>
            <li data-filter=".sk">SK-Dir</li>
            <li data-filter=".so">Struktur Organisasi</li>
            <li data-filter=".lain">Lainnya</li>
        </ul>
        <div class="filters-content">
            <div class="row grid">
                <div class="card col-lg-3 col-md-6 col-sm-6 single-blog all peraturan" style="width: 18rem; height:32rem;">
                    <div class="single-menu" style="height:32rem;">
                        <div class="thumb">
                            <img class="card-image" src="img/sk.jpg" alt="" width="200" height="200">
                        </div>
                        <p class="date">24 Sep 2018</p>
                        <a href="blog-single.html">
                            <h4>Peraturan PT WAH telah update</h4>
                        </a>
                        <p>
                            Peraturan PT WAH Bagian IT telah di update sebagaimana dijelaskan pada rapat tanggal 21
                            September 2018
                        </p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-6 single-blog all peraturan" style="width: 18rem; height:32rem;">
                    <div class="single-menu" style="height:32rem;">
                        <div class="thumb">
                            <img class="card-image" src="img/b1.jpg" alt="" width="200" height="200">
                        </div>
                        <p class="date">24 Sep 2018</p>
                        <a href="blog-single.html">
                            <h4>Peraturan PT WAH telah update</h4>
                        </a>
                        <p>
                            Peraturan PT WAH Bagian IT telah di update sebagaimana dijelaskan pada rapat tanggal 21
                            September 2018
                        </p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-6 single-blog all prosedur" style="width: 18rem; height:32rem;">
                    <div class="single-menu" style="height:32rem;">
                        <div class="thumb">
                            <img class="card-image" src="img/prosedur.jpg" alt="" width="200" height="200">
                        </div>
                        <p class="date">05 Sep 2018</p>
                        <a href="blog-single.html">
                            <h4>Prosedur Branch</h4>
                        </a>
                        <p>
                            Untuk penomoran prosedur di PT WAHANAARTHA RITELINDO dikelompokkan kedalam 3 kolompok
                            sesuai dengan ruang
                            lingkup dimana ...
                        </p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-6 single-blog all sk" style="width: 18rem; height:32rem;">
                    <div class="single-menu" style="height:490;">
                        <div class="thumb">
                            <img class="card-image" src="img/sk.jpg" alt="" width="200" height="200">
                        </div>
                        <p class="date">05 Sep 2018</p>
                        <a href="blog-single.html">
                            <h4>SK-DIR No.216.K-DIR-2013DDNFIJBFEVFVEBUIFEBBF</h4>
                        </a>
                        <p style="text-overflow: ellipsis; height:5px;">
                            Sesuai dengan ketentuan Pasal 108 ayat (1) UU No. 13 Tahun 2003 tentang Ketenagakerjaan
                            (“UUK”) dikerjakan
                        </p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-6 single-blog all so" style="width: 18rem; height:32rem;">
                    <div class="single-menu" style="height:490;">
                        <div class="thumb">
                            <img class="card-image" src="img/so.jpg" alt="" width="200" height="200">
                        </div>
                        <p class="date">05 Sep 2018</p>
                        <a href="blog-single.html">
                            <h4>Struktur Organisasi PT Wahanaartha Ritelindo</h4>
                        </a>
                        <p>
                            Sesuai dengan ketentuan Pasal 108 ayat (1) UU No. 13 Tahun 2003 tentang Ketenagakerjaan
                            (“UUK”)
                        </p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-6 single-blog all lain" style="width: 18rem; height:32rem;">
                    <div class="single-menu">
                        <div class="thumb">
                            <img class="card-image" src="img/lain.jpg" alt="" width="200" height="200">
                        </div>
                        <p class="date">05 Sep 2018</p>
                        <a href="blog-single.html">
                            <h4>Resiko Reputasi</h4>
                        </a>
                        <p>
                            Dear Wahanian,
                            Reputasi yang baik tidak hanya membantu perusahaan menarik </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<script>
    $('document').ready(function () {

        var slides = document.getElementById("thumbnail-slider").getElementsByTagName("li");
        for (var i = 0; i < slides.length; i++) {
            slides[i].onmouseover = function (e) {
                var li = this;
                if (li.
                thumb) {
                    var content = "<div class='tip-wrap' style='background-image:url(" + li.thumbSrc +
                        ");'><div class='tip-text'>" + li.thumb.innerHTML + "</div></div>";
                    tooltip.pop(li, content);
                }
            };
        }

    var articles = <?= $jsonArticles ?>;
    for(var i=0;i<articles.length;i++) {
        var string = (articles[i].content);
        var elem= document.createElement("div");
        elem.innerHTML = string;

        var images = elem.getElementsByTagName("img")[0];
        console.log(images.src);
        $("#img_"+articles[i].id).attr('href',images.src);
    }
    
    });

</script>


<!-- End menu-area Area -->

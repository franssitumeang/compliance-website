<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container" style="height: 200px;">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">

            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!--Start Content-->
<section class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-12 mb-30">
                    <h3 class="mb-10"> Dokumen 
                     <?= $userDocument->name ?>
                    </h3>
                   
                </div>
            </div>
            <div class="row">
                <div class="container-fluid">
                    <div class="row content">
                        <div class="col-lg-8 posts-list">
                        <object data="/<?= $userDocument->attachment_dir .  $userDocument->attachment?>"
                                type="application/pdf" width="100%" height="700">
                            </object>
                        </div>
                        <div class="col-lg-4 sidebar-widgets">
                            <div class="widget-wrap">
                                <div class="single-sidebar-widget popular-post-widget">
                                    <p>
                                        <b> Nomor Dokumen :</b>
                                        <?= $userDocument->doc_num ?>
                                    </p>
                                    <p>
                                        <b>Kategori :</b> <?= $userDocument->user_doc_category->category_name ?>
                                    </p>
                                    <p>
                                        <b>Tipe Dokumen :</b> <?= $userDocument->user_doc_type->doc_type_name ?>
                                    </p>
                                    <p>
                                        <b>Tanggal terbit :</b> <?= $userDocument->publisher_date ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

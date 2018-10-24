<section class="relative about-banner">
    <div class="overlay overlay-bg">
        
    </div>
    <div class="container" style="height: 200px;">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                
            </div>
        </div>
    </div>
</section>

<section class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="mb-30">Profile Perusahaan</h3>
                </div>
            </div>
            <div class="org_chart">
                <ul class="list">
                    <li class="item">
                        <a class="link" href="#">
                            <div class="name">PT Wahanaartha Harsaka</div>
                        </a>
                        <ul class="list">
                            <?php foreach ($companies as $c): ?>
                            <?php if (!$c->parent_id): ?>
                            <li class="item">
                                <a class="link" href="#">
                                    <div class="name"><?= $c->company_name ?></div>
                                </a>
                                <ul class="list">
                                    <?php foreach ($c->child_companies as $cc): ?>
                                    <?php if ($cc->parent_id): ?>
                                    <li class="item">
                                        <a class="link" href="#">
                                            <div class="name"><?= $cc->company_name ?></div>
                                        </a>
                                    </li>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </div><br>
            <div class="col-lg-12">
                <h5 class="mb-30" style="margin-bottom: -3px;">PT Wahanaartha Harsaka</h5>
                <p>WAH adalah perusaahaan supplier produk Oli Federal. Untuk menjalankan aktifitas PT WAH
                     di jalankan oleh dua function yang terdiri dari Accounting & Sales.</p>
                <?php foreach ($companies as $c): ?>
                <h5 class="mb-30" style="margin-bottom: -3px;"><?= $c->company_name ?></h5>
                <p><?= $c->description ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
</section>
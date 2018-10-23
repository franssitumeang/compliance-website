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
                            <li class="item">
                                <a class="link" href="#">
                                    <div class="name"><?= $c->company_name ?></div>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</section>
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
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mt-4"><?= $article->title; ?></h1>
            <hr>

            <p>Ditulis Pada <?= $article->created; ?></p>
                
            <hr>

            <?= $article->content; ?>
        </div>
    </div>  
</div>
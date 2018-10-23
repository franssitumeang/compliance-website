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
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mt-4"><?= $article->title; ?></h1>
            <hr>

            <p>Ditulis Pada <?= $article->created; ?></p>
            
            <hr>

            <?= $article->content; ?>
        </div>
        <div class="col-lg-4">
            <div class="card">               
                <div class="card-body">
                    <h4 align="center">Komentar</h4> 
                    <hr>
                    <?php if(!($comments->isEmpty())): ?>
                    <div style="overflow-y: auto; height: 250px;">
                        <?php foreach($comments as $comment): ?>
                        <b style="color: black;"><?= $comment->user->name; ?></b><br>
                        <small style="font-style: italic"><?=$comment->created; ?></small>
                        <p><?= $comment->comment; ?></p>
                        <hr>
                        <?php endforeach; ?>
                    </div>
                    <?php else: ?>
                    <p>Belum ada komentar</p>
                    <?php endif; ?>
                    <br>
                    <div class="form">
                        <small>Berikan Komentar Anda</small>
                        <textarea class="form-control"></textarea>
                        <input type="button" value="Komentar" class="btn btn-submit">
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
<br>
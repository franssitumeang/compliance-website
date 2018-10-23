<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container" style="height: 205px;">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">

            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<section class="reservation-area section-gap relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <?php echo $this->Flash->render('auth'); ?>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 reservation-right">

                <?= $this->Form->create('User', ['class' => 'form-wrap', 'style' => 'padding: 40px;']) ?>
                <h3 class="mb-30 text-center">LOGIN</h3>
                <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder'=>'ex : user@sample.com']) ?>
                <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder'=>'password']) ?>
                <?= $this->Form->button('Login', ['class' => 'primary-btn text-uppercase mt-20']) ?>
                <?= $this->Form->end() ?>
            </div>
            <div class="col-lg-6 reservation-left">
                <h1 class="text-white">Wahana Artha
                </h1>
                <p class="text-white pt-20">
                    Mitra bagi Perusahaan untuk mencapai
                    tujuan bisnisnya dengan cara memastikan efektifitas sistem
                    dan sumber daya yang terlibat
                </p>
            </div>

        </div>
    </div>
</section>

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
                    <h3 class="mb-10">
                        <?=$userRequestDetails->user_request_header->doc_title?>
                    </h3>
                    <p>
                        <span class="lnr lnr-user"></span><a>
                            Username</a>
                    </p>
                    <p><b>Deskripsi :</b>
                        <br>
                        <?=$userRequestDetails->descriptions?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="container-fluid">
                    <div class="row content">
                        <div class="col-lg-8 posts-list">
                            <div class="row">
                                <div class="col-lg-12 mb-10 d-flex flex-row ">
                                        <?php 
                                            echo $this->Form->create($userRequestDetails, ['Discussions' => ['action' => 'approve']]);
                                            echo $this->Form->button(__('Approve'), ['class' => 'genric-btn primary medium']); 
                                            echo $this->Form->end();    
                                        ?> 
                                        <?php 
                                            echo $this->Form->create($userRequestDetails, ['Discussions' => ['action' => 'reject']]);
                                            echo $this->Form->button(__('Reject'), ['class' => 'genric-btn primary medium']); 
                                            echo $this->Form->end();    
                                        ?>


                                </div>
                                <div class="col-lg-12">
                                    <object data="/<?= $userRequestDetails->attachment_dir .  $userRequestDetails->attachment?>"
                                        type="application/pdf" width="100%" height="700">
                                    </object>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 sidebar-widgets">
                            <div class="widget-wrap">
                                <div class="single-sidebar-widget popular-post-widget">
                                    <h4 class="popular-title">Komentar</h4>
                                    <div class="comments-area" style="
                                        margin-top: 0px;
                                        padding-top: 20px;
                                        ">
                                        <?php $i = 1; ?>
                                        <?php foreach ($discussions as $d): ?>
                                        <div class="comment-list" style="padding-bottom: 0px;">
                                            <div class="single-comment justify-content-between d-flex">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="desc">
                                                        <h5><a href="#"><?=$d->discussion_paticipant->user->name?></a></h5>
                                                        <p class="date" style="margin-bottom: 0px;"><?=$d->created?> </p>
                                                        <p class="comment">
                                                        <?=$d->contents?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i+=1; ?>
                                        <?php endforeach; ?>
                                        <div class="comment-list" style="
                                        padding-bottom: 0px;
                                        ">
                                            <div class="single-comment justify-content-between d-flex">
                                                <div class="user justify-content-between d-flex">

                                                    <div class="desc">
                                                        <h5><a href="#">Emilly Blunt</a></h5>
                                                        <p class="date" style="
                                                    margin-bottom: 0px;
                                                    ">December
                                                            4,
                                                            2017 at 3:12 pm </p>
                                                        <p class="comment">
                                                            Never say goodbye till the end comes!
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

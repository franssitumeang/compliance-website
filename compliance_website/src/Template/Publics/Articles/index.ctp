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
<div class="action-top">
    <?= $this->Html->link('Add', '/articles/add',['id'=>'btnAdd','class'=>'btn btn-danger btn-sm btn-add']) ?>
  </div>
<br>
<br>

<!--Start Content-->
<div class = "container">
        
            <?php if(!empty($articles)):?>
            <?php foreach($articles as $article):?>
            <div class = "card-deck">    
            <div class = "card col-lg-3 col-md-6 col-sm-6 single-blog" style="width: 18rem; height:18rem;">
                    <div class ="single-menu" style="height:32rem;">
                        <img class="card-img-top" src="" alt="Card image cap" width="100%">
                            <div class = "card-body">
                                    <a href="blog-single.html">
                                    <h4 class="card-title"><?php echo $article->title?></h4>
                                </a>
                                <p class ="card-text">
                                    <?php echo $article->content?>
                                </p>
                                <p class="card-text"><small class="text muted">
                                    <?php echo $article->created?>
                                </p>
                                <button type ="button" class="btn btn-info btn-sm pull-right">Read More</button>
                            </div>  
                    </div> 
                </div>

</div>    
<!--End Content-->    

                </div>
            <?php endforeach;?>
            <?php else:?>
            <p>No record found</p>
            <?php endif;?>
    </div>

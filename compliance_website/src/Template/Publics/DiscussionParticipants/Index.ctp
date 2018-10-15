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

<section class="contact-page-area section-gap">
    <div class="container">
        <div class="col-lg-12">
            <p>This is a paragraph.</p>
            <p>This is another paragraph.</p>
            <form>
                <input type="text" id="kata" name="kata" placeholder="masukkan kata">
            </form>
            <ol>
            </ol>


            <button id="btn2">Append list items</button>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var nilai=0; 
    $("#btn2").click(function(){   
        
        $("ol").append("<li><button id='nilai_"+(nilai+1)+"'>"+ $('#kata').val()+"</button></li>");
    });
    $('#nilai_2').click( function(){    
        $('#btn1').remove();
    });

});
</script>


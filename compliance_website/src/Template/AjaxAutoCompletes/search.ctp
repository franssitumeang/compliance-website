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



<section class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-12 mb-30">
                    <?= $this->form->control('search');?>
                </div>
                <p>I would like to say: </p>
                <div class="hasil"></div>
            </div>
        </div>
    </div>
</section>


<script>

    $('document').ready(function () {

        $("p").click(function() {
            $(this).remove;
        });

        $("#search").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "<?php echo $this->Url->build( ['controller' => 'AjaxAutoCompletes', 'action' => 'searchName']);?>" +
                        '?name=' + request.term,
                    type: "GET",
                    async: false,
                    headers: {
                        "ACCEPT": "application/json;odata=verbose"
                    }
                }).done(function (data) {
                    var hasil = null;
                    if (data.result.length == 0) {
                        hasil = [{
                            label: "Tidak ada nama mirip",
                            value: '',
                            id: ''
                        }]
                    } else {
                        hasil = $.map(data.result, function (value, key) {
                            return {
                                label: value,
                                value: value,
                                id: key
                            }
                        })
                    }
                    response(hasil);
                })
            },
            select: function (event, data) {
                console.log("yang di pilih : ")
                console.log(data)
                console.log("=======================");
                $("#search").val('');
                if (data.item.id) 
                    $( ".hasil" ).append( "<p><strong>"+ data.item.label +"</strong></p>" );
                return false;
            },
            minLength: 2,
            delay: 100
        });
       
    });

</script>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="articles" style="color:#669DE0;">
                    <span class="menu-icon fa fa-newspaper-o"></span>&nbsp; Daftar Artikel
                    </a>
                </h5>
                <?= $this->Form->create("",['type'=>'get']) ?>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="search">Searh</label>
                <input type="text" class="form-control" name="search_key" placeholder="Enter Searh Key">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Search By</label>
                <div class="input-group col-xs-12">
                  <select class="form-control" name="attribute">
                    <option value="title">Judul</option>
                    <option value="created">Tanggal Terbit</option>
                    <option value="ArticleCategories.name_categories">Kategori Artikel</option>
                  </select>
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="submit">Search</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
        <?= $this->Form->end() ?>
                <div class="row">
                    <div class="col-12" style="padding-right: 0px;">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>No</th>
                                    <th>Judul Artikel</th>
                                    <th>Tanggal Terbit</th>
                                    <th>Kategori Artikel</th>
                                    <!-- <th>File Attach</th>
                                    <th>Isi Content</th> -->
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i=1;?>
                                        <?php foreach ($articles as $article): ?>
                                            <td>
                                                <?= $i; ?>
                                            </td>
                                            <td class="title" value=<?= $article->title; ?>>
                                                <?= $article->title; ?>
                                            </td>
                                            <td class="created" value=<?= $article->created; ?>>
                                                <?= $article->created; ?>
                                            </td>
                                            <td class="categories_id" value=<?= $article->categories_id; ?>>
                                                <?= $article->article_category->name_categories; ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->button('<i class="fa fa-edit">', 
                                                                                ['class' => 'btn btn-icons btn-inverse-primary',
                                                                                'data-toggle' => 'tooltip',
                                                                                'id' => $article->id,
                                                                                'title' => 'Edit',
                                                                                'style' => 'margin-top:-22px; margin-bottom:-20px;']); 
                                                ?></i>
                                                <span data-target="#modalView-<?= $article->id; ?>" data-toggle="modal"><button class="btn btn-icons btn-inverse-success view" data-toggle="tooltip" data-tooltip="" title="View"
                                                    style="margin-top:-22px; margin-bottom:-20px;" ><i class="fa fa-eye"></i></button></span>
                                                
                                                <span data-target="#myModal-<?= $article->id; ?>" data-toggle="modal"><button class="btn btn-icons btn-inverse-danger delete" data-toggle="tooltip" data-tooltip="" title="Delete"
                                                    style="margin-top:-22px; margin-bottom:-20px;" ><i class="fa fa-trash"></i></button></span>
                                            </td>
                                        </tr>

                                        <!-- Modal View -->
                                        <div id="modalView-<?= $article->id; ?>" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="modalViewLongTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalViewLongTitle"><?php echo $article->title?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                <div class="modal-body">
                                                        <?php echo $article->content?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                         <!-- Modal Delete -->

                                        <div id="myModal-<?= $article->id; ?>" class="modal fade">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            Are you sure?
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                            <div class="btn-group">
                                                                <div class="btn-group"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                                                                <div class="btn-group">
                                                                <?= $this->Form->postButton('Delete', ['controller' => 'Articles', 'action' => 'delete', $article->id], 
                                                                                            ['type' => 'submit',
                                                                                            'class' => 'btn btn-danger'
                                                                                            ]); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                        <?php $i++; ?>
                                        <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <?php if($articles->isEmpty()) : ?>
                <h5 class="text-center">No Record</h5>
                <?php endif; ?>
                <div class="row">
                    <div class="col-6">
                    <p>Page <?= $paginate["page"] ?> of <?= $paginate["pageCount"] ?>, showing <?= $paginate["current"] ?> record(s)</p>
                    </div>
                    <div class="col-6">
                    <div class="pull-right">
                        <?php if ($paginate["prevPage"]): ?>
                        <a href="?page=<?= $paginate['page']-1 ?>" class="btn btn-light"><i class="fa fa-chevron-left"></i></a>
                        <?php else: ?>
                        <a class="btn btn-light disabled"><i class="fa fa-chevron-left"></i></a>
                        <?php endif; ?>
                        <?php if ($paginate["nextPage"]): ?>
                        <a href="?page=<?= $paginate['page']+1 ?>" class="btn btn-light"><i class="fa fa-chevron-right"></i></a>
                        <?php else: ?>
                        <a class="btn btn-light disabled"><i class="fa fa-chevron-right"></i></a>
                        <?php endif; ?>
                    </div>
                    </div>
                </div>
            </div>                  
        </div>
    </div>     
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body form">
                <h5 class="card-title" id="title_form">Tambah Artikel</h5>
                 <?= $this->Form->create($newArticle, ['url' => ['action' => 'add'], 'id' => 'form', 'class' => 'form',
                 'data-bv-feedbackicons-valid'=>'fa fa-check',
                 'data-bv-feedbackicons-invalid'=>'fa fa-warning',
                 'data-bv-feedbackicons-validating'=>'fa fa-spinner']); ?>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <?= $this->Form->control('title', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Judul', 
                            'required' => true, 
                            'maxlength' => '50']); ?>
                        </div>
                        <div class="form-group">  
                            <label for="categories_id">Kategori Artikel</label>
                            <select class="form-control" name="categories_id">
                                <option value="7d39914b-b5df-4280-8afb-ffdc44d04def">CEO'S Letter</option>
                                <option value="9aa7a467-f2cb-4fef-b600-269d1e0e1eae">Serba-Serbi</option>
                                <option value="acfda27e-ca46-4353-9eb3-d10cb25b9d10">Event Promotion</option>
                                <option value="73f6ac4e-983f-4437-be56-559aa74d6793">Risk Profile</option>
                                <option value="8a614479-1438-411b-85da-fa620ec86e0a">Pamflet Audit</option>
                                <option value="6c5698bf-0082-4fb6-93c0-d2acb9d912da">Jurnal</option>
                                <option value="48229044-330b-408a-a992-2e92170fd9d0">Komunitas</option>
                                <option value="f4d1be27-4c62-4e87-bb25-b5cffc54b5ba">SS/QCC/QCP</option>
                              </select>
                        </div>
                        <div class="form-group">  
                            <label for="attachment">Upload File</label>
                                <input type = "file" class = "form-control" name ="attachment" value="attachment" id="attachment" >
                        </div>
                        <div class="form-group">  
                            <label for="content">Content</label>
                            <textarea class ="tinymce" name = "content" id = "content"></textarea>
                        </div>

                        <div class="pull-right">
                            <input type="submit" value="Save" class="btn btn-success" id="btn_save">
                            <input type="submit" value="Update" class="btn btn-success" id="btn_update">
                            <button class="btn btn-secondary" type="button" id="btn_cancel">Cancel</button>
                        </div>
                    </div>
                 </div>
             <?= $this->Form->end(); ?>  
            </div>
        </div>
    </div>
</div>  
<script>
$(document).ready(function(){
    $('#btn_update').hide()
    $('#btn_cancel').hide()
    $('[data-toggle="tooltip"]').tooltip();
    $('#form').bootstrapValidator();
    var articles = <?= $jsonArticles; ?>;
    $("button").click(function(e) {
        var id = this.id;
        for(var i=0;i<articles.length;i++) {
            if(id == articles[i].id) {
                $("input#id").val(articles[i].id);
                $("input#title").val(articles[i].title);
                $("input#created").val(articles[i].created);
                $("input#categories_id").val(articles[i].categories_id);
                $("input#attachment").html(articles[i].attachment);
                $(tinymce.get('content').setContent(articles[i].content));
                $('#form').attr('action','articles/add/'+id);
                $('#btn_update').show()
                $('#btn_cancel').show()
                $('#btn_save').hide() 
                $('#title_form').text('Update Artikel')
                $('html, body').animate({
                  scrollTop: $("form.form").offset().top
                }, 1000)
                break;
            }
        };
    });
    $("#btn_cancel").click(function(e) {
        $('#btn_update').hide();
        $('#btn_cancel').hide();
        $('#btn_save').show();
        $('#title_form').text('Tambah Artikel');
        $(':input','#form')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
        $('#form').attr('action','articles/add/');
    });
}); 
</script>

<script id='jvs'>
    $(document).ready(function() 
    {
        $("#search_image_upload").bind('submit', function(event)
        {
            // var link = $(this).attr('action');
            // $.ajax({
            //     url: link,
            //     type: "POST",
            //     data: $(this).serialize(),
            //     cache: false,
            //     success: function(respon) {
            //         $('#myModal').modal('hide');
            //         $("#content_body").html(respon);
            //     },
            //     error:function(respon){
            //         $('#myModal').modal('hide');
            //         $("#content_body").html(respon);
            //     }
            // });
            cari = $("#search_image_prodcut").val();
            $("#isi-img").html(cari);
            return false;
        });

        $("#load_more").click(function()
        {
            no      = parseInt($("#show_list").val());
            no_plus = parseInt($("#show_list").val()) + 11;
            
            $("#load_more").html("Loading...");

            var location = "<?php echo site_url('regular/load_more_img'); ?>/"+no+"/"+no_plus;
            $.post( location, { load_template: "false" } ).done(function( data ) 
            {
                no_plus = parseInt($("#show_list").val()) + 11;

                if(data=='no')
                {
                    $("#load_more").html("Nothing More");
                }
                else {
                    $("#box-img").append(data);
                    $("#load_more").html("Load More");
                }
                $("#show_list").val(no_plus);
            });
        });
    });

        
</script>



<div class="modal-body">
  <div class="row">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Coose Image</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Upload</a></li>
            </ul>
            <div class="tab-content">
              	<div class="tab-pane active" id="tab_1">
              		<?php echo form_open('', array("id"=>"search_image_upload")); ?>
                  		<div class="input-group mb-20">
                            <input type="text" class="form-control" name="image_product" id="search_image_prodcut" placeholder="no image" required>
                            <div class="input-group-btn">
                              <button type="submit" class="btn btn-default" id="product_image"><i class='fa fa-search'></i></button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                    <div id="content_list_image">
                    <?php
                      $list_img = $this->m_regular->media_image(0,11);

                    	if(count($list_img) > 1)
                    	{
                        echo "<input type='hidden' id='show_list' value='11'>";
                    		echo "<div class='row' id='isi-img'><div id='box-img'>";

                        foreach($list_img as $a => $row)
                        {
                            echo "<div class='col-md-2 col-sm-3 col-xs-6 text-center mb-20'>
                                <input type='hidden' name='name_img' value='".$row['img']."'>
                                <div class='box-img-upload pilih-img'><img src='".$row['url']."' class='img-upload'></div>
                                <label class='img-label'>
                                <button class='btn btn-success btn-xs pilih-img2'><i class='fa fa-check'></i></button>
                                <button class='btn btn-danger btn-xs delete-img'><i class='fa fa-trash'></i></button>
                                </label>
                                <label class='img-label img-name'>".$row['img']."</label>
                                <label class='img-label'>".$row['w']."px x ".$row['h']."px </label>
                                </div>";
                        }
        	            	echo "</div><div id='box_load_more' class='col-xs-12 text-center'><button id='load_more' class='btn btn-default'>Load More</button></div>
                              </div>";
        	            }
        	            else {
        	            	echo "No image";
        	            }
                    ?>
                    </div>
              	</div><!-- /.tab-pane -->



              	<div class="tab-pane" id="tab_2">
                    <div class="row">
                        <?php echo form_open_multipart("regular/upload", array("id"=>"upload_media")); ?>
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="input-group form-control">
                                    <input type="file" id="the-file" name="userfile" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" value="submit" id="submit_upload">
                                <img src="<?php echo base_url('assets/admin/img/loading.gif'); ?>" class="loading_ajax loading_upload">
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
              	</div>
            </div><!-- /.tab-content -->
        </div>
    </div>
  </div>
</div>
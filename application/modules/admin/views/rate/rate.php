<script>
    $(document).ready(function() 
    {
        $("#post_insert").bind('submit', function(event)
        {
        	var link = $(this).attr('action');
			$.ajax({
				url: link,
				type: "POST",
				data: $(this).serialize(),
				cache: false,
                beforeSend: function(){
                    $(".loading_ajax").show();
                }, 
				success: function(respon) {
					$("#content_body").html(respon);
				},
				error:function(respon){
					$("#content_body").html(respon);
				}
			});
			return false;
        });
    });
</script>


<!-- Content Header (Page header) -->
<section class="content-header">
	<h1 id="title_header">
		<?php if(isset($title)){echo $title;}else{echo "EXCHANGE RATE";} ?><!-- <small>Optional description</small> -->
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i> Exchange Rate</li>
		<li><i class="fa fa-dashboard"></i> Insert</li>
	</ol>
</section>

<?php echo $this->session->flashdata('report'); ?>

<!-- Main content -->
<section class="content">

	<div class="box box-info">
        <div class="box-header">
        	<h3 class="box-title">Exchange Rate</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          	
          	<div class="row">
          		<?php echo form_open('admin/slide/post_insert', array("id"=>"post_insert")); ?>
	          		<div class="col-md-2">
			                <input type="text" name="name" class="form-control" value="1 USD" disabled>
		            </div>
		            <div class="col-md-1 text-center"> = </div>
		            <div class="col-md-2">
			            <input type="number" name="url" class="form-control" placeholder="COIN" required>
		            </div>
		            <div class="col-md-7">
		            	<div class="form-group">
			        		<button class="btn btn-info"><i class="fa fa-check"></i> Save Setting</button>
			            </div>
		            </div>
		        <?php echo form_close(); ?>
		        <?php echo form_open('admin/slide/post_insert', array("id"=>"post_insert")); ?>
	          		<div class="col-md-2">
			                <input type="text" name="name" class="form-control" value="1 STICKER" disabled>
		            </div>
		            <div class="col-md-1 text-center"> = </div>
		            <div class="col-md-2">
			            <input type="number" name="url" class="form-control" placeholder="COIN" required>
		            </div>
		            <div class="col-md-7">
		            	<div class="form-group">
			        		<button class="btn btn-info"><i class="fa fa-check"></i> Save Setting</button>
			            </div>
		            </div>
		        <?php echo form_close(); ?>
	        </div>

        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->
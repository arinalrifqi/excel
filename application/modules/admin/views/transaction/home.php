<script>
    $(function () {
        $("#example1").DataTable();
    });

    $(document).ready(function() 
    {
    	$(".delete_transaction").click(function()
        {
        	name = $(this).attr("val-name");
        	if(confirm("Yakin ingin menghapus transaction "+name+" ?"))
        	{
        		var location = $(this).attr("href");
        		$(".loading_ajax").show();
				$.post( location, { load_template: "false" } ).done(function( data ) 
				{
				    $("#content_body").html(data);
				});
        	}
        	return false;
        });

        $("#new_transaction").click(function()
        {
			link = "<?php echo site_url('transaction/user/insert') ?>";

			load_modal({size:"modal-lg", header:"Create New transaction", url:link});
        });

        $(".edit_transaction").click(function()
        {
        	id = $(this).attr("val-id");

			link = "<?php echo site_url('transaction/user/edit') ?>/"+id;

			load_modal({size:"modal-lg", header:"Edit transaction", url:link});
        });
    });
</script>


<!-- Content Header (Page header) -->
<section class="content-header">
	<h1 id="title_header">
		<?php if(isset($title)){echo $title;}else{echo "Transaction";} ?><!-- <small>Optional description</small> -->
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i> Transaction</li>
	</ol>
</section>



	<?php echo $this->session->flashdata('report'); ?>

	<!-- Main content -->
	<section class="content">

		<div class="box box-info">
	        <div class="box-header">
	        	<h3 class="box-title">Data Transaction</h3>
	        	<img src="<?php echo base_url('assets/transaction/img/loading.gif'); ?>" class="loading_ajax">
	        	<button class="btn btn-info pull-right" id="new_transaction"><i class="fa fa-plus"></i> Create New Transaction</button>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          	<table id="example1" class="table table-bordered table-striped table-hover">
	            	<thead>
	            		<tr>
	                		<th>Name</th>
			                <th>Email</th>
			                <th>Type</th>
			                <th>Nominal</th>
			                <th>Date</th>
			                <th>Status</th>
			                <th width="5px"></th>
	              		</tr>
	            	</thead>
	            	<tbody>
	            		<?php foreach ($list->result() as $row) { ?>
			            	<tr>
				                <td><?php echo $row->user_name; ?></td>
				                <td><?php echo $row->user_email; ?></td>
				                <td>Topup</td>
				                <td>10 USD</td>
				                <td><?php echo date("d F Y", strtotime($row->user_date_created)); ?></td>
				                <td>Success</td>
				                <td>
				                	<button class="btn btn-xs btn-warning btn-flat edit_transaction" val-id="<?php echo $row->user_id; ?>"><i class="fa fa-edit"></i></button>
				                	<!-- <a href="<?php echo site_url('transaction/delete').'/'.$row->user_id; ?>" class="delete_transaction" val-name="<?php echo $row->user_name; ?>">
				                		<button class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
				                	</a> -->
				                </td>
			              	</tr>
		              	<?php } ?>
		            </tbody>
	            </table>
	        </div><!-- /.box-body -->
	    </div><!-- /.box -->
	</section><!-- /.content -->

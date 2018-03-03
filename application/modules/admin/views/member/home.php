<script>
    $(function () {
        $("#example1").DataTable();
    });

    $(document).ready(function() 
    {
    	$(".delete_admin").click(function()
        {
        	name = $(this).attr("val-name");
        	if(confirm("Yakin ingin menghapus admin "+name+" ?"))
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

        $("#new_admin").click(function()
        {
			link = "<?php echo site_url('admin/user/insert') ?>";

			load_modal({size:"modal-lg", header:"Create New Admin", url:link});
        });

        $(".edit_admin").click(function()
        {
        	id = $(this).attr("val-id");

			link = "<?php echo site_url('admin/user/edit') ?>/"+id;

			load_modal({size:"modal-lg", header:"Edit Admin", url:link});
        });
    });
</script>


<!-- Content Header (Page header) -->
<section class="content-header">
	<h1 id="title_header">
		<?php if(isset($title)){echo $title;}else{echo "MEMBER";} ?><!-- <small>Optional description</small> -->
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i> Member</li>
	</ol>
</section>



<?php echo $this->session->flashdata('report'); ?>

<!-- Main content -->
<section class="content">

	<div class="box box-info">
        <div class="box-header">
        	<h3 class="box-title">Data Member</h3>
        	<img src="<?php echo base_url('assets/admin/img/loading.gif'); ?>" class="loading_ajax">
        	<button class="btn btn-info pull-right" id="new_admin"><i class="fa fa-plus"></i> Create New Member</button>
        </div><!-- /.box-header -->
        <div class="box-body">
          	<table id="example1" class="table table-bordered table-striped table-hover">
            	<thead>
            		<tr>
                		<th>Name</th>
		                <th>Email</th>
		                <th>Phone</th>
		                <th>Address</th>
		                <th>Date Create</th>
		                <th>History</th>
		                <th width="45px">Action</th>
              		</tr>
            	</thead>
            	<tbody>
            		<?php foreach ($list->result() as $row) { ?>
		            	<tr>
			                <td><?php echo $row->member_fullname; ?></td>
			                <td><?php echo $row->member_email; ?></td>
			                <td><?php echo $row->member_phone; ?></td>
			                <td><?php echo $row->member_address; ?></td>
			                <td><?php echo date("d F Y", strtotime($row->member_date_created)); ?></td>
			                <td>
			                	<button class="btn btn-xs btn-warning btn-flat edit_admin" val-id="<?php echo $row->member_id; ?>"><i class="fa fa-edit"></i></button>
			                	<a href="<?php echo site_url('admin/user/delete').'/'.$row->member_id; ?>" class="delete_admin" val-name="<?php echo $row->member_fullname; ?>">
			                		<button class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
			                	</a>
			                </td>
		              	</tr>
	              	<?php } ?>
	            </tbody>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->

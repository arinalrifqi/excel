<!-- Content Header (Page header) -->
<section class="content-header">
	<h1 id="title_header">
		<?php if(isset($title)){echo $title;}else{echo "Dashboard";} ?><!-- <small>Optional description</small> -->
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
		<li class="active">Here</li>
	</ol>
</section>

<?php echo $this->session->flashdata('report'); ?>

<!-- Main content -->
<section class="content">

	ini content

</section><!-- /.content -->
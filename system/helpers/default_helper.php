<?php 

//fungsi ini untuk menampilkan tampilan error 
function error($error_message="")
{ 
  return $error_message = "<div class='content-header'><div class='alert alert-warning alert-dismissable'>
  							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
							<i class='icon fa fa-warning'></i> ".$error_message."</div></div>";
}

function valid($valid_message="")
{
    return $valid_message = "<div class='content-header'><div class='alert alert-success alert-dismissable'>
  							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
							<i class='icon fa fa-check'></i> ".$valid_message."</div></div>";
}


function string_to_url($link="")
{
	$hapus_simbol = preg_replace('/[^A-Za-z0-9\. -]/', '', $link);
	return str_replace(" ", "-", $hapus_simbol);
}


function choose_image($value='')
{
	return $this->load->view('choose_image');
	// return "tt";
}


function name_variant($product_name='',$variant_type='',$variant_value='')
{
	$name = $product_name." ".$variant_type." ".$variant_value;
	return $name;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LEADS ERPORATE</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  </head>

  <body>
  	<?php echo form_open_multipart("public/match/do_match"); ?>
  		<input type="file" id="the-file" name="userfile" required>
  		<input type="submit" value="Check">
  	<?php echo form_close(); ?>
  	<br>
  	<p>Format Excel : berisi 2 kolom dimana kolom pertama nama perusahaan dan kolom kedua domain. tanpa nama kolom, langsung isinya</p>
  	
    <?php if($list!=""){ ?>
      <b>List Perusahaan yang Sudah Terdaftar</b>
    	<table border="1">
    		<tr>
    			<th>Company Name</th>
    			<th>Domain</th>
    		</tr>
    		<tr>
    			<?php
  		        foreach ($list as $Key => $row)
  		        {
  		        	$cek = $this->m_match->cek($row[0], $row[1]);
  		            if ($row && $cek=='ada' && $row[0]!="")
  		            {
  		               	echo "<tr><td>".$row[0]."</td>";
    						      echo "<td>".$row[1]."</td></tr>";
  		            }
  		        }
              // insert to log
              $this->db->insert("log", array("log_total"=>($Key+1), "log_desc"=>"check data leads"));
  		    ?>
    		</tr>
    	</table>
    	<h2>DONE CHECK</h2>
  	<?php } ?>

  </body>
</html>
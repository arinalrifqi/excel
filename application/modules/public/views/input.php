<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LEADS ERPORATE</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  </head>

  <body>
    <?php echo form_open_multipart("public/match/do_input"); ?>
      <input type="file" id="the-file" name="userfile" required>
      <input type="submit" value="Input">
    <?php echo form_close(); ?>
    <br>
    <p>Format Excel : berisi 9 kolom dan urutannya sebagai berikut (tanpa nama kolom, langsung isinya) : <br>Name Company | Domain | Desc (opt) | Address | E-Mail | Telp Office | PIC Name (opt) | PIC Position (opt) | PIC Telp (opt)</p>
    
    <?php 
    if($no_data!=""){ ?>
      <b>TOTAL Success : <?php echo $no_success; ?> | TOTAL Fail : <?php echo $no_fail_input; ?></b><br>
      <b>List Perusahaan yang Berhasil di Input (Success)</b>
      <table border="1">
        <tr>
          <th>Company Name</th>
          <th>Domain</th>
        </tr>
        <tr>
          <?php
              foreach ($success as $Key => $row)
              { 
                  echo "<tr><td>".$row['name']."</td>";
                  echo "<td>".$row['domain']."</td></tr>";
              }
          ?>
        </tr>
      </table>
      
      <br><br>

      <b>List Perusahaan yang Sudah Terdaftar (FAIL)</b>
      <table border="1">
        <tr>
          <th>Company Name</th>
          <th>Domain</th>
        </tr>
        <tr>
          <?php
              foreach ($fail as $Key => $row)
              {
                  echo "<tr><td>".$row['name']."</td>";
                  echo "<td>".$row['domain']."</td></tr>";
              }
          ?>
        </tr>
      </table>
      <h2>DONE INPUT</h2>
    <?php } ?>

  </body>
</html>
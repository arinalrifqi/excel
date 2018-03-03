
<style>
  #container {
    /*width: 1300px;*/
    height: 500px;
    overflow-y: scroll;
    overflow-x: hidden;
  }
</style>
<script src="<?php echo base_url('assets/admin/js/lazyload.min.js'); ?>"></script>


<div id="container">
  <script>
  var lazy = lazyload({
    container: document.getElementById('container')
  });
  </script>
<?php 
  $i="";
  $u=4;
  for($a=0;$a<1000;$a++){ 
  ?>
  <img
    src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
    data-src=<?php echo base_url('assets/file/img/1.jpg').$i; ?>
    height=300
    class=img-lb
    onload=lazy(this) />
  <img
    src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
    data-src=<?php echo base_url('assets/file/img/2.jpg').$i; ?>
    height=300
    class=img-lb
    onload=lazy(this) />
  <img
    src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
    data-src=<?php echo base_url('assets/file/img/3.jpg').$i; ?>
    height=300
    class=img-lb
    onload=lazy(this) />
  <img
    src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
    data-src=<?php echo base_url('assets/file/img/4.jpg').$i; ?>
    height=300
    class=img-lb
    onload=lazy(this) />
  
    <?php 
      $u=$u+1;
      $i = "?".$u;
    } ?>
</div>

<script>
    $(document).ready(function() 
    {
        $(".select2").select2();

        $("#insertuser").bind('submit', function(event)
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
                    modal_close();
                    $("#content_body").html(respon);
                },
                error:function(respon) {
                    modal_close();
                    $("#content_body").html(respon);
                }
            });
            return false;
        });
    });
</script>


<?php echo form_open('admin/user/post_insert', array('id'=>'insertuser')); ?>
    <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" name="telp" class="form-control" placeholder="Phone">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control" placeholder="Address"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer"> 
        <img src="<?php echo base_url('assets/admin/img/loading.gif'); ?>" class="loading_ajax">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
<?php echo form_close(); ?>
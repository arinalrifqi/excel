<script>
    $(document).ready(function() 
    {
        $(".select2").select2();

        $("#editadmin").bind('submit', function(event)
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
                    $('#myModal').modal('hide');
                    $("#content_body").html(respon);
                },
                error:function(respon){
                    $('#myModal').modal('hide');
                    $("#content_body").html(respon);
                }
            });
            return false;
        });

        $('#edit_pass').change(function(){
            if(this.checked)
            {
                $('#url_value').prop('disabled', false);
            }
            else {
                $('#url_value').prop('disabled', true);
                $('#url_value').val("");
            }
        });
    });
</script>


<?php echo form_open('admin/user/post_edit', array('id'=>'editadmin')); ?>
    <input type="hidden" name="id_user" value="<?php echo $data->user_id; ?>">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $data->user_name; ?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $data->user_email; ?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                        <span class="input-group-addon"><input id="edit_pass" type="checkbox"> Edit</span>
                        <input type="password" name="password" id="url_value" class="form-control" placeholder="abaikan jika tidak ada perubahan" disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" name="telp" class="form-control" value="<?php echo $data->user_phone; ?>" placeholder="Phone">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control" placeholder="Address"><?php echo $data->user_address; ?></textarea>
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
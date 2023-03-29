<?php 
    if ($action == 'add') {
        $url = 'insert';
    } else {
        $url = 'edit';
    }
?>
<script>
     $.ajax({
        url : '<?php echo site_url('master/activities/'.$url.'/'.$id)?>',
        method: 'POST',
        async : false,
        dataType : 'json',
        success: function(xhr){
            // console.log(xhr)
            xhr.onSuccess = function(data){
                alert('Sukses');
            }
            xhr.successMessage = 'Berhasil !!';
            xhr.formWrap = false;

            $('#tableGenerator').form(xhr);

            $('.form0 input').attr('required',true);

            $('div#mceu_13.mce-tinymce.mce-container.mce-panel').attr('style','margin-left : 280px');

            // $('form .btn-group').append('<input type="submit" name="preview" value="Preview" class="button is-primary">');
            $('form .btn-group').append('<input type="submit" name="save" value="Save" class="button is-primary">');
            $('form .btn-group').append('<a class="button is-info btn-cancel">Cancel</a>');

            tinymce.init({
                selector: '.generate-custom-text',
                branding: false,
                width: "300",
                height: "500",
            });

            $('.btn-cancel').on('click',function() {
               window.location.href = '<?php echo site_url('master/activities') ?>'; 
            });
        }
    });
</script>
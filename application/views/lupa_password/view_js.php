<script type="text/javascript">

$(function(){
    $.ajax({
        url : '<?php echo site_url('lupa_password/form_lupa_password')?>',
        method: 'POST',
        async : false,
        dataType : 'json',
        success: function(xhr){
            xhr.onSuccess = function(data){
                // window.location = '<?php echo site_url('regis_vendor/confirmation');?>';

            }
            xhr.successMessage = '<div class="alert alert-success temp">Sukses !</div>';
            xhr.errorMessage = '<div class="alert alert-danger temp">Email tidak ditemukan!</div>';

            $('.signupWrapper').form(xhr);
        }


    });
    
});


</script>
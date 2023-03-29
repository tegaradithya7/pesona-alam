<script type="text/javascript">

$(document).ready(function() {
	var file = '<?php echo $link ?>';

	var array = file.split('.');

	console.log(base_url);
	console.log(file);
	console.log(array);
	console.log(base_url+'/'+file);
	if(array[1]=='pdf'){
		$('#tableGenerator').append('<embed src="'+base_url+file+'" width="100%" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
	
	}else if(array[1]=='jpg'||array[1]=='PNG'||array[1]=='jpeg'){
		$('#tableGenerator').append('<img src="'+base_url+file+'" width="100%" height="500" >');
	}
});

</script>
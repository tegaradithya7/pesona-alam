<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FILE</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$file = explode('.', $link);
		
		// echo $link.' asdas';die;
		// print_r($file);die;
		if ($file[4] == '') {
			$ext = strtolower($file[1]);
			$source = $link;
		} else {
			$ext = strtolower($file[4]);
			$source = $link;
		}
		// echo $source;die;
		// echo $ext;die;
		if($ext == 'pdf'){
	?>
		<embed src="<?php echo $source; ?>" width="100%" height="900" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">

	<?php } else if ($ext=='jpg'||$ext=='png'||$ext=='jpeg') { ?>
		<img src="<?php echo $source; ?>">
	<?php }?>
</body>
</html>
<?php 
  $sess = $this->session->userdata('lim_ex');
  // echo date('Y-m-d H:i:s')."<br>";print_r($sess);die;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EXCEED ATTEMPT LOGIN</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<p>Anda telah gagal login sebanyak <?php echo $sess['att']; ?> kali, setelah beberapa saat anda akan diarahkan ke halaman login kembali</p>
	<p id="demo"></p>
</body>
</html>
<!-- Display the countdown timer in an element -->


<script>
// Set the date we're counting down to
var countDownDate = new Date('<?php echo date('Y-m-d H:i:s',strtotime('+1 minute',strtotime($sess['date']))) ?>').getTime();
// console.log(countDownDate);
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
// console.log(now);
  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Harap Tunggu...";
    window.location = '<?php echo site_url('main/destory_lim_sess') ?>';
  }
}, 1000);
</script>
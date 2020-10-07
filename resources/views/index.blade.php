<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $judul }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text:400,400i,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	@include('frontend.navbar')
	@include('frontend/banner')
	@include('frontend/groom')
  @include('frontend/family')
	@include('frontend/place')
	@include('frontend/ucapkan')
  @include('frontend/sweet')
  @include('frontend/galery')
  @include('frontend/footer')
    

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
  @foreach ($baner as $bn)
  <script type="text/javascript">
	function makeTimer() {

	  var endTime = new Date("{{ date('d F Y ', strtotime($bn->w_pelaksanaan)) }} {{ $bn->wkt_pelaksanaan }} GMT +7");			
	  endTime = (Date.parse(endTime) / 1000);

	  var now = new Date();
	  now = (Date.parse(now) / 1000);

	  var timeLeft = endTime - now;

	  var days = Math.floor(timeLeft / 86400); 
	  var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
	  var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
	  var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

	  if (hours < "10") { hours = "0" + hours; }
	  if (minutes < "10") { minutes = "0" + minutes; }
	  if (seconds < "10") { seconds = "0" + seconds; }

	  $("#days").html(days + "<span>Days</span>");
	  $("#hours").html(hours + "<span>Hours</span>");
	  $("#minutes").html(minutes + "<span>Minutes</span>");
	  $("#seconds").html(seconds + "<span>Seconds</span>");		

  }

  setInterval(function() { makeTimer(); }, 1000);
</script>
  @endforeach
    
  </body>
</html>
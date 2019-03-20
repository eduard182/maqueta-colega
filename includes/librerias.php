<!-- ***** JAVASCRIPTS ***** -->
<!-- Libraries -->
<script src="assets/plugins/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/popper.min.js"></script>
<!-- Plugins -->
<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="assets/plugins/appear.min.js"></script>
<script src="assets/plugins/easing.min.js"></script>
<script src="assets/plugins/retina.min.js"></script>
<script src="assets/plugins/countdown.min.js"></script>
<script src="assets/plugins/imagesloaded.pkgd.min.js"></script>
<script src="assets/plugins/isotope.pkgd.min.js"></script>
<script src="assets/plugins/jarallax/jarallax.min.js"></script>
<script src="assets/plugins/jarallax/jarallax-video.min.js"></script>
<script src="assets/plugins/jarallax/jarallax-element.min.js"></script>
<script src="assets/plugins/magnific-popup/magnific-popup.min.js"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- Place your API Key in 'YOUR_API_KEY'
You can get Google API key here: 'https://developers.google.com/maps/documentation/javascript/get-api-key' -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
<script src="assets/plugins/gmaps.min.js"></script>
<!-- Scripts -->
<script src="assets/js/functions.js"></script>


<!-- Animaciones -->
<script src="assets/js/aos.js"></script>
<script>
  AOS.init({
    easing: 'ease-in-out-sine'
  });
</script>

<!-- Newsletter -->
<script>
	var email = document.getElementById('email'),
    button = document.getElementById('button');

	function validateEmail(email) {
	    var ex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	    return ex.test(email);
	}

	email.addEventListener('keydown', function() {
	  var email = this.value;
	  
	  if(validateEmail(email)) {
	    button.classList.add('is-active');
	  }
	});

	button.addEventListener('click', function(e){
	  e.preventDefault();
	  this.classList.add('is-done','is-active');
	  
	  setTimeout(function(){ 
	    button.innerHTML = "Gracias, puedes revisar tu bandeja de entrada"
	  }, 500);
	});
</script>




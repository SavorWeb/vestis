
<div class="row" id="contact">
	<div class="typeset colspan12-3 colspan6-2 colspan2-2 as-grid">
		<h4>Contact Us</h4>
		<p>
			<b>Vestis Systems</b> <br>
			16124 E. Euclid Ave. <br>
			Spokane WA 99216 <br>
<br>
			Phone: (509) 892-6180 <br>
			Fax: (509) 892-6641 <br>
<br>
			Email Contacts: <br>
			<a href="#">Ryan Lipsker</a>
		</p>
	</div>
	<div class="typeset colspan12-9 colspan6-4 colspan2-2 as-grid with-gutter">
		<h4>Get a Quote</h4>
		<p>Send us a message with a description of your project and we will get in touch with you about it.</p>
		<form id="contact" action="contact-submit.php" method="post">
		<fieldset>	
			<div class="colspan12-6 colspan6-6 colspan2-2 as-grid formblock">
				<label for="name">Name</label>
				<input required type="text" name="name" placeholder="Full Name" title="Enter your name" class="required">
			</div>

			<div class="colspan12-6 colspan6-6 colspan2-2 as-grid with-gutter formblock">
				<label for="phone">Phone</label>
				<input type="tel" name="phone" placeholder="ex. (555) 555-5555">
			</div>

			<div class="formblock clear">
				<label for="email">E-mail</label>
				<input required type="email" name="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">
			</div>
			
			<div class="formblock clear">
				<label for="message">Message</label>
				<textarea required name="message" placeholder="Your message" ></textarea>
			</div>
			
			<input type="submit" name="submit" class="button btn striped" id="submit" value="Send Message" />
		</fieldset>
		</form>
	</div>
</div>

<footer class="pagefoot">
	<div class="row">
		® 2014 Vestis Systems
	</div>
</footer>


<div class="remodal typeset editable" id="culture-modal" data-remodal-id="culture">
		<h1>CULTURE</h1>
		<p>We listen, and we’re always responsive – that’s a mantra that SPACiO takes very seriously. We collaborate, and expertly coordinate. And we do so on time and on budget. We encourage you to talk to any developers or building owners with whom SPACiO has partnered. You’ll find that they echo these very sentiments. We are here to simply eliminate frustration, as we know how intense this process can be.</p>
	</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- <script src="_/js/responsive-nav.min.js"></script> -->
<!-- <script src="_/js/responsive-accordion.min.js"></script> -->
<script src="_/js/remodal.min.js"></script>
<script src="_/js/swipe.min.js"></script>
<script type="text/javascript">
	// var navigation = responsiveNav(".nav-collapse", {
	// 	customToggle: "#nav-toggle"
	// });

	var elem = document.getElementById('slider');
	
	window.mySwipe = Swipe(elem, {
		auto: 6000,
	});
</script>


<script src="_/js/jquery.validate.min.js"></script>
<script src="_/js/jquery.placeholder.min.js"></script>
<script src="_/js/jquery.form.min.js"></script>
<script>
	$(function(){
		$('#contact').validate({
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					url: 'contact-submit.php',
					success: function() {
						$('#contact').hide();
						$('#contact-form').append("<p class='thanks'>Thanks! Your request has been sent.</p>")
					}
				});
			}
		});
	});
</script>

<script src="_/js/plugins.min.js"></script>
<script src="_/js/jquery.finalTilesGallery.min.js"></script>
<script src="_/js/imagesloaded.min.js"></script>

     <script type="text/javascript" charset="utf-8">
     if ($(window).width() > 960) {
	    $('#gallery').finalTilesGallery({
		    gridCellSize: 5,
		    minTileWidth: 100,
            imageSizeFactor: .5
	    });
	} else {
		$('#gallery').finalTilesGallery({
		    gridCellSize: 5,
		    minTileWidth: 100,
            imageSizeFactor: .2
	    });
	}
	    $(".tile a").magnificPopup({
		    type: 'image'
		});
	</script>     

<script src="_/js/script.min.js"></script>

<script>
	$(document).ready( function() {
			    // Don't execute if we're in the Live Editor
			    if( !window.isCMS ) {
			        // Group images by gallery using `data-fancybox-group` attributes
					
					$('#container').isotope({
					  // options...
					  itemSelector: '.item',
					  masonry: {
					    columnWidth: 100
					  }
					});

										// init Isotope
					var $container = $('#container').isotope({
					  // options
					});
					// filter items on button click
					$('#filters').on( 'click', 'button', function() {
					  var filterValue = $(this).attr('data-filter');
					  $container.isotope({ filter: filterValue });
					});

			        // Initialize Fancybox
			        $('.editable-gallery a').fancybox({
			            // Use the `alt` attribute for captions per http://fancyapps.com/fancybox/#useful
			            beforeShow: function() {
			            	var alt = this.element.find('img').attr('alt');
			            	this.inner.find('img').attr('alt', alt);
			            	this.title = alt;
			            }
			        });
			    }
			});
</script>



</body>

</html>
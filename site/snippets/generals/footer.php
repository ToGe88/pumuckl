	</main>

  	<?= js(array('/assets/js/jquery-1.12.2.min.js','/assets/js/jquery.color.js', '/assets/js/jquery.flexslider-min.js')) ?>
  	
  	
	<script>
		var scroller = function() {
			var scrollPosition = $(window).scrollTop();
			var percentage = 100 * $(window).scrollTop() / ($(document).height() - $(window).height()) /100;
			var bgColor = 'rgba(116, 72, 47, ' + (percentage) + ')';
			console.log(bgColor);
			$('body').css('background-color', bgColor);
			// $('header').css('background-color', bgColor);
		}

		scroller(); // call on load in case someone refreshes halway down the page or hits a hash link
		$(window).on('scroll touchmove', function(){ // scroll for mouse/trackpad, touchmove for immediate touch response
			scroller();
		});
		//Header Scroll
		var didScroll;
		var lastScrollTop = 0;
		var delta = 10;
		var navbarHeight = $('header').outerHeight();

		$(window).scroll(function(event){
		  didScroll = true;
		});

		setInterval(function() {
		  if (didScroll) {
		      hasScrolled();
		      didScroll = false;
		  }
		}, 250);

		function hasScrolled() {
		  var st = $(this).scrollTop();
		  
		  // Make sure they scroll more than delta
		  if(Math.abs(lastScrollTop - st) <= delta)
		      return;
		  
		  // If they scrolled down and are past the navbar, add class .nav-up.
		  // This is necessary so you never see what is "behind" the navbar.
		  if (st > lastScrollTop && st > navbarHeight){
		      // Scroll Down
		      $('header').removeClass('nav-down').addClass('nav-up');
		  } else {
		      // Scroll Up
		      if(st + $(window).height() < $(document).height()) {
		          $('header').removeClass('nav-up').addClass('nav-down');
		      }
		  }
		  
		  lastScrollTop = st;
		}
	</script>
	
</body>
</html>
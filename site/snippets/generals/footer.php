	</main>
	<!-- JS -->
  	<!-- <?= js(array('/assets/js/jquery-1.12.2.min.js','/assets/js/main.js', '/assets/js/jquery.flexslider-min.js', '/assets/js/jquerytypewriter.js', '/assets/js/waypoints/waypoints.js', '/assets/js/waypoints/inview.js', '/assets/js/waypoints/sticky.js')) ?> -->
  	<?= js(array('/assets/js/jquery-1.12.2.min.js','/assets/js/main.js', '/assets/js/jquery.flexslider-min.js', '/assets/js/pizza.min.js', '/assets/js/snap.svg-min.js')) ?>
  	<script>
  // 		$(document).ready(function() {
		//   $('.statement--slider').flexslider({
		//     animation: "fade",
		//     animationLoop: true,
		//     after: function(){
		//     	$('blockquote p').typewrite({
		// 		    'delay': 100, //time in ms between each letter
		// 		    'trim': true, // Trim the string to type (Default: false, does not trim)
		// 		    'callback': null // if exists, called after all effects have finished
		// 		});
		//     },
		//   });
		// });
		$(document).ready(function() {
		  $('.slider').each(function (){
		  	if($(this).data('carousel') == true) {
		  		var carousel = 400;
		  	} else {
		  		var carousel = false;
		  	};
		  	console.log(carousel);
		    var controlsToggle = $(this).data('controls');
		    var navigationToggle = $(this).data('navigation');
		    var customNavHolder = $(this).data('nav-holder');
		    $(this).flexslider({
		      animation: "slide",
		      controlNav: controlsToggle,
		      directionNav: navigationToggle,
		      slideshow: true,
		      itemWidth: carousel,
		      itemMargin: 0,
		      slideshowSpeed: 7000,
		      // smoothHeight: true,
		      controlsContainer: $(".custom-controls-container"),
		      customDirectionNav: $(customNavHolder), 
		    });
		  });

		});
  	</script>
  	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  	<script>
	  	$('.isogrid__content').masonry({
		  // options
		  itemSelector: '.isogrid__item',
		});
	</script>
	<script>
		$(document).ready(function(){
			var toggleOptionTwisted = $('.isogrid__wrapper').find('.isogrid__toggle__option').data('value','twisted'),
				isogridContent = $('.isogrid__wrapper').find('.isogrid__content');

			toggleOptionTwisted.click(function (){
				$(this).toggleClass('active');
				isogridContent.toggleClass('twisted');
			})
			$('.page-info__toggle').click(function () {
				$(this).toggleClass('active');
				$('#page-info').toggleClass('active');
			});
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
	<script>
		$(document).ready(function(){
			Pizza.init(document.body, {donut: true, donut_inner_ratio: 0.8, show_percent: false});
		});
	</script>
</body>
</html>

<html lang="en">
<head>
	<title>Shop Pet Corner / Phụ kiện chó - mèo</title>
	<base href="{{asset('')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="shopet corner, phụ kiện chó mèo, shop phụ kiện" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Custom Theme files -->
	<link href="source/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="source/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
	<link href="source/css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
	<link href="source/css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
	<link href="source/css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
	<link href="source/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider --> 
	<link href="source/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" media="all">  <!-- dataTable -->  
	
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="source/css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<!-- web-fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<!-- web-fonts --> 
	
	<!-- js --> 
	<!-- Alertify -->
	<script src="source/js/jquery-2.2.3.min.js"></script> 
	<!-- Alertify JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
	<!-- Default theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.min.css"/>
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/semantic.min.css"/>
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/bootstrap.min.css"/>

</head>
<body>
	@include('header')	

	@yield('content')

	@include('footer')

	<script src="source/js/owl.carousel.js"></script>  
	
	<script type="text/javascript" src="source/js/jquery.marquee.min.js"></script>
	
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({ 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds 
		  items :4,
		  itemsDesktop : [640,5],
		  itemsDesktopSmall : [480,2],
		  navigation : true

		}); 
		}); 
	</script>

	<script>
		$('.marquee').marquee({ pauseOnHover: true });
		//@ sourceURL=pen.js
	</script>

	<script>
		$(document).ready(function() { 
			$("#owl-demo1").owlCarousel({
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			items :4,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4],
			navigation : true
			});
		}); 
	</script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo2").owlCarousel({

			autoPlay: 3000, //Set AutoPlay to 3 seconds

			items :4,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4],
			navigation : true

			});
										
		}); 
	</script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo3").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds

				items :4,
				itemsDesktop : [640,5],
				itemsDesktopSmall : [414,4],
				navigation : true

			});
										
		}); 
	</script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo4").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds

				items :4,
				itemsDesktop : [640,5],
				itemsDesktopSmall : [414,4],
				navigation : true

			}); 
		}); 
	</script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo5").owlCarousel({
					 
				autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
				items :4,
				itemsDesktop : [640,5],
				itemsDesktopSmall : [414,4],
				navigation : true
					 
			});
						
		}); 
	</script>
	<script src="source/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {

	        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

	        $('.header-two').scrollToFixed();  
	        // previous summary up the page.

	        var summaries = $('.summary');
	        summaries.each(function(i) {
	        	var summary = $(summaries[i]);
	        	var next = summaries[i + 1];

	        	summary.scrollToFixed({
	        		marginTop: $('.header-two').outerHeight(true) + 10, 
	        		zIndex: 999
	        	});
	        });
	    });
	</script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="source/js/move-top.js"></script>
	<script type="text/javascript" src="source/js/easing.js"></script>	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			
			var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};	
			$().UItoTop({ easingType: 'easeOutQuart' });	
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<script src="source/js/bootstrap.js"></script>		
	<script type="text/javascript">
		$('.dropdown-menu').click(function(event){
			event.stopPropagation();
		})
	</script>
	<!-- countdown.js -->	
	<script src="source/js/jquery.knob.js"></script>
	<script src="source/js/jquery.throttle.js"></script>
	<script src="source/js/jquery.classycountdown.js"></script>
	<script>
		$(document).ready(function() {
			$('#countdown1').ClassyCountdown({
				end: '1388268325',
				now: '1387999995',
				labels: true,
				style: {
					element: "",
					textResponsive: .5,
					days: {
						gauge: {
							thickness: .10,
							bgColor: "rgba(0,0,0,0)",
							fgColor: "#1abc9c",
							lineCap: 'round'
						},
						textCSS: 'font-weight:300; color:#fff;'
					},
					hours: {
						gauge: {
							thickness: .10,
							bgColor: "rgba(0,0,0,0)",
							fgColor: "#05BEF6",
							lineCap: 'round'
						},
						textCSS: ' font-weight:300; color:#fff;'
					},
					minutes: {
						gauge: {
							thickness: .10,
							bgColor: "rgba(0,0,0,0)",
							fgColor: "#8e44ad",
							lineCap: 'round'
						},
						textCSS: ' font-weight:300; color:#fff;'
					},
					seconds: {
						gauge: {
							thickness: .10,
							bgColor: "rgba(0,0,0,0)",
							fgColor: "#f39c12",
							lineCap: 'round'
						},
						textCSS: ' font-weight:300; color:#fff;'
					}

				},
				onEndCallback: function() {
					console.log("Time out!");
				}
			});
		});
	</script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="source/js/jquery.menu-aim.js"> </script>
	<script src="source/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<script src="source/js/custom.js"></script>
	<!-- script for tabs -->
	<script type="text/javascript">
		$(function() {
					
			var menu_ul = $('.faq > li > ul'),
			menu_a  = $('.faq > li > a');
						
			menu_ul.hide();
					
			menu_a.click(function(e) {
			e.preventDefault();
			if(!$(this).hasClass('active')) {
				menu_a.removeClass('active');
				menu_ul.filter(':visible').slideUp('normal');
				$(this).addClass('active').next().stop(true,true).slideDown('normal');
			} else {
				$(this).removeClass('active');
				$(this).next().stop(true,true).slideUp('normal');
			}
			});
					
		});
	</script>
	<!-- script for tabs --> 
	<!-- dataTable -->
	<script src="source/js/tablePrice.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var table = $('#table1').tablePrice({
				space: true,
				initCost: '.def-price',
				amount: '.product-summ',
				totalSelector: '#total-cost span',
				deleteSelector: 'delete-product'
			});
		} );
	</script>
	<script src="source/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table1').DataTable({
				"lengthChange": false,
				"searching" : false,
				"language": {
					"search": "Tìm kiếm:",
					"paginate": {
						"first":      "Đầu tiên",
						"last":       "Cuối cùng",
						"next":       "Trang sau",
						"previous":   "Trang trước "
					},
					"info": "Hiển thị trang _PAGE_ trên _PAGES_",
					"emptyTable":     "Không có dữ liệu để hiển thị",
				}
			});
		} );
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table2').DataTable({
				"lengthChange": false,

				"language": {
					"search": "Tìm kiếm:",
					"paginate": {
						"first":      "Đầu tiên",
						"last":       "Cuối cùng",
						"next":       "Trang sau",
						"previous":   "Trang trước "
					},
					"info": "Hiển thị trang _PAGE_ trên _PAGES_",
					"emptyTable":     "Không có dữ liệu để hiển thị",
				}
			});
		} );
	</script>
	<!-- //dataTable -->
	<!--flex slider-->
	<script defer src="source/js/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="source/css/flexslider.css" type="text/css" media="screen" />
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function() {
		  $('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		  });
		});
	</script>
	<!--flex slider-->
	<script src="source/js/imagezoom.js"></script>
	

	<!-- //js -->
</body>
</html>
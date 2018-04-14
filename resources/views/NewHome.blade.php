<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="css/style_home.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/theme.js"></script>
</head>

<body>
	<header id="header" class="glue" style="opacity: 1;">
		<div class="row clearfix">
			<div class="little-head">
				<div class="sign-btn tbutton small">
					<span><a href="{{route ('Login') }}">Đăng nhập</a></span>
				</div>

				<div class="social social-head">
					<a href="http://fb.com/theme20" target="_blank" original-title="Like us on Facebook">
						<i class="icon-facebook"></i>
					</a>
					<a href="http://youtube.com/" target="_blank" original-title="YouTube">
						<i class="icon-youtube-play"></i>
					</a>
				</div><!-- end social -->

				<div class="search">
					<form action="search.html" id="search" method="get">
						<input id="inputhead" name="search" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ..." type="text">
						<button type="submit"><i class="icon-search"></i></button>
					</form><!-- end form -->
				</div><!-- search -->
			</div><!-- little head -->
		</div><!-- row -->

		<div class="headdown">
			<div class="row clearfix">
				<div class="logo">
					<a href=""><img src="../../image/logo.png"></a>
				</div><!-- end logo -->

				<nav>
					<ul class="sf-menu sf-js-enabled sf-shadow" style="display: block;">
						<li class="current selectedLava xpopdrop"><a href="" class="sf-with-ul">Trang chủ<span class="sf-sub-indicator"><i class="icon-angle-down"></i></span><span class="sub"></span></a>
						</li>
						<li class="xpopdrop"><a href="index.html" class="sf-with-ul">Quốc gia<span class="sf-sub-indicator"><i class="icon-angle-down"></i></span><span class="sub"></span></a>
							<ul >
								<li class="xpopdrop"><a href="#" class="sf-with-ul">Việt Nam</a></li>
								<li class="xpopdrop"><a href="shortcode_tables.html">Trung Quốc</a></li>
								<li class="xpopdrop"><a href="shortcode_lightbox.html">Âu Mĩ</a></li>
								<li class="xpopdrop"><a href="shortcode_googlemap.html">Hàn Quốc</a></li>
							</ul>
						</li>
						<li class="xpopdrop"><a href="mp3s.html">Thể loại<span class="sub"></span></a>
							<ul >
								<li class="xpopdrop"><a href="#" class="sf-with-ul">Nhạc Trẻ</a></li>
								<li class="xpopdrop"><a href="shortcode_tables.html">Remix</a></li>
								<li class="xpopdrop"><a href="shortcode_lightbox.html">Nhạc vàng</a></li>
								<li class="xpopdrop"><a href="shortcode_googlemap.html">Nhạc quê hương</a></li>
								<li class="xpopdrop"><a href="#" class="sf-with-ul">Nhạc đỏ</a></li>
								<li class="xpopdrop"><a href="shortcode_tables.html">Nhạc Âu Mĩ</a></li>
								<li class="xpopdrop"><a href="shortcode_lightbox.html">Nhạc không lời</a></li>
							</ul>
						</li>
						<li class="xpopdrop"><a href="videos.html">Nghệ sĩ<span class="sub"></span></a>
							<ul>
								<li class="xpopdrop"><a href="#" class="sf-with-ul">Việt Nam</a>
									<ul>
										<li class="xpopdrop"><a href="#" class="sf-with-ul">Hồ Quang Hiếu</a></li>
										<li class="xpopdrop"><a href="shortcode_tables.html">Tuấn Hưng</a></li>
										<li class="xpopdrop"><a href="shortcode_lightbox.html">Đan Nguyên</a></li>
										<li class="xpopdrop"><a href="#" class="sf-with-ul">Đàm Vĩnh Hưng</a></li>
										<li class="xpopdrop"><a href="shortcode_tables.html">Lệ Quyên</a></li>
										<li class="xpopdrop"><a href="shortcode_lightbox.html">THe Men</a></li>
									</ul>
								</li>
								<li class="xpopdrop"><a href="#" class="sf-with-ul">Quốc tế</a>
									<ul>
										<li class="xpopdrop"><a href="#" class="sf-with-ul">Charlie Puth</a></li>
										<li class="xpopdrop"><a href="shortcode_tables.html">Adele</a></li>
										<li class="xpopdrop"><a href="shortcode_lightbox.html">Marron5</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="xpopdrop"><a href="gallery4.html" class="sf-with-ul">MV<span class="sf-sub-indicator"><i class="icon-angle-down"></i></span><span class="sub"></span></a>
						</li>
						<li class="xpopdrop"><a href="#" class="sf-with-ul">Nghe nhiều<span class="sf-sub-indicator"><i class="icon-angle-down"></i></span><span class="sub"></span></a>
						</li>
						<li class="xpopdrop"><a href="blog-right-sidebar.html" class="sf-with-ul">VIP<span class="sf-sub-indicator"><i class="icon-angle-down"></i></span><span class="sub"></span></a>
						</li>
					</ul>
				</nav><!-- end nav -->
			</div><!-- row -->
		</div><!-- headdown -->

	</header><!-- end header -->

	<!-- Start Revolution Slider -->
	
	<div class="slideshow-container">

		<!-- Full-width images with number and caption text -->
		<div class="slides">
			<img src="../../image/slider1.jpg">
		</div>

		<div class="slides">
			<img src="../../image/slider9.jpg">
		</div>
		<div class="slides">
			<img src="../../image/img1.jpg">
		</div>

		<!-- Next and previous buttons -->
		<a class="prev" onclick="subSlides()">&#10094;</a>
		<a class="next" onclick="plusSlides()">&#10095;</a>
	</div>
	<br>

	<!-- The dots/circles -->
	<div style="text-align:center">
		<span class="dot" onclick="currentSlide(0)"></span>
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
	</div> 

	<script type="text/javascript">
		var slideIndex = 0;
		var slides = document.getElementsByClassName("slides");
		var dots = document.getElementsByClassName("dot");
		showSlides();

		function plusSlides() {
			slideIndex++;
			if (slideIndex >= slides.length) {
				slideIndex = 0;
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slides[slideIndex].style.display = "block";
			slideIndex++;
			if (slideIndex >= slides.length) {
				slideIndex = 0;
			}
		}	

		function subSlides() {
			slideIndex -= 2;
			if(slideIndex == -1){
				slideIndex = slides.length - 1;
			}
			if(slideIndex == -2){
				slideIndex = 1;
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slides[slideIndex].style.display = "block";
			slideIndex++;
			if (slideIndex < 0) {
				slideIndex = slides.length - 1;
			}
		}	

		function currentSlide(n) {
			slideIndex = n;
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slides[slideIndex].style.display = "block";
			slideIndex++;
			if(slideIndex >= slides.length){
				slideIndex = 0;
			}
		}

		function showSlides(n) {
			var i;

			if (n > slides.length) {
				slideIndex = 1;
			}
			if (n < 1) {
				slideIndex = slides.length;
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
		} 

		function showSlides() {
			var i;
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slides[slideIndex].style.display = "block";
			slideIndex++;
			if (slideIndex >= slides.length) {
				slideIndex = 0;
			}
    		setTimeout(showSlides, 8000); // Change image every 2 seconds
    	} 
    </script>
    <!-- End Revolution Slider -->


    <form class="tracklist" action="" method="GET">
    	<table class="listmusic">
    		<tr>
    			
    		</tr>

    	</table>
    </form>


	<footer>
		<div>
			<div class="foot-menu">
		    	<ul>
		    		<li><a href="NewHome.html">Trang chủ</a></li>
		    		<li><a href="TheLoai.html">Thể loại</a></li>
		    		<li><a href="NgheSi.html">Nghệ sĩ</a></li>
		    		<li><a href="MV.html">MV</a></li>
		    		<li><a href="VIP.html">VIP</a></li>
		    		<li><a href="Contact.html">Contact</a></li>
		    	</ul>
		    </div>

		    <div id="toTop">
		    	<i class="icon-angle-up"></i> 
		    </div><!-- Back to top -->
		</div>
	</footer>
</body>
</html>
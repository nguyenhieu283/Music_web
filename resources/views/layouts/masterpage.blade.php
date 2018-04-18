<header id="header" class="glue" style="opacity: 1;">
		<div class="row clearfix">
			<div class="little-head">
				
				<div class="sign-btn tbutton small">
					<span><a href="{{ route('Login') }}">Đăng nhập</a></span>
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
					<form action="" id="search" method="get">
						<input id="inputhead" name="search" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ..." type="text">
						<button type="submit"><i class="icon-search"></i></button>
					</form><!-- end form -->
				</div><!-- search -->
			</div><!-- little head -->
		</div><!-- row -->

		<div class="headdown">
			<div class="row clearfix">
				<div class="logo">
					<a href=""><img src="image/logo.png"></a>
				</div><!-- end logo -->

				<nav>
					<ul class="sf-menu sf-js-enabled sf-shadow" style="display: block;">
						<li class="current selectedLava xpopdrop"><a href="{{ route('home') }}" class="sf-with-ul">Trang chủ<span class="sf-sub-indicator"><i class="icon-angle-down"></i></span><span class="sub"></span></a>
						</li>
						<li class="xpopdrop"><a href="{{ route('QuocGia') }}" class="sf-with-ul">Quốc gia<span class="sf-sub-indicator"><i class="icon-angle-down"></i></span><span class="sub"></span></a>
							<ul >
								<li class="xpopdrop"><a href="#" class="sf-with-ul">Việt Nam</a></li>
								<li class="xpopdrop"><a href="shortcode_tables.html">Trung Quốc</a></li>
								<li class="xpopdrop"><a href="shortcode_lightbox.html">Âu Mĩ</a></li>
								<li class="xpopdrop"><a href="shortcode_googlemap.html">Hàn Quốc</a></li>
							</ul>
						</li>
						<li class="xpopdrop"><a href="{{ route('TheLoai') }}">Thể loại<span class="sub"></span></a>
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
						<li class="xpopdrop"><a href="{{ route('NgheSi') }}">Nghệ sĩ<span class="sub"></span></a>
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
						<li class="xpopdrop"><a href="{{ route('MV') }}" class="sf-with-ul">MV<span class="sf-sub-indicator"><i class="icon-angle-down"></i></span><span class="sub"></span></a>
						</li>
						<li class="xpopdrop"><a href="{{ route('NgheNhieu') }}" class="sf-with-ul">Nghe nhiều<span class="sf-sub-indicator"><i class="icon-angle-down"></i></span><span class="sub"></span></a>
						</li>
						<li class="xpopdrop"><a href="{{ route('VIP') }}" class="sf-with-ul">VIP<span class="sf-sub-indicator"><i class="icon-angle-down"></i></span><span class="sub"></span></a>
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
			<img src="image/slider1.jpg">
		</div>

		<div class="slides">
			<img src="image/slider9.jpg">
		</div>
		<div class="slides">
			<img src="image/img1.jpg">
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
@yield('content')
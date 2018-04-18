<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thể loại</title>
	<link rel="stylesheet" type="text/css" href="css/style_home.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/theme.js"></script>

</head>

<body>
	@extends('layouts.masterpage')
	@section('content')
	

<div class="row clearfix mbf">
   <div class="music-player-list">
      <div class="ttw-music-player" style="opacity: 1;">
         <div class="player jp-interface jp-state-playing">
            <div class="album-cover"><span class="img" style="opacity: 1;"><img src="music/5.jpg" alt="album cover"></span>            <span class="highlight"></span>        </div>
            <div class="track-info">
               <p class="title">Walking On Horizon</p>
               <p class="artist-outer" style="opacity: 1;">By <span class="artist">Dejans</span></p>
               <div class="rating">                <span class="rating-level rating-star on"></span>                <span class="rating-level rating-star on"></span>                <span class="rating-level rating-star on"></span>                <span class="rating-level rating-star on"></span>                <span class="rating-level rating-star on"></span>            </div>
            </div>
            <div class="player-controls">
               <div class="main">
                  <div class="previous jp-previous"></div>
                  <div class="play jp-play" style="display: none;"></div>
                  <div class="pause jp-pause" style="display: block;"></div>
                  <div class="next jp-next"></div>
                  <!-- These controls aren't used by this plugin, but jPlayer seems to require that they exist -->                <span class="unused-controls">                    <span class="jp-video-play" style="display: none;"></span>                    <span class="jp-stop"></span>                    <span class="jp-mute"></span>                    <span class="jp-unmute" style="display: none;"></span>                    <span class="jp-volume-bar"></span>                    <span class="jp-volume-bar-value" style="width: 80%;"></span>                    <span class="jp-volume-max"></span>                    <span class="jp-current-time">00:17</span>                    <span class="jp-duration">4:29</span>                    <span class="jp-full-screen"></span>                    <span class="jp-restore-screen" style="display: none;"></span>                    <span class="jp-repeat"></span>                    <span class="jp-repeat-off" style="display: none;"></span>                    <span class="jp-gui"></span>                </span>            
               </div>
               <div class="progress-wrapper">
                  <div class="progress jp-seek-bar" style="width: 100%;">
                     <div class="elapsed jp-play-bar" style="width: 56.0035%;"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tracklist show-more-button">
            <ol class="tracks" style="height: 105px;">
               <li class="track"><span class="title">Missing You</span><span class="duration">0:38</span><span class="rating"><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span></span><a href="#" class="buy" target="_blank">$17 BUY</a></li>
               <li class="track"><span class="title">Midnight In Tokyo</span><span class="duration">2:51</span><span class="rating"><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span></span><a href="#" class="buy" target="_blank">$17 BUY</a></li>
               <li class="track playing"><span class="title">Walking On Horizon</span><span class="duration">4:29</span><span class="rating"><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span></span><a href="#" class="buy" target="_blank">$17 BUY</a></li>
               <li class="track"><span class="title">A Happy Carefree Day</span><span class="duration">2:45</span><span class="rating"><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span></span><a href="#" class="buy" target="_blank">$13 BUY</a></li>
               <li class="track"><span class="title">Through the Clouds</span><span class="duration">5:56</span><span class="rating"><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span></span><a href="#" class="buy" target="_blank">$17 BUY</a></li>
               <li class="track"><span class="title">Live My Life</span><span class="duration">2:31</span><span class="rating"><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span><span class="rating-level rating-bar on"></span></span><a href="#" class="buy" target="_blank">$17 BUY</a></li>
            </ol>
            <div class="more">View More...</div>
         </div>
         <div class="jPlayer-container" id="jp_jplayer_0" style="width: 0px; height: 0px;">
            <img id="jp_poster_0" style="width: 0px; height: 0px; display: none;">
            <audio id="jp_audio_0" preload="metadata" src="http://d.theme20.com/remix_html/music/5.mp3" title="Walking On Horizon"></audio>
         </div>
      </div>
   </div>
</div>
<!-- row music player -->



	<div class="row row-fluid clearfix mbf">
		<div class="span8">
			<div class="def-block">
				<h4> Latest News </h4><span class="liner"></span>

				<div class="news row-fluid animtt fadeUp" data-gen="fadeUp" style="">
					<div class="span5"><img class="four-radius" src="images/assets/news1.jpg" alt="#"></div>
					<div class="span7">
						<h3 class="news-title"> <a href="news_single.html">Australia’s 2014 Soundwave Festival</a> </h3>
						<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
						<div class="meta">
							<span> <i class="icon-time mi"></i>August 26, 2013 5:09 AM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 14</a> </span>
						</div><!-- meta -->
						<a href="news_single.html" class="sign-btn tbutton small"><span>Read More</span></a>
					</div><!-- span7 -->
				</div><!-- news -->

				<div class="news row-fluid animtt fadeUp" data-gen="fadeUp" style="">
					<div class="span5"><img class="four-radius" src="images/assets/news2.jpg" alt="#"></div>
					<div class="span7">
						<h3 class="news-title"> <a href="news_single.html">MTV Video Music Awards 2013</a> </h3>
						<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
						<div class="meta">
							<span> <i class="icon-time mi"></i>August 24, 2013 8:10 PM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 5</a> </span>
						</div><!-- meta -->
						<a href="news_single.html" class="sign-btn tbutton small"><span>Read More</span></a>
					</div><!-- span7 -->
				</div><!-- news -->

				<div class="news row-fluid animtt fadeUp" data-gen="fadeUp" style="">
					<div class="span5"><img class="four-radius" src="images/assets/news3.jpg" alt="#"></div>
					<div class="span7">
						<h3 class="news-title"> <a href="news_single.html">VMAs With A Round Of 'Applause'</a> </h3>
						<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
						<div class="meta">
							<span> <i class="icon-time mi"></i>August 20, 2013 2:00 AM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 27</a> </span>
						</div><!-- meta -->
						<a href="news_single.html" class="tbutton small"><span>Read More</span></a>
					</div><!-- span7 -->
				</div><!-- news -->

				<div class="load-news tac"><a class="tbutton small"><span>Load More</span></a><img style="display: none;margin: 0 auto" src="images/loading2.gif"><h4 style="display: none;color:#ccc;border: 0">Sorry! Not More News.</h4></div>
			</div><!-- def block -->
		</div><!-- span8 news -->

		<div class="span4">
			<div class="def-block widget animtt fadeUp" data-gen="fadeUp" style="">
				<h4> Events </h4><span class="liner"></span>
				<div class="widget-content row-fluid">
					<div class="span12 mb">
						<ul id="event1" class="event-timer">
							<li>
								<span class="days">00</span>
								<p class="timeRefDays">days</p>
							</li>
							<li>
								<span class="hours">00</span>
								<p class="timeRefHours">hours</p>
							</li>
							<li>
								<span class="minutes">00</span>
								<p class="timeRefMinutes">min</p>
							</li>
							<li>
								<span class="seconds">00</span>
								<p class="timeRefSeconds">sec</p>
							</li>
						</ul> <!-- end timer -->
					</div><!-- timer -->

					<div class="grid_8">
						<p class="event-titlett">Bono Serenades Warren</p>
					</div>
					<div class="grid_4">
						<a href="#" class="tbutton buy-ticket small"><span>Buy Ticket</span></a>
					</div>

				</div><!-- widget content -->
			</div><!-- def block widget events -->

			<div class="def-block widget animtt fadeUp" data-gen="fadeUp" style="">
				<h4> Featured Videos </h4><span class="liner"></span>
				<div class="widget-content row-fluid">
					<div class="videos clearfix flexslider" style="height: 239px;">
						<ul class="slides">
							<li class="featured-video" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;">
								<a href="video_single_wide.html">
									<img src="images/assets/video1.jpg" alt="#">
									<i class="icon-play-sign"></i>
									<h3>I Know You Want Me</h3>
									<span>Fitbull</span>
								</a>
							</li><!-- slide -->
							<li class="featured-video" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;">
								<a href="video_single_wide.html">
									<img src="images/assets/video2.jpg" alt="#">
									<i class="icon-play-sign"></i>
									<h3>I Like It</h3>
									<span>Enrique</span>
								</a>
							</li><!-- slide -->
							<li class="featured-video flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;">
								<a href="video_single_wide.html">
									<img src="images/assets/video3.jpg" alt="#">
									<i class="icon-play-sign"></i>
									<h3>Tommorow</h3>
									<span>Dj Michele</span>
								</a>
							</li><!-- slide -->
						</ul>
						<ul class="flex-direction-nav"><li><a class="flex-prev" href="#"><i class="icon-angle-left"></i></a></li><li><a class="flex-next" href="#"><i class="icon-angle-right "></i></a></li></ul></div>
					</div><!-- widget content -->
				</div><!-- def block widget videos -->

				<div class="def-block widget animtt fadeUp" data-gen="fadeUp" style="">
					<h4> Popular Tracks </h4><span class="liner"></span>
					<div class="widget-content row-fluid">
						<div class="scroll-mp3" style="height: 220px; overflow: hidden;" tabindex="5000">
							<div class="content">
								<ul class="tab-content-items">
									<li class="clearfix">
										<a class="m-thumbnail" href="mp3_single_half.html"><img src="images/assets/thumb-mp3-1.jpg" alt="#" width="50" height="50"></a>
										<h3><a href="mp3_single_half.html">Don’t go mary ( Remix )</a></h3>
										<span> Alexander </span>
										<span> 1,892,250 Plays </span>
									</li>
									<li class="clearfix">
										<a class="m-thumbnail" href="mp3_single_half.html"><img src="images/assets/thumb-mp3-2.jpg" alt="#" width="50" height="50"></a>
										<h3><a href="mp3_single_half.html">That's My Kind Of Night </a></h3>
										<span> Alexander Mikoole </span>
										<span> 998,879 Plays </span>
									</li>
									<li class="clearfix">
										<a class="m-thumbnail" href="mp3_single_half.html"><img src="images/assets/thumb-mp3-3.jpg" alt="#" width="50" height="50"></a>
										<h3><a href="mp3_single_half.html">Magna Carta... Holy Grail </a></h3>
										<span> Joe </span>
										<span> 792,240 Plays </span>
									</li>
									<li class="clearfix">
										<a class="m-thumbnail" href="mp3_single_half.html"><img src="images/assets/thumb-mp3-4.jpg" alt="#" width="50" height="50"></a>
										<h3><a href="mp3_single_half.html">If you love me</a></h3>
										<span> Enrique </span>
										<span> 788,471 Plays </span>
									</li>
									<li class="clearfix">
										<a class="m-thumbnail" href="mp3_single_half.html"><img src="images/assets/thumb-mp3-5.jpg" alt="#" width="50" height="50"></a>
										<h3><a href="mp3_single_half.html">Burning For you</a></h3>
										<span> Lura </span>
										<span> 710,105 Plays </span>
									</li>
									<li class="clearfix">
										<a class="m-thumbnail" href="mp3_single_half.html"><img src="images/assets/thumb-mp3-6.jpg" alt="#" width="50" height="50"></a>
										<h3><a href="mp3_single_half.html">Skyfool ( Dubstep Remix )</a></h3>
										<span> Babel </span>
										<span> 611,748 Plays </span>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- widget content -->
				</div><!-- def block widget popular items -->

			</div><!-- span4 sidebar -->
		</div><!-- row clearfix -->


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
		@if(session('replace'))
		<?php echo session('replace') ?>
		@endif
	</body>
	</html>

	@endsection


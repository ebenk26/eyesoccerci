<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="1-PLVuLFLCZAbzzsEi6QhINNzH-Dr4qkVm7M9haGd4A" />
	<meta http-equiv="Cache-control" content="public">
	<meta http-equiv="Cache-control" content="private">
	<meta http-equiv="Cache-control" content="no-cache">
	<meta http-equiv="Cache-control" content="no-store">

	<title>Home Page baru</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>bs/css/bootstrap.min.css ">
	<link rel="stylesheet" href="<?php echo base_url(); ?>bs/css/owl.carousel.min.css ">
	<link rel="stylesheet" href="<?php echo base_url(); ?>bs/css/owl.theme.default.min.css ">
	<style type="text/css">
		.kontainer
		{
			max-width: 1080px;
				margin: 20px auto;
				background: #fff;
				overflow: hidden;
				padding: 10px;
		}
		@font-face
		{
        	font-family: "Montserrat";
        	src: url('../assets/new_assets/montserrat/Montserrat-Regular.otf');
	    }
		@font-face
		{
        	font-family: "Montserratbold";
        	src: url('../assets/new_assets/montserrat/Montserrat-Bold.otf');
	    }
		body
		{
			font-family: Montserrat;
		}
		a, a:link, a:hover
		{
			color: unset;
			text-decoration: unset;	
		}
		li
		{
			list-style-type: none;
		}
		.lingkup-box
		{
			padding: 0px;
			width: 184px;
		}
		.box-jadwal
		{
			float: left;
			/*width: 105%;*/
		}

		.arrow-box-jadwal
		{
			position: relative;
			z-index: 1;
			cursor: pointer;
			/*height: 60px;*/
		}

		.isi-box-jadwal
		{
			position: absolute;
			top: 1px;
			z-index: 2;
			padding: 2px;
			width: 184px;
			height: 68px;
			/*font-size: 10px;*/
		}

		.time-box-jadwal
		{
			padding-bottom: 12%;
			font-size: 10px;
		}

		.club-box-jadwal
		{
			font-size: 12px;
			padding-bottom: 2px;
		}

		.score-box-jadwal
		{
			float: right;
		}
		.btn-trending-hijau
		{
			color: #fff;
		    background-color: #62a555;
		    /* border-color: #0a0a0a; */
		    border-radius: unset;
		    /* height: 52%; */
		    padding: 5px 16px;
		    border: unset;
		}
		.tag-trending
		{
			border-radius: 20px;
		    font-size: 10px;
		    padding: 5px 18px;
		    border: unset;
		    background-color: #f5f5f5;
		    color: #62a555;
		}
		.tag-trending:hover
		{
			color: white;
		}
		.keterangan-club
		{
			text-align: left;
			font-size: 12px;
			color: #615d5d;
			padding-top: 13px;
		}
		.box-ket-player
		{
			font-size: 12px;
		}
		.news-main-title
		{
			position: absolute;
		    top: 368px;
		    left: 2%;
		    color: #ffffff
		}
		/* Flashing */
		.hover13 figure:hover img {
			opacity: 1;
			-webkit-animation: flash 1.5s;
			animation: flash 1.5s;
		}
		@-webkit-keyframes flash {
			0% {
				opacity: .4;
			}
			100% {
				opacity: 1;
			}
		}
		@keyframes flash {
			0% {
				opacity: .4;
			}
			100% {
				opacity: 1;
			}
		}
		/* Shine */
		.hover14 figure {
			position: relative;
		}
		.hover14 figure::before {
			position: absolute;
			top: 0;
			left: -75%;
			z-index: 2;
			display: block;
			content: '';
			width: 50%;
			height: 100%;
			background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
			background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
			-webkit-transform: skewX(-25deg);
			transform: skewX(-25deg);
		}
		.hover14 figure:hover::before {
			-webkit-animation: shine .75s;
			animation: shine .75s;
		}
		@-webkit-keyframes shine {
			100% {
				left: 125%;
			}
		}
		@keyframes shine {
			100% {
				left: 125%;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<!-- konten jadwal -->
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="padding: 0px;">
				<div class="owl-nav">
					<div class="jadwalPrev">
						<img src="<?php echo base_url(); ?>assets/new_assets/btn-chevron-left.png" class="arrow-box-jadwal">
					</div>
		        </div>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
				<div class="row" style="cursor: move;">
					<div id="jadwal-slider" class="owl-carousel">
<?php
					foreach ($jadwal as $value)
					{	$date =  new DateTime($value['jadwal_pertandingan']);
						// var_dump(date_format($date,"Y/m/d"));exit();
?>
						<div class="col-lg-2 col-md-2">
							<div class="item-jadwal">
								<div class="lingkup-box col-lg-2">
									<div class="box-jadwal">
										<img src="<?php echo base_url(); ?>assets/new_assets/box-jadwal-pertandingan.png" alt="">
										<div class="isi-box-jadwal">
											<div class="time-box-jadwal">
												<div style="float: left;">
													<span>
														<?php echo date_format($date,"d M H:i"); ?>
													</span>
												</div>
												<div style="float: right;">
													<span style="color: red;">
														<?php echo $value['live_pertandingan']; ?>Live SCTV
													</span>
												</div>
											</div>
											<div class="club-box-jadwal">
												<span><?php echo strtolower($value['club_a']); ?></span>
												<div class="score-box-jadwal">
													<span>
														<?php base_url()."/systems/club_logo/".$value['logo_a']; ?>
													</span>
												</div>
											</div>
											<div class="club-box-jadwal">
												<span>
													<?php echo strtolower($value['club_b']); ?>
												</span>
												<div class="score-box-jadwal">
													<span>
														<?php base_url()."/systems/club_logo/".$value['logo_b']; ?> 
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<?php		
					}
?>
					</div>
				</div>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="padding: 0px;">
				<div class="owl-nav">
					<div class="jadwalNext">
						<img src="<?php echo base_url(); ?>assets/new_assets/btn-chevron-right.png" class="arrow-box-jadwal" style="float: right;">
					</div>
		        </div>
			</div>
		</div>
		<br>

		<!-- konten trending -->
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<span class="btn-trending-hijau">Trending</span>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
<?php 
					 $this->load->helper('my');
					foreach ($trend_eyetube as $trendnya_tube)
					{
						$judul_trend 	= word_limiter($trendnya_tube['title'],3);
?>
						<a href="<?php echo base_url(); ?>eyetube/detail/<?= $trendnya_tube['url']; ?>" title="<?php echo $trendnya_tube['title'] ?>">
							<span class="tag-trending"><?php echo $judul_trend; ?></span>
						</a>
<?php
					}
?>
<?php
					foreach ($trend_eyenews as $trendnya_news)
					{
?>
						<a href="<?php echo base_url(); ?>eyenews/detail/<?= $trendnya_news['url']; ?>" title="<?php echo $trendnya_news['title']; ?>">
							<span class="tag-trending"><?php echo word_limiter($trendnya_news['title'],3); ?></span>
						</a>
<?php		
					}
?>
			</div>
		</div>

		<br>
		<br>

		<!-- konten eyeProfile -->
		<div class="row">
			<div class="line-eyeprofile">
				<img src="<?php echo base_url(); ?>assets/new_assets/ic_eyeprofile.png">
				<span style="font-family: Montserratbold; color:#F08A38;font-size: 20px;">
					eyeProfile 
				</span>
				<img src="<?php echo base_url(); ?>assets/new_assets/line-eyeprofile.png">
			</div>
			<div style="text-align: right;color:#F08A38;">
				<a href="<?php echo base_url(); ?>eyeprofile/klub">
					Klub Lainnya
					<img src="<?php echo base_url(); ?>assets/new_assets/chevron-right-orange.png">
				</a>
			</div>
			<div class="owl-carousel owl-theme" id="club-slider" style="cursor: move;">
<?php 
			foreach ($profile_club as $club)
			{
?>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-2" style="padding: 0px;">
					<img src="<?php echo base_url(); ?>assets/new_assets/box-club white.png" style="width: auto;">
					<div>
						<div style="position: absolute; top: 15%; left: 130%; width: 190px; ">
							<div style="font-family: Montserratbold;">
								<a href="<?php echo base_url(); ?>eyeprofile/klub_detail/<?= $club['club_id'];?>">
									<h4><?= $club['nama_club']; ?></h4>
								</a>
							</div>
							<div style="color: #615d5d;">
								<span>LIGA 1 INDONESIA</span>
							</div>
							<div class="keterangan-club">
								<table border="0">
									<tr>
										<td style="width: 60px;">Squad</td>
										<td>:</td>
										<td><?= $club['squad']; ?></td>
									</tr>
									<tr>
										<td>Manajer</td>
										<td>:</td>
										<td><?= $club['nama_manager']; ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					
				</div>
<?php		
			}
?>
			</div>
		</div>

		<div class="row">
			<span style="color:#F08A38;">PEMAIN PROFESIONAL</span>
			<div style="float: right;">
				<img src="<?php echo base_url(); ?>assets/new_assets/chevron-left-rounded-deactive.png" id="haha">
				<img src="<?php echo base_url(); ?>assets/new_assets/chevron-right-rounded-active.png">
			</div>
			<br>
		</div>

		<br>

		<div class="row">
<?php 
		foreach ($profile_player as $player)
		{
			// $tgl = date_create($player['tgl_lahir']);
			$bulan 	= array(
			                '01' => 'Jan',
			                '02' => 'Feb',
			                '03' => 'Mar',
			                '04' => 'Apr',
			                '05' => 'Mei',
			                '06' => 'Juni',
			                '07' => 'Juli',
			                '08' => 'Agust',
			                '09' => 'Sept',
			                '10' => 'Okt',
			                '11' => 'Nov',
			                '12' => 'Des',
        			);
?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img src="<?php echo base_url(); ?>assets/new_assets/box-pemain banyak dilihat.png">
				<div style="position: absolute; top: 0%;">
					<img src="<?php echo base_url(); ?>systems/player_storage/<?= $player['foto']; ?>" style="width:114px; height: 114px;">
					<!-- <img src="<?php echo base_url(); ?>assets/new_assets/box-foto pemain banyak dilihat.png" style="position: absolute; top: 0%;"> -->
					<div class="box-player-name" style="position: absolute; top: 0%; left: 120%; width: 212%;">
						<h4 style="color:#F08A38;"><?= $player['nama']; ?></h4>
					
						<div class="box-ket-player">
							<table border="0">
								<tr>
									<td style="width: 100px;">Posisi</td>
									<td style="width: 5px;">:</td>
									<td><?= $player['posisi']; ?></td>
								</tr>
								<tr>
									<td>Klub</td>
									<td>:</td>
									<td><?= $player['klub']; ?></td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td>:</td>
									<td><?= $player['tanggal']." ".$bulan[$player['bulan']]." ".$player['tahun']; ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
<?php
		}
?>
				
		</div>

		<br>

		<!-- konten eyeTube -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img src="<?php echo base_url(); ?>assets/new_assets/ic_eyetube.png">
				<span style="font-family: Montserratbold; color:#347FC0;font-size: 20px;">eyeTube</span>
				<img src="<?php echo base_url(); ?>assets/new_assets/line-eyetube.png" style="width: 1020px;">
			</div>
			
			<br>
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" style="padding: unset;">
<?php
			foreach ($video_eyetube as $videonya)
			{
?>
				<div class="box-eyetube-1">
					<!-- <img src="<?php echo base_url(); ?>assets/new_assets/main-video.png"> -->
					<video id="eyetube-satu" width="678" height="384" poster="<?=base_url()?>systems/eyetube_storage/<?= $videonya['thumb']; ?>" controls controlsList="nodownload">
						<source src="<?=base_url()?>systems/eyetube_storage/<?= $videonya['video']; ?>" type="video/mp4"/>
					</video>
					<div id="durasi" style="position: absolute; top: 3%;left: 89%;"></div>
					<button id="durasi-video" onclick="getDuration()" class="hidden">get duration</button>
				</div>
				<br>
				<span>
<?php
					$date 		=  new DateTime($videonya['createon']);
					$tanggal 	= date_format($date,"Y-m-d H:i:s");

					echo relative_time($tanggal) . ' ago - '.$videonya['tube_view'].' views';
						 
?>
				</span>
				<a href="<?php echo base_url(); ?>eyetube/detail/<?= $videonya['eyetube_id'] ?>">
					<h1 id="title" style="color:#347FC0; margin-top: 10px;"><?= $videonya['title']; ?></h1>
				</a>
				
				<p>
<?php
					$keterangan = strip_tags($videonya['description']);
					echo word_limiter($keterangan,25);
?>
				</p>
<?php
				break;

			}
?>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<?php
			$i = 0;
			foreach ($video_eyetube as $videonya)
			{
				if ($i != 0)
				{
?>
					<img src="<?php echo base_url(); ?>systems/eyetube_storage/<?= $videonya['thumb']; ?>" style="width: 478px; height: 271px;">
					<br>
<?php
				}
				$i++;
				echo '<br>';
			}
?>`
				
			</div>
		</div>

		<br>

		<div class="tab">
			<ul class="nav nav-tabs" id="tab-nav">
				<li class="active">
					<a href="#soccer-science" data-toggle="tab" style="color: unset;">SOCCER SCIENCE</a>
				</li>
				<li class="">
					<a href="#eyesoccer-stars" data-toggle="tab" style="color: unset;">EYESOCCER STARS</a>
				</li>
				<li class="">
					<a href="#video-kamu" data-toggle="tab" style="color: unset;">VIDEO KAMU</a>
				</li>
			</ul>
		</div>

		<style type="text/css" media="screen">
			.nav-tabs>li.active
			{
				color: #347FC0;
			}
		</style>
		
		<div class="tab-content">
		    <div id="soccer-science" class="tab-pane fade in active">
		    	<br>
		      	<div class="row">
		      		<div style="color: #347FC0; float: right;">
		      			<a href="<?php echo base_url(); ?>eyetube">
		      				Video Lainnya <img src="<?php echo base_url(); ?>assets/new_assets/chevron-right-blue.png">
		      			</a>
		      		</div>
		      		<br>
<?php
		    	foreach ($eyetube_science as $science)
		    	{
?>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<img src="<?php echo base_url(); ?>systems/eyetube_storage/<?= $science['thumb']; ?>" style="width: 278px; height: 167px;">
						<div class="" style="font-size: 12px;">
							<p><?= $science['title']; ?></p>
						</div>
						<small style="color: #cccccc;">
							<?php
								$date 		=  new DateTime($science['createon']);
								$tanggal 	= date_format($date,"Y-m-d H:i:s");

								echo relative_time($tanggal) . ' ago - '.$science['tube_view'].' views';
							?>
						</small>
					</div>
<?php		
		    	}
?>
		      	</div>
		    </div>
		    <div id="eyesoccer-stars" class="tab-pane fade">
		    	<br>
		      	<div class="row">
		      		<div style="color: #347FC0; float: right;">
		      			<a href="<?php echo base_url(); ?>eyetube">
		      				Video Lainnya <img src="<?php echo base_url(); ?>assets/new_assets/chevron-right-blue.png">
		      			</a>
		      		</div>
		      		<br>
<?php
	        	foreach ($eyetube_stars as $stars)
	        	{
?>
	    			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	    				<img src="<?php echo base_url(); ?>systems/eyetube_storage/<?= $stars['thumb']; ?>" style="width: 278px; height: 167px;">
	    				<div class="" style="font-size: 12px;">
	    					<p><?= $stars['title']; ?></p>
	    				</div>
	    				<small style="color: #cccccc;">
	    					<?php
	    						$date 		=  new DateTime($stars['createon']);
	    						$tanggal 	= date_format($date,"Y-m-d H:i:s");

	    						echo relative_time($tanggal) . ' ago - '.$stars['tube_view'].' views';
	    					?>
	    				</small>
	    			</div>
<?php		
	        	}
?>
		      	</div>
		    </div>
		    <div id="video-kamu" class="tab-pane fade">
		    	<br>
		      	<div class="row">
		      		<div style="color: #347FC0; float: right;">
		      			<a href="<?php echo base_url(); ?>eyetube">
		      				Video Lainnya <img src="<?php echo base_url(); ?>assets/new_assets/chevron-right-blue.png">
		      			</a>
		      		</div>
		      		<br>
<?php
	        	foreach ($eyetube_kamu as $kamu)
	        	{
?>
	    			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	    				<img src="<?php echo base_url(); ?>systems/eyetube_storage/<?= $kamu['thumb']; ?>" style="width: 278px; height: 167px;">
	    				<div class="" style="font-size: 12px;">
	    					<p><?= $kamu['title']; ?></p>
	    				</div>
	    				<small style="color: #cccccc;">
	    					<?php
	    						$date 		=  new DateTime($kamu['createon']);
	    						$tanggal 	= date_format($date,"Y-m-d H:i:s");

	    						echo relative_time($tanggal) . ' ago - '.$kamu['tube_view'].' views';
	    					?>
	    				</small>
	    			</div>
<?php		
	        	}
?>
		      	</div>
		    </div>
		  </div>

		  <br>

		  <!-- konten eyeNews dan eyeMe -->
		  <div class="row">
		  	<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="padding: unset;">
	  			<img src="<?php echo base_url(); ?>assets/new_assets/ic_eyenews.png">
	  			<span style="font-family: Montserratbold; color:#CD4F41;font-size: 20px;">eyeNews</span>
	  			<img src="<?php echo base_url(); ?>assets/new_assets/line-eyenews.png">
	  			<br>
	  			<br>

	  			<a href="<?php echo base_url(); ?>eyenews/detail/<?= $eyenews_main->eyenews_id;?>">
	  				<div class="hover14">
	  					<figure>
	  						<img src="<?php echo base_url(); ?>systems/eyenews_storage/<?= $eyenews_main->thumb1; ?>" style="width: 645px; height: 385px;">
	  					</figure>
	  				</div>
	  				
	  				<div class="news-main-title">
	  					<small>
	  						<?php
	  							$date 		=  new DateTime($eyenews_main->createon);
	  							$tanggal 	= date_format($date,"Y-m-d H:i:s");

	  							echo relative_time($tanggal) . ' ago';
	  						?>
	  					</small>
	  					<h1 style="font-size: 16px; margin: unset;">
	  						<?php echo $eyenews_main->title; ?>
	  					</h1>
	  				</div>
	  			</a>
				
	  			<div>
	  				<div style="color: #CD4F41;">BERITA TERKAIT</div>
<?php
	  			$i = 0;
	  			foreach ($eyenews_similar as $similar)
	  			{
	  				if ($i != 0)
	  				{
?>
	  					<div>
	  						<a href="<?php echo base_url(); ?>eyenews/detail/<?= $similar['eyenews_id'];?>">
	  							<img src="<?php echo base_url(); ?>assets/new_assets/chevron-right-red.png"> <?= $similar['title']; ?>
	  						</a>
	  					</div>
<?php			
	  				}
	  				$i++;
	  			}
?>
	  			</div>
		  	</div>
		  	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding: unset;">
		  		<img src="<?php echo base_url(); ?>assets/new_assets/ic-eyeme.png">
		  		<span style="font-family: Montserratbold; color:#59B9E9;font-size: 20px;">eyeMe</span>
		  		<img src="<?php echo base_url(); ?>assets/new_assets/line-eyeme.png" style="width: 378px;">
		  	</div>
		  </div>

	</div>

	<?php 
		
	?>

	<br>
	<br>
	<br>
	<br>

	

	<script src="<?=base_url()?>bs/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>bs/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>bs/js/owl.carousel.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('#jadwal-slider').owlCarousel({
			    loop:true,
			    margin:0,
			    items:6,
			    autoWidth:true,
			    nav:false,
			    itemsDesktop:[1199,6],
			    itemsDesktopSmall:[979,3],
			});

			var jadwalSlider = $('#jadwal-slider');
			jadwalSlider.owlCarousel();

			$('.jadwalPrev').click(function()
			{
			    jadwalSlider.trigger('prev.owl.carousel');
			});

			$('.jadwalNext').click(function()
			{
			    jadwalSlider.trigger('next.owl.carousel');
			});

			$('#club-slider').owlCarousel({
			    loop: false,
			    margin:-2.5,
			          autoWidth:true,
			          nav: false,
			          items: 2,
			          dots: true,
			          dotsEach:true,
			          responsiveClass: true,
			          center: false,
			          responsiveRefreshRate: true
			});

			// $("#durasi-video").click();

			$("#haha").one("load", function()
			{
			  	// do stuff
			}).each(function()
			{
			  	if(this.complete) $('#durasi-video').click();
			});
		});

        function getDuration()
        {
            var video 	= document.getElementById('eyetube-satu');
            var durasi 	= parseInt(video.duration);

            var total ="";

            if (durasi < 59)
            {
            	total = durasi;
            	$('#durasi').append("00: "+total);
            }
            else
            if (durasi > 59 && durasi < 119)
            {
            	total = durasi - 60;
            	$('#durasi').append("01: "+total);
            }
            else
           	if (durasi > 120 && durasi < 179)
           	{
       			total = durasi - 120;
       			$('#durasi').append("02: "+total);
           	}
       	    else
   	    	if (durasi > 180 && durasi < 239)
   	    	{
   				total = durasi - 180;
   				$('#durasi').append("03: "+total);
   	    	}
    	    else
	    	if (durasi > 240 && durasi < 299)
	    	{
				total = durasi - 180;
				$('#durasi').append("04: "+total);
	    	}
	    	else
	    	if (durasi > 300 && durasi < 359)
	    	{
				total = durasi - 180;
				$('#durasi').append("05: "+total);
	    	}
        }
		
	</script>
</body>
</html>
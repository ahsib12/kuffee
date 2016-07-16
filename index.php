	<?php include("src/header.php");?>
	<link rel="stylesheet" href="js/plugin/slider/tcf-slider.min.css">
	<script src="js/plugin/slider/tcf-slider.min.js"></script>
</head>

<script>
   	$(function(){
   	   	var before_img = null;   	   	
   		$(".img-wrapper2").on("mouseover","img", function(){
   	   		// 이미지에 value 값을 할당해서 무슨 이미지인지 파악하는 방향으로 진행
   	   		before_img = $(this).attr("src");
   	   		$(this).attr("src","img/icon/1_1.png");
   		});
   		$(".img-wrapper2").on("mouseout","img", function(){
   	   		$(this).attr("src",before_img);
   		});
   	});
</script>

<style>
	/* 991px 가 화면이 바뀌는 기준픽셀*/
	@media screen and (max-width:991px){
		.img-wrapper1 { margin:40px 0px; }
	}
</style>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">KUFFEE</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Settings</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Help</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="row">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="slide" src="/img/img1.jpg" alt="First slide" style="width:100%">
					<div class="container">
						<div class="carousel-caption">
							<!--  HTML 삽입 -->
						</div>
					</div>
				</div>
				<div class="item">
					<img class="slide" src="/img/img2.jpg" alt="Second slide" style="width:100%">
					<div class="container">
						<div class="carousel-caption"></div>
					</div>
				</div>
				<div class="item">
					<img class="slide" src="/img/img3.jpg" alt="Third slide" style="width:100%">
					<div class="container">
						<div class="carousel-caption"></div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> 
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
				<span class="sr-only">Previous</span>
			</a> 
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> 
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--  할인/주문/검색 -->
	<div class="row">
		<div class="col-md-2 col-xs-2"></div>
		<div class="col-md-8 col-xs-8">
			<!--  할인/예약/주문 -->
			<div class="col-md-12 col-xs-12 content-container">
				<div class="col-md-4 col-xs-12 img-wrapper1">
					<img src="img/icon/1_3.png">
					<div>
						<h3><strong>10% 할인</strong></h3>
						KUFFEE 제휴카페를 검색하고<br>
						주문시 해당 화면을 보여주세요<br>
						1000원당 100원의 할인혜택
					</div>
				</div>
				<div class="col-md-4 col-xs-12 img-wrapper1">
					<img src="img/icon/1_2.png">
					<div>
						<h3><strong>예약주문</strong></h3>
						일부 제휴 카페에서는 [예약주문]<br>
						기능을 이용 할 수 있습니다.
					</div>
				</div>
				<div class="col-md-4 col-xs-12 img-wrapper1">
					<img src="img/icon/1_1.png">
					<div>
						<h3><strong>맞춤 검색</strong></h3>
						카페위치 / Wi-fi / 콘센트 / 주차장 등<br>
						여러 가지 맞춤 조건 검색을 통해<br>
						나에게 딱 맞는 카페를 찾아보세요!
					</div>
				</div>
			</div>
			<!--  지역별로 찾아가기 -->
			<div class="col-md-12 col-xs-12 content-container">
				<div class="col-md-12 col-xs-12 banner">
					<strong>지역 바로 찾아가기</strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<div class="col-md-4 col-xs-12 img-wrapper2">
						<img src="img/icon/1.png">
					</div>
					<div class="col-md-4 col-xs-12 img-wrapper2">
						<img src="img/icon/2.png">
					</div>
					<div class="col-md-4 col-xs-12 img-wrapper2">
						<img src="img/icon/3.png">
					</div>
					<div class="col-md-4 col-xs-12 img-wrapper2">
						<img src="img/icon/4.png">
					</div>
					<div class="col-md-4 col-xs-12 img-wrapper2">
						<img src="img/icon/5.png">
					</div>
					<div class="col-md-4 col-xs-12 img-wrapper2">
						<img src="img/icon/6.png">
					</div>
				</div>
			</div>
			<!--  Contact us -->
			<div class="col-md-12 col-xs-12 content-container">
				<div class="col-md-4 col-xs-4">
					<img src="/img/logo.png" style="width:80%;">
				</div>
				<div class="col-md-8 col-xs-8">
					<h3>
						Please contact us<br> if you have any further questions and
						suggestions
					</h3>
					<p>
						<br>KUFFEE <br>General Directer / 최병준 <br>010-5353-5210 <br>cbj5210@nate.com
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-2 col-xs-2"></div>
	</div>

	<!-- footer -->
	<?php include("src/footer.php");?>
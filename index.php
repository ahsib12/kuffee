	<?php include "src/header.php";?>

</head>

<!--dropdown 밖의 화면 눌렀을때 dropdown 도로 올라가도록-->
<script>
$(document).click(function (event) {
    var clickover = $(event.target);
    var $navbar = $(".navbar-collapse");               
    var _opened = $navbar.hasClass("in");
    if (_opened === true && !clickover.hasClass("navbar-toggle")) {      
        $navbar.collapse('hide');
    }
});
</script>


<!--dropdown에서 list 눌렀을때 dropdown 도로 올라가도록-->
<script>
$(document).ready(function () {
  $(".navbar-nav li .anchorLink").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });
});
</script>

<!-- 스크롤탑을 위한 자바스크립트 -->
<script type="text/javascript">
$(document).ready(function() {
	$("a.anchorLink").anchorAnimate()
});

jQuery.fn.anchorAnimate = function(settings) {
	settings = jQuery.extend({
	speed : 1100
	}, settings);    
     
	return this.each(function(){
		var caller = this
		$(caller).click(function (event) {    
             event.preventDefault()
             var locationHref = window.location.href
             var elementClick = $(caller).attr("href")
             
             var destination = $(elementClick).offset().top;
             $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
                 window.location.hash = elementClick
             });
               return false;
        })
    })
}
</script>

<style>
	/* 991px 가 화면이 바뀌는 기준픽셀*/
	@media screen and (max-width:991px){
		.img-wrapper1 { margin:40px 0px; }
	}
</style>

<style>
	/* 400px 가 화면이 바뀌는 기준픽셀 - 로고텍스트*/
	@media screen and (max-width:400px){
		.reduce-text {font-size :0.8em;}
	}
</style>

<style>
	/* 386px 가 화면이 바뀌는 기준픽셀 - 로고이미지*/
	@media screen and (max-width:386px){
		.reduce-image {width : 100%}
	}
</style>


<style>
	/* 460px 가 화면이 바뀌는 기준픽셀 - 지역바로가기 이미지 */
	@media screen and (max-width:460px){
		.reduce-image2 {width : 60%;}
	}
</style>

<style>
	/* 460px 가 화면이 바뀌는 기준픽셀 - 좌우 패딩 0으로 만들기 */
	@media screen and (max-width:460px){
		.reduce-padding {padding-left: 0px;padding-right: 0px;}
	}
</style>

<style>
	/* 767px 가 화면이 바뀌는 기준픽셀 - 네비게이션바 고정하기 */
	@media screen and (max-width:767){
		.reduce-padding {padding-left: 0px;padding-right: 0px;}
	}
</style>

<style>
	/* 991px 가 화면이 바뀌는 기준픽셀*/
	@media screen and (max-width:991px){
		.navbar-search { padding-left: 25px;}
	}
</style>
	

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<?php include "src/navbar.php";?>
	
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
	<a id="about"></a>
	<div class="row">
		<div class="col-md-2 col-xs-1"></div>
		<div class="col-md-8 col-xs-10 reduce-padding">
			<!--  할인/예약/주문 -->
			<div class="col-md-12 col-xs-12 content-container">
				<div class="col-md-4 col-xs-12 img-wrapper1">
					<img src="img/icon/1_3.png" >
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
		</div>
		</div>
	</div>
	
	<a id="contents"></a>
	<div class="row">
		<div class="col-md-2 col-xs-1"></div>
		<div class="col-md-8 col-xs-10 reduce-padding">
			<!--  지역별로 찾아가기 -->
			<div class="col-md-12 col-xs-12 content-container reduce-padding">
				<div class="col-md-12 col-xs-12 banner reduce-padding">
					<strong>지역 바로 찾아가기</strong>
				</div>
				<div class="col-md-12 col-xs-12 reduce-padding">
					<div class="col-md-4 col-xs-6 img-wrapper2 reduce-image reduce-padding" style="padding-top: 15px; padding-bottom: 0px;">
						<a href="/src/cafe_list.php?region=1"><img class="reduce-image2" src="img/icon/1.png"></a>
					</div>
					<div class="col-md-4 col-xs-6 img-wrapper2 reduce-image reduce-padding" style="padding-top: 15px; padding-bottom: 0px;">
						<a href="/src/cafe_list.php?region=2"><img class="reduce-image2" src="img/icon/2.png"></a>
					</div>
					<div class="col-md-4 col-xs-6 img-wrapper2 reduce-image reduce-padding" style="padding-top: 15px; padding-bottom: 0px;">
						<a href="/src/cafe_list.php?region=3"><img class="reduce-image2" src="img/icon/3.png"></a>
					</div>
					<div class="col-md-4 col-xs-6 img-wrapper2 reduce-image reduce-padding" style="padding-top: 15px; padding-bottom: 0px;">
						<a href="/src/cafe_list.php?region=4"><img class="reduce-image2" src="img/icon/4.png"></a>
					</div>
					<div class="col-md-4 col-xs-6 img-wrapper2 reduce-image reduce-padding" style="padding-top: 15px; padding-bottom: 0px;">
						<a href="/src/cafe_list.php?region=5"><img class="reduce-image2" src="img/icon/5.png"></a>
					</div>
					<div class="col-md-4 col-xs-6 img-wrapper2 reduce-image reduce-padding" style="padding-top: 15px; padding-bottom: 0px;">
						<a href="/src/cafe_list.php?region=6"><img class="reduce-image2" src="img/icon/6.png"></a>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	
	<a id="contact"></a>
	<div class="row">
		<div class="col-md-2 col-xs-1"></div>
		<div class="col-md-8 col-xs-10 reduce-padding">
			<!--  Contact us -->
			<div class="col-md-12 col-xs-12 content-container" style = "padding-top: 40px;">
				<div class = "banner" style="text-align:center; margin-bottom:15px;">
					<font color="black" style="font-size:130%"><strong>Please contact us</strong></font>
				</div>
				<div style="text-align:center; margin-bottom:30px;">
				<font size="4">if you have any further questions and suggestions</font>
				</div>
				<div class="col-md-6 col-xs-6 img-wrapper1 reduce-padding" style ="margin-top:0px; margin-bottom: 0px;text-align:right">
						<img class = "reduce-image" src="/img/logo.png" >
				</div>
				<div class="col-md-6 col-xs-6 reduce-text reduce-padding" style="padding-left:40px; padding-top:27px;" >
					<div style="text-align:left;">
						<strong>KUFFEE <br>General Directer<br>최병준 <br>010-5353-5210 <br>cbj5210@nate.com</strong>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2 col-xs-1"></div>
	</div>
	
	<!-- footer -->
	<?php include "src/footer.php";?>
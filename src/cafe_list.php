<?php include "header.php";?>
</head>

<script>
   	$(function(){
   	   	var before_img = null;   	   	
   		$(".img-wrapper2").on("mouseover","img", function(){
   	   		// 이미지에 value 값을 할당해서 무슨 이미지인지 파악하는 방향으로 진행
   	   		before_img = $(this).attr("src");
   	   		$(this).attr("src","../img/icon/1_1.png");
   		});
   		$(".img-wrapper2").on("mouseout","img", function(){
   	   		$(this).attr("src",before_img);
   		});
   	});
</script>

<style>
	/* 991px 가 화면이 바뀌는 기준픽셀*/
	@media screen and (max-width:991px){
		.img-wrapper1 { margin:0px 0px; }
	}
</style>

<body>
	<?php include "navbar.php";?>
	
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

	
<?
	include "config.php";
	include "util.php"; 

	$region = $_REQUEST['region'];
		
	$connect = dbconnect($host,$dbid,$dbpass,$dbname);
	mysql_query('set names uft8');
	mysql_query("set session character_set_connection=utf8;");
	mysql_query("set session character_set_results=utf8;");
	mysql_query("set session character_set_client=utf8;");
	
	$query = 'select * from ku_cafe where region =' . $region;
	
	if (array_key_exists("search_keyword", $_POST)) {  // array_key_exists() : Checks if the specified key exists in the array
        $search_keyword = $_POST["search_keyword"];
        $query =  "select * from ku_cafe where name like '%$search_keyword%' or location like '%$search_keyword%'";
    }
	
	$result = mysql_query($query, $connect);
	
	if (!$result) {
        die('Query Error : ' . mysql_error());
    }
	
	$array = mysql_fetch_array($result);
	
?>
	
				
	<a name="about" id="about">
		<div class="row">
			<div class="col-md-2 col-xs-1"></div>
			<div class="col-md-8 col-xs-10">
			<div class="col-md-12 col-xs-12 banner" style = "padding:40px 0px 20px ;">
				
				<?echo '<strong>'.$array[4].'</strong>';?>
			</div>
			<div class="col-md-12 col-xs-12"  style="text-align:center; padding : 0px 0px 40px 0px;">
			<font color="black">고려대학교의 대표적인 거리로써 다양한 맛집과 문화생화을 즐길 수 있는 거리이다. 매년 정기 고연전 시기에 연세대와 응원 현수막이 붙는거로 유명하다.</font>
			</div>
		
			<!--  1번째 상점들 -->
			<div class="col-md-6 col-xs-12 content-container-cafe-list">
				<div class="col-md-6 col-xs-6 img-wrapper1">
				<? echo '<a href="cafe.php?cafe_no='.$array[0].'&region='.$region.'">';?>
					
					<? echo '<img src="'.$array[1].'">';?>
					<div><font color="black">
						
						<? echo '<h5><strong>'.$array[2].'</strong></h5>';?>
						<? echo '위치 : '.$array[4].'<br>';?>
						<? echo '전화번호 : '.$array[3] ;?>
						</a>
						</font>
					</div>
				</div>
				
				<? $array = mysql_fetch_array($result);?>
				<div class="col-md-6 col-xs-6 img-wrapper1">
					<? echo '<a href="cafe.php?cafe_no='.$array[0].'&region='.$region.'">';?>
					<? echo '<img src="'.$array[1].'">';?>
					<div><font color="black">
						
						<? echo '<h5><strong>'.$array[2].'</strong></h5>';?>
						<? echo '위치 : '.$array[4].'<br>';?>
						<? echo '전화번호 : '.$array[3] ;?>
						</a>
						</font>
					</div>
				</div>
			</div>
			
			<div class="col-md-6 col-xs-12 content-container-cafe-list">
				<? $array = mysql_fetch_array($result);?>
				<div class="col-md-6 col-xs-6 img-wrapper1">
					<? echo '<a href="cafe.php?cafe_no='.$array[0].'&region='.$region.'">';?>
					<? echo '<img src="'.$array[1].'">';?>
					<div><font color="black">
						
						<? echo '<h5><strong>'.$array[2].'</strong></h5>';?>
						<? echo '위치 : '.$array[4].'<br>';?>
						<? echo '전화번호 : '.$array[3] ;?>
						</a>
						</font>
					</div>
				</div>
				<? $array = mysql_fetch_array($result);?>
				<div class="col-md-6 col-xs-6 img-wrapper1">
					<? echo '<a href="cafe.php?cafe_no='.$array[0].'&region='.$region.'">';?>
					<? echo '<img src="'.$array[1].'">';?>
					<div><font color="black">
						
						<? echo '<h5><strong>'.$array[2].'</strong></h5>';?>
						<? echo '위치 : '.$array[4].'<br>';?>
						<? echo '전화번호 : '.$array[3] ;?>
						</a>
						</font>
					</div>
				</div>
			</div>
			
			<!--  2번째 상점들 -->
			<div class="col-md-6 col-xs-12 content-container-cafe-list">
				<? $array = mysql_fetch_array($result);?>
				<div class="col-md-6 col-xs-6 img-wrapper1">
					<? echo '<a href="cafe.php?cafe_no='.$array[0].'&region='.$region.'">';?>
					<? echo '<img src="'.$array[1].'">';?>
					<div><font color="black">
						
						<? echo '<h5><strong>'.$array[2].'</strong></h5>';?>
						<? echo '위치 : '.$array[4].'<br>';?>
						<? echo '전화번호 : '.$array[3] ;?>
						</a>
						</font>
					</div>
				</div>
				
				<? $array = mysql_fetch_array($result);?>
				<div class="col-md-6 col-xs-6 img-wrapper1">
					<? echo '<a href="cafe.php?cafe_no='.$array[0].'&region='.$region.'">';?>
					<? echo '<img src="'.$array[1].'">';?>
					<div><font color="black">
						
						<? echo '<h5><strong>'.$array[2].'</strong></h5>';?>
						<? echo '위치 : '.$array[4].'<br>';?>
						<? echo '전화번호 : '.$array[3] ;?>
						</a>
						</font>
					</div>
				</div>
			</div>
			
			<div class="col-md-6 col-xs-12 content-container-cafe-list">	
				<? $array = mysql_fetch_array($result);?>
				<div class="col-md-6 col-xs-6 img-wrapper1">
					<? echo '<a href="cafe.php?cafe_no='.$array[0].'&region='.$region.'">';?>
					<? echo '<img src="'.$array[1].'">';?>
					<div><font color="black">
						
						<? echo '<h5><strong>'.$array[2].'</strong></h5>';?>
						<? echo '위치 : '.$array[4].'<br>';?>
						<? echo '전화번호 : '.$array[3] ;?>
						</a>
						</font>
					</div>
				</div>
				
				<? $array = mysql_fetch_array($result);?>
				<div class="col-md-6 col-xs-6 img-wrapper1">
					<? echo '<a href="cafe.php?cafe_no='.$array[0].'&region='.$region.'">';?>
					<? echo '<img src="'.$array[1].'">';?>
					<div><font color="black">
						
						<? echo '<h5><strong>'.$array[2].'</strong></h5>';?>
						<? echo '위치 : '.$array[4].'<br>';?>
						<? echo '전화번호 : '.$array[3] ;?>
						</a>
						</font>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2 col-xs-1"></div>
	</div>

	<!-- footer -->
	<?php include "footer.php";?>
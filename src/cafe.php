	<?php include "header.php";?>
	<style>
	h4, h2{
		color:grey;
	}
	</style>
	
	<SCRIPT LANGUAGE="JavaScript"> 
		function CaricaFoto(img){ 
		foto1= new Image(); 
		foto1.src=(img); 
		Controlla(img); 
		} 
		function Controlla(img){ 
		if((foto1.width!=0)&&(foto1.height!=0)){ 
		viewFoto(img); 
		} 
		else{ 
		funzione="Controlla('"+img+"')"; 
		intervallo=setTimeout(funzione,20); 
		} 
		} 

		function viewFoto(img){ 
		largh=foto1.width+20; 
		altez=foto1.height+20; 
		stringa="width="+largh+",height="+altez; 
		finestra=window.open(img,"",stringa); 
		} 
	</script> 
	
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

</head>
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

	$cafe_no = $_REQUEST['cafe_no'];
	$region = $_REQUEST['region'];
		
	$connect = dbconnect($host,$dbid,$dbpass,$dbname);
	mysql_query('set names uft8');
	mysql_query("set session character_set_connection=utf8;");
	mysql_query("set session character_set_results=utf8;");
	mysql_query("set session character_set_client=utf8;");
	
	$query1 = 'select * from ku_cafe where no =' . $cafe_no;
	$result1 = mysql_query($query1, $connect);
	$array1 = mysql_fetch_array($result1);
	
	$cafe_logo = $array1[1];
	$cafe_name = $array1[2];
	$cafe_tel = $array1[3];
	$cafe_location = $array1[4];
	$cafe_notice = $array1[5];
?>

<div class="row">
	<div class="col-md-4 col-xs-1"></div>
	<div class="col-md-4 col-xs-10 content-container" style="text-align:center;">
		<?
		echo '<h1><strong>'.$cafe_name.'</strong></h1>';
		?>
		<br>
		<h2><strong>-cafe information-</strong></h2>
		<br>
		<?
		echo '<h4>ADDRESS : 참살이,이공대 이런 분류기준 말고 상세주소 attribute를 db추가해야함</h4>
		  <h4>TEL :  '.$cafe_tel.'</h4>';
		?>
		<br><br>
		<h2><strong>-cafe intro-</strong></h2>
		<br>
		<?
		echo '<h4>'.$cafe_notice.'</h4>';
		?>
	</div>
	<div class="col-md-4 col-xs-1"></div>
</div>

<div class="row">
	<div class="col-md-4 col-xs-1"></div>
	<div class="col-md-4 col-xs-10 content-container" style="text-align:center;">
			<div class="col-md-2 col-xs-4">
			<img src="/img/cafe_information/ca.png">
			</div>
			<div class="col-md-1 col-xs-0"></div>
			<div class="col-md-2 col-xs-4">
			<img src="/img/cafe_information/wi.png">
			</div>
			<div class="col-md-2 col-xs-4">
			<img src="/img/cafe_information/24.png">
			</div>
			<div class="col-md-2 col-xs-4">
			<img src="/img/cafe_information/pa.png">
			</div>
			<div class="col-md-1 col-xs-0"></div>
			<div class="col-md-2 col-xs-4">
			<img src="/img/cafe_information/re.png">
			</div>
	</div>
	<div class="col-md-4 col-xs-1"></div>
</div>

<div class="row">
	<div class="col-md-4 col-xs-1"></div>
	<div class="col-md-4 col-xs-10 content-container" style="text-align:center;">
			<div class="col-md-3 col-xs-3">
			<a href="javascript:CaricaFoto('/img/test1.jpg')" border="0"><img src="/img/test1.jpg" style="width:100%;"></a> 
			</div>
			<div class="col-md-3 col-xs-3">
			<a href="javascript:CaricaFoto('/img/test1.jpg')" border="0"><img src="/img/test1.jpg" style="width:100%;"></a>
			</div>
			<div class="col-md-3 col-xs-3">
			<a href="javascript:CaricaFoto('/img/test1.jpg')" border="0"><img src="/img/test1.jpg" style="width:100%;"></a>
			</div>
			<div class="col-md-3 col-xs-3">
			<a href="javascript:CaricaFoto('/img/test1.jpg')" border="0"><img src="/img/test1.jpg" style="width:100%;"></a>
			</div>
	</div>
	<div class="col-md-4 col-xs-1"></div>
</div>

<div class="row" style="background-color:rgb(100, 100, 227); color:white;">
	<div class="col-md-3 col-xs-1"></div>
	<div class="col-md-3 col-xs-5 content-container">
		<h3><strong>Coffee</strong></h3><br>	
		<?
		$query2 = 'select * from ku_coffee where cafe_no =' . $cafe_no; 
		$result2 = mysql_query($query2, $connect);
		$row_num = mysql_num_rows($result2);
	
		echo '<table class="table"><thead>
			<th><p align=center>이름</p></th>
			<th><p align=center>가격</p></th></thead>';
		
		for($i=1;$i<=$row_num;$i++){
			$array2 = mysql_fetch_array($result2);

			echo '<tr> 
				<td width=100><p align=center>'.$array2[2].'</p></font></td>
				<td width=100><p align=center>'.$array2[3].'</p></font></td>';
		}
		echo "</table>";
		echo '<br>';
		?>
	</div>
	<div class="col-md-3 col-xs-5 content-container">
		<h3><strong>Juice</strong></h3><br>
		<?
		$query2 = 'select * from ku_coffee where cafe_no =' . $cafe_no; 
		$result2 = mysql_query($query2, $connect);
		$row_num = mysql_num_rows($result2);
	
		echo '<table class="table"><thead>
			<th><p align=center>이름</p></th>
			<th><p align=center>가격</p></th></thead>';
		
		for($i=1;$i<=$row_num;$i++){
			$array2 = mysql_fetch_array($result2);

			echo '<tr> 
				<td width=100><p align=center>'.$array2[2].'</p></font></td>
				<td width=100><p align=center>'.$array2[3].'</p></font></td>';	
		}
		echo "</table>";
		echo '<br>';
		?>
	</div>
	<div class="col-md-3 col-xs-1"></div>
</div>

<div class="row">
	<div class="col-md-4 col-xs-1"></div>
	<div class="col-md-4 col-xs-10 content-container" style="text-align:center;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3161.7463991871677!2d127.0243589153122!3d37.58458897979444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cbcb08a95c683%3A0xa01716966afd4bea!2z7ISc7Jq47Yq567OE7IucIOyEseu2geq1rCDslYjslZTrj5kg6rOg66Ck64yA7ZWZ6rWQIOqzvO2VmeuPhOyEnOq0gA!5e0!3m2!1sko!2skr!4v1469375169398" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="col-md-4 col-xs-1"></div>
</div>

<?php include "footer.php";?>






















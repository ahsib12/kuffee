	<?php include "header.php";?>
	<style>
	h4, h2{
		color:grey;
	}
	
	/* 991px 가 화면이 바뀌는 기준픽셀*/
	@media screen and (max-width:991px){
		.img-wrapper1 { margin:0px 0px; }
	}
	</style>
	
	<script> 
		function CaricaFoto(img){ 
			foto1= new Image(); 
			foto1.src=(img); 
			Controlla(img); 
		} 

		function Controlla(img){ 
			if((foto1.width!=0)&&(foto1.height!=0)){ 
				viewFoto(img); 
			}else{ 
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
</head>
 <body>
<?php include "navbar_cafe.php";?>

<div class="row">
	<div id="main_img_container" class="col-lg-12 col-md-12 col-xs-12">
		<img src="/img/cafe_list_img.jpg">
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
		<div class="cafe-content" style="color:black;">
			<h1><strong><?=$cafe_name?></strong></h1>
		</div>
		<div class="cafe-content">
			<h3><strong>- Cafe Information -</strong></h3>
			<br>
			<div>Adress : 242, Cheomdam-ro, Jeju-si, Jeju-do, Koread</div>
			<div><a href="tel:<?=$cafe_tel?>">TEL : <?=$cafe_tel?></a></div>
		</div>
		<div class="cafe-content">
			<h3><strong>- Cafe Intro -</strong></h3>
			<div><?=$cafe_notice?></div>
		</div>
		<div class="cafe-content">
			<div class="row">
				<div class="col-md-1 col-xs-0"></div>
				<div class="col-md-2 col-xs-4"><img src="/img/cafe_information/ca.png"></div>
				<div class="col-md-2 col-xs-4"><img src="/img/cafe_information/wi.png"></div>
				<div class="col-md-2 col-xs-4"><img src="/img/cafe_information/24.png"></div>
				<div class="col-md-2 col-xs-4"><img src="/img/cafe_information/pa.png"></div>
				<div class="col-md-2 col-xs-4"><img src="/img/cafe_information/re.png"></div>
				<div class="col-md-1 col-xs-0"></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-xs-1"></div>
</div>

<div class="row" style="background-color:#446BA2; padding:20px 0px;">
	<div class="col-md-3"></div>
	<div class="col-md-3" style="color:white; text-weight:bold;">
	<span style="padding:90px 0px;"><h3><strong>Coffee</strong></h3></span>
		<table style="width:100%;">
			<colgroup>
				<col width="80%"/>
				<col width="20%"/>
			</colgroup>
			<tbody>
				<!-- 여기에 db에서 꺼내와서 tr 채우기 -->
				<tr>
					<td>ESPRESSO</td>
					<td>3.0</td>
				</tr>
				<tr>
					<td>ESPRESSO</td>
					<td>3.0</td>
				</tr>
				<tr>
					<td>ESPRESSO</td>
					<td>3.0</td>
				</tr>
				<tr>
					<td>ESPRESSO</td>
					<td>3.0</td>
				</tr>
			</tbody>
		</table>
	</center>	
	</div>
	<div class="col-md-3" style="color:white; text-weight:bold;">
		<span style="padding:30px 0px;"><h3><strong>Coffee</strong></h3></span>
		<table style="width:100%;">
			<colgroup>
				<col width="80%"/>
				<col width="20%"/>
			</colgroup>
			<tbody>
				<!-- 여기에 db에서 꺼내와서 tr 채우기 -->
				<tr>
					<td>ESPRESSO</td>
					<td>3.0</td>
				</tr>
				<tr>
					<td>ESPRESSO</td>
					<td>3.0</td>
				</tr>
				<tr>
					<td>ESPRESSO</td>
					<td>3.0</td>
				</tr>
				<tr>
					<td>ESPRESSO</td>
					<td>3.0</td>
				</tr>
			</tbody>
		</table>	
	</div>
	<div class="col-md-3"></div>
</div>

<div class="row">
	<iframe style="width:100%; height:400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3161.7463991871677!2d127.0243589153122!3d37.58458897979444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cbcb08a95c683%3A0xa01716966afd4bea!2z7ISc7Jq47Yq567OE7IucIOyEseu2geq1rCDslYjslZTrj5kg6rOg66Ck64yA7ZWZ6rWQIOqzvO2VmeuPhOyEnOq0gA!5e0!3m2!1sko!2skr!4v1469375169398" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php include "footer.php";?>






















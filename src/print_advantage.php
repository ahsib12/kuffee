<?require_once "header.php";?>
	<style>
	h4, h2{
		color:grey;
	}
	
	/* 991px 가 화면이 바뀌는 기준픽셀*/
	@media screen and (max-width:768px){
	
	}
	</style>
	
</head>


<body style="overflow-x:hidden">
<?require_once "navbar_cafe.php";?>
	<?
		require_once "config.php";
		require_once "util.php"; 
	
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
		$cafe_isCut = $array1[7];
	?>

	<div class="row">
		<div class="col-md-4 col-xs-2"></div>
		<div class="col-md-4 col-xs-8 content-container" style="text-align:center; padding-top: 0px;">
			<div class="cafe-content" style="color:#EE475B; padding-bottom : 10px; padding-top: 20px;" >
				<h1><strong><?=$cafe_name?></strong></h1>
			</div>
			<div style ="margin-bottom: 40px; ">
				<?$dtime = time();?>
				<?$date = date('Y년 m월 d일',$dtime);?>
				<h3><?=$date?><h3>
			</div>


			<div style = "padding-bottom:20px">
			<? if($cafe_isCut ==1) {
				echo '<img src="../img/print_advantage_img/print_cut10percent.png" style = "width:70%;">';
				echo '</div>';
				
				$adv = "10%할인";
				echo '<h3 style ="margin-bottom: 40px;"><font color ="#EE475B">'.$adv.'</font> 이용권</h3>';
				
			} else {
				echo '<img src="../img/print_advantage_img/print_sizeup.png" style = "width:70%;">';
				echo '</div>';
				
				$adv = "SIZE UP";
				echo '<h3 style ="margin-bottom: 40px;"><font color ="#EE475B">'.$adv.'</font> 이용권</h3>';

			} ?>
			
			<p>
				<font size = "3"><?=$cafe_name?>에 방문하셔서 현제 페이지를 <br>
				직원에게 보여주시면 <font color ="#EE475B"><b><?=$adv?></b></font>을 해드립니다.</font>
			</p>
			
			
			
		</div>
	</div>
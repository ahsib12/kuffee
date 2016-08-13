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

<body style="overflow-x:hidden">
	<?php include "navbar_cafe_list.php";?>
	<div class="row">
		<div class="col-md-12 col-xs-12" style = "padding : 0px;">
			<img src="../img/cafe_list_img.jpg" style = " width :100%; height : 200px;">
		</div>
	</div>
	
<?
	include "config.php";
	include "util.php"; 

	
	$divide_2=0;
	$rigion = 0;
	
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
	
	$row_num = mysql_num_rows($result);
	
	if (!$row_num) {
        msg("입력하신 검색어에 해당하는 내용이 없습니다.");
    }
	
	if($row_num % 2 == 0){
		$divide_2 = $row_num/2;
		$innerfor_index = 2;
	}
	else{
		$divide_2 = $row_num/2 + 0.5;
		$innerfor_index = 1;
	}
	
?>
	
				

	<div class="row">
		<div class="col-md-2 col-xs-1"></div>
		<div class="col-md-8 col-xs-10">
		<div class="col-md-12 col-xs-12 banner" style = "padding:40px 0px 20px ;">
		
		<?
			if($region){
				if($region == 1)
					$title = "이과대학";
				else if($region == 2)
					$title = "문과대학";
				else if($region == 3)
					$title = "법대후문";
				else if($region == 4)
					$title = "정대후문";
				else if($region == 5)
					$title = "고대정문";
				else if($region == 6)
					$title = "참살이길";
				
			} else{
				$title = "검색어 : ". $search_keyword;
			}
		?>
			
			<p style ="color : #446ba1;"><?echo '<strong>'.$title.'</strong>';?></p>
		</div>



		<?
		for($j=1; $j <= $divide_2;$j++){
			
			echo '<div class="col-md-6 col-xs-12 content-container-cafe-list">';
			
			
			
			for($i=1 ; $i<=2 ; $i++){
				/*
				echo $j;
				echo "j";
				echo $i;
				echo "i";
				echo $divide_2;
				echo "div";
				echo $innerfor_index;
				echo "in";
				*/
				if(($j == $divide_2) & ($innerfor_index == 1) & ($i==2)){
					//echo "kkkkkkkkkkk";
					break;
				}
				$array = mysql_fetch_array($result);
				echo '<div class="col-md-6 col-xs-6 img-wrapper1">';
				echo '<a href="cafe.php?cafe_no='.$array[0].'&region='.$region.'">';
				echo '<img src="'.$array[1].'">';
					echo '<div style="padding-bottom: 0px; font-size: .78em;"><font color="black">';
						echo '<h5><strong>'.$array[2].'</strong></h5>';
						echo '위치 : '.$array[4].'<br>';
						echo '전화번호 : '.$array[3];
						echo '</a>';
						echo '</font>';
					echo '</div>';
				echo '</div>';
			}
			
			echo '</div>';
		}
		?>

	
		</div>

	</div>


	<!-- footer -->
	<?php include "footer.php";?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>KUFFEE</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
   
   
   <!-- Bring dashboar --> 
   
   <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dashboard/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	     
  </head>
  
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

<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
			  <?
              echo '<a class="navbar-brand" href="cafe.php?cafe_no='.$cafe_no.'">';
			  echo $cafe_name;
			  echo '</a>';
			  ?>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <?
				echo '<li><a href="index.html">KUFFEE</a></li>';
				echo '<li><a href="cafe_list.php?region='.$region.'">되돌아가기</a></li>';
				?>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
		<li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>외관</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>카페 내부1</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>카페 내부2</h1>
            </div>
          </div>
        </div>
		<div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>카페 내부3</h1>
            </div>
          </div>
        </div>
		<div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>카페 내부4</h1>
            </div>
          </div>
        </div>
		<div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>카페 내부5</h1>
            </div>
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
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="80" height="80">
          <h2>관심 카페 등록</h2>
          <p>내 관심 목록에 등록합니다</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="80" height="80">
          <h2>세부 위치 보기</h2>
          <p>네이버 지도로 정확한 위치를 보여줍니다</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="80" height="80">
          <h2>Contact</h2>
          <p>카페 매니저에게 연락합니다</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	  
	<hr class="featurette-divider">
	
	<?
	echo '<h2 class="featurette-heading">'.$cafe_name.'<span class="text-muted"> ++ 업체 정보</span></h2>
		  <br><br>
          <p class="lead">공지 : '.$cafe_notice.'</p>
		  <p class="lead">전화번호 : '.$cafe_tel.'</p>
		  <p class="lead">지역 :  '.$cafe_location.'</p>
		  <p class="lead">주소 : db추가</p>
		  <p class="lead">콘센트 : db추가</p>
		  <p class="lead">wifi : db추가</p>
		  <p class="lead">주차장 : db추가</p>';
	?>
	
	<hr class="featurette-divider">
	
	<?
	$query2 = 'select * from ku_coffee where cafe_no =' . $cafe_no; 
	$result2 = mysql_query($query2, $connect);
	$row_num = mysql_num_rows($result2);
	
	echo '<h2 class="featurette-heading">'.$cafe_name.'<span class="text-muted">[menu]</span></h2><br><br>';
	
	echo "<table border=2 width=300><thead>
		<th width=100><p align=center>이름</p></font></th>
        <th width=100><p align=center>가격</p></font></th>
		<th width=100><p align=center>수량</p></font></th></thead>";
		
	for($i=1;$i<=$row_num;$i++){
		$array2 = mysql_fetch_array($result2);

		echo "<tr><thead>   
			<td width=100><p align=center>$array2[2]</p></font></td>
			<td width=100><p align=center>$array2[3]</p></font></td>
			<td width=100><p align=center>
		
			<select name='count[]'>
			<option value=0>0잔<br>
			<option value=1>1잔<br>
			<option value=2>2잔<br>
			<option value=3>3잔<br>
			<option value=4>4잔<br>
			<option value=5>5잔<br>
			<option value=6>6잔<br>
			<option value=7>7잔<br>
			<option value=8>8잔<br>
			<option value=9>9잔<br>
			<option value=10>10잔<br>		
			</select>
		
			</td></p></font></td></thead></tr>";	
	}
    echo "</table>";
	echo '<br>';
	?>
	
	<hr class="featurette-divider">
  
	  
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>






















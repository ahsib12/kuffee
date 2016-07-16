<html>
<head><meta http-equiv="content-type" content="text/html; charset=euckr" />
</head>

<body>

<div class="modal-table">
  <div class="modal-cell">

<?

include "config.php";
include "util.php"; 


	$region = $_REQUEST['region'];
	
	
	$connect = dbconnect($host,$dbid,$dbpass,$dbname);
	mysql_query('set names uft8');
	mysql_query("set session character_set_connection=utf8;");
	mysql_query("set session character_set_results=utf8;");
	mysql_query("set session character_set_client=utf8;");
	


	$query = "select * from ku_cafe where region =$region";            //실행가능

	if (array_key_exists("search_keyword", $_POST)) {  
        $search_keyword = $_POST["search_keyword"];
        $query =  "select * from ku_cafe where name like '%$search_keyword%' or location like '%$search_keyword%'";
    }

		
	$result = mysql_query($query, $connect);
     
	$row_num = mysql_num_rows($result);
	
	echo "<center>";
	
	echo "<table border=2 width=800><thead>
        <th width=100><p align=center>카페 그림</p></th>
		<th width=100><p align=center>이름</p></th>
        <th width=100><p align=center>위치</p></th>
        <th width=100><p align=center>전화번호</p></th>
		<th width=100><p align=center>소개</p></th></thead>";
		
	for($i=1;$i<=$row_num;$i++){
    	
    $array = mysql_fetch_array($result);
	 
    echo '<tr><thead>
        <td width=300 bgcolor = #A84D5E><p align=center><input  type="image" src="'.$array[1].'"></p></td>   
        <td width=300><a href=cafe.php?cafe_no='.$array[0].'&region='.$region.'><p align=center>'.$array[2].'</p></a></td>
        <td width=300><p align=center>'.$array[4].'</p></td>
        <td width=300><p align=center>'.$array[3].'</p></td>
        <td width=300><p align=center>'.$array[5].'</p></td></thead></tr>';
	}
	
    echo "</table>";

	echo "</center>";
?>








</div>
</div>

</body>

<!-- <td width=300><p align=center> <a href=" . '"'. "maintradeadd.php?no=$array[0]".'"'."> $array[1] </a></p></td> -->







<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span> <span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div style="line-height:50px; vertical-align:middle;">
			<a class="navbar-brand"><a href="/index.php"><img src="/img/home.png"></a></a>
			</div>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" onclick="$('html, body').stop().animate( { scrollTop : 0 } ); " class="anchorLink">Home</a></li>
				<li><a href="#about" class="anchorLink">Advantages</a></li>
				<li><a href="#contents" class="anchorLink">Region</a></li>
				<li><a href="#contact" class="anchorLink">Contact</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">예약주문가능카페</a></li>
						<li><a href="#">24시간카페</a></li>
						<li><a href="#">Wifi카페</a></li>
						<li><a href="#">주차장보유카페</a></li>
						<div style ="padding-left: 25px;" class="col-lg-12 col-xs-12 navbar-search" >
						<li>
							<form class="navbar-form col-lg-9 col-xs-12" action="cafe_list.php" 
							style = "border-top-width: 0px; border-bottom-width: 0px; margin-top: 0px; margin-bottom:0px;">
								<input type="text" name="search" class="form-control" placeholder="Search...">
							</form>

						</li>
						</div>
					</ul>
                </li>
			</ul>
		</div>
	</div>
</nav>

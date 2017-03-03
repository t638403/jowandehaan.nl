<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
			<div  style="overflow: auto;">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h6><a class="navbar-brand" href="/"><!--<img src="images/jdh_wit.png">--><h1>JOWAN</h1> <h2>ILLUSTRATIE, GRAFISCH ONTWERP & ZEEFDRUK</h2></a></h6>
			</div>
		</div>

		<div class="collapse navbar-collapse" id="myNavbar">
			<div class="pull-right">
				<ul class="nav navbar-nav">
					<li><a class="<?php echo $_GET['type'] == 'about' ? 'active' : ''; ?>" href="/about">over</a></li>
					<li><a class="<?php echo $_GET['type'] == 'project_overview' ? 'active' : ''; ?>" href="/overview">portfolio</a></li>
					<li><a class="<?php echo $_GET['type'] == 'studio' ? 'active' : ''; ?>" href="/studio">DRUKDRUKDRUK</a></li>
				</ul>
				<ul class="nav navbar-nav social">
					<li><a href="https://www.facebook.com/jowan.dehaan" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="post@jowandehaan.nl"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
				</ul>
			</div>

		</div>


	</div>
</nav>



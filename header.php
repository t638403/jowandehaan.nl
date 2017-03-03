<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
			<div class="col-sm-12" style="overflow: auto;">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h6><a class="navbar-brand" href="/">Jowan</a></h6>
			</div>
		</div>

		<div class="collapse navbar-collapse" id="myNavbar">
			<div class="pull-right">
				<ul class="nav navbar-nav">
					<li><a class="<?php echo $_GET['type'] == 'about' ? 'active' : ''; ?>" href="/about">about</a></li>
					<li><a class="<?php echo $_GET['type'] == 'project_overview' ? 'active' : ''; ?>" href="/overview">work</a></li>
					<li><a class="<?php echo $_GET['type'] == 'studio' ? 'active' : ''; ?>" href="/studio">studio</a></li>
				</ul>
				<ul class="nav navbar-nav social">
					<li><a href="https://www.facebook.com/jowan.dehaan" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="mailto:jowandehaan@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
				</ul>
			</div>

		</div>


	</div>
</nav>



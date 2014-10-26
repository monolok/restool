<?php 
//$description ="Simplify restaurateur's life";
get_header(); 
?>

<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<section id="background1">
<div class="container-fluid">
	<!-- NavBar Right-->
	<header>
	<div class="row">
		<div class="col-md-offset-8 col-md-4">
			<nav class="navbar navbar-default" role="navigation">
  			    <div class="container-fluid">
		    		<div class="navbar-header">
						<ul class="nav navbar-nav navbar-right">
							<li><a data-toggle="modal" data-target=".bs-example-modal-sm">Sign In</a></li>
							<li><a data-toggle="modal" data-target=".bs-example-modal-lg">Sign Up</a></li>
							<li><a href="#displayG" id="aclick"><i class="fa fa-life-ring fa-1x"></i>  Support Us !</a></li>
						</ul>
			    	</div>
		    	</div>
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	</header>
	<!-- General content Right-->
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-offset-6 col-md-6">
			<div id="center">
				<!-- <h1>Restool</h1> -->
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<!-- <h3>To simplify restaurateur's life</h3> -->
				<h3><a href="<?php echo home_url(); ?>"><?php bloginfo('description'); ?></a></h3>
				<h4><em>Free online cool tools, for cool restaurateurs</em></h4>

			</div>
		</div>
	</div>
	<!-- Arrow down center-->
	<div class="row">
		<div class="col-md-offset-4 col-md-4">
			<div id="clear">
				<p>Learn more</p>
				<i class="fa fa-chevron-down"></i>
			</div>
		</div>
	</div>
</div>
</section>
<!-- End of 1st page welcome-->

<section id="space">
<div class="container">
	<!-- 1st Row People-->
	<article class="row" id="spaceA">
		<div class="col-xs-6 col-sm-6 col-md-offset-3 col-md-3">
			<div class="floatL">
				<h3>Your people</h3>
				<p>Simple recruiting</p>
				<p>Keep or fire?</p>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<a href="people.php" target="_blank">
				<div class="floatPicR" data-toggle="tooltip" data-placement="bottom" title="Building Site">
					<div class="son"></div>
				</div>
			</a>
		</div>	
	</article>
	<!-- 2nd Row Operation-->
	<article class="row clear1" id="spaceB">
		<div class="col-xs-6 col-sm-6 col-md-offset-3 col-md-3">
			<a href="operation.php" target="_blank">
				<div class="floatPicL" data-toggle="tooltip" data-placement="bottom" title="Building site">
					<div class="son"></div>
				</div>
			</a>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="floatR">
				<h3>Your operation</h3>
				<p>Easy supplier-order</p>
				<p>Easy food cost-> pricing</p>
			</div>
		</div>	
	</article>
	<!-- 3rd Row Community -->
	<article class="row clear1" id="spaceC" >
		<div class="col-xs-6 col-sm-6 col-md-offset-3 col-md-3">
			<div class="floatLL">
				<h3>Your community</h3>
				<p>Com to one: review/goal</p>
				<p>Com to all: schedule/note/poll</p>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<a href="community.php" target="_blank">
				<div class="floatPicRR" data-toggle="tooltip" data-placement="bottom" title="Building site">
					<div class="son"></div>
				</div>
			</a>
		</div>
	</article>
	<div class="clear"></div>
</div>
</section>
<!-- End of 2nd page Tools-->

<section>
<div class="container">
	<div class="row">
		<!-- Center Why sign up ?-->
		<div class="col-md-offset-4 col-md-4">
			<div id="mid">
				<h2 class="center">Why sign up ?</h2>
					<ol>
						<li>Access your data from anywhere</li>
						<li>Save your data on our cloud based server</li>
						<li>Browse your tool generated data for decisions</li>
						<li>Re-use tools with your parameter, its simpler and faster</li>
					</ol>
			</div>
		</div>
	</div>
</div>
</section>
<!-- End of 3rd page Why sign up?-->

<?php get_footer(); ?>
	<html>
	<head>
		<title>The Barn</title>
		<link href='<?php echo base_url('css/mystyle.css'); ?> ' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		  
	</head>
	
	<body background="<?php echo base_url('images/img1.gif'); ?>">
		<center>
			<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
			<div id= "header">
				<h1>THE BARN</h1>
				<h2>BY CSIT201</h2>
<form method="post">
				<div id="menu" style="margin-top: 110px; margin-left: -10px;">
				<ul class="navbar-nav">
					
			    	<li class="nav-item">

			      		<a class="nav-link" name="home"  type="submit">Homepage</a>
			    	</li>
			    	<li class="nav-item">
			      		<a class="nav-link" name="myblog" type="submit">My Blog</a>
			    	</li>


			    	<li class="nav-item">
			      		<a class="nav-link" href="#">Photo Gallery</a>
			    	</li>
			    	<li class="nav-item">
			      		<a class="nav-link" href="#">Favorite Sites</a>
			    	</li>
			    	<li class="nav-item">
			      		<a class="nav-link" href="#">Contact Me</a>
			    	</li>
			  	</ul>
			</div>
</form>
			</div>
			
			</nav>
		</center>

 			
		<!-- Body -->
		<div class="container-fluid" style="margin-top:150px">
		<div id="content">
		  <div id="colOne">
		    <h3>Veroeros Etiam</h3>
		    <ul>
		      <li><a href="#">Sed accumsan congue</a></li>
		      <li><a href="#">Nulla dignissim nec augue</a></li>
		      <li><a href="#">Nunc ante elit nulla</a></li>
		      <li><a href="#">Aliquam suscipit consequat</a></li>
		      <li><a href="#">Cursus sed arcu sed</a></li>
		      <li><a href="#">Nulla dignissim nec augue</a></li>
		      <li><a href="#">Sed accumsan congue</a></li>
		      <li><a href="#">Nulla dignissim nec augue</a></li>
		      <li><a href="#">Nunc ante elit nulla</a></li>
		      <li><a href="#">Aliquam suscipit consequat</a></li>
		      <li><a href="#">Cursus sed arcu sed</a></li>
		      <li><a href="#">Sed accumsan congue</a></li>
		      <li><a href="#">Nulla dignissim nec augue</a></li>
		      <li><a href="#">Nunc ante elit nulla</a></li>
		      <li><a href="#">Aliquam suscipit consequat</a></li>
		      <li><a href="#">Cursus sed arcu sed</a></li>
		      <li><a href="#">Nulla dignissim nec augue</a></li>
		      <li><a href="#">Sed accumsan congue</a></li>
		      <li><a href="#">Nulla dignissim nec augue</a></li>
		      <li><a href="#">Nunc ante elit nulla</a></li>
		      <li><a href="#">Aliquam suscipit consequat</a></li>
		      <li><a href="#">Cursus sed arcu sed</a></li>
		    </ul>
		  </div>
		  <div id="colTwo">
		    <h2>Welcome to My Website</h2>
		    <p class="byline">Posted in <a href="#" style = "color: #000000">Uncategorized</a> by Farmer on the December 8th, 2008</p>
		    <p><strong>The Barn</strong> is a free template from Free CSS Templates released under a <a href="http://creativecommons.org/licenses/by/2.5/" style = "color: #000000">Creative Commons Attribution 2.5 License</a>. The header photo is from <a href="http://www.pdphoto.org/" style = "color: #000000"> PDPhoto.org</a>. You're free to use this template for both commercial or personal use. I only ask that you link back to <a href="http://www.mysite.com/" style = "color: #000000"> my site </a> in some way.</p>
		    <p><strong><em>Enjoy! :)</em></strong></p>
		    <h3>Lorem Ipsum Dolorem</h3>
		    <p class="byline">Posted in <a href="#" style = "color: #000000">Uncategorized</a> by Farmer on the December 8th, 200 </p>
		    <p><img src="<?php echo base_url('images/img6.jpg'); ?> " alt="" width="102" height="102" class="image" /></p>
		    <p>Sed tempus turpis vel quam molestie pulvinar. Suspendisse venenatis dolor semper ipsum. Quisque tempus erat ac mi. Aliquam semper, est nec hendrerit dignissim, ligula turpis sagittis purus, ut viverra velit eros at augue. Pellentesque mi nisi, porta eget, pharetra ac, sollicitudin sit amet, nisi. In sapien ligula lorem sollicitudin facilisis, sodales eget, tempus in, mauris. Cras risus sem, adipiscing non, convallis ac, consectetuer eu, dolor. In quam lorem ipsum dolor sit amet. Curabitur tempus aliquam nulla. Etiam eros.</p>
		  </div>
		  <div style="clear: both;">&nbsp;</div>
		</div>
		
		
		
		
		<!-- Footer -->
			<div id="footer">
				<p>Copyright &copy; CSIT201 Mabuhay Class</p>
			</div>
		</div>
			<style>
				.example{
					color: red;
					text-decoration: none;
				}	
			</style>
	</body>
</html>


<?php  
if($_GET){
    if(isset($_GET['insert'])){
        insert();
    }elseif(isset($_GET['select'])){
        select();
    }
}

?>
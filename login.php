<?php 
echo "<!-- cmd panel(v0.0.1) -->";
?>
<!DOCTYPE html><!--[if lt IE 7]>
<html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full sidebar sidebar-full">

<![endif]--><!--[if IE 7]>
<html class="ie lt-ie9 lt-ie8 fluid top-full sticky-top sidebar sidebar-full">

<![endif]--><!--[if IE 8]>
<html class="ie lt-ie9 fluid top-full sticky-top sidebar sidebar-full">

<![endif]--><!--[if gt IE 8]>
<html class="ie gt-ie8 fluid top-full sticky-top sidebar sidebar-full">

<![endif]--><!--[if !IE]>
<!-->
<html class="fluid top-full sticky-top sidebar sidebar-full">

<!-- <![endif]-->

<head>
<title>CartMyDeal Seller Panel (v0.0.1)</title>
<!-- Meta -->
<meta charset="UTF-8" />
<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="IE=9; IE=8; IE=7; IE=EDGE" http-equiv="X-UA-Compatible">
<!-- Bootstrap -->
<link href="common/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="common/bootstrap/css/responsive.css" rel="stylesheet" type="text/css">
<!-- Glyphicons Font Icons -->
<link href="common/theme/fonts/glyphicons/css/glyphicons.css" rel="stylesheet">
<link href="common/theme/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!--[if IE 7]>
<link href="common/theme/fonts/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
<![endif]-->
<!-- Uniform Pretty Checkboxes -->
<link href="common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet">
<!-- PrettyPhoto -->
<link href="common/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
<!-- Main Theme Stylesheet :: CSS -->
<link href="common/theme/css/style-flat.css?1372280973" rel="stylesheet" type="text/css">
<!-- LESS.js Library -->
<script src="common/theme/scripts/plugins/system/less.min.js"></script>
</head>

<body class="login ">

<!-- Wrapper -->
<div id="login">
	<div class="container">
		<div class="wrapper">
			<h1 class="glyphicons lock">CartMyDeal Selleres Panel<i></i></h1>
			<!-- Box -->
			<div class="widget widget-heading-simple widget-body-gray">
				<div class="widget-body">
					<!-- Forms -->
					<!-- commited by akshay -->
					<!-- Login Form -->
					<form id="loginform" action="login" method="post">
						<label>Username or Email</label>
						<input id="ussername" class="input-block-level" name="username" placeholder="Your Username or Email address" type="text" />
						<label>Password <a class="password" href="#" id="forgotbutton">forgot it?</a></label>
						<input id="password" class="input-block-level margin-none" name="password" placeholder="Your Password" type="password" />
						<div class="separator bottom">
						</div>
						<div class="row-fluid">
							<div class="span8">
								<div class="uniformjs">
									<label class="checkbox">
									<input type="checkbox" value="remember-me">Remember 
									me</label></div>
							</div>
							<div class="span4 center">
								<button id="loginbutton" class="btn btn-block btn-inverse" type="button">
								Sign in</button></div>
						</div>
					</form>
					<!-- login form ends -->
					<!-- Forgot Form -->
					<form id="forgotform" action="login" method="post">
						<label>Username or Email</label>
						<input id="ussername" class="input-block-level" name="username" placeholder="Your Username or Email address" type="text" />
						<label><a class="password" href="#" id="backbutton">Back</a></label>
						
						<div class="separator bottom">
						</div>
						<div class="row-fluid">
							
							<div class="span4 center">
								<button id="loginbutton" class="btn btn-block btn-inverse" type="button">
								Reset</button></div>
						</div>
					</form>
					<!-- forgot form ends -->
					<!-- // Forms END --></div>
				<div id="dataerror" class="widget-footer">
					<p class="glyphicons restart"><i></i>Please enter both your 
					username and password ...</p>
				</div>
			</div>
			<!-- // Box END -->
			<div class="innerT center">
				<a class="btn btn-icon-stacked btn-block btn-success glyphicons user_add" href="signup.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-flat&amp;sidebar-sticky=true&amp;top_style=full&amp;sidebar_style=full">
				<i></i><span>Don't have an account?</span><span class="strong">Sign 
				up</span></a> </div>
		</div>
	</div>
</div>
<!-- // Wrapper END -->
<!-- JQuery -->
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- Code Beautify -->
<script src="common/theme/scripts/plugins/other/js-beautify/beautify.js"></script>
<script src="common/theme/scripts/plugins/other/js-beautify/beautify-html.js"></script>
<!-- PrettyPhoto -->
<script src="common/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js"></script>
<!-- Global -->
<script>
	var basePath = '',
		commonPath = 'common/';
	</script>
<!-- Modernizr -->
<script src="common/theme/scripts/plugins/system/modernizr.js"></script>
<!-- Bootstrap -->
<script src="common/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll Plugin -->
<script src="common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>
<!-- Common Demo Script -->
<script src="common/theme/scripts/demo/common.js?1372280973"></script>
<!-- Holder Plugin -->
<script src="common/theme/scripts/plugins/other/holder/holder.js"></script>
<script>
		Holder.add_theme("dark", {background:"#000", foreground:"#aaa", size:9});
		Holder.add_theme("white", {background:"#fff", foreground:"#c9c9c9", size:9});
	</script>
<!-- Uniform Forms Plugin -->
<script src="common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>
<!-- script to check empty username and password -->
<script>
var err=0;
jQuery('#dataerror').hide();
jQuery('#loginbutton').click(function()
{
	if ((jQuery('#username').text() == '') || (jQuery('#password').text() == ''))
	{
	err=1;
	jQuery('#dataerror').show();
	return false;
	}
	else
	{
	jQuery('#dataerror').hide();
	return true;
	}
});

jQuery('#forogtbutton').click(function()
{
jQuery('#loginform').hide();
jQuery('#forgotform').show();
})

jQuery('#backbutton').click(function()
{
jQuery('#loginform').show();
jQuery('#forgotform').hide();
})

</script>

</body>

</html>
<![endif]-->

</html>

</html>

</html>

</html>

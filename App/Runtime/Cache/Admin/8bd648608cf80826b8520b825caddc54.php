<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>物管云台后台管理</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="刘春喜    ">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="/wgyttp/Public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/wgyttp/Public/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="/wgyttp/Public/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="/wgyttp/Public/css/style-responsive.css" rel="stylesheet">
	<link href='/wgyttp/Public/css/google-font.css' rel='stylesheet' type='text/css'><!--
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="/wgyttp/Public/css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="/wgyttp/Public/css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="/wgyttp/Public/img/favicon.ico">
	<!-- end: Favicon -->

			<style type="text/css">
			body { background: url(/wgyttp/Public/img/bg-login.jpg) !important; }
		</style>



</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">

			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="<?php echo U('Index/index');?>"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>登录你的账号</h2>
					<form class="form-horizontal" action="index.html" method="post">
						<fieldset>

							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>

							<label class="remember" for="remember"><input type="checkbox" id="remember" />记住我</label>

							<div class="button-login">
								<button type="submit" class="btn btn-primary">登录</button>
							</div>
							<div class="clearfix"></div>
						</fieldset>
					</form>
					<hr>
					<h3>忘记密码?</h3>
					<p>
						没问题, <a href="#">点击这里</a>获取新的密码.
					</p>
				</div><!--/span-->
			</div><!--/row-->


	</div><!--/.fluid-container-->

		</div><!--/fluid-row-->

	<!-- start: JavaScript-->

		<script src="/wgyttp/Public/js/jquery-1.9.1.min.js"></script>
		<script src="/wgyttp/Public/js/jquery-migrate-1.0.0.min.js"></script>

		<script src="/wgyttp/Public/js/jquery-ui-1.10.0.custom.min.js"></script>

		<script src="/wgyttp/Public/js/jquery.ui.touch-punch.js"></script>

		<script src="/wgyttp/Public/js/modernizr.js"></script>

		<script src="/wgyttp/Public/js/bootstrap.min.js"></script>

		<script src="/wgyttp/Public/js/jquery.cookie.js"></script>

		<script src='/wgyttp/Public/js/fullcalendar.min.js'></script>

		<script src='/wgyttp/Public/js/jquery.dataTables.min.js'></script>

		<script src="/wgyttp/Public/js/excanvas.js"></script>
		<script src="/wgyttp/Public/js/jquery.flot.js"></script>
		<script src="/wgyttp/Public/js/jquery.flot.pie.js"></script>
		<script src="/wgyttp/Public/js/jquery.flot.stack.js"></script>
		<script src="/wgyttp/Public/js/jquery.flot.resize.min.js"></script>

		<script src="/wgyttp/Public/js/jquery.chosen.min.js"></script>

		<script src="/wgyttp/Public/js/jquery.uniform.min.js"></script>

		<script src="/wgyttp/Public/js/jquery.cleditor.min.js"></script>

		<script src="/wgyttp/Public/js/jquery.noty.js"></script>

		<script src="/wgyttp/Public/js/jquery.elfinder.min.js"></script>

		<script src="/wgyttp/Public/js/jquery.raty.min.js"></script>

		<script src="/wgyttp/Public/js/jquery.iphone.toggle.js"></script>

		<script src="/wgyttp/Public/js/jquery.uploadify-3.1.min.js"></script>

		<script src="/wgyttp/Public/js/jquery.gritter.min.js"></script>

		<script src="/wgyttp/Public/js/jquery.imagesloaded.js"></script>

		<script src="/wgyttp/Public/js/jquery.masonry.min.js"></script>

		<script src="/wgyttp/Public/js/jquery.knob.modified.js"></script>

		<script src="/wgyttp/Public/js/jquery.sparkline.min.js"></script>

		<script src="/wgyttp/Public/js/counter.js"></script>

		<script src="/wgyttp/Public/js/retina.js"></script>

		<script src="/wgyttp/Public/js/custom.js"></script>
	<!-- end: JavaScript-->

</body>
</html>
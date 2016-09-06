<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>物管云台后台管理</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="刘春喜">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="/wgyt/Public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/wgyt/Public/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="/wgyt/Public/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="/wgyt/Public/css/style-responsive.css" rel="stylesheet">
	<link href='/wgyt/Public/css/google-font.css' rel='stylesheet' type='text/css'><!--
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="/wgyt/Public/css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="/wgyt/Public/css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="/wgyt/Public/img/favicon.ico">
	<!-- end: Favicon -->

</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>物管云台后台管理</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span>
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span>
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div>
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	刘春喜
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	刘春喜
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	刘春喜
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	刘春喜
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar5.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	刘春喜
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> 刘春喜
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>账号设置</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> 个人信息</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> 退出</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet">控制台</span></a></li>
						<!-- <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
						<li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
						<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>
						</li>
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li> -->
						<li>
							<a class="dropmenu" href="#"> <i class="icon-align-justify icon-folder-close-alt"></i>
								<span class="hidden-tablet">物业管理</span>
								<!-- <span class="label label-important">3</span> -->
							</a>
							<ul>
								<li><a class="submenu" href="/wgyt/index.php/Admin/Estate/index"><i class="icon-file-alt"></i><span class="hidden-tablet">小区管理</span></a></li>
								<li><a class="submenu" href="<?php echo U('Estate/add');?>"><i class="icon-file-alt"></i><span class="hidden-tablet">添加小区</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet">回收站</span></a></li>
							</ul>
						</li>
						<!-- <li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li> -->
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> 登录</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">控制台</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">小区管理</a></li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>小区列表</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						<thead>
							  <tr>
								  <th>ID号</th>
								  <th>物业编号</th>
								  <th>名称</th>
								  <th>电话</th>
								  <th>地址</th>
								  <th>图片1</th>
								  <th>图片2</th>
								  <th>图片3</th>
								  <th>操作</th>
							  </tr>
						  </thead>
						  <tbody>
					    <?php if(is_array($estates)): foreach($estates as $key=>$estate): ?><!-- <tr>
		                        <td><?php echo ($vo["Id"]); ?></td>
		                        <td><?php echo ($vo["cname"]); ?></td>
		                        <td><?php echo ($vo["tel"]); ?></td>
		                        <td>删除 编辑</td>
		                    </tr> -->
							<tr>
								<td><?php echo ($estate["id"]); ?></td>
								<td class="center"><?php echo ($estate["propertyid"]); ?></td>
								<td class="center"><?php echo ($estate["name"]); ?></td>
								<td class="center"><?php echo ($estate["tel"]); ?></td>
								<td class="center"><?php echo ($estate["address"]); ?></td>
								<td class="center"><img src="/wgyt/Public/Admin/Uploads/<?php echo ($estate["img1"]); ?>" height="80" width="80"></td>
								<td class="center"><img src="/wgyt/Public/Admin/Uploads/<?php echo ($estate["img2"]); ?>" height="80" width="80"></td>
								<td class="center"><img src="/wgyt/Public/Admin/Uploads/<?php echo ($estate["img3"]); ?>" height="80" width="80"></td>
								<!-- <td class="center">
									<span class="label label-success">Active</span>
								</td> -->
								<td class="center">
									<a class="btn btn-success" href="#">
										查看
										<!-- <i class="halflings-icon white zoom-in"></i> -->
									</a>
									<!-- <a class="btn btn-info" href="<?php echo U('Estate/modify',array('id'=>$estate['id']));?>"> -->
                                    <!-- <a class="green" href="/wgyt/index.php/Admin/Estate/modify/id/<?php echo ($estate['id']); ?>"> -->
                                    <a class="btn btn-info" href="/wgyt/index.php/Admin/Estate/modify/id/<?php echo ($estate["id"]); ?>">
										修改
										<!-- <i class="halflings-icon white edit"></i> -->
									</a>
									<a class="btn btn-danger" href="/wgyt/index.php/Admin/Estate/del/id/<?php echo ($estate["id"]); ?>">
										删除
										<!-- <i class="halflings-icon white trash"></i> -->
									</a>
								</td>
							</tr><?php endforeach; endif; ?>
						  </tbody>
					  </table>
					</div>
				</div><!--/span-->

			</div><!--/row-->

	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2016 <a href="#" alt="Bootstrap_Metro_Dashboard">address</a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->

		<script src="/wgyt/Public/js/jquery-1.9.1.min.js"></script>
	<script src="/wgyt/Public/js/jquery-migrate-1.0.0.min.js"></script>

		<script src="/wgyt/Public/js/jquery-ui-1.10.0.custom.min.js"></script>

		<script src="/wgyt/Public/js/jquery.ui.touch-punch.js"></script>

		<script src="/wgyt/Public/js/modernizr.js"></script>

		<script src="/wgyt/Public/js/bootstrap.min.js"></script>

		<script src="/wgyt/Public/js/jquery.cookie.js"></script>

		<script src='/wgyt/Public/js/fullcalendar.min.js'></script>

		<script src='/wgyt/Public/js/jquery.dataTables.min.js'></script>

		<script src="/wgyt/Public/js/excanvas.js"></script>
	<script src="/wgyt/Public/js/jquery.flot.js"></script>
	<script src="/wgyt/Public/js/jquery.flot.pie.js"></script>
	<script src="/wgyt/Public/js/jquery.flot.stack.js"></script>
	<script src="/wgyt/Public/js/jquery.flot.resize.min.js"></script>

		<script src="/wgyt/Public/js/jquery.chosen.min.js"></script>

		<script src="/wgyt/Public/js/jquery.uniform.min.js"></script>

		<script src="/wgyt/Public/js/jquery.cleditor.min.js"></script>

		<script src="/wgyt/Public/js/jquery.noty.js"></script>

		<script src="/wgyt/Public/js/jquery.elfinder.min.js"></script>

		<script src="/wgyt/Public/js/jquery.raty.min.js"></script>

		<script src="/wgyt/Public/js/jquery.iphone.toggle.js"></script>

		<script src="/wgyt/Public/js/jquery.uploadify-3.1.min.js"></script>

		<script src="/wgyt/Public/js/jquery.gritter.min.js"></script>

		<script src="/wgyt/Public/js/jquery.imagesloaded.js"></script>

		<script src="/wgyt/Public/js/jquery.masonry.min.js"></script>

		<script src="/wgyt/Public/js/jquery.knob.modified.js"></script>

		<script src="/wgyt/Public/js/jquery.sparkline.min.js"></script>

		<script src="/wgyt/Public/js/counter.js"></script>

		<script src="/wgyt/Public/js/retina.js"></script>

		<script src="/wgyt/Public/js/custom.js"></script>
	<!-- end: JavaScript-->

</body>
</html>
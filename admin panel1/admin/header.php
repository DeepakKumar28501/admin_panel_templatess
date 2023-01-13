<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Neon | Dashboard</title>
	

	<link rel="stylesheet" href="<?=base_url('theme')?>/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?=base_url('theme')?>/assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?=base_url('theme')?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url('theme')?>/assets/css/neon-core.css">
	<link rel="stylesheet" href="<?=base_url('theme')?>/assets/css/neon-theme.css">
	<link rel="stylesheet" href="<?=base_url('theme')?>/assets/css/neon-forms.css">
	<link rel="stylesheet" href="<?=base_url('theme')?>/assets/css/custom.css">

	<script src="<?=base_url('theme')?>/assets/js/jquery-1.11.0.min.js"></script>

	<!--[if lt IE 9]><script src="<?=base_url('theme')?>/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<img src="<?=base_url('theme')?>/assets/images/logo@2x.png" width="120" alt="" />
				</a>
			</div>
			
						<!-- logo collapse icon -->
						
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
									
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>
				
		
		
				
		
				
		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<li id="search">
				<form method="get" action="">
					<input type="text" name="q" class="search-input" placeholder="Search something..."/>
					<button type="submit">
						<i class="entypo-search"></i>
					</button>
				</form>
			</li>
			<li class="active opened active">
				<a href="index.html">
					<i class="entypo-gauge"></i>
					<span>Dashboard</span>
				</a>
				<ul>
					<li class="active">
						<a href="index.html">
							<span>Dashboard 1</span>
						</a>
					</li>
					<li>
						<a href="dashboard-2.html">
							<span>Dashboard 2</span>
						</a>
					</li>
					<li>
						<a href="dashboard-3.html">
							<span>Dashboard 3</span>
						</a>
					</li>
					<li>
						<a href="skin-black.html">
							<span>Skins</span>
						</a>
						<ul>
							<li>
								<a href="skin-black.html">
									<span>Black Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-white.html">
									<span>White Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-purple.html">
									<span>Purple Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-cafe.html">
									<span>Cafe Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-red.html">
									<span>Red Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-green.html">
									<span>Green Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-yellow.html">
									<span>Yellow Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-blue.html">
									<span>Blue Skin</span>
								</a>
							</li>
							<li>
								<a href="http://www.weidea.net">
									<span>More themes</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="highlights.html">
							<span>What's New</span>
							<span class="badge badge-success badge-roundless">v1.7</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="layout-api.html">
					<i class="entypo-layout"></i>
					<span>Layouts</span>
				</a>
				<ul>
					<li>
						<a href="layout-api.html">
							<span>Layout API</span>
						</a>
					</li>
					<li>
						<a href="layout-collapsed-sidebar.html">
							<span>Collapsed Sidebar</span>
						</a>
					</li>
					<li>
						<a href="layout-fixed-sidebar.html">
							<span>Fixed Sidebar</span>
						</a>
					</li>
					<li>
						<a href="layout-chat-open.html">
							<span>Chat Open</span>
						</a>
					</li>
					<li>
						<a href="layout-horizontal-menu-boxed.html">
							<span>Horizontal Menu Boxed</span>
						</a>
					</li>
					<li>
						<a href="layout-horizontal-menu-fluid.html">
							<span>Horizontal Menu Fluid</span>
						</a>
					</li>
					<li>
						<a href="layout-mixed-menus.html">
							<span>Mixed Menus</span>
						</a>
					</li>
					<li>
						<a href="layout-right-sidebar.html">
							<span>Right Sidebar</span>
						</a>
					</li>
					<li>
						<a href="layout-both-menus-right-sidebar.html">
							<span>Both Menus (Right Sidebar)</span>
						</a>
					</li>
					<li>
						<a href="layout-page-transition-fade.html">
							<span>Page Enter Transitions</span>
						</a>
						<ul>
							<li>
								<a href="layout-page-transition-fade.html">
									<span>Fade Scale</span>
								</a>
							</li>
							<li>
								<a href="layout-page-transition-left-in.html">
									<span>Left In</span>
								</a>
							</li>
							<li>
								<a href="layout-page-transition-right-in.html">
									<span>Right In</span>
								</a>
							</li>
							<li>
								<a href="layout-page-transition-fade-only.html">
									<span>Fade Only</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="layout-boxed.html">
							<span>Boxed Layout</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="index.html" target="_blank">
					<i class="entypo-monitor"></i>
					<span>Frontend</span>
				</a>
			</li>
			<li>
				<a href="ui-panels.html">
					<i class="entypo-newspaper"></i>
					<span>UI Elements</span>
				</a>
				<ul>
					<li>
						<a href="ui-panels.html">
							<span>Panels</span>
						</a>
					</li>
					<li>
						<a href="ui-tiles.html">
							<span>Tiles</span>
						</a>
					</li>
					<li>
						<a href="forms-buttons.html">
							<span>Buttons</span>
						</a>
					</li>
					<li>
						<a href="ui-typography.html">
							<span>Typography</span>
						</a>
					</li>
					<li>
						<a href="ui-tabs-accordions.html">
							<span>Tabs &amp; Accordions</span>
						</a>
					</li>
					<li>
						<a href="ui-tooltips-popovers.html">
							<span>Tooltips &amp; Popovers</span>
						</a>
					</li>
					<li>
						<a href="ui-navbars.html">
							<span>Navbars</span>
						</a>
					</li>
					<li>
						<a href="ui-breadcrumbs.html">
							<span>Breadcrumbs</span>
						</a>
					</li>
					<li>
						<a href="ui-badges-labels.html">
							<span>Badges &amp; Labels</span>
						</a>
					</li>
					<li>
						<a href="ui-progress-bars.html">
							<span>Progress Bars</span>
						</a>
					</li>
					<li>
						<a href="ui-modals.html">
							<span>Modals</span>
						</a>
					</li>
					<li>
						<a href="ui-blockquotes.html">
							<span>Blockquotes</span>
						</a>
					</li>
					<li>
						<a href="ui-alerts.html">
							<span>Alerts</span>
						</a>
					</li>
					<li>
						<a href="ui-pagination.html">
							<span>Pagination</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="mailbox.html">
					<i class="entypo-mail"></i>
					<span>Mailbox</span>
					<span class="badge badge-secondary">8</span>
				</a>
				<ul>
					<li>
						<a href="mailbox.html">
							<i class="entypo-inbox"></i>
							<span>Inbox</span>
						</a>
					</li>
					<li>
						<a href="mailbox-compose.html">
							<i class="entypo-pencil"></i>
							<span>Compose Message</span>
						</a>
					</li>
					<li>
						<a href="mailbox-message.html">
							<i class="entypo-attach"></i>
							<span>View Message</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="forms-main.html">
					<i class="entypo-doc-text"></i>
					<span>Forms</span>
				</a>
				<ul>
					<li>
						<a href="forms-main.html">
							<span>Basic Elements</span>
						</a>
					</li>
					<li>
						<a href="forms-advanced.html">
							<span>Advanced Plugins</span>
						</a>
					</li>
					<li>
						<a href="forms-wizard.html">
							<span>Form Wizard</span>
						</a>
					</li>
					<li>
						<a href="forms-validation.html">
							<span>Data Validation</span>
						</a>
					</li>
					<li>
						<a href="forms-masks.html">
							<span>Input Masks</span>
						</a>
					</li>
					<li>
						<a href="forms-sliders.html">
							<span>Sliders</span>
						</a>
					</li>
					<li>
						<a href="forms-file-upload.html">
							<span>File Upload</span>
						</a>
					</li>
					<li>
						<a href="forms-wysiwyg.html">
							<span>Editors</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="tables-main.html">
					<i class="entypo-window"></i>
					<span>Tables</span>
				</a>
				<ul>
					<li>
						<a href="tables-main.html">
							<span>Basic Tables</span>
						</a>
					</li>
					<li>
						<a href="tables-datatable.html">
							<span>Data Tables</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="extra-icons.html">
					<i class="entypo-bag"></i>
					<span>Extra</span>
					<span class="badge badge-info badge-roundless">New Items</span>
				</a>
				<ul>
					<li>
						<a href="extra-icons.html">
							<span>Icons</span>
							<span class="badge badge-success">3</span>
						</a>
						<ul>
							<li>
								<a href="extra-icons.html">
									<span>Font Awesome</span>
								</a>
							</li>
							<li>
								<a href="extra-icons-entypo.html">
									<span>Entypo</span>
								</a>
							</li>
							<li>
								<a href="extra-icons-glyphicons.html">
									<span>Glyph Icons</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-portlets.html">
							<span>Portlets</span>
						</a>
					</li>
					<li>
						<a href="extra-google-maps.html">
							<span>Maps</span>
						</a>
						<ul>
							<li>
								<a href="extra-google-maps.html">
									<span>Google Maps</span>
								</a>
							</li>
							<li>
								<a href="extra-vector-maps.html">
									<span>Vector Maps</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-chat-api.html">
							<span>Chat API</span>
						</a>
					</li>
					<li>
						<a href="extra-calendar.html">
							<span>Calendar</span>
						</a>
					</li>
					<li>
						<a href="extra-notes.html">
							<span>Notes</span>
						</a>
					</li>
					<li>
						<a href="extra-lockscreen.html">
							<span>Lockscreen</span>
						</a>
					</li>
					<li>
						<a href="extra-login.html">
							<span>Login</span>
						</a>
					</li>
					<li>
						<a href="extra-register.html">
							<span>Register</span>
						</a>
					</li>
					<li>
						<a href="extra-invoice.html">
							<span>Invoice</span>
						</a>
					</li>
					<li>
						<a href="extra-members.html">
							<span>Members</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-gallery.html">
							<span>Gallery</span>
						</a>
						<ul>
							<li>
								<a href="extra-gallery.html">
									<span>Albums</span>
								</a>
							</li>
							<li>
								<a href="extra-gallery-single.html">
									<span>Single Album</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-profile.html">
							<span>Profile</span>
						</a>
					</li>
					<li>
						<a href="extra-404.html">
							<span>404 Page</span>
						</a>
					</li>
					<li>
						<a href="extra-blank-page.html">
							<span>Blank Page</span>
						</a>
					</li>
					<li>
						<a href="extra-timeline.html">
							<span>Timeline</span>
						</a>
					</li>
					<li>
						<a href="extra-comments.html">
							<span>Comments</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-timeline-centered.html">
							<span>Timeline Centered</span>
						</a>
					</li>
					<li>
						<a href="extra-tocify.html">
							<span>Tocify</span>
						</a>
					</li>
					<li>
						<a href="ui-notifications.html">
							<span>Notifications</span>
						</a>
					</li>
					<li>
						<a href="extra-new-post.html">
							<span>New Post</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-settings.html">
							<span>Settings</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-scrollbox.html">
							<span>Scrollbox</span>
						</a>
					</li>
					<li>
						<a href="extra-image-crop.html">
							<span>Image Crop</span>
						</a>
					</li>
					<li>
						<a href="extra-search.html">
							<span>Search Page</span>
						</a>
					</li>
					<li>
						<a href="extra-language-selector.html">
							<span>Language Selector</span>
						</a>
					</li>
					<li>
						<a href="extra-nestable.html">
							<span>Nestable Lists</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-file-tree.html">
							<span>File Tree</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-load-progress.html">
							<span>Load Progress</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="charts.html">
					<i class="entypo-chart-bar"></i>
					<span>Charts</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="entypo-flow-tree"></i>
					<span>Menu Levels</span>
				</a>
				<ul>
					<li>
						<a href="#">
							<i class="entypo-flow-line"></i>
							<span>Menu Level 1.1</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-flow-line"></i>
							<span>Menu Level 1.2</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-flow-line"></i>
							<span>Menu Level 1.3</span>
						</a>
						<ul>
							<li>
								<a href="#">
									<i class="entypo-flow-parallel"></i>
									<span>Menu Level 2.1</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-parallel"></i>
									<span>Menu Level 2.2</span>
								</a>
								<ul>
									<li>
										<a href="#">
											<i class="entypo-flow-cascade"></i>
											<span>Menu Level 3.1</span>
										</a>
										<ul>
											<li>
												<a href="#">
													<i class="entypo-flow-branch"></i>
													<span>Menu Level 4.1</span>
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-cascade"></i>
											<span>Menu Level 3.2</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-parallel"></i>
									<span>Menu Level 2.3</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
				
	</div>	

	<div class="main-content">
		
<div class="row">
	
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		
		<ul class="user-info pull-left pull-none-xsm">
		
						<!-- Profile Info -->
			<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?=base_url('theme')?>/assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
					Art Ramadani
				</a>
				
				<ul class="dropdown-menu">
					
					<!-- Reverse Caret -->
					<li class="caret"></li>
					
					<!-- Profile sub-links -->
					<li>
						<a href="extra-timeline.html">
							<i class="entypo-user"></i>
							Edit Profile
						</a>
					</li>
					
					<li>
						<a href="mailbox.html">
							<i class="entypo-mail"></i>
							Inbox
						</a>
					</li>
					
					<li>
						<a href="extra-calendar.html">
							<i class="entypo-calendar"></i>
							Calendar
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="entypo-clipboard"></i>
							Tasks
						</a>
					</li>
				</ul>
			</li>
		
		</ul>
				
		<ul class="user-info pull-left pull-right-xs pull-none-xsm">
			
			<!-- Raw Notifications -->
			<li class="notifications dropdown">
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-attention"></i>
					<span class="badge badge-info">6</span>
				</a>
				
				<ul class="dropdown-menu">
					<li class="top">
	<p class="small">
		<a href="#" class="pull-right">Mark all Read</a>
		You have <strong>3</strong> new notifications.
	</p>
</li>

<li>
	<ul class="dropdown-menu-list scroller">
		<li class="unread notification-success">
			<a href="#">
				<i class="entypo-user-add pull-right"></i>
				
				<span class="line">
					<strong>New user registered</strong>
				</span>
				
				<span class="line small">
					30 seconds ago
				</span>
			</a>
		</li>
		
		<li class="unread notification-secondary">
			<a href="#">
				<i class="entypo-heart pull-right"></i>
				
				<span class="line">
					<strong>Someone special liked this</strong>
				</span>
				
				<span class="line small">
					2 minutes ago
				</span>
			</a>
		</li>
		
		<li class="notification-primary">
			<a href="#">
				<i class="entypo-user pull-right"></i>
				
				<span class="line">
					<strong>Privacy settings have been changed</strong>
				</span>
				
				<span class="line small">
					3 hours ago
				</span>
			</a>
		</li>
		
		<li class="notification-danger">
			<a href="#">
				<i class="entypo-cancel-circled pull-right"></i>
				
				<span class="line">
					John cancelled the event
				</span>
				
				<span class="line small">
					9 hours ago
				</span>
			</a>
		</li>
		
		<li class="notification-info">
			<a href="#">
				<i class="entypo-info pull-right"></i>
				
				<span class="line">
					The server is status is stable
				</span>
				
				<span class="line small">
					yesterday at 10:30am
				</span>
			</a>
		</li>
		
		<li class="notification-warning">
			<a href="#">
				<i class="entypo-rss pull-right"></i>
				
				<span class="line">
					New comments waiting approval
				</span>
				
				<span class="line small">
					last week
				</span>
			</a>
		</li>
	</ul>
</li>

<li class="external">
	<a href="#">View all notifications</a>
</li>				</ul>
				
			</li>
			
			<!-- Message Notifications -->
			<li class="notifications dropdown">
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-mail"></i>
					<span class="badge badge-secondary">10</span>
				</a>
				
				<ul class="dropdown-menu">
					<li>
	<ul class="dropdown-menu-list scroller">
		<li class="active">
			<a href="#">
				<span class="image pull-right">
					<img src="<?=base_url('theme')?>/assets/images/thumb-1.png" alt="" class="img-circle" />
				</span>
				
				<span class="line">
					<strong>Luc Chartier</strong>
					- yesterday
				</span>
				
				<span class="line desc small">
					This ain’t our first item, it is the best of the rest.
				</span>
			</a>
		</li>
		
		<li class="active">
			<a href="#">
				<span class="image pull-right">
					<img src="<?=base_url('theme')?>/assets/images/thumb-2.png" alt="" class="img-circle" />
				</span>
				
				<span class="line">
					<strong>Salma Nyberg</strong>
					- 2 days ago
				</span>
				
				<span class="line desc small">
					Oh he decisively impression attachment friendship so if everything. 
				</span>
			</a>
		</li>
		
		<li>
			<a href="#">
				<span class="image pull-right">
					<img src="<?=base_url('theme')?>/assets/images/thumb-3.png" alt="" class="img-circle" />
				</span>
				
				<span class="line">
					Hayden Cartwright
					- a week ago
				</span>
				
				<span class="line desc small">
					Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
				</span>
			</a>
		</li>
		
		<li>
			<a href="#">
				<span class="image pull-right">
					<img src="<?=base_url('theme')?>/assets/images/thumb-4.png" alt="" class="img-circle" />
				</span>
				
				<span class="line">
					Sandra Eberhardt
					- 16 days ago
				</span>
				
				<span class="line desc small">
					On so attention necessary at by provision otherwise existence direction.
				</span>
			</a>
		</li>
	</ul>
</li>

<li class="external">
	<a href="mailbox.html">All Messages</a>
</li>				</ul>
				
			</li>
			
			<!-- Task Notifications -->
			<li class="notifications dropdown">
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-list"></i>
					<span class="badge badge-warning">1</span>
				</a>
				
				<ul class="dropdown-menu">
					<li class="top">
	<p>You have 6 pending tasks</p>
</li>

<li>
	<ul class="dropdown-menu-list scroller">
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Procurement</span>
					<span class="percent">27%</span>
				</span>
			
				<span class="progress">
					<span style="width: 27%;" class="progress-bar progress-bar-success">
						<span class="sr-only">27% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">App Development</span>
					<span class="percent">83%</span>
				</span>
				
				<span class="progress progress-striped">
					<span style="width: 83%;" class="progress-bar progress-bar-danger">
						<span class="sr-only">83% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">HTML Slicing</span>
					<span class="percent">91%</span>
				</span>
				
				<span class="progress">
					<span style="width: 91%;" class="progress-bar progress-bar-success">
						<span class="sr-only">91% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Database Repair</span>
					<span class="percent">12%</span>
				</span>
				
				<span class="progress progress-striped">
					<span style="width: 12%;" class="progress-bar progress-bar-warning">
						<span class="sr-only">12% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Backup Create Progress</span>
					<span class="percent">54%</span>
				</span>
				
				<span class="progress progress-striped">
					<span style="width: 54%;" class="progress-bar progress-bar-info">
						<span class="sr-only">54% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Upgrade Progress</span>
					<span class="percent">17%</span>
				</span>
				
				<span class="progress progress-striped">
					<span style="width: 17%;" class="progress-bar progress-bar-important">
						<span class="sr-only">17% Complete</span>
					</span>
				</span>
			</a>
		</li>
	</ul>
</li>

<li class="external">
	<a href="#">See all tasks</a>
</li>				</ul>
				
			</li>
		
		</ul>
	
	</div>
	
	
	<!-- Raw Links -->
	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
		<ul class="list-inline links-list pull-right">
			
			<!-- Language Selector -->			<li class="dropdown language-selector">
				
				Language: &nbsp;
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
					<img src="<?=base_url('theme')?>/assets/images/flag-uk.png" />
				</a>
				
				<ul class="dropdown-menu pull-right">
					<li>
						<a href="#">
							<img src="<?=base_url('theme')?>/assets/images/flag-de.png" />
							<span>Deutsch</span>
						</a>
					</li>
					<li class="active">
						<a href="#">
							<img src="<?=base_url('theme')?>/assets/images/flag-uk.png" />
							<span>English</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?=base_url('theme')?>/assets/images/flag-fr.png" />
							<span>François</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?=base_url('theme')?>/assets/images/flag-al.png" />
							<span>Shqip</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?=base_url('theme')?>/assets/images/flag-es.png" />
							<span>Español</span>
						</a>
					</li>
				</ul>
				
			</li>
			
			<li class="sep"></li>
			
						
			<li>
				<a href="#" data-toggle="chat" data-animate="1" data-collapse-sidebar="1">
					<i class="entypo-chat"></i>
					Chat
					
					<span class="badge badge-success chat-notifications-badge is-hidden">0</span>
				</a>
			</li>
			
			<li class="sep"></li>
			
			<li>
				<a href="extra-login.html">
					Log Out <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
		
	</div>
	
</div>

<hr />
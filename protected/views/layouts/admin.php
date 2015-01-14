<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>admin</title>
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->

	<link href="/css/bootplus.css" rel="stylesheet">

	<style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
		.hero-unit {
			padding: 60px;
		}
		@media (max-width: 980px) {
			/* Enable use of floated navbar text */
			.navbar-text.pull-right {
				float: none;
				padding-left: 5px;
				padding-right: 5px;
			}
		}
	</style>
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="#">tvergeneration</a>
			<div class="nav-collapse collapse">
				<p class="navbar-text pull-right">
					Logged in as <a href="#" class="navbar-link">Username</a>
					<a href="/admin/default/logout">Выход</a>
				</p>
				<ul class="nav">
				  <li class="active"><a href="#">Рабочий стол</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row-fluid">
			<div class="sidebar-nav span2">
				<ul class="nav nav-list">
					<li class="nav-header">Менеджер пользователей</li>
					<li><a href="/admin/user">Управление пользователями</a></li>
					<li class="nav-header">Пресс-служба</li>
					<li><a href="/admin/news">Новости</a></li>
				</ul>

			</div><!-- конец блока навигации -->

		<div class="span10">
            <div class="card page">
                <div class="card-body">
                    <?php echo $content ?>
                </div>
            </div>
		</div><!--/span-->
	</div><!--/row-->
	<footer></footer>
</div><!--/.fluid-container-->
</body>
</html>
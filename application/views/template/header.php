<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0" />
		<title>サギタリウス</title>
		<link rel="stylesheet" href="<?= base_url();  ?>assets/css/reset.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link rel="stylesheet" href="<?= base_url();  ?>assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?= base_url();  ?>assets/css/bootstrap-grid.css">
		<link rel="stylesheet" href="<?= base_url();  ?>assets/css/style.css">
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script>
			$(window).on('load', function() {
				$('nav.navigation ul li a').addClass('transition02s');
			});
		</script>
	</head>
	<body>
		<header>
			<h1 class="title" onclick="location.href='<?= base_url() ?>' " style="cursor: pointer">酒場マッチングアプリ</h1>
		</header>
		<main>
			<nav class="navigation">
				<ul class="row">
					<li class="col-4">
						<a href="<?= base_url() ?>checkin/" class="material-icons">store_mall_directory</a>
					</li>
					<li class="col-4">
						<a href="<?= base_url() ?>menu/" class="material-icons">fastfood</a>
					</li>
					<li class="col-4">
						<a href="<?= base_url() ?>about/" class="material-icons">more_vert</a>
					</li>
				</ul>
			</nav>

<!DOCTYPE html>
<html lang="ja">  
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/reset.css">
	<title>nu-quiz</title>
</head>
<body>
	<div class="wrapper">
		<?php include __DIR__ . '/components/header.php'; ?>
		<section class="menu">
			<h1>機能一覧</h1>
			<div class="menu-list">
				<a href="./challenge.php">
					<img src="./images/quiz.jpg" alt="クイズチャレンジ" loading="lazy">
					<p>クイズチャレンジ</p>
				</a>
				<a href="./quiz_edit.php">
					<img src="./images/2edit_img.jpg" alt="クイズ編集" loading="lazy">
					<p>クイズ編集</p>
				</a>
				<!-- <a href="">
					<img src="./images/graph.png" alt="実績" loading="lazy">
					<p>実績</p>
				</a> -->
				<a href="">
					<img src="./images/grow.jpg" alt="実績" loading="lazy">
					<p>履歴確認</p>
				</a>
			</div>
		</section>
	</div>
	<?php include __DIR__ . "/components/footer.php";?>
</body>
</html>

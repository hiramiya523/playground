<?php
// クイズ登録画面
// ajaxで登録したい
include_once __DIR__ . '/../include.php';

if (isset($_POST['register'], $_POST['question'], $_POST['answer'])) {
		var_dump();

		$r_quiz = [
				'question' => $_POST['question'],
				'answer' => $_POST['answer']
		];

		$s_json_format_quiz = json_encode($r_quiz);

		if ($s_json_format_quiz) {
			
		}

		// リロードによる多重投稿を防ぐ
		unset($_POST['register']);
}
?>
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
	<?php include __DIR__ . '/components/header.php'; ?>
	<section>
		<h2>クイズ登録</h2>
		<form action="./" method="post">
			<p><label for="question">問題</label><br>
					<input type="text" name="question" id="question" placeholder="問題を入力してください。"><br>
			</p>
			<p>
					<label for="answer">解答</label><br>
					<textarea name="answer" id="" cols="30" rows="10" placeholder="解答を入力してください。"></textarea>
			</p>
			<input type="submit" value="登録" name="register">
		</form>
	</section>
</body>

</html>

<?php
// $dbh = new PDO();


?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/reset.css">
	<title>クイズ一覧</title>
  <style>
      body {
        height: 3000px;
      }
  </style>
</head>
<body>
	<?php include __DIR__ . '/components/header.php'; ?>
	<table border="1">
		<caption>クイズ一覧</caption>
    <thead>
      <tr>
        <th>問題</th>
        <th>解答</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>question</td>
        <td>answer</td>
      </tr>
    </tbody>
	</table>
  <button class="test">testtest</button>
</body>
</html>

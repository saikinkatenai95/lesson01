<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample21</title>
</head>
<body>
  <h2>ご予約日</h2>
  <?php if (!empty($_REQUEST['reserve'])): ?>
  <?php $reserves = $_REQUEST['reserve']; ?>

  <ul>
      <?php foreach ($reserves as $reserve): ?>
    <li>
        <?php echo htmlspecialchars($reserve, ENT_QUOTES); ?>
      <?php endforeach; ?>
    </li>
  </ul>
  <?php else: ?>
    <p>予約がありません</p>
  <?php endif; ?>
</body>
</html>
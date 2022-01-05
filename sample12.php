<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>
<?php if ($time < 22): ?>
  <p>※ 営業時間外です</p>
<?php else: ?>
  <p>ようこそ</p>
<?php endif; ?>

<?php
$s = '';
if ($s):
    echo '$sには文字が入っています';
endif;
?>

<?php
$x = 1;
if ($x):
    echo '$xは0ではあリマ戦';
endif;
?>

<?php
$x = 1;
if ($x === 0):
    echo '$xは0です';
endif;
?>
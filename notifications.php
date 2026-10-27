<?php $title='Notifications';require 'includes/header.php';?>
<h1>Notifications</h1><?php foreach($notifications as $n):?><div class="card row"><span class="av" style="background:#FEF3C7"><?=$n[0]?></span><span class="grow"><?=e($n[1])?><br><span class="m"><?=e($n[2])?></span></span></div><?php endforeach;?>
<a class="btn out full" href="settings.php">Notification preferences</a><?php require 'includes/footer.php';?>

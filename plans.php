<?php session_start();if(isset($_POST['plan'])){$_SESSION['plan']=$_POST['plan'];$ok=1;}
$title='Plans';require 'includes/header.php';?>
<a href="profile.php">← Back</a><h1>Choose your plan</h1><?php if(!empty($ok)):?><div class="ok">✅ Plan updated to <?=e($_SESSION['plan'])?> (demo)</div><?php endif;?>
<?php foreach($plans as $pl):?><div class="card"><b><?=$pl[0]?></b><div class="price"><?=$pl[1]?></div><p class="m"><?=$pl[2]?> · <?=$pl[3]?></p>
<form method="post"><button class="btn full <?=$pl[0]=='Yearly'?'alt':''?>" name="plan" value="<?=$pl[0]?>">Get Started</button></form></div><?php endforeach;?>
<?php require 'includes/footer.php';?>

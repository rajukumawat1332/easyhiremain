<?php session_start();require 'includes/data.php';
$back=preg_match('/^[a-z\-]+\.php(\?s=\d+)?$/',$_GET['back']??'')?$_GET['back']:'home.php';
if(isset($_POST['place'])){$_SESSION['profile']['location']=$_POST['place'];$_SESSION['picked']=$_POST['place'];header('Location: '.$back);exit;}
$title='Select location';require 'includes/header.php';?>
<h1>Select location</h1><div class="map">🗺️📍</div>
<form method="post"><?php foreach($places as $pl):?><div class="card row"><span class="grow"><b><?=e($pl)?></b></span><button class="btn sm" name="place" value="<?=e($pl)?>">Select</button></div><?php endforeach;?></form>
<a href="<?=e($back)?>">← Back</a><?php require 'includes/footer.php';?>

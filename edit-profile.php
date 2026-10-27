<?php session_start();$f=['name'=>'Name','about'=>'About','age'=>'Age','phone'=>'Phone','location'=>'Location','nationality'=>'Nationality','qualification'=>'Qualification','experience'=>'Experience','salary'=>'Expected salary'];
if($_SERVER['REQUEST_METHOD']=='POST'){foreach($f as $k=>$l)$_SESSION['profile'][$k]=trim($_POST[$k]??'');header('Location: profile.php');exit;}
$title='Edit profile';require 'includes/header.php';?>
<a href="profile.php">← Back</a><h1>Edit profile</h1><form method="post" class="card"><?php foreach($f as $k=>$l):?><label><?=$l?></label><input name="<?=$k?>" value="<?=e($p[$k]??'')?>"><?php endforeach;?><button class="btn full">Save</button></form>
<?php require 'includes/footer.php';?>

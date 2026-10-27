<?php session_start();$opts=['jobs'=>'Relevant job notifications','match'=>'Notify me when a match is found','apply'=>'Notify me when someone applies for a job on my post','invite'=>'Receive invitation notifications'];
if($_SERVER['REQUEST_METHOD']=='POST'){foreach($opts as $k=>$l)$_SESSION['prefs'][$k]=isset($_POST[$k]);$ok=1;}
$title='Preferences';require 'includes/header.php';$pr=$_SESSION['prefs']??array_fill_keys(array_keys($opts),true);?>
<h1>Notification preferences</h1><?php if(!empty($ok)):?><div class="ok">✅ Saved</div><?php endif;?>
<form method="post" class="card"><?php foreach($opts as $k=>$l):?><label class="sw"><?=e($l)?><input type="checkbox" name="<?=$k?>" <?=!empty($pr[$k])?'checked':''?>></label><?php endforeach;?><br><button class="btn full">Save</button></form>
<?php require 'includes/footer.php';?>

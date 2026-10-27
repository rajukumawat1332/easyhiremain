<?php session_start();require 'includes/data.php';
if(empty($_SESSION['in'])){header('Location: index.php');exit;}
$role=$_SESSION['role']??'employee';$steps=array_merge($common,$role=='employer'?$bossSteps:$empSteps);
$i=max(0,min(count($steps)-1,(int)($_GET['s']??0)));$st=$steps[$i];$k=$st['k'];
if($_SERVER['REQUEST_METHOD']=='POST'){
 $v=$st['t']=='file'?($_FILES['v']['name']??''):($_POST['v']??'');if(is_array($v))$v=implode(', ',$v);
 if($st['t']!='otp')$_SESSION['profile'][$k]=$v;
 header('Location: '.($i+1<count($steps)?'onboarding.php?s='.($i+1):'home.php'));exit;}
$nonav=1;$title='Setup';require 'includes/header.php';$cur=$p[$k]??'';?>
<div class="bar"><i style="width:<?=round(($i+1)/count($steps)*100)?>%"></i></div>
<p class="m">Step <?=$i+1?> of <?=count($steps)?></p><h1><?=e($st['l'])?></h1>
<form method="post" enctype="multipart/form-data" class="card">
<?php switch($st['t']){
case 'area':?><textarea name="v" rows="4"><?=e($cur)?></textarea><?php break;
case 'number':?><input type="number" name="v" min="16" max="80" value="<?=e($cur)?>" required><?php break;
case 'tel':?><input type="tel" name="v" placeholder="+61 400 000 000" value="<?=e($cur)?>" required><?php break;
case 'otp':?><input name="v" maxlength="4" placeholder="1234" required><?php break;
case 'loc':?><div class="map">📍</div><input name="v" value="<?=e($cur)?>" placeholder="Type your city" required><a class="btn out sm" href="map.php?back=onboarding.php?s=<?=$i?>">Pick on map</a><br><br><?php break;
case 'radio':foreach(['Full Time','Part Time','Casual'] as $o):?><label class="opt"><input type="radio" name="v" value="<?=$o?>" <?=$cur==$o?'checked':''?> required><?=$o?></label><?php endforeach;break;
case 'multi':foreach($industries as $o):?><label class="opt"><input type="checkbox" name="v[]" value="<?=$o?>"><?=$o?></label><?php endforeach;break;
case 'file':?><input type="file" name="v"><p class="m">Demo only: files are not stored.</p><?php break;
default:?><input name="v" value="<?=e($cur)?>" required><?php }?>
<button class="btn full"><?=$i+1==count($steps)?'Finish':'Next'?></button></form>
<?php if($i>0):?><a href="onboarding.php?s=<?=$i-1?>">← Back</a><?php endif;?>
<?php require 'includes/footer.php';?>

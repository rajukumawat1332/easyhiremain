<?php $title='Search';require 'includes/header.php';$q=strtolower($_GET['q']??'');$cat=$_GET['cat']??'';?>
<h1>Find talent</h1><form><input name="q" placeholder="🔍 Search by name or location" value="<?=e($q)?>"></form>
<div class="chips"><a class="chip <?=!$cat?'on':''?>" href="search.php">All</a><?php foreach($categories as $c):?><a class="chip <?=$cat==$c?'on':''?>" href="search.php?cat=<?=$c?>"><?=$c?></a><?php endforeach;?></div>
<?php foreach($candidates as $c){if($cat&&$c[1]!=$cat)continue;if($q&&!str_contains(strtolower($c[0].$c[2]),$q))continue;?>
<div class="card row"><span class="av"><?=ini($c[0])?></span><span class="grow"><b><?=e($c[0])?></b><br><span class="m"><?=e($c[1].' · '.$c[2].' · '.$c[3])?></span></span><a class="btn sm" href="notifications.php">Invite</a></div><?php }
require 'includes/footer.php';?>

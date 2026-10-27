<?php session_start();$msg='';
if(isset($_POST['apply'])){$_SESSION['applied'][]=(int)$_POST['apply'];$msg='Application sent!';}
$title='Jobs';require 'includes/header.php';
$q=strtolower(trim($_GET['q']??''));$cat=$_GET['cat']??'';$ap=$_SESSION['applied']??[];?>
<h1>Apply for jobs</h1><?php if($msg):?><div class="ok">✅ <?=$msg?></div><?php endif;?>
<form><input name="q" placeholder="🔍 Search jobs, companies, locations" value="<?=e($q)?>"><?php if($cat):?><input type="hidden" name="cat" value="<?=e($cat)?>"><?php endif;?></form>
<div class="chips"><a class="chip <?=!$cat?'on':''?>" href="jobs.php">All</a><?php foreach($categories as $c):?><a class="chip <?=$cat==$c?'on':''?>" href="jobs.php?cat=<?=$c?>"><?=$c?></a><?php endforeach;?></div>
<?php $n=0;foreach($jobs as $j){if($cat&&$j['cat']!=$cat)continue;if($q&&!str_contains(strtolower(implode(' ',$j)),$q))continue;$n++;?>
<div class="card"><div class="row"><span class="av"><?=ini($j['company'])?></span><span class="grow"><b><?=e($j['title'])?></b><br><span class="m"><?=e($j['company'])?> · 📍<?=e($j['loc'])?></span></span><b style="color:var(--p)"><?=e($j['salary'])?></b></div>
<p><?=e($j['desc'])?></p><div class="row"><span class="tag"><?=e($j['type'])?></span><span class="tag"><?=e($j['cat'])?></span><span class="grow"></span>
<?php if(in_array($j['id'],$ap)):?><span class="tag">Applied ✓</span><?php else:?><form method="post"><button class="btn sm" name="apply" value="<?=$j['id']?>">Apply</button></form><?php endif;?></div></div><?php }
if(!$n):?><p class="m">No jobs found.</p><?php endif;require 'includes/footer.php';?>

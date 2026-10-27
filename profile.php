<?php $title='Profile';require 'includes/header.php';$f=['about'=>'About','age'=>'Age','phone'=>'Phone','location'=>'Location','nationality'=>'Nationality','qualification'=>'Qualification','experience'=>'Experience','salary'=>'Expected salary','emptype'=>'Employment type','industry'=>'Industries'];?>
<div class="card" style="text-align:center"><div class="av big" style="margin:auto"><?=ini($p['name'])?></div><h1><?=e($p['name'])?></h1><span class="tag"><?=ucfirst($role)?></span></div>
<div class="card"><div class="row"><b class="grow">Basic Details</b><a class="btn sm out" href="edit-profile.php">Edit</a></div><?php foreach($f as $k=>$l):?><p style="margin:8px 0"><span class="m"><?=$l?></span><br><?=e($p[$k]??'—')?></p><?php endforeach;?></div>
<a class="btn alt full" href="plans.php">Update Plan <?=!empty($_SESSION['plan'])?'('.e($_SESSION['plan']).')':''?></a><br><br><a class="btn out full" href="settings.php">Notification preferences</a>
<?php require 'includes/footer.php';?>

<?php $title='Home';require 'includes/header.php';?>
<div class="hero"><h1 style="margin:0">Hi, <?=e(explode(' ',$p['name'])[0])?> 👋</h1><p><?=$role=='employer'?'Ready to hire great people?':'Your next job is a tap away.'?></p>
<a class="btn alt sm" href="<?=$role=='employer'?'post-job':'jobs'?>.php"><?=$role=='employer'?'Post a job':'Browse jobs'?></a></div>
<div class="grid"><?php $t=$role=='employer'?[['search','🔍','Find talent'],['post-job','➕','Post a job'],['notifications','🔔','Notifications'],['plans','⭐','Plans']]:[['jobs','💼','Apply for jobs'],['interviews','📅','Interviews'],['notifications','🔔','Notifications'],['plans','⭐','Plans']];
foreach($t as $x):?><a class="card tile" href="<?=$x[0]?>.php"><span><?=$x[1]?></span><?=$x[2]?></a><?php endforeach;?></div>
<h1>Featured jobs</h1><?php foreach(array_slice($jobs,0,3) as $j):?><div class="card row"><span class="av"><?=ini($j['company'])?></span><span class="grow"><b><?=e($j['title'])?></b><br><span class="m"><?=e($j['company'].' · '.$j['loc'])?></span></span><span class="tag"><?=e($j['type'])?></span></div><?php endforeach;?>
<p class="m">Demo: <a href="option.php?r=<?=$role=='employer'?'employee':'employer'?>">switch to <?=$role=='employer'?'job seeker':'employer'?></a></p>
<?php require 'includes/footer.php';?>

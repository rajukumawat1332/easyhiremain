<?php session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){$_SESSION['posted'][]=array_map('trim',$_POST);$ok=1;}
$title='Post a job';require 'includes/header.php';$loc=$_SESSION['picked']??'';
$fs=['title'=>'Job Title','company'=>'Company','exp'=>'Experience','salary'=>'Expected Salary'];?>
<h1>Tell us who you're hiring</h1><?php if(!empty($ok)):?><div class="ok">✅ Job posted (demo, stored in session only)</div><?php endif;?>
<form method="post" class="card"><?php foreach($fs as $k=>$l):?><label><?=$l?>*</label><input name="<?=$k?>" placeholder="Add <?=strtolower($l)?>" required><?php endforeach;?>
<label>Employment Type*</label><select name="type" required><option>Full Time</option><option>Part Time</option><option>Casual</option></select>
<label>Job Location*</label><input name="location" value="<?=e($loc)?>" placeholder="Add job location" required><a class="btn out sm" href="map.php?back=post-job.php">Pick on map</a><br><br>
<label>Workplace Type*</label><select name="wp" required><option>On-site</option><option>Hybrid</option><option>Remote</option></select>
<button class="btn full">Submit</button></form>
<?php foreach($_SESSION['posted']??[] as $j):?><div class="card"><b><?=e($j['title'])?></b><br><span class="m"><?=e($j['company'].' · '.$j['location'].' · '.$j['type'])?></span></div><?php endforeach;?>
<?php require 'includes/footer.php';?>

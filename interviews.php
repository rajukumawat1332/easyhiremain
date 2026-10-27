<?php $title='Interviews';require 'includes/header.php';$q=strtolower($_GET['q']??'');?>
<h1>Interviews</h1><form><input name="q" placeholder="🔍 Search interviews" value="<?=e($q)?>"></form>
<?php foreach($interviews as $i){if($q&&!str_contains(strtolower($i['title']),$q))continue;?>
<div class="card row"><span class="av" style="background:var(--a);color:#1F2937">📅</span><span class="grow"><b><?=e($i['title'])?></b><br><span class="m"><?=e($i['date'].' · '.$i['mode'])?></span></span><span class="tag"><?=e($i['status'])?></span></div><?php }
require 'includes/footer.php';?>

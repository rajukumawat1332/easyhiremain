</div><?php if(empty($nonav)):$cur=basename($_SERVER['PHP_SELF']);
$nav=$role=='employer'?[['home','🏠','Home'],['search','🔍','Search'],['post-job','➕','Post'],['notifications','🔔','Alerts'],['profile','👤','Profile']]:[['home','🏠','Home'],['jobs','💼','Jobs'],['interviews','📅','Interviews'],['notifications','🔔','Alerts'],['profile','👤','Profile']];?>
<nav class="bot"><?php foreach($nav as $n):?><a href="<?=$n[0]?>.php" class="<?=$cur==$n[0].'.php'?'on':''?>"><span><?=$n[1]?></span><?=$n[2]?></a><?php endforeach;?></nav><?php endif;?></body></html>

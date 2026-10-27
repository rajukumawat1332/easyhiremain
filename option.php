<?php session_start();
if(isset($_GET['r'])){$_SESSION['role']=$_GET['r']=='employer'?'employer':'employee';header('Location: onboarding.php?s=0');exit;}
$nonav=1;$title='I am…';require 'includes/header.php';?>
<h1>What brings you here?</h1>
<a class="card row" href="option.php?r=employee"><span class="av">🔎</span><span><b>Looking for Work</b><br><span class="m">Find jobs and apply fast</span></span></a>
<a class="card row" href="option.php?r=employer"><span class="av" style="background:var(--a)">🏢</span><span><b>Looking for an Employee</b><br><span class="m">Post jobs and find talent</span></span></a>
<?php require 'includes/footer.php';?>

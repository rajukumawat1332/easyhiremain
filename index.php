<?php session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){$_SESSION['in']=1;$_SESSION['email']=$_POST['email']??'';header('Location: home.php');exit;}
$public=1;$nonav=1;$title='Sign in';require 'includes/header.php';?>
<div class="hero"><h1 style="margin:0">Welcome back 👋</h1><p>Find work or find talent, easily.</p></div>
<form method="post" class="card"><label>Email</label><input type="email" name="email" value="alex@example.com" required>
<label>Password</label><input type="password" name="password" value="demo1234" required>
<button class="btn full">Sign In</button><p class="m" style="text-align:center">Demo: any email and password works</p>
<div class="row"><a class="btn out grow" href="index.php">Google</a><a class="btn out grow" href="index.php">Facebook</a></div></form>
<p style="text-align:center">New here? <a href="signup.php"><b>Sign Up</b></a></p>
<?php require 'includes/footer.php';?>

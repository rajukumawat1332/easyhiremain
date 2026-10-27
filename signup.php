<?php session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){$_SESSION['in']=1;$_SESSION['profile']=['name'=>$_POST['name']];$_SESSION['email']=$_POST['email'];header('Location: option.php');exit;}
$public=1;$nonav=1;$title='Sign up';require 'includes/header.php';?>
<h1>Create your account</h1><form method="post" class="card"><label>Full name</label><input name="name" required>
<label>Email</label><input type="email" name="email" required><label>Password</label><input type="password" name="password" minlength="6" required>
<button class="btn full">Continue</button></form><p style="text-align:center">Have an account? <a href="index.php"><b>Sign In</b></a></p>
<?php require 'includes/footer.php';?>

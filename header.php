<?php session_start();require_once __DIR__.'/data.php';
if(empty($_SESSION['in'])&&empty($public)){header('Location: index.php');exit;}
$role=$_SESSION['role']??'employee';$p=array_merge($user,$_SESSION['profile']??[]);?>
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?=e($title??'')?> · Easy Employment</title><link rel="stylesheet" href="assets/style.css"></head><body>
<div class="top"><span>💼 Easy Employment</span><?php if(!empty($_SESSION['in'])):?><a href="logout.php">Log out</a><?php endif;?></div><div class="wrap">

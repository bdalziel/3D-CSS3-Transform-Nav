<?php

$active1 = '';

$nav = <<<HTML

<div id="nav">
  <section id="nav_container">
    <div class="container_back"></div>
    <div class="container_left"></div>
    <div class="container_right"></div>
    <div class="container_bottom"></div>
    <div class="container_top"></div>
    <div class="box box1 active">
      <figure class="right"></figure>
      <figure class="left"></figure>
      <figure class="top"></figure>
      <figure class="bottom"></figure>
      <figure class="front"><span>Button 1</span></figure>
    </div>
    <div class="box box3">
      <figure class="right"></figure>
      <figure class="left"></figure>
      <figure class="top"></figure>
      <figure class="bottom"></figure>
      <figure class="front"><span>Button 3</span></figure>
    </div>
    <div class="box box2">
      <figure class="right"></figure>
      <figure class="left"></figure>
      <figure class="top"></figure>
      <figure class="bottom"></figure>
      <figure class="front"><span>Button 2</span></figure>
    </div>
    <div class="title">Title</div>
  </section>

</div>

HTML;


print <<<HTML

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
<head>

  <title>3D Nav Demo</title>

  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="description" content="">
  <meta name="keywords"    content="">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" media="screen" href="3dNav.css" />
  <link rel="stylesheet" href="http://twitter.github.com/bootstrap/assets/css/bootstrap-1.1.0.min.css">

</head>
<body>

{$nav}

</html>

HTML;

?>

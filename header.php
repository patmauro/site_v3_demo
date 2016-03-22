<!doctype html>

<html lang="en">
<head>

<!-- Loads in custom Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic|Lato' rel='stylesheet' type='text/css'>
<?php echo $font; ?> <!-- Adds any more fonts that are special for this page -->

<!-- Slower alternative: <script src="webfonts.js"></script> -->

<!-- Define charset -->
<meta charset="utf-8">

<!-- favicon -->
<link rel="icon" type="image/ico" href="images/favicon.ico" />

<!-- standard stylesheet -->
<link rel="stylesheet" href="style.css" />

<!-- title (title for each page passed in from parent php doc) -->
<title><?php echo $title; ?> - Patrick Mauro</title>

<!-- loads any additional styling needed for this particular page -->
<?php echo $style; ?>

</head>

<body>

<!-- begin header proper -->
<div id="header">
<div id="name">PATRICK MAURO</div>
</div>
<!-- end header proper -->

<!-- begin navbar -->
<div id="nav"><ul id="nav_container">
<li><a href="blog" class="headerlink">BLOG</a><br /></li>
<li><a href="about" class="headerlink">ABOUT</a><br /></li>
<li><a href="resume" class="headerlink">R&Eacute;SUM&Eacute;</a><br /></li>
<li><a href="portfolio" class="headerlink">PORTFOLIO</a><br /></li>
<li><a href="music" class="headerlink">MUSIC</a><br /></li>
</ul></div>
<!-- end navbar -->

<div id="main_content">

<!-- begin right column (this could be a separate PHP script, but it is not necessary at this time.) -->
<div class="right_column">
<p><img src="images/meus.jpg" alt="My face!"><br><br>
<!-- TODO: grab and generate WordPress sidebar content here (when applicable) -->
<a href="http://soundcloud.com/maurusmultimedia" target="_blank">SOUNDCLOUD</a><br>
<a href="http://github.com/patmauro" target="_blank">GITHUB</a><br>
<a href="http://youtube.com/user/MaurusRehmahrntahn" target="_blank">YOUTUBE</a><br>
<a href="http://linkedin.com/pub/patrick-mauro/75/a12/700" target="_blank">LINKEDIN</a><br><br>
<a href="mailto:patrick@patrickmauro.net" target="_top">CONTACT</a></p>
</div>
<!-- end right column -->

<div class="left_column">
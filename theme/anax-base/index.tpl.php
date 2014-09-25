<!doctype html>
<html class='no-js' lang='<?=$lang?>'>
<head>
<meta charset='utf-8'/>
<title><?=$title . $title_append?></title>
<?php if (isset($favicon)) : ?><link rel="icon" href="<?=$this->url->asset($favicon); ?>"><?php endif; ?>
<?php foreach($stylesheets as $stylesheet): ?>
<link rel='stylesheet' type='text/css' href='<?=$this->url->asset($stylesheet)?>'/>
<?php endforeach; ?>
<?php if(isset($style)): ?><style><?=$style?></style><?php endif; ?>
<script src='<?=$this->url->asset($modernizr)?>'></script>
</head>

<body>

<header class="header-container">
	
	<div class="header-content">

		<?php if (isset($header)) echo $header; ?>
		<?php $this->views->render('header'); ?>
		
		<?php if ($this->views->hasContent('navbar')) : ?>
		<nav class="main-nav">
		
			<?php $this->views->render('navbar')?>

		</nav>
		<?php endif; ?>

	</div>

</header>

<div class="main-container">

	<div class="main-content">
		<?php if(isset($main)) echo $main; ?>
		<?php $this->views->render('main'); ?>
	</div>

</div>

<footer class="footer-container">

	<div class="footer-content">
		
		<?php if(isset($footer)) echo $footer; ?>
		<?php $this->views->render('footer'); ?>

	</div>

</footer>

<?php if(isset($jquery)):?><script src='<?=$this->url->asset($jquery)?>'></script><?php endif; ?>

<?php if(isset($javascript_include)): foreach($javascript_include as $val): ?>
<script src='<?=$this->url->asset($val)?>'></script>
<?php endforeach; endif; ?>

<?php if(isset($google_analytics)): ?>
<script>
  var _gaq=[['_setAccount','<?=$google_analytics?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

</body>
</html>

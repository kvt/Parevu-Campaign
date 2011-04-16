<?php
$controller_name = $this->params['controller'];
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>
    <?php __('CakePHP: the rapid development php framework:'); ?>
	<?php echo $title_for_layout; ?>  
  </title>
  <meta name="description" content="">
  <meta name="author" content="">
  <?php $root = '/parevuhq/webroot/'; ?>
  
  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS: implied media="all" -->
  <link type="text/css" rel="stylesheet" href="<?php echo $root; ?>css/style.css?v=2">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers -->

  <link type="text/css" rel="stylesheet" media="handheld" href="<?php echo $root; ?>css/handheld.css?v=2">
  <?php echo $this->Html->css('cake.generic'); ?>
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="<?php echo $root; ?>js/libs/modernizr-1.7.min.js"></script>

</head>
<body>
<div id="top-links">
    <div id="top-links-container">
        <div>
      	    <?php echo $this->Html->link("Create New Campaign",array("controller"=>"campaigns", 'action'=>'add')); ?>
		</div>
        <a href="main.php?action=settings">Settings</a>
        <a href="main.php?action=help">Help</a>
        <a href="index.php?action=logout">Logout</a>
    </div>
  </div>
    
	<div id="container">
		<header id="header">
			<h1><?php echo $this->Html->link(__('Parevu', true), 'http://parevu.com'); ?></h1>
		</header>
		<div id="nav">
<?php
    $nav = array('dashboard'=>'Dashboard',
                'subscribers'=>'Subscribers',
                'campaigns'=>'Campaigns',
                'userlists'=>'Lists','reports'=>'Reports');
?>		
		    <?php 
		        foreach($nav as $key => $val)
		        {
		            if($key == $controller_name)
		            {
		                echo '<div id="nav-active">'.$html->link($val, array('controller' => $key)).'</div>';
		            }
		            else
		            {
		                echo '<div>'.$html->link($val, array('controller' => $key)).'</div>';
		            }
		        }
		    ?>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<footer id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script type="text/javascript" src='<?php echo $root; ?>js/libs/jquery-1.5.1.min.js'></script>


  <!-- scripts concatenated and minified via ant build script-->
  <script type="text/javascript" src="<?php echo $root; ?>js/plugins.js"></script>
  <script src="<?php echo $root; ?>js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->
<?php echo $scripts_for_layout; ?>
</body>
</html>

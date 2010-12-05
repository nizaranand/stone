<?php $this->beginContent('//layouts/main'); ?>

<div class="grid_8">
	<?php echo $content ?>
</div>

<div class="grid_1 sb_gradient"></div>

<div class="grid_3 sidebar">

	<!-- Start Search -->
	<div class="search widget">
		<form method="get" id="searchform" action="">
			<div>
				<input type="submit" class="button " id="searchsubmit" value=".">
				<input type="text" value="" name="s" id="s" class="searchinput rounded">
			</div>
		</form><!-- end searchform-->
	</div><!-- Search END -->

	<div class="widget">
		<h3>Pages</h3>
		<ul>
			<li class="first"><a href="#">Lorem Ipsum</a></li>
			<li><a href="#">Dolor sit amet</a></li>
			<li class="current"><a href="#">Individunt ut labore</a></li>
			<li><a href="#">Sed diam voluptua</a></li>
			<li><a href="#">Diam et dolores</a></li>
			<li><a href="#">Lorem Ipsum</a></li>
			<li><a href="#">Dolor sit amet</a></li>
			<li><a href="#">Individunt ut labore</a></li>
			<li><a href="#">Sed diam voluptua</a></li>
			<li><a href="#">Diam et dolores</a></li>
		</ul>
	</div
	
</div>

<?php $this->endContent(); ?>
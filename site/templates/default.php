<?php snippet('header') ?>
	
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
				<?php snippet('post', array('template' => $page)) ?>
			</div>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
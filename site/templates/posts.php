<?php snippet('header') ?>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php if(param('tag')): ?>
			<?php $posts = $pages->find('posts')->children()->visible()->sortBy('date', 'desc')->filterBy('tags', urldecode(param('tag')), ',') ?>
			<?php elseif(param('category')): ?>
			<?php $posts = $pages->find('posts')->children()->visible()->sortBy('date', 'desc')->filterBy('categories', urldecode(param('category')), ',') ?>
			<?php else : ?>
			<?php $posts = $pages->find('posts')->children()->visible()->sortBy('date', 'desc') ?>
			<?php endif; ?>

				<div id="post-carousel" class="carousel slide<?php if($posts->count() > 1): echo ' has-controls'; endif; ?>" data-ride="carousel">
				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php $cnt=0; foreach($posts as $post): $cnt++; ?>
						<div class="item<?php if($cnt==1) echo ' active' ?>">
							<div class="post">
								<?php if($post->categories()->isNotEmpty() || $post->tags()->isNotEmpty()): ?>
								<div class="post-meta">
									<p>
									<time><?php echo $post->date('d/m/Y') ?></time> / 
									<?php if($post->categories()->isNotEmpty()): ?>
									Posted in
										<?php foreach(str::split($post->categories()) as $category): ?>
										<a href="<?php echo url('posts/category:' . urlencode($category)) ?>" class="tag"><?php echo $category ?></a>
										<?php endforeach ?>
									<?php endif; ?>

									<?php if($post->tags()->isNotEmpty()): ?>
									/ Tags:
										<?php foreach(str::split($post->tags()) as $tag): ?>
										<a href="<?php echo url('posts/tag:' . urlencode($tag)) ?>" class="tag"><?php echo $tag ?></a>
										<?php endforeach ?>
									<?php endif; ?>
									</p>
								</div>
								<?php endif; ?>
								
								<h2><a href="<?php echo $post->url() ?>"><?php echo $post->title()->html() ?></a></h2>

								<?php echo excerpt($post->text(), 50, 'words') ?>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					
					<?php if($posts->count() > 1): ?>
					<div class="controls-wrapper">
						<a class="left carousel-control" href="#post-carousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#post-carousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
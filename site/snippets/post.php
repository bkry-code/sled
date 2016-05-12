<div class="post">
	<?php if($page->categories()->isNotEmpty() || $page->tags()->isNotEmpty()): ?>
	<div class="post-meta">
		<p>
		<time><?php echo $page->date('d/m/Y') ?></time> / 
		<?php if($page->categories()->isNotEmpty()): ?>
		Posted in
			<?php foreach(str::split($page->categories()) as $category): ?>
			<a href="<?php echo url('posts/category:' . urlencode($category)) ?>" class="tag"><?php echo $category ?></a>
			<?php endforeach ?>
		<?php endif; ?>

		<?php if($page->tags()->isNotEmpty()): ?>
		/ Tags:
			<?php foreach(str::split($page->tags()) as $tag): ?>
			<a href="<?php echo url('posts/tag:' . urlencode($tag)) ?>" class="tag"><?php echo $tag ?></a>
			<?php endforeach ?>
		<?php endif; ?>
		</p>
	</div>
	<?php endif; ?>
	
	<h2><a href="<?php echo $page->url() ?>"><?php echo $page->title()->html() ?></a></h2>

	<?php echo $page->text()->kirbytext() ?>
</div>
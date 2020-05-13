
<!-- Begin Site Title ================================================== -->
<div class="container">

	<?php //if ($WHERE_AM_I == 'home'): ?>

		<!-- <div class="listrecent card-columns newpost"> -->

			<?php
			// Get the first and second page from the content
			// $featured = array_slice($content, 0, 1);
			// $content = array_slice($content, 1);
			// foreach ($featured as $page):
			 	?>
				<!-- <div class="card">
					<a href="<?php echo $page->permalink(); ?>">
						<img class="img-fluid" src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" alt="" />
						<div class="middle">
							<h2 class="title"><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></h2>
						</div>
					</a>
				</div>
			</div>
		<?php// endforeach; ?> -->
			<?php// endif; ?>




	<!-- Begin List Posts	================================================== -->
	<section class="recent-posts">

		<?php if ($WHERE_AM_I == 'tag'):
			$items = getTags();
			$tag = new Tag($tagKey);
			?>

	<div class="section-title">
		<h2><span><?php echo $tag->name(); ?></span></h2>
	</div>
		<?php endif; ?>
		<div class="card-columns listrecent">
		<?php if (empty($content)) { $language->p('No pages found'); } ?>
		<?php foreach ($content as $page): ?>
		<!-- begin post -->
		<div class="card">
			<a href="<?php echo $page->permalink(); ?>">
				<img class="img-fluid" src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" alt="" />
					<div class="middle">
						<h2 class="title"><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></h2>
				  </div>
			</a>

		</div>
		<!-- end post -->
		<?php endforeach ?>

	</div>
	</section>
	<!-- End List Posts	================================================== -->

	<!-- Begin Footer	================================================== -->
	<div class="footer">
		<p class="pull-left">
			<?php echo $site->footer(); ?>
		</p>
		<p class="pull-right">
		</p>
		<div class="clearfix">
		</div>
	</div>
	<!-- End Footer	================================================== -->

</div>
<!-- /.container -->

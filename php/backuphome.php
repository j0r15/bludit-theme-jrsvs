
<!-- Begin Site Title
================================================== -->
<div class="container">
	<!-- <div class="mainheading" id="mainheading">
		<h1 class="sitetitle fade1"><?php echo $site->title(); ?></h1>
		<h1 class="sitetitle"><?php echo $site->title(); ?></h1>
		<h1 class="sitetitle fade2"><?php echo $site->title(); ?></h1>
		<p class="lead"><?php echo $site->description(); ?></p>
	</div> -->
<!-- End Site Title
================================================== -->

	<?php if ($WHERE_AM_I == 'home'): ?>

		<div class="listrecent card-columns newpost"> <!--FULL WIDTH Featured -->

			<?php
			// Get the first and second page from the content
			$featured = array_slice($content, 0, 1);
			$content = array_slice($content, 1);
			foreach ($featured as $page):
				?>
				<div class="card">
					<a href="<?php echo $page->permalink(); ?>">
						<img class="img-fluid" src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" alt="" />
						<div class="middle">
							<h2 class="title"><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></h2>
						</div>
					</a>
				</div>
			</div>
		<?php endforeach; ?>
			<?php endif; ?>
	<!-- Begin Featured
	================================================== -->
	<!-- <section class="featured-posts"> -->
	<!-- <div class="section-title">
		<h2><span>Featured</span></h2>
	</div> -->
<!--	<div class="card-columns listfeaturedtag"> --> <!--FULL WIDTH Featured -->


	<!-- begin post -->
		<!-- <div class="card"> -->
			<!-- <div class="row"> -->
				<!-- <div class="col wrapthumbnail"> -->
					<!-- <a href="<?php //echo $page->permalink(); ?>"> -->
						<!-- <div class="thumbnail" style="background-image:url(<?php //echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>);"> -->
              <!-- <div class="cardtitle"><h2 class="title"><?php //echo $page->title(); ?></h2> -->
						<!-- </div> -->
					<!-- </a> -->
				<!-- </div> -->
        <!-- </div> -->
				<!-- <div class="col-md-7"> -->
					<!-- <div class="card-block"> -->
						<!-- <h2 class="card-title"><a href="<?php //echo $page->permalink(); ?>"><?php //echo $page->title(); ?></a></h2> -->
						<!-- <h4 class="card-text"><?php //echo (empty($page->description())?'.':$page->description()) ?></h4> -->
						<!-- <div class="metafooter"> -->
							<!-- <ul class="tags"> -->
								<?php //foreach ($page->tags(true) as $tagKey=>$tagName): ?>
								<!-- <li><a href="<?php //echo DOMAIN_TAGS.$tagKey ?>"><?php //echo $tagName; ?></a></li> -->
								<?php //endforeach ?>
							<!-- </ul> -->
							<!-- <div class="wrapfooter">
								<span class="meta-footer-thumb">
									<img class="author-thumb" src="<?php// echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/profile.png')) ?>" alt="Author">
								</span>
								<span class="author-meta">
									<span class="post-name"><?php// echo $page->user('nickname'); ?></span><br/>
									<span class="post-date"><?php// echo $page->date(); ?></span><span class="dot"></span><span class="post-read"></span>
								</span>
								<span class="post-read-more"><a href="<?php //echo $page->permalink(); ?>" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
							</div> -->
						<!-- </div> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->
		<!-- end post -->

	<!-- </div> --> <!--FULL WIDTH Featured-->
	<!-- </section> -->
	<!-- End Featured
	================================================== -->



	<!-- Begin List Posts
	================================================== -->
	<section class="recent-posts">

		<?php if ($WHERE_AM_I == 'tag'):
			$items = getTags();
			// $tagKey = $Url->slug();
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
			<div class="card-block">
				<!-- <h2 class="card-title"><a href="<?php //echo $page->permalink(); ?>"><?php //echo $page->title(); ?></a></h2> -->
				<!-- <h4 class="card-text"><?php //echo (empty($page->description())?$language->p('.'):$page->description()) ?></h4> -->
				<!-- <div class="metafooter"> -->
					<!-- <ul class="tags-home"> -->
						<?php //foreach ($page->tags(true) as $tagKey=>$tagName): ?>
						<!-- <li><a href="<?php //echo DOMAIN_TAGS.$tagKey ?>"><?php //echo $tagName; ?></a></li> -->
						<?php //endforeach ?>
					<!-- </ul> -->
					<!-- <div class="wrapfooter">
						<span class="meta-footer-thumb">
						<img class="author-thumb" src="<?php //echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/profile.png')) ?>" alt="<?php //echo $page->user('nickname') ?>">
						</span>
						<span class="author-meta">
						<span class="post-name"><?php //echo $page->user('nickname'); ?></span><br/>
						<span class="post-date"><?php //echo $page->date(); ?></span><span class="dot"></span><span class="post-read"><?php //echo $page->readingTime(); ?></span>
						</span>
						<span class="post-read-more"><a href="<?php //echo $page->permalink(); ?>" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
					</div> -->
				<!-- </div> -->
			</div>
		</div>
		<!-- end post -->
		<?php endforeach ?>

	</div>
	</section>
	<!-- End List Posts
	================================================== -->

	<!-- Begin Footer
	================================================== -->
	<div class="footer">
		<p class="pull-left">
			<?php echo $site->footer(); ?>
		</p>
		<p class="pull-right">
			<!-- Designed by <a target="_blank" href="https://www.wowthemes.net">Wowthemes</a> | -->
			<!-- Powered by <a target="_blank" href="https://www.bludit.com">Bludit.com</a> -->
		</p>
		<div class="clearfix">
		</div>
	</div>
	<!-- End Footer
	================================================== -->

</div>
<!-- /.container -->


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

	<?php

   if ($category->name()=='Work'): ?>

	 <!-- Begin List Posts
	 ================================================== -->
	 <br />

	 <section class="recent-posts">
		 <div class="section-title">
			 <h2><span>Work</span></h2>
		 </div>
		 <div class="card-columns listrecent">
			 <!-- begin post -->
   <?php

         // images are 1200x800px

				 $items = getCategories();

foreach ($items as $category):

         if ($category->name() == 'Music Producer') {
           $backgroundImage = 'https://jrsvs.nl/bl-content/uploads/img6610small.jpg';
         }
         elseif ($category->name() == 'Cinematographer') {
           $backgroundImage = 'https://jrsvs.nl/bl-content/uploads/img3.jpg';
         }
         elseif ($category->name() =='Dancer') {
           $backgroundImage = 'https://jrsvs.nl/bl-content/uploads/img6190small.jpg';
         }
         elseif ($category->name() =='Photographer') {
           $backgroundImage = 'https://jrsvs.nl/bl-content/uploads/dji0087.jpg';
         }
         elseif ($category->name() == 'Choreographer') {
           $backgroundImage = 'https://jrsvs.nl/bl-content/uploads/n508420180202.jpg';
         }
         else {
           $backgroundImage = '#';
         }

        ?>


		<?php
			if (count($category->pages())>0): ?>
		<div class="card">
			<a href="<?php echo $category->permalink(); ?>">
				<img class="img-fluid" src="<?php echo $backgroundImage ?>" alt="" />
			</a>
			<div class="card-block p-3">
				<h2 class="card-title"><a href="<?php echo $category->permalink(); ?>"><?php echo $category->name(); ?></a></h2>
				<h4 class="card-text"></h4>
				<div class="metafooter">
				</div>
			</div>
		</div>
		<!-- end post -->
	<?php endif; endforeach ?>
<?php endif; ?>
	</div>
	</section>
	<!-- End List Posts
	================================================== -->

	<script>
	// function randombg(){
	//   var random = Math.floor(Math.random() * 3) + 0;
	//     var images = ["url('https://jrsvs.nl/bl-content/uploads/newnamesmall3.jpg')",
	//                   "url('https://jrsvs.nl/bl-content/uploads/img5006.jpg')",
	//                   "url('https://jrsvs.nl/bl-content/uploads/img3.jpg')"];
  //
	// document.getElementById("mainheading").style.backgroundImage=images[random];
	// }
	// window.onload = randombg;
	</script>

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

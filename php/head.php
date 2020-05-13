<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="JRSVS.">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/own.css'); ?>
<?php echo Theme::css('css/mediumish.css'); ?>

<!-- Include Bootstrap CSS file bootstrap.css -->
<?php echo Theme::cssBootstrap(); ?>

<!-- <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> -->
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->

<!-- <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css"> -->

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>

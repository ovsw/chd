<!DOCTYPE html>
<html dir="ltr" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" prefix="og: http://ogp.me/ns#">
<head>
<?php require($config->paths->templates."includes/head.inc"); ?>
</head>
<body class="has-side-panel side-panel-right fullwidth-page">
<div id="wrapper">
	<!-- preloader -->
	<div id="preloader">
		<div id="spinner">
			<div class="preloader-dot-loading">
				<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
			</div>
		</div>
		<div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
	</div>
  
  <!-- Header -->
<?php require($config->paths->templates."includes/header.inc"); ?>
  
<!-- Start main-content -->
<div class="main-content">
  
    <?php require($config->paths->templates."includes/modules/inner-header.inc"); ?>

    <?php foreach($page->children() as $serviceCat) : ?>

    <!-- Section: Services -->

    <section id="services" class="bg-silver-light">
      <div class="container pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1"><?= $serviceCat->title ?> Services</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon.png" alt="">
              </div>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            
            <?php foreach($serviceCat->children() as $service) : ?>

            <div class="col-sm-6 col-md-4">
              <div class="icon-box text-center p-30 bg-white mb-30 border-3px">
                <a href="#"><i class="flaticon-dental-<?= $service->flaticon->title ?> text-theme-colored"></i></a>
                <div class="features-details">
                  <h3><?= $service->title ?></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
                <a href="#" class="btn btn-flat btn-sm btn-theme-colored mt-15  text-theme-color-2">Read More</a>
              </div>
            </div>

            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </section>

    <?php endforeach; ?>
    

  </div>
  <!-- end main-content -->

  	<!-- Footer -->
	<?php require($config->paths->templates."includes/footer.inc"); ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<?php require($config->paths->templates."includes/foot.inc"); ?>

</body>
</html>
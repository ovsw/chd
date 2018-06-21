<!DOCTYPE html>
<html dir="ltr" lang="en"  xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" prefix="og: http://ogp.me/ns#">
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

    <!-- Section: Services -->
    <section>
      <div class="container">
        <div class="row mtli-row-clearfix">

          <div class="col-sm-6 col-md-8 col-lg-8">
            

            <!-- <div class="campaign maxwidth500 mb-sm-30">
              <div class="thumb">
                <img src="http://placehold.it/750x565" alt="" class="img-fullwidth">
                <div class="campaign-overlay"></div>
              </div>
            </div> -->


            <div class="rte_content">
              <?= $page->body ?>
              <?= $page->custom_embed_codes ?>
              <!-- <p class="mb-20 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus illum modi? Libero saepe perspiciatis accusamus soluta perferendis, ad illum, nesciunt, reiciendis iusto et cupiditate. Repudiandae provident, consectetur, sapiente, libero iure necessitatibus corporis nulla voluptate, quisquam aut eum perspiciatis? Fugiat labore aspernatur eius, perspiciatis ut molestiae, delectus rem.</p>
              <div class="pull-left flip mr-15">
                <img alt="" src="http://placehold.it/370x235">
              </div>
              <div class="">
                <p class="text-black-light"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam nequep aliquid suscipit voluptas ab temporibus, animi impedit ipsum, sunt rem sed ut quod quas earum inventore expedita consectetur.</em></p>
                <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus illum modi? Libero saepe perspic reiciendis iusto et cupiditate. Repudiandae provident, consectetur, sapiente, libero iure necessitatibus corporis nulla sit voluptate, quisquam aut eum perspiciatis? Fugiat labore aspernatur </p>
              </div>
              <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus illum modi? Libero saepe perspiciatis accusamus soluta perferendis, ad illum, nesciunt, reiciendis iusto et cupiditate. Repudiandae provident, consectetur, sapiente, libero iure necessitatibus corporis nulla voluptate, quisquam aut eum perspiciatis? Fugiat labore aspernatur eius, perspiciatis ut molestiae, delectus rem tempora omnis optio odio autem asperiores quae maiores ea eveniet cupiditate aut repellendus? Quo iure explicabo quam reprehenderit ipsam sequi. Perferendis esse iure ullam, illum, quibusdam corporis nobis dolores.
              </p> -->
            </div>


          </div>
          <!-- /.row -->

          <!-- sidebar -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">All Services</h5>
                <ul class="list-divider list-border list check">
                  <?php
                  $serviceCats = $pages->get('1221')->children();
                  foreach($serviceCats as $serviceCat) :
                    if($serviceCat->numChildren) : // has any children?
                      foreach($serviceCat->children() as $service) : 
                      $class = ($service == $page) ? ' class="text-theme-colored"' : '';
                  ?>
                  <li><a href="<?= $service->url ?>"<?= $class ?>><?= $service->title ?></a></li>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="widget">
                <div class="border-10px p-30">
                  <h5><i class="fa fa-clock-o text-theme-colored"></i> Opening Hours</h5>
                  <div class="opening-hours text-left">
                    <ul class="list-unstyled">
                      <li class="clearfix line-height-1"> <span> Monday - Friday </span>
                        <div class="value"> 9.00 - 20.00 </div>
                      </li>
                      <li class="clearfix line-height-1"> <span> Saturday </span>
                        <div class="value"> 10.00 - 16.00 </div>
                      </li>
                      <li class="clearfix line-height-1"> <span> Sunday </span>
                        <div class="value"> 9.30 - 18.00 </div>
                      </li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-dark btn-theme-colored mt-15">Schedule an Appointment</a>
                </div>
              </div>

              <!-- <div class="widget">
                <h5 class="widget-title line-bottom">Image gallery with text</h5>
                <div class="owl-carousel-1col">
                  <div class="item">
                    <img src="https://placehold.it/365x230" alt="">
                    <h4 class="title">This is a Demo Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                  </div>
                  <div class="item">
                    <img src="https://placehold.it/365x230" alt="">
                    <h4 class="title">This is a Demo Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                  </div>
                  <div class="item">
                    <img src="https://placehold.it/365x230" alt="">
                    <h4 class="title">This is a Demo Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                  </div>
                </div>
              </div> -->

              
            </div>
          </div>
        </div>
<!--         
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
            <h3 class="title mb-30 line-bottom">Treatments</h3>
            <ul class="list-border-bottom no-padding">
              <li>
                <h5>Colonoscopy <span class="pull-right flip font-weight-400 pr-20">$220</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quas ullam perferendis facilis <a class="text-theme-colored font-13" href="#"> read more</a></p>
              </li>
              <li>
                <h5>Colonoscopy <span class="pull-right flip font-weight-400 pr-20">$220</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quas ullam perferendis facilis <a class="text-theme-colored font-13" href="#"> read more</a></p>
              </li>
              <li>
                <h5>Colonoscopy <span class="pull-right flip font-weight-400 pr-20">$220</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quas ullam perferendis facilis <a class="text-theme-colored font-13" href="#"> read more</a></p>
              </li>
            </ul>
            <a class="text-theme-colored font-weight-600 font-13" href="#">See All List →</a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
            <h3 class="title mb-30 line-bottom">Laboratory Tests</h3>
            <ul class="list-border-bottom no-padding">
              <li>
                <h5>Colonoscopy <span class="pull-right flip font-weight-400 pr-20">$220</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quas ullam perferendis facilis <a class="text-theme-colored font-13" href="#"> read more</a></p>
              </li>
              <li>
                <h5>Colonoscopy <span class="pull-right flip font-weight-400 pr-20">$220</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quas ullam perferendis facilis <a class="text-theme-colored font-13" href="#"> read more</a></p>
              </li>
              <li>
                <h5>Colonoscopy <span class="pull-right flip font-weight-400 pr-20">$220</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quas ullam perferendis facilis <a class="text-theme-colored font-13" href="#"> read more</a></p>
              </li>
            </ul>
            <a class="text-theme-colored font-weight-600 font-13" href="#">See All List →</a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
            <h3 class="title mb-30 line-bottom">Investigations</h3>
            <ul class="list-border-bottom no-padding">
              <li>
                <h5>Colonoscopy <span class="pull-right flip font-weight-400 pr-20">$220</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quas ullam perferendis facilis <a class="text-theme-colored font-13" href="#"> read more</a></p>
              </li>
              <li>
                <h5>Colonoscopy <span class="pull-right flip font-weight-400 pr-20">$220</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quas ullam perferendis facilis <a class="text-theme-colored font-13" href="#"> read more</a></p>
              </li>
              <li>
                <h5>Colonoscopy <span class="pull-right flip font-weight-400 pr-20">$220</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quas ullam perferendis facilis <a class="text-theme-colored font-13" href="#"> read more</a></p>
              </li>
            </ul>
            <a class="text-theme-colored font-weight-600 font-13" href="#">See All List →</a>
          </div>
        </div> -->

      </div>
      <!-- /.container -->
      
    </section> 

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="http://placehold.it/1920x750" data-parallax-ratio="0.7">
      <div class="container pt-60 pb-60">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="1754" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Happy Patients</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-rocket mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Our Services</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-add-user mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="248" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Our Doctors</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-global mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Service Points</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
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
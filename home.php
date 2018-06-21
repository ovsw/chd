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
		<!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <?php require($config->paths->templates."includes/modules/hp-rev-slider.inc"); ?>
        
      </div>
    </section>
	
    <!-- Section: home-boxes -->
    <section>
      <div class="container-fluid pt-0">
        <div class="section-content">
          <div class="row equal-height-inner mt-sm-0">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto bg-theme-colored">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="icon_check text-theme-colored"></i> </a>
                    <h3 class="text-white">Free Consultation</h3>
                    <p class="text-white">Get a free assessment and get to know us</p>
                    <a href="#" class="btn btn-default btn-transparent mt-20">Read more &nbsp;<i class="fa fa-arrow-circle-right" style="font-size: 1rem;"></i></a> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored-darker3">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="icon_calendar text-theme-colored"></i> </a>
                    <h3 class="text-white">Schedule Appointment</h3>
                    <p class="text-white">By Phone or Online</p>
                    <a href="#" class="btn btn-default btn-transparent mt-20">Read more &nbsp;<i class="fa fa-arrow-circle-right" style="font-size: 1rem;"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored-darker5">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="icon_star text-theme-colored"></i> </a>
                    <h3 class="text-white">Testimonials</h3>
                    <p class="text-white">What our patients are saying</p>
                    <a href="#" class="btn btn-default btn-transparent mt-20">Read on &nbsp;<i class="fa fa-arrow-circle-right" style="font-size: 1rem;"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored-darker9">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="fa fa-phone  text-theme-colored"></i> </a>
                    <h3 class="text-white">Call us</h3>
                    <p class="text-white">(480) 659-7800</p>
                    <a href="#" class="btn btn-default btn-transparent mt-20">Call Today &nbsp;<i class="fa fa-arrow-circle-right" style="font-size: 1rem;"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
    <section id="about">
    	<div class="container pt-0">
    		<div class="section-content">
    			<div class="row">
            <div class="col-md-3 mb-30">
              <div class="sm-height-auto bg-theme-colored2 owl-carousel-1col owl-carousel owl-theme">
                <?php foreach($page->simple_slideshow as $item) :?>
                <img src="<?= $item->getCrop('plaque_slide')->url; ?>" alt="<?= $item->description; ?>"/>
                <?php endforeach; ?> 
              </div>
            </div>

            <?php foreach ($page->hp_staff_repeater as $item) : ?>
            <div class="col-md-3 mb-30">
              <?php $img = $item->single_image_cropped; ?>
              <img src="<?= $img->getCrop('hp_staff_size')->url ?>" alt="<?= $img->description != '' ? $img->description : $item->title  ?>">
              <h3 class=""><a href="<?= $item->link_url ?>"><?= $item->title ?></a></h3>
              <p class=""><?= $item->short_description ?></p>
              <a href="<?= $item->link_url ?>" class="btn btn-flat  btn-theme-colored text-theme-color-2">Read More</a>
            </div>
            <?php endforeach; ?>

    			</div>
    		</div>
    	</div>
    </section>

    <!-- Section: Services --> 
    <section id="services" class="divider parallax layer-overlay overlay-theme-colored2-8" data-bg-img="<?= $config->urls->templates ?>images/bgs/bg3.jpg">
    	<div class="container pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase text-white mt-0 line-height-1">Our Services</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon-white.png" alt="">
              </div>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
    		<div class="section-content">
    			<div class="row features-style1 equal-height-inner">
            <div class="col-sm-6 col-md-4">
              <div class="icon-box p-30 bg-white mb-30 border-3px">
                <a href="#"><i class="flaticon-medical-drug7 text-theme-colored"></i></a>
                <div class="features-details">
                  <h3>Sedation Dentistry</h3>
                  <p>You’ll be glad to know sedation dentistry can ease your fear of getting dental treatments. Also known as sleep dentistry, this method uses medication to calm the patient but not necessarily make him or her sleep during the treatment.</p>
                </div>
                <a href="#" class="btn btn-flat btn-lg btn-theme-colored mt-15  text-theme-color-2">Read More</a>
              </div>
    				</div>
    				
    				<div class="col-sm-6 col-md-4">
              <div class="icon-box p-30 bg-white mb-30 border-3px">
                <a href="#"><i class="flaticon-medical-microscope13 text-theme-colored"></i></a>
                <div class="features-details">
                  <h3>Invisalign</h3>
                  <p>Invisalign takes teeth-straightening to a whole new level. These custom-made aligners are smooth and comfortable. What’s more, they are easy to remove for cleaning. Invisalign creates little impact on your daily life. In fact, you can wear them up to 22 hours a day.</p>
                </div>
                <a href="#" class="btn btn-flat btn-lg btn-theme-colored mt-15  text-theme-color-2">Read More</a>
              </div>
    				</div>

            <div class="col-sm-6 col-md-4">
              <div class="icon-box p-30 bg-white mb-30 border-3px">
                <a href="#"><i class="flaticon-medical-dentist text-theme-colored"></i></a>
                <div class="features-details">
                  <h3>Lumineers</h3>
                  <p>Lumineers are ultra-thin veneers placed directly over your teeth. No shots, no grinding – pain free! While traditional veneers are much thicker, requiring the grinding down of your original tooth structure, Lumineers are so thin that little to no tooth reduction is necessary.</p>
                </div>
                <a href="#" class="btn btn-flat btn-lg btn-theme-colored mt-15  text-theme-color-2">Read More</a>
              </div>
    				</div>

    				<div class="col-sm-6 col-md-4">
              <div class="icon-box p-30 bg-white mb-30 border-3px">
                <a href="#"><i class="flaticon-medical-lungs4 text-theme-colored"></i></a>
                <div class="features-details">
                  <h3>Sleep Apnea/Snoring</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
                <a href="#" class="btn btn-flat btn-lg btn-theme-colored mt-15  text-theme-color-2">Read More</a>
              </div>
    				</div>
    				<div class="col-sm-6 col-md-4">
              <div class="icon-box p-30 bg-white mb-30 border-3px">
                <a href="#"><i class="flaticon-medical-first32 text-theme-colored"></i></a>
                <div class="features-details">
                  <h3>TMJ/Jaw Pain</h3>
                  <p>Are you suffering from pain or discomfort in your jaw? Do you experience tenderness in your face, neck, or shoulders every time you open or move your mouth? If you are struggling with TMJ problems, get in touch with us. There are a number of treatments available.</p>
                </div>
                <a href="#" class="btn btn-flat btn-lg btn-theme-colored mt-15  text-theme-color-2">Read More</a>
              </div>
    				</div>
    				
    				<div class="col-sm-6 col-md-4">
    					<div class="icon-box p-30 bg-white mb-30 border-3px">
    						<a href="#"><i class="flaticon-medical-teeth2 text-theme-colored"></i></a>
    						<div class="features-details">
    							<h3>Dental Implants</h3>
    							<p>Dental implants are one of the newer restorative options used to replace missing teeth or provide anchor points for dentures. They are often used instead of bridges since they can replace missing teeth without affecting neighboring natural teeth.</p>
    						</div>
    						<a href="#" class="btn btn-flat btn-lg btn-theme-colored mt-15  text-theme-color-2">Read More</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


    <!-- Section: About & Video -->
    <section id="about">
      <div class="container">
        <div class="section-content mt-30">
          <div class="row">
            <div class="col-md-7 wow fadeInLeft" data-wow-duration="3s" data-wow-offset="100">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/5rPNhDs1s1I?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-5 wow fadeInRight"  data-wow-duration="3s" data-wow-offset="100">
              <h2 class="font-size-38 mt-0">Your Chandler <span class="text-theme-colored">Dentist Office</span></h2>
              <h3 class="font-size-26 mt-0">Mission Statement</h3>
              <p class="lead">At Shumway Dental Care we are passionate in providing dental services that relieve pain, improve overall dental and medical health, enhance one’s self-esteem, and even save lives, in a state-of-the-art, family-friendly environment.
              </p>
              <p class="lead"> We are committed to courteously treating our patients with respect, honesty and compassion, with only their best interests as our highest priority.</p>
              <a class="btn btn-theme-colored btn-lg btn-circled mt-0" href="<?= $pages->get('1226'); ?>">Make Appointment Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Depertment-->
    <section id="depertment" class="divider parallax layer-overlay overlay-white-9" data-parallax-ratio="0.1" data-bg-img="<?= $config->urls->templates ?>images/bgs/bg6.jpg">
      <div class="container pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase title">Family and Cosmetic Dentists Serving <span class="text-theme-colored font-weight-300">Chandler, Gilbert and Sun Lakes AZ </span></h2>
              <p class="text-black">You’ll be glad you found us!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
            	<img src="<?= $config->urls->templates ?>images/hp/smiling-female-dentist-with-assistant-and-scared-male-patient-at-dental-clinic.jpg" alt="Smiling Female Dentist with scared male patien at dental clinic.">
              <h3 class=""><a href="#">Afraid to go to the Dentist? We Cater to Cowards!</a></h3>
              <p class=""><strong>Don’t feel bad if you fear going to the dentist</strong> – you have plenty of company, with about 50% of all Americans feeling the same way you do. We want to assure you that <strong>we understand your fear and will help you have a comfortable, easy visit</strong>.</p>
              <p><strong>We’ve treated many patients who have had bad experiences, who haven’t been to the dentist in years</strong>, have a lot of dental problems or have had problems getting numb. We offer <strong>anxiety-free sedation dentistry procedures</strong> – call our office and we will explain how our experienced dentists and warm, supportive staff will make your visit a pleasant experience.</p>
              <a href="#" class="btn btn-flat btn-theme-colored mt-15 text-theme-color-2">Read More</a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <img src="<?= $config->urls->templates ?>images/hp/cosmetic-dentistry.jpg" alt="cosmetic dentistry before and after">
              <h3 class=""><a href="#">State of the Art Cosmetic Dentistry</a></h3>
              <p class="">We take pride in our office having state-of-the-art equipment as well as experience with the most recent cosmetic dentistry techniques. Whether you want whiter teeth, porcelain crowns or veneers, or just natural colored fillings, we can help you achieve the smile of your dreams.</p>
              <a href="#" class="btn btn-flat btn-theme-colored mt-15 text-theme-color-2">Read More</a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <img src="<?= $config->urls->templates ?>images/hp/family-dentistry.jpg" alt="happy family smiling with beautiful teeth">
              <h3 class=""><a href="#">We’d Like to Be Your Family Dentist</a></h3>
              <p class="">Our dentists certainly understand children! Dr. Andy Shumway has 6 children and 8 grandchildren; Dr. Joel Shumway has 3 children. They are skilled at relieving a child’s fear and making a visit to the dentist an okay experience.</p>
              <a href="#" class="btn btn-flat btn-theme-colored mt-15 text-theme-color-2">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>



  	<!--start funfact Section-->
  	<section  class="divider parallax layer-overlay overlay-white-8" > 
    <!-- data-bg-img="http://placehold.it/1920x873" -->
  			<div class="container pb-50">
  				<div class="section-content">
  					<div class="row">
  						<div class="col-xs-12 col-sm-8 col-md-4 mb-50">
  							<div class="funfact text-center">
  								<i class="flaticon-medical-male100 text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="10" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0">Professional Dentists</h5>
  							</div>
  						</div>
  						<div class="col-xs-12 col-sm-8 col-md-4 mb-50">
  							<div class="funfact text-center">
  								<i class="pe-7s-smile text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="2480" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0">Happy Patients</h5>
  							</div>
  						</div>
  						<div class="col-xs-12 col-sm-8 col-md-4 mb-50">
  							<div class="funfact text-center">
  								<i class="flaticon-medical-hospital17 text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="554" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0">5 Star Reviews</h5>
  							</div>
  						</div>
              <!-- <div class="col-xs-12 col-sm-6 col-md-3 mb-50">
  							<div class="funfact text-center">
  								<i class="flaticon-medical-hospital36 text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="20" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0">Need SOmething here.</h5>
  							</div>
  						</div> -->
  					</div>
  				</div>
  			</div>
  	</section>





		<!--start testimonial Section-->
    <section class="bg-theme-colored2">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase text-white mt-0 line-height-1">Testimonials</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon-white.png" alt="">
              </div>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-3col" data-dots="true">
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-white">Gavin Smith</h5>
                        <h6 class="title text-gray-bbb mt-0">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-white">Jonathan Smith</h5>
                        <h6 class="title text-gray-bbb mt-0">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-white">Mary James</h5>
                        <h6 class="title text-gray-bbb mt-0">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/100x100"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-white">Lucy brown</h5>
                        <h6 class="title text-gray-bbb mt-0">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>

    <!-- Section: Blog -->
    <section id="blog">
      <div class="container pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1">Recent  <span class="text-theme-colored"> News</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="owl-carousel-3col owl-nav-top mb-sm-0" data-nav="true" data-duration="7000" data-autoplay="false">

              <?php 
                $posts = $pages->find('template=blog-post,sort=-date, limit=15'); 
                foreach ($posts as $post) :
              ?>
              
              <div class="item">
                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb">
                    <?php if (count($post->blog_images) > 0) :
                      $image = $post->blog_images->first();
                      $img = $image->size(350, 270); ?>

                      <img src="<?= $img->url ?>" alt="<?= $image->description ?>" class="img-responsive img-fullwidth"> 
                    <?php else : ?>

                    <img src="https://placehold.it/350x270?text=missing+image" alt="<?= $image->description ?>" class="img-responsive img-fullwidth"> 
                    
                    <?php endif; ?>
                      
                    </div>
                  </div>
                  <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-calendar mr-5 text-white"></i><?= date("d M", $post->getUnformatted("blog_date")); ?></span>
                    <!-- <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span> -->
                    <!-- <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span> -->
                  </div>
                  <div class="entry-content bg-lighter p-20 pr-10">
                    <div class="entry-meta mt-0 no-bg no-border">
                      <div class="event-content">
                        <h3 class="entry-title text-white text-capitalize m-0"><a href="#"><?= $post->title ?></a></h3>
                      </div>
                    </div>
                    <p class="mt-10"><?= $sanitizer->truncate($post->blog_body, "360") ?></p>
                    <div class="mt-10"> <a href="<?= $post->url ?>" class="btn btn-dark btn-sm">Read More</a> </div>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <!-- /.item -->

              <?php endforeach; ?>

            </div>
            <!-- /.owl-carousel -->
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <!-- <div class="owl-carousel-6col text-center owl-nav-top">
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
            </div> -->
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
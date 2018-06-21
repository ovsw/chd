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

    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">

        <div class="row">
          <div class="col-md-9">
            <div class="blog-posts">
              <div class="col-md-12">
                <div class="row list-dashed">

                  <?php 
                    $posts = $pages->find('template=post,sort=-date, limit=5');
                    $pagination = $posts->renderPager(array(
                      'nextItemLabel' => "Next",
                      'previousItemLabel' => "Prev",
                      'listMarkup' => "<ul class='pagination theme-colored'>{out}</ul>",
                      'itemMarkup' => "<li class='{class}'>{out}</li>",
                      'linkMarkup' => "<a href='{url}'><span>{out}</span></a>",
                      'currentItemClass' => "active"
                    ));
                  ?>

                  <div class="mb20" style="border: none!important;">
                    <nav>
                      <?= $pagination ?>
                    </nav>
                  </div>

                  <?php foreach($posts as $post) : ?>
                  <article class="post clearfix mb-30 pb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <a href="<?= $post->url ?>"><img src="<?= $post->images->first()->url ?>" alt="" class="img-responsive img-fullwidth"></a>
                      </div>
                    </div>
                    <div class="entry-content border-1px p-20 pr-10">
                      <div class="entry-meta media mt-0 no-bg no-border">
                        <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                          <ul>
                            <li class="font-16 text-white font-weight-600"><?= date("d", $post->getUnformatted("date")); ?></li>
                            <li class="font-12 text-white text-uppercase"><?= date("M", $post->getUnformatted("date")); ?></li>
                          </ul>
                        </div>
                        <div class="media-body pl-15">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="<?= $post->url ?>"><?= $post->title ?></a></h4>
                            <!-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                        -->
                            <!-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span> -->
                          </div>
                        </div>
                      </div>
                      <p class="mt-10"><?= $sanitizer->truncate($post->body, "360") ?></p>
                      <a href="<?= $post->url ?>" class="btn-read-more">Read more</a>
                      <div class="clearfix"></div>
                    </div>
                  </article>
                  <?php endforeach; ?>

                </div>
                <!-- /.row -->
              </div>
              <!-- /.col -->

              <div class="col-md-12">
                <nav>
                  <?= $pagination ?>
                </nav>
              </div>

            </div>
          </div>

          <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title">Categories</h5>
                <ul class="list-divider list-border list check">
                  <?php foreach($pages->get('1123')->children() as $category) : ?>
                  <li><a href="<?= $category->url ?>"><?= $category->title ?></a></li>                  
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- <div class="widget">
                <h4 class="widget-title">Twitter Feed</h4>
                <div class="twitter-feed list-border clearfix" data-username="Envato"></div>
              </div> -->

              <!-- <div class="widget">
                <h5 class="widget-title">Image gallery with text</h5>
                <div class="widget-image-carousel">
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

              <!-- <div class="widget">
                <h5 class="widget-title">Tags</h5>
                <div class="tags">
                  <?php foreach($pages->get('1017')->children() as $tag) : ?>
                  <a href="<?= $tag->url ?>"><?= $tag->title ?></a>                  
                  <?php endforeach; ?>
                </div>
              </div> -->

            </div>
            <!-- /.sidebar .sidebar-right -->
          </div>
          <!-- ./col-md-3 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
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
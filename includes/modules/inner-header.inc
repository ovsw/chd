<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-theme-colored2-9" data-bg-img="<?= $config->urls->templates ?>images/bgs/bg3.jpg">
  <div class="container pt-70 pb-20">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-center" data-text-color="white"><?= $page->get("page_heading|title"); ?></h2>
          <ol class="breadcrumb text-center text-white mt-10">
            <?php foreach ($page->parents as $parent) { echo "<li><a href='{$parent->url}' class='text-white'>{$parent->title}</a></li>\n";} ?>
            <li class="active text-theme-colored"><?= $page->title ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
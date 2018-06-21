<?php

/**
 *  render custom markup menu for bootstrap nested navigation
 *
 * @param  PageArray  $pa     pages of the top level items
 * @param  Page  $root   root page optional, if you use other root than home page (id:1)
 * @param  string  $output for returned string collection
 * @param  integer $level  internally used to count levels
 * @return string          menu html string
 */
function renderChildrenOf($pa, $root = null, $output = '', $level = 0) {
    if(!$root) $root = wire("pages")->get(1);
    $output = '';
    $level++;
    foreach($pa as $child) {
        $class = '';
        $has_children = ($child->id == "1018" || count($child->children('include=all'))) ? true : false;

        if($has_children && $child !== $root) {
            if($level == 1){
                $class .= 'parent'; // first level boostrap dropdown li class
                //$atoggle .= ' class="dropdown-toggle" data-toggle="dropdown"'; // first level anchor attributes
            }
        }

        // make the current page and only its first level parent have an active class
        if($child === wire("page") && $child !== $root){
            $class .= ' active';
        } else if($level == 1 && $child !== $root){
            if($child === wire("page")->rootParent || wire("page")->parents->has($child)){
                $class .= ' active';
            }
        }

        $class = strlen($class) ? " class='".trim($class)."'" : '';
        if($child->menu_item_url) {$childlink = $child->menu_item_url; } else { $childlink = $child->url; }
        $output .= "<li$class><a href='$childlink'>$child->title</a>";

        // If this child is itself a parent and not the root page, then render its children in their own menu too...
        
        if($has_children && $child !== $root) {
          
          //  check for special menu items
          if ($child->id == "1263") { //services main item
            
            $mainServices = $child->children;

            $output .= '<div class="megamenu"><div class="megamenu-row">';
            
            // promo
            $output .= '<div class="col3">';
            $output .= '<h4 class="megamenu-col-title">Promotional Offer:</h4>';
            $output .= '<a href="#"><img src="http://placehold.it/270x244" alt=""></a>';
            $output .= '</div>';
            // end promo
            
            // first column
            $output .= '<div class="col3">';
            $output .= megaMenuList($mainServices[0]);
            $output .= '</div>';
            // end first column

            // second column
            $output .= '<div class="col3">';
            $output .= megaMenuList($mainServices[1]);
            $output .= megaMenuList($mainServices[2]);
            $output .= '</div>';
            // end second column

            // third column
            $output .= '<div class="col3">';
            $output .= megaMenuList($mainServices[3]);
            $output .= '</div>';
            // end third column

            $output .= '</div></div>';
          }elseif ($child->id == "1018") {// blog main menu item
            
            $output .= '<div class="megamenu"><div class="megamenu-row">';

            // first column
            $output .= '<div class="col3">';
            $output .= megaMenuBlogCatList('general-dentistry');
            $output .= megaMenuBlogCatList('sleep-apnea-snoring');
            $output .= '</div>';
            // end first column

            // second column
            $output .= '<div class="col3">';
            $output .= megaMenuBlogCatList('cosmetic-dentistry');
            $output .= '</div>';
            // end second column

            // third column
            $output .= '<div class="col3">';
            $output .= megaMenuBlogCatList('childrens-dentistry');
            $output .= '</div>';
            // end third column

            // dourth column
            $output .= '<div class="col3">';
            $output .= megaMenuBlogCatList('sedation-dentistry');                        
            $output .= megaMenuBlogCatList('restorations');
            $output .= '</div>';
            // end dourth column

            $output .= '</div></div>';
            
          }else {// default case for all other menu items

              $output .= renderChildrenOf($child->children('include=all'), $root, $output, $level);

          }
        }
        $output .= '</li>';


    }
    $outerclass = ($level == 1) ? "menuzord-menu" : 'dropdown';
    return "<ul class='$outerclass'>$output</ul>";
}

function megaMenuList($mainItem, $output = '') {

  $output .= '<h4 class="megamenu-col-title">'.$mainItem->title.'</h4>';            
  $output .= '<ul class="list-dashed list-icon">';
  foreach ($mainItem->children as $item) {

    $l2Class = ($item === wire("page")) ? "active" : "";
    $output .= '<li class="'.$l2Class.'"><a href="'.$item->url.'">'.$item->title.'</a></li>';
    
  }
  $output .= '</ul>';

  return $output;

}

function megaMenuBlogCatList($blogCatName, $limit = '10', $output = '') {
  
  $blogCat = wire("pages")->get('template=blog-category,name='.$blogCatName);
  $blogCat_pages = wire("pages")->find("template=blog-post, limit={$limit}, sort=-blog_date,blog_categories=".$blogCatName);
  
  $output .= '<h4 class="megamenu-col-title">'.$blogCat->title.'</h4>';            
  $output .= '<ul class="list-dashed list-icon">';
  
  foreach ($blogCat_pages as $item) {

    $l2Class = ($item === wire("page")) ? "active" : "";
    $output .= '<li class="'.$l2Class.'"><a href="'.$item->url.'">'.$item->title.'</a></li>';
    
  }
  $output .= '</ul>';

  return $output;

}

$root = $pages->get("1");
$pa = $root->children("template!=blog-post|blog-categories|blog-tags|blog-archives|blog-authors|blog-comments");
$pa = $pa->prepend($root);

?>

<nav id="menuzord-right" class="menuzord orange no-bg">
  <a class="menuzord-brand pull-left flip mb-15" href="/"><img src="<?= $config->urls->templates ?>images/logo-wide.png" alt=""></a>
  
              <!-- <div id="side-panel-trigger" class="side-panel-trigger mt-5">
                <a href="#"><i class="fa fa-bars text-theme-colored font-24"></i></a>
              </div> -->
           
  <?= renderChildrenOf($pa); ?>
</nav>
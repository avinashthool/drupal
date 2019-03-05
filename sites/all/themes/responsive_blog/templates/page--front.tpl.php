<?php
?>
<div id="wrapper">
  <header id="header" class="clearfix">
    <?php if (theme_get_setting('image_logo','responsive_blog')): ?>
      <?php if ($logo): ?><div id="site-logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a></div><?php endif; ?>
    <?php else: ?>
      <hgroup id="site-name-wrap">
        <h1 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <span><?php print $site_name; ?></span>
          </a>
        </h1>
        <?php if ($site_slogan): ?><h2 id="site-slogan"><?php print $site_slogan; ?></h2><?php endif; ?>
      </hgroup>
    <?php endif; ?>
    <?php if (theme_get_setting('socialicon_display', 'responsive_blog')): ?>
        <?php 
        $twitter_url = check_plain(theme_get_setting('twitter_url', 'responsive_blog')); 
        $facebook_url = check_plain(theme_get_setting('facebook_url', 'responsive_blog')); 
        $google_plus_url = check_plain(theme_get_setting('google_plus_url', 'responsive_blog')); 
        $pinterest_url = check_plain(theme_get_setting('pinterest_url', 'responsive_blog'));
        ?>
      <div class="social-profile">
        <ul>
          <?php if ($facebook_url): ?><li class="facebook">
            <a target="_blank" title="<?php print $site_name; ?> in Facebook" href="<?php print $facebook_url; ?>"><?php print $site_name; ?> Facebook </a>
          </li><?php endif; ?>
          <?php if ($twitter_url): ?><li class="twitter">
            <a target="_blank" title="<?php print $site_name; ?> in Twitter" href="<?php print $twitter_url; ?>"><?php print $site_name; ?> Twitter </a>
          </li><?php endif; ?>
          <?php if ($google_plus_url): ?><li class="google-plus">
            <a target="_blank" title="<?php print $site_name; ?> in Google+" href="<?php print $google_plus_url; ?>"><?php print $site_name; ?> Google+ </a>
          </li><?php endif; ?>
          <?php if ($pinterest_url): ?><li class="pinterest">
            <a target="_blank" title="<?php print $site_name; ?> in Pinterest" href="<?php print $pinterest_url; ?>"><?php print $site_name; ?> Twitter </a>
          </li><?php endif; ?>
          <li class="rss">
            <a target="_blank" title="<?php print $site_name; ?> in RSS" href="<?php print $front_page; ?>rss.xml"><?php print $site_name; ?> RSS </a>
          </li>
        </ul>
      </div>
    <?php endif; ?>
    <nav id="navigation" role="navigation">
      <div id="main-menu">
        <?php 
          if (module_exists('i18n_menu')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
          } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
          }
          print drupal_render($main_menu_tree);
        ?>
      </div>
    </nav>
  </header>

  <div id="preface-area" class="clearfix">
    <?php if($page['preface_first'] || $page['preface_middle'] || $page['preface_last']) : ?>
    <div id="preface-block-wrap" class="clearfix in<?php print (bool) $page['preface_first'] + (bool) $page['preface_middle'] + (bool) $page['preface_last']; ?>">
      <?php if($page['preface_first']): ?><div class="preface-block">
        <?php print render ($page['preface_first']); ?>
      </div><?php endif; ?>
      <?php if($page['preface_middle']): ?><div class="preface-block">
        <?php print render ($page['preface_middle']); ?>
      </div><?php endif; ?>
      <?php if($page['preface_last']): ?><div class="preface-block">
        <?php print render ($page['preface_last']); ?>
      </div><?php endif; ?>
    </div>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </div>

  <div id="main" class="clearfix">
    <div id="primary">
      <section id="content" role="main">
        <?php if ($is_front): ?>
        <?php if (theme_get_setting('slideshow_display','responsive_blog')): ?>
        <?php 
        $slide1_url = check_plain(theme_get_setting('slide1_url','responsive_blog'));
        $slide2_url = check_plain(theme_get_setting('slide2_url','responsive_blog'));
        $slide3_url = check_plain(theme_get_setting('slide3_url','responsive_blog'));
        $slide1_desc = check_markup(theme_get_setting('slide1_desc', 'responsive_blog'), 'full_html'); 
        $slide2_desc = check_markup(theme_get_setting('slide2_desc', 'responsive_blog'), 'full_html'); 
        $slide3_desc = check_markup(theme_get_setting('slide3_desc', 'responsive_blog'), 'full_html'); 
        ?>
        <div id="slider">
          <div id="slider-wrap">
            <div class="slides displayblock">
              <a href="<?php print url($slide1_url); ?>">
                <img width="800" height="160" src="http://fakeimg.pl/700x250/?text=Fakeimage&font=lobster'; ?>" class="pngfix"/>
                <div class="bottom-left">
                  <?php
                    print $slide1_desc;
                  ?>
                </div>
              </a>
            </div>

            <!-- <div class="slides displaynone">
              <a href="<?php print url($slide2_url); ?>">
                <img width="800" height="160" src="http://fakeimg.pl/700x250/?text=Fakeimage&font=lobster" class=""/>
                <div class="bottom-left">
                  <?php
                    print $slide2_desc;
                  ?>
                </div>
              </a>
            </div>

            <div class="slides displaynone">
              <a href="<?php print url($slide3_url); ?>">
                <img width="800" height="160" src="http://fakeimg.pl/700x250/?text=Fakeimage&font=lobster" class="pngfix"/>
                <div class="bottom-left">
                  <?php
                    print $slide3_desc;
                  ?>
                </div>
              </a>
            </div> -->
          </div>
          <div id="nav-slider">
            <div class="nav-previous"><img class="pngfix" src="<?php print base_path() . drupal_get_path('theme', 'responsive_blog') . '/images/previous.png'; ?>" alt="next slide"></div>
            <div class="nav-next"><img class="pngfix" src="<?php print base_path() . drupal_get_path('theme', 'responsive_blog') . '/images/next.png'; ?>" alt="next slide"></div>
          </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>

        <?php if (theme_get_setting('breadcrumbs')): ?><?php if ($breadcrumb): ?><div id="breadcrumbs"><?php print $breadcrumb; ?></div><?php endif;?><?php endif; ?>
        <?php print $messages; ?>
        <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
        <div id="content-wrap">
          <?php print render($page['content']); ?>
        </div>
      </section> <!-- /#main -->
    </div>

    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar" role="complementary">
       <?php print render($page['sidebar_first']); ?>
      </aside> 
    <?php endif; ?>
  </div>

  <div id="footer-area" class="clearfix">
      <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third']): ?>
        <div id="footer-block-wrap" class="clearfix in<?php print (bool) $page['footer_first'] + (bool) $page['footer_second'] + (bool) $page['footer_third']; ?>">
          <?php if($page['footer_first']): ?><div class="footer-block">
            <?php print render ($page['footer_first']); ?>
          </div><?php endif; ?>
          <?php if($page['footer_second']): ?><div class="footer-block">
            <?php print render ($page['footer_second']); ?>
          </div><?php endif; ?>
          <?php if($page['footer_third']): ?><div class="footer-block">
            <?php print render ($page['footer_third']); ?>
          </div><?php endif; ?>
        </div>
      <?php endif; ?>
      
      <?php print render($page['footer']); ?>
  </div>

    <footer id="footer-bottom">
      <div id="bottom" class="clearfix">
        <div class="copyright"><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></div>
      </div>
    </footer>
    <?php print render($page['footer_bottom']); ?>
</div>







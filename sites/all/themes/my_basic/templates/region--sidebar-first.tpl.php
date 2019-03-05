<?php $recent_articles = node_load_multiple(array(), array('type' => 'blog_entries')); ?>
<?php //echo "<pre>"; print_r($recent_articles);  ?>
<div class="most_popular_articles">
  	<span class="most_popular_articles_head">
    	Recent Articles
	</span>

<?php foreach ($recent_articles as $key => $article) { ?>
	<div class="blogcontents">
      <div class="views">
        <div class="most_popular_article no_cat_title">
          	<div class="most_popular_article_row">
            <div class="most_popular_article_image">
                <a href="/us-en/investing-mental-health">
                  <span class="display-desktop">
                  	<img class="display-desktop" data-icon="/sites/all/modules/lazyloader/loader/loader-8.gif" src="https://unity.artofliving.org/sites/unity.artofliving.org/files/styles/unity_plus_articles_thumb/public/unity2/blog_image/roi-dimor-427577%20%281%29.jpg?itok=dxpgy64r" width="120" height="80" alt="" title="">
                  </span>
                </a>
          	</div>
            <div class="most_popular_article_details ">
              <span class="most_popular_article_parent">
              	<a href="/us-en/sri-sri-blog" class="theme_hit_pink-text">PHP</a>
      		  </span>
          	  <span class="most_popular_article_head theme_hit_pink-text-hover">
	          	<a href="/<?php print $article->nid; ?>"><?php print $article->title; ?></a>
          	  </span>
          	  <span class="most_popular_article_head theme_hit_pink-text-hover">
	          	<a href="#"><?php print $article->revision_timestamp; ?></a>
          	  </span>
        	</div>
        </div>
    </div>
  </div>
  </div>
<?php } ?>
</div>

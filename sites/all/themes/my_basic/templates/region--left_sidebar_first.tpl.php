<?php
$region_details =  block_list($region);
$categories = node_load_multiple(array(), array('type' => 'blog_topic'));
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title">
      <span class="glyphicon glyphicon-random"></span>
      Feeds
    </h1>
  </div>
  <div class="list-group">
    <?php foreach ($categories as $key => $category) { ?>
  <a href="#" class="list-group-item"><?php print t($category->title) ?></a>
<?php } ?>
  </div>
</div>    
    
      
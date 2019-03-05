<?php 
  $recent_articles = node_load_multiple(array(), array('type' => 'blog_entries'));
  $region_details =  block_list($region);
?>
      <!-- Alert -->
      <!-- <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Synergize:</strong> Seamlessly visualize quality intellectual capital!
      </div>  -->   
    
      <?php foreach ($recent_articles as $key => $article) { ?>
        <div class="row">
          <article class="col-xs-12">
            <h2><?php print t($article->title) ?></h2>
            <p>Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric "outside the box" thinking. Completely pursue scalable customer service through sustainable potentialities.</p>
            <p><button class="btn btn-default"><a href="/node/<?php print($article->nid) ?>">Read More</a></button></p>
            <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
            <ul class="list-inline">
              <li><a href="#"><?php print t(date("Y-m-d", $article->created)) ?></a></li>
              <li><a href="#"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-share"></span> 8 Shares</a></li>
            </ul>
          </article>
        </div>
        <hr>
      <?php } ?>
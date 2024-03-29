    <?php if(!$logged_in) { ?>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-globe"></span> Logo</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="about-us">
              <li><a href="#">Engage</a></li>
              <li><a href="#">Pontificate</a></li>
              <li><a href="#">Synergize</a></li>
            </ul>
          </li>    
                </ul>

        <!-- Search -->
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
        </form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<?php } ?>
<div class="container-fluid">

    <!-- Left Column -->
    <div class="col-sm-3">

      <!-- List-Group Panel -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title"><span class="glyphicon glyphicon-random"></span> Completely Synergize</h1>
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item">Resource Taxing</a>
          <a href="#" class="list-group-item">Premier Niche Markets</a>
          <a href="#" class="list-group-item">Dynamically Innovate</a>
          <a href="#" class="list-group-item">Objectively Innovate</a>
          <a href="#" class="list-group-item">Proactively Envisioned</a>
        </div>
      </div>

      <!-- Text Panel -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Dramatically Engage</h1>
        </div>

        <div class="panel-body">
          <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
          <p><button class="btn btn-default">Engage</button></p>
        </div>
      </div>

      <!-- Text Panel -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <span class="glyphicon glyphicon-bullhorn"></span> 
            Active Predomination
          </h3>
        </div>
        <div class="panel-body">
          <p>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">Resource</button>
            <button type="button" class="btn btn-default">Envision</button>
            <button type="button" class="btn btn-default">Niche</button>
          </div>
        </div>
      </div>  
        
    </div><!--/Left Column-->
  
  
    <!-- Center Column -->
    <div class="col-sm-6">
      <?php if($page['content']): ?>
          <?php print render ($page['content']); ?>
      <?php endif; ?>
    </div>
    <!--/Center Column-->

    <!-- Right Column -->
    <div class="col-sm-3">

      <!-- Form --> 
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <span class="glyphicon glyphicon-log-in"></span> 
            Log In
          </h3>
        </div>
        <div class="panel-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="uid" name="uid" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
          </form>
        </div>
      </div>
 
      <!-- Progress Bars -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <span class="glyphicon glyphicon-scale"></span> 
            Dramatically Engage
          </h3>
        </div>
        <div class="panel-body">
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
            aria-valuemin="0" aria-valuemax="100" style="width:100%">
              100% Proactively Envisioned
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
            aria-valuemin="0" aria-valuemax="100" style="width:80%">
              80% Objectively Innovated
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45"
            aria-valuemin="0" aria-valuemax="100" style="width:45%">
              45% Portalled
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="35"
            aria-valuemin="0" aria-valuemax="100" style="width:35%">
              35% Done
            </div>
          </div>
        </div>
      </div>

      <!-- Carousel --> 
      <h3><span class="glyphicon glyphicon-modal-window"></span> Synergization</h3>
      <div id="side-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#side-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#side-carousel" data-slide-to="1"></li>
          <li data-target="#side-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <a href="#">
              <img class="img-responsive" src="holder.js/400x300?bg=FF8C00&text=Image%201" alt="">
            </a>
            <div class="carousel-caption">
              <h3>Dramatically Engage</h3>
              <p>Objectively innovate empowered manufactured products whereas parallel platforms.</p>
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img class="img-responsive" src="holder.js/400x300?bg=FF8C00&text=Image%202" alt="">
            </a>
            <div class="carousel-caption">
              <h3>Efficiently Unleash</h3>
              <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img class="img-responsive" src="holder.js/400x300?bg=FF8C00&text=Image%203" alt="">
            </a>
            <div class="carousel-caption">
              <h3>Proactively Pontificate</h3>
              <p>Holistically pontificate installed base portals after maintainable products.</p>
            </div>
          </div>        
        </div>
        <a class="left carousel-control" href="#side-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#side-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>

    </div><!--/Right Column -->

  </div><!--/container-fluid-->
  
  <footer>
    <div class="footer-blurb">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 footer-blurb-item">
            <h3><span class="glyphicon glyphicon-text-size"></span> Dynamic</h3>
            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
            <p><a class="btn btn-default" href="#">Procrastinate</a></p>
          </div>
          <div class="col-sm-3 footer-blurb-item">
            <h3><span class="glyphicon glyphicon-wrench"></span> Efficient</h3>
            <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </p>
            <p><a class="btn btn-default" href="#">Unleash</a></p>
          </div>
          <div class="col-sm-3 footer-blurb-item">
            <h3><span class="glyphicon glyphicon-paperclip"></span> Complete</h3>
            <p>Professionally cultivate one-to-one customer service with robust ideas. Completely synergize resource taxing relationships via premier niche markets. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
            <p><a class="btn btn-default" href="#">Complete</a></p>
          </div>
          <div class="col-sm-3 footer-blurb-item">
            
            <!-- Thumbnails --> 
            <h3><span class="glyphicon glyphicon-camera"></span> Phosfluorescent</h3>
              <div class="row">
                <div class="col-xs-6">
                  <a href="#" class="thumbnail">
                    <img src="holder.js/110x80" alt="">
                  </a>
                </div>
                <div class="col-xs-6">
                  <a href="#" class="thumbnail">
                    <img src="holder.js/110x80" alt="">
                  </a>
                </div>
                <div class="col-xs-6">
                  <a href="#" class="thumbnail">
                    <img src="holder.js/110x80" alt="">
                  </a>
                </div>
                <div class="col-xs-6">
                  <a href="#" class="thumbnail">
                    <img src="holder.js/110x80" alt="">
                  </a>
                </div>
              </div>
              
          </div>

        </div>
        <!-- /.row -->  
      </div>
        </div>
        
        <div class="small-print">
          <div class="container">
            <p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
            <p>Copyright &copy; Example.com 2015 </p>
          </div>
        </div>
  </footer>

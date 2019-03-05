<?php if(!$logged_in) { ?>
    <nav role="navigation" id="nav">
              <input class="trigger" type="checkbox" id="mainNavButton">
              <label for="mainNavButton" onclick>Menu</label>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a>
                    <ul>
                      <li><a href="#">Sub Nav Item</a></li>
                      <li><a href="#">Sub Nav Item</a>
                        <ul>
                          <li><a href="#">Sub Sub Nav Item</a></li>
                          <li><a href="#">Sub Sub Nav Item</a></li>
                          <li><a href="#">Sub Sub Nav Item</a></li>
                          <li><a href="#">Sub Sub Nav Item</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Sub Nav Item</a></li>
                      <li><a href="#">Sub Nav Item</a></li>
                    </ul>
                </li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Specials</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
              </ul> 
            </nav>
<?php } ?>
<div class="hero-section">
  <div id="side-carousel-hero" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item" style="height: 300px;">
            <div class="carousel-caption">
              <h3>Dramatically Engage</h3>
              <p>Objectively innovate empowered manufactured products whereas parallel platforms.</p>
            </div>
          </div>
          <div class="item" style="height: 300px;">
            <div class="carousel-caption">
              <h3>Efficiently Unleash</h3>
              <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
            </div>
          </div>
          <div class="item active" style="height: 300px;">
            <div class="carousel-caption">
              <h3>Proactively Pontificate</h3>
              <p>Holistically pontificate installed base portals after maintainable products.</p>
            </div>
          </div>        
        </div>
        <a class="left carousel-control" href="#side-carousel-hero" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#side-carousel-hero" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
</div>
<div id="wrapper" class="container-fluid">
  <div class="col-sm-3">
    <?php if($page['left_sidebar_first']): ?>
      <div class="preface-block ">
        <?php print render ($page['left_sidebar_first']); ?>
      </div>
    <?php endif; ?>
    <?php if($page['left_sidebar_second']): ?>
      <div class="preface-block">
        <?php print render ($page['left_sidebar_second']); ?>
      </div>
    <?php endif; ?>
    <?php if($page['left_sidebar_third']): ?>
      <div class="preface-block">
        <?php print render ($page['left_sidebar_third']); ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="col-sm-6">
    <?php if($page['content']): ?>
      <div class="preface-block">
        <?php print render ($page['content']); ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="col-sm-3">
    <?php if($page['right_sidebar_first']): ?>
      <div class="preface-block">
        <?php print render ($page['right_sidebar_first']); ?>
      </div>
    <?php endif; ?>
    <?php if($page['right_sidebar_second']): ?>
      <div class="preface-block">
        <?php print render ($page['right_sidebar_second']); ?>
      </div>
    <?php endif; ?>
    <?php if($page['right_sidebar_third']): ?>
      <div class="preface-block">
        <?php print render ($page['right_sidebar_third']); ?>
      </div>
    <?php endif; ?>
  </div>
</div>
  <footer>
    <div class="footer-blurb">
      <div class="container">
        <div class="col-sm-3 footer-blurb-item">
        <?php if($page['footer_first']): ?>
          <div class="preface-block">
            <?php print render ($page['footer_first']); ?>
          </div>
        <?php endif; ?>
        </div>
        <div class="col-sm-3 footer-blurb-item">
        <?php if($page['footer_second']): ?>
          <div class="preface-block">
            <?php print render ($page['footer_second']); ?>
          </div>
        <?php endif; ?>
        </div>
        <div class="col-sm-3 footer-blurb-item">
        <?php if($page['footer_third']): ?>
          <div class="preface-block">
            <?php print render ($page['footer_third']); ?>
          </div>
        <?php endif; ?>
        </div>
        <div class="col-sm-3 footer-blurb-item">
        <?php if($page['footer_fourth']): ?>
          <div class="preface-block">
            <?php print render ($page['footer_fourth']); ?>
          </div>
        <?php endif; ?>
        </div>
        <div class="small-print">
          <div class="container">
            <p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
            <p>Copyright &copy; Example.com 2015 </p>
          </div>
        </div>
    </div>
  </div>
</footer>






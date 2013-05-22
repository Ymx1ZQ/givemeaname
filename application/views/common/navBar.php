    <!-- NAVBAR
    ================================================== -->
    <?php $this->load->helper('url'); ?>
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Give me a name</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="/home/index">Home</a></li>
                <li><a href="/home/about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                -->
                <li><a href="/home/signup">Sign up</a></li>
                
                <form style="float:right" method="post" action="/auth/login" data-ajax="false">
					<input name="redirect_back" type="hidden" value="<?=$redirect_back?>">
					<input name="redirect_forward" type="hidden" value="<?=$redirect_forward?>">
					<input name="email" type="email" placeholder="Email" required="required" value="<?=$suggested_fields['email']?>">
					<input name="password" type="password" placeholder="Password" required="required">
					<input name="remember" type="checkbox" checked="checked" value="true">
					<input class="btn btn-small btn-primary" type="submit" value="Login">
				</form>
				
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



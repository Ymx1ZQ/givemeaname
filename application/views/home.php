
<!DOCTYPE html>
<html lang="en">
<? $this->view("common/header.php"); ?>
  <body>


<? $this->view("common/navBar.php", array('logged' => $logged)); ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
	  <? if (!empty($message)) $this->load->view('common/message', $message); // info messages ?>
      <div class="carousel-inner">
        <div class="item active">
          <img src="/graphics/img/af1.jpg" alt="example pic">
          <div class="container">
            <div class="carousel-caption">
              <h1>Give a name to a child!</h1>
              <p class="lead">Donate an education. Donate a new life.</p>
              <a class="btn btn-large btn-primary" href="/home/signup">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/graphics/img/adam.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Help Adam!</h1>
              <p class="lead">Adam’s dream is to become an entrepreneur, lets help him fulfil it.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>About US</h2>
          <p>Many children in underdeveloped or developing countries don’t have a legal name, so 



as they are not registered in the civil registry, their existence is not legally recognised. At 



GiveMeAName, we want to change this situation creating a crowd-funding platform for long distance adoption to give these children shelter, food, education and a legal name. With your 



help, we will be able to save a lot of lives.
</p>
          <p><a class="btn" href="#">Read More &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Name Meter</h2>
          <p><img src="/graphics/img/chartmockup.jpg" alt="names"></p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Partners</h2>
          <p>Do you want to see partnering options with us. See the contact page.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->

	<div class="row">
			<h4>List of names available</h4>
			<p>These below are the names which have already been proposed: click on the name if you want to donate for this name and give it to a child</p>
			<?
				if (!empty($names)) {
					echo '<ul>';
					foreach ($names as $name) {
						echo '<li><a href="/home/view_name/'.$name['id'].'">'.$name['name'].'</a></li>';
					}
					echo '</ul>';
				}
				else echo '<p>No name has been proposed yet</p>';
			?>			
			<br/>
			<p>Click here if you want to <a href="/home/propose"> propose a new name</a>!</p>
	</div>



      <!-- START THE FEATURETTES -->
<!--
      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png">
        <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="../assets/img/examples/browser-icon-firefox.png">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-safari.png">
        <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

<? $this->view("common/footer.php"); ?>

<?php include 'header.php'
?>
    <main role="main">

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <h2>Accordeon widget</h2>
        <div id="accord">
          <h3><a href="#">Section 1</a>  </h3>  
          <div>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, cumque.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, cumque.</p>

          </div>
          <h3><a href="#">Section 2</a>  </h3>  
          <div>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, cumque.</p>
          </div>
          <h3><a href="#">Section 3</a>  </h3>  
          <div>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, cumque.</p>
          </div>
        </div>
    </div>
    <div class="col-md-6">
      <div id="tabs">
        <ul>
          <li><a href="#tab1">New1</a></li>
          <li><a href="#tab2">New2</a></li>
          <li><a href="#tab3">New3</a></li>
        </ul>
        <div id="tab1">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eaque quam, repellat odio, enim nisi.</p>
        </div>
        <div id="tab2">
        <ul>
          <li>Punkt 1</li>
          <li>Punkt 2</li>
          <li>Punkt 3</li>
        </ul>
      </div>
      <div id="tab3">
        <img src="img/sochi01.jpg" class="image-fluid">
      </div>
      </div>display:inline-block;
    </div>
   </div>
   <div class="row mt-4">
     <div class="col-md-6">
       <h2>Slider</h2>
       <p>
  <label for="amount">Price range:</label>
  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
</p>
       <div id="slider"></div>
     </div>
   </div>

   <div class="row mt-4">
     <div class="col-md-6">
       <h1>Menu</h1>
       <ul class="menu">
         <li><a href="#"> Punkt 1 </a> </li>
         <li><a href="#"> Punkt 2 </a> </li>
         <li><a href="#"> Punkt 3 </a> </li>
         <ul>
           <li><a href="#"> Product 1 </a></li>
           <li><a href="#"> Product 1 </a></li>
         </ul>

       </ul>
       <div class="col-md-6">
         <h2>Datepicker</h2>
         <input id="calendar">
       </div>
     </div>
    <div class="row mt-4">
      <div class="col-md-6">
        <h2>Button</h2>
            <button  id="btn4">Button</button>
            <a href="#" id="link"></a>
      </div>
    </div>
    <div class="col-md-6">
       <h2>Dialog</h2>
       <button class="btn btn-primary btn-lg" id="btn5">
    Open dialog
       </button>
       <div id="dialog" title="Dialog window">
        <img src="img/sochi03.jpg" width="200">
        
        <form>
          <div class="form-group">
          <label for="name">Login</label>
          <input type="text" id="name">
          </div>
          <div class="form-group">
          <label for="email">Email</label>
           <input type="email" id="email">
         </div>
          <input type="submit" value="Otpravit" class="btn bnt-lg btn-info">
         </form> 
       </div>
     </div>

   </div>

</div>



      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
<? include 'footer.php';
?>
   

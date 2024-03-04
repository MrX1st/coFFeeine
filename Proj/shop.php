<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coFFeeine</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
  <div class="tm-container">
    <div class="tm-row">
      <!-- Site Header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-coffee fa-3x tm-site-logo"></i>
            <h1 class="tm-site-name">coFFeeine</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="#drink" class="tm-page-link active">
                  <i class="fas fa-mug-hot tm-page-link-icon"></i>
                  <span>Drink Menu</span>
                </a>
              </li>
              <li class="tm-page-nav-item" onclick="redirectToURL('http://localhost/Proj/Proj/index.php')" style="cursor: pointer;">
                <a class="tm-page-link">
                  <i class="fas fa-users tm-page-link-icon" ></i>
                  <span>Academy</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#special" class="tm-page-link">
                  <i class="fas fa-glass-martini tm-page-link-icon"></i>
                  <span>Special Items</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#contact" class="tm-page-link">
                  <i class="fas fa-comments tm-page-link-icon"></i>
                  <span>Contact</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
            <!-- Drink Menu Page -->
            <nav class="tm-black-bg tm-drinks-nav">
              <ul>
                <li>
                  <a href="#" class="tm-tab-link active" data-id="cold">Iced Coffee</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="hot">Hot Coffee</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="juice">Fruit Juice</a>
                </li>
              </ul>
            </nav>

            <div id="cold" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="img/iced-americano.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Americano<span class="tm-list-item-price">$10.25</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the first item.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-cappuccino.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Cappuccino<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the second item.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-espresso.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Espresso<span class="tm-list-item-price">$14.25</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the third item.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-latte.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Latte<span class="tm-list-item-price">$11.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the fourth item.</p>
                  </div>
                </div> 
                                       
              </div>
            </div> 

            <div id="hot" class="tm-tab-content">
              <div class="tm-list">
              
                <div class="tm-list-item">          
                  <img src="img/hot-americano.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Americano<span class="tm-list-item-price">$8.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the first item.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-cappuccino.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Cappuccino<span class="tm-list-item-price">$9.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the second item.</p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-espresso.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Espresso<span class="tm-list-item-price">$7.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the third item.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-latte.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Latte<span class="tm-list-item-price">$6.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the fourth item.</p>              
                  </div>
                </div>
                         
              </div>
            </div>

            <div id="juice" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="img/smoothie-1.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Strawberry Smoothie<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the first item.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-2.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Red Berry Smoothie<span class="tm-list-item-price">$14.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the second item.</p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-3.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Pineapple Smoothie<span class="tm-list-item-price">$16.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the third item.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-4.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Spinach Smoothie<span class="tm-list-item-price">$18.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the fourth item.</p>              
                  </div>
                </div>              
              </div>
            </div>
            <!-- end Drink Menu Page -->
          </div>

          <!-- About Us Page -->
          <div id="about" class="tm-page-content">
            <div class="tm-black-bg tm-mb-20 tm-about-box-1">              
              <h2 class="tm-text-primary tm-about-header">About coFFeeine</h2>
              <div class="tm-list-item tm-list-item-2">                
                <img src="img/about-1.png" alt="Image" class="tm-list-item-img tm-list-item-img-big">
                <div class="tm-list-item-text-2">
                  <p>We are coFFeeine and we have the best quality.</p>
                  <p>Come join our Academy to learn more if you are interested in being a barista</p>
                </div>                
              </div>
            </div>
            <div class="tm-black-bg tm-mb-20 tm-about-box-2">              
              <div class="tm-list-item tm-list-item-2">                
                <div class="tm-list-item-text-2">
                  <h2 class="tm-text-primary">How we began</h2>
                  <p>We began as a group of people who love coffee and want to serve people and show the world how amazing the coffe really is.</p>                  
                </div>                
                <img src="img/about-2.png" alt="Image" class="tm-list-item-img tm-list-item-img-big tm-img-right">                
              </div>
              <p>...</p>
            </div>
          </div>
          <!-- end About Us Page -->

          <!-- Special Items Page -->
          <div id="special" class="tm-page-content">
            <div class="tm-special-items">
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-01.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Special One</h2>
                  <p class="tm-special-item-text">Here is a short text description for the first special item.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-02.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Second Item</h2>
                  <p class="tm-special-item-text">Here is a short text description for the second special item.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-03.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Third Special Item</h2>
                  <p class="tm-special-item-text">Here is a short text description for the third special item.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-04.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Special Item Fourth</h2>
                  <p class="tm-special-item-text">Here is a short text description for the fourth special item.</p>  
                </div>
              </div>      
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-05.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Sixth Sense</h2>
                  <p class="tm-special-item-text">Here is a short text description for sixth item.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-06.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Seventh Item</h2>
                  <p class="tm-special-item-text">Here is a short text description for the seventh special item.</p>  
                </div>
              </div>                      
            </div>            
          </div>
          <!-- end Special Items Page -->

          <!-- Contact Page -->
          <div id="contact" class="tm-page-content">
            <div class="tm-black-bg tm-contact-text-container">
              <h2 class="tm-text-primary">Contact coFFeeine</h2>
              <p>Reach us anywhere, anytime and anyhow.</p>
            </div>
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form action="" method="POST" id="contact-form">
                <div class="tm-form-group">
                  <input type="text" name="name" class="tm-form-control" placeholder="Name" required="" />
                </div>
                <div class="tm-form-group">
                  <input type="email" name="email" class="tm-form-control" placeholder="Email" required="" />
                </div>        
                <div class="tm-form-group tm-mb-30">
                  <textarea rows="6" name="message" class="tm-form-control" placeholder="Message" required=""></textarea>
                </div>        
                <div>
                  <button type="submit" class="tm-btn-primary tm-align-right">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- end Contact Page -->
        </main>
      </div>    
    </div>
    <footer class="tm-site-footer">
      <p class="tm-black-bg tm-footer-text">Copyright 2019 coFFeeine</p>
    </footer>
  </div>
    
  <!-- Background video -->
  <div class="tm-video-wrapper">
      <i id="tm-video-control-button" class="fas fa-pause"></i>
      <video autoplay muted loop id="tm-video">
          <source src="video/wave-cafe-video-bg.mp4" type="video/mp4">
      </video>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>    
  <script>

    function setVideoSize() {
      const vidWidth = 1920;
      const vidHeight = 1080;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const tempVidWidth = windowHeight * vidWidth / vidHeight;
      const tempVidHeight = windowWidth * vidHeight / vidWidth;
      const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
      const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
      const tmVideo = $('#tm-video');

      tmVideo.css('width', newVidWidth);
      tmVideo.css('height', newVidHeight);
    }

    function openTab(evt, id) {
      $('.tm-tab-content').hide();
      $('#' + id).show();
      $('.tm-tab-link').removeClass('active');
      $(evt.currentTarget).addClass('active');
    }    

    function initPage() {
      let pageId = location.hash;

      if(pageId) {
        highlightMenu($(`.tm-page-link[href^="${pageId}"]`)); 
        showPage($(pageId));
      }
      else {
        pageId = $('.tm-page-link.active').attr('href');
        showPage($(pageId));
      }
    }

    function highlightMenu(menuItem) {
      $('.tm-page-link').removeClass('active');
      menuItem.addClass('active');
    }

    function showPage(page) {
      $('.tm-page-content').hide();
      page.show();
    }

    $(document).ready(function(){

      /***************** Pages *****************/

      initPage();

      $('.tm-page-link').click(function(event) {
        
        if(window.innerWidth > 991) {
          event.preventDefault();
        }

        highlightMenu($(event.currentTarget));
        showPage($(event.currentTarget.hash));
      });

      
      /***************** Tabs *******************/

      $('.tm-tab-link').on('click', e => {
        e.preventDefault(); 
        openTab(e, $(e.target).data('id'));
      });

      $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

      setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function(){
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      };

      // Play/Pause button for video background      
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });
    });
      
  </script>
  <script>
      // JavaScript function to redirect to a URL
      function redirectToURL(url) {
          window.location.href = url;
      }
    </script>
</body>
</html>

<?php include "header.php";?>

    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Welcome to Bidhub :<br>
                      <span>
                        Where Winning is a Click Away
                      </span>
                    </h1>
                    <p>
                      Secure transactions, exciting lots, and an unparalleled bidding experience
                    </p>
                    <div class="btn-box">
                      <a href="registration.html" class="btn-1"> Bidder Registration</a>
                      <a href="login.html" class="btn-2">Bidder login</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Join the bidding revolution <br>
                      <span>
                        Redefining the Art of Online Bidding
                      </span>
                    </h1>
                    <p>
                      We ensure fairness, transparency, and excitement in every auction
                    </p>
                    <div class="btn-box">
                      <a href="registration.html" class="btn-1"> Bidder Registration</a>
                      <a href="login.html" class="btn-2">Bidder login</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Bidhub: Where Every Bid Tells a Story of Victory <br>
                      <span>
                        Bid Bold, Win Bigger
                      </span>
                    </h1>
                    <p>
                      Bid confidently with our user-friendly platform and robust security measures
                    </p>
                    <div class="btn-box">
                      <a href="registration.html" class="btn-1"> Bidder Registration</a>
                      <a href="login.html" class="btn-2">Bidder login</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container idicator_container">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="images/more-info.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Who Are We?
              </h2>
            </div>
            <p>
              We are Bidhub : a dynamic online auction company committed to bringing you the finest and most unique
              treasures from around the globe. Our platform is designed for passionate bidders and collectors who seek
              more than just a transaction – they crave the exhilaration of winning and the joy of owning something
              truly special.

            </p>
            <div class="btn-box">
              <a href="about.html">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- exciting deals -->

  <section class="client_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2>Exciting Deals!!!!!</h2>
      </div>


      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


        <div class="carousel-inner">


          <div class="carousel-item active">


            <div class="box">


              <div class="exciting-deal">
                <img src="images/coin.jpeg" alt="Exciting Deal 2" class="img-fluid">
                <h4>King George VI One Rupee 1939 Coin</h4>
                <p>rarest Indian coin from last 200 years.</p>
                <p class="ends-on">Ends On: <span id="deal1-timer"></span></p>
                <button class="bid-now-btn" onclick="placeBid('deal1')">Bid Now</button>
              </div>
              <div class="detail-box">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="exciting-deal">
                <img src="images/ring.jpg" alt="Exciting Deal 2" class="img-fluid">
                <h4>An unusual late 18thCentury cylinder in a gold and enamel ring</h4>
                <p>Very small full plate movement with resting barrel. Plain bridge cock.</p>
                <p class="ends-on">Ends On: <span id="deal1-timer"></span></p>
                <button class="bid-now-btn" onclick="placeBid('deal1')">Bid Now</button>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="exciting-deal">
                <img src="images/client.png" alt="Exciting Deal 2" class="img-fluid">
                <h4>Exciting Deal 2</h4>
                <p>Description of the exciting deal. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="ends-on">Ends On: <span id="deal1-timer"></span></p>
                <button class="bid-now-btn" onclick="placeBid('deal1')">Bid Now</button>
              </div>
            </div>
          </div>
        </div>


        <div class="carousel_btn-box">



          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">


            <i class="fa fa-angle-left" aria-hidden="true"></i>


            <span class="sr-only">Previous</span>


          </a>


          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">


            <i class="fa fa-angle-right" aria-hidden="true"></i>


            <span class="sr-only">Next</span>


          </a>


        </div>


      </div>


    </div>

  </section>

  <!-- end exciting deals-->


  <!-- services-->

  <section class="service_section layout_padding ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our services
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
              </svg>
              
            </div>
            <div class="detail-box">
              <h6>
                Sign Up
              </h6>
              <p>
                Instant account opening.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <svg width="800px" height="800px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#020202;stroke-miterlimit:10;stroke-width:1.95px;}</style></defs><rect class="cls-1" x="10.39" y="2.21" width="7.6" height="15.19" transform="translate(-2.78 12.91) rotate(-45)"/><path class="cls-1" d="M13,14,4.79,22.14a2,2,0,0,1-1.47.61,2.07,2.07,0,0,1-2.07-2.07,2,2,0,0,1,.61-1.47L10,11Z"/><path class="cls-1" d="M20.41,5.66a2.05,2.05,0,0,1-.6,1.46L18.34,8.59,15.41,5.66l1.47-1.47a2.07,2.07,0,0,1,3.53,1.47Z"/></svg>
        
            </div>
            <div class="detail-box">
              <h6>
                 Bid
              </h6>
              <p>
                Bidding is free Only pay if you win.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              
              <svg width="800px" height="800px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                <rect height="3.5" width="6.5" y="10.75" x="4.75"/>
                <path d="m8 8.75v2m-3.25-9c-1.5 0-3 .5-3 2.25s1.5 2.25 3 2.25m6.5-4.5c1.5 0 3 .5 3 2.25s-1.5 2.25-3 2.25m-6.5-4.5h6.5v3.5c0 1.5-1 3-3.25 3s-3.25-1.5-3.25-3z"/>
              </svg>

            </div>
            <div class="detail-box">
              <h6>
                Win
              </h6>
              <p>
                Fun - Excitement - Great deals.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

   <!--  end services-->


  <!-- client section -->

  <section class="client__section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          What is says our clients
        </h2>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  John D.
                </h4>
                <p>
                  I've been using BidHub for months now, and it's my go-to platform 
                  for finding great deals. 
                  The bidding process is straightforward, and I've scored 
                  some amazing products at unbeatable prices. 
                  The variety of items available is impressive, 
                  and the site is user-friendly.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Sarah M.
                </h4>
                <p>
                  
                  BidHub has made my online shopping experience so much more exciting! 
                  Bidding on items adds an element of fun, 
                  and I've saved a ton of money compared to traditional retail prices. 
                  The customer support is also fantastic; 
                  they're quick to address any concerns.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Emily S.
                </h4>
                <p>
                  
                  BidHub has revolutionized how I shop online. 
                  The thrill of winning a bid and getting a product at a fraction of the price is 
                  addictive. The site is well-designed, and 
                  I appreciate the transparency in the bidding process. 
                  It's a game-changer for savvy shoppers.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box2">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <div class="img-box">
        <img src="https://cdn2.hubspot.net/hubfs/53/best-contact-us-page-examples.jpeg" alt="">
      </div>
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Get In touch
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <form action="#">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Full Name" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email " />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div class="">
                    <input type="text" placeholder="Message" class="message_input" />
                  </div>
                  <div class="btn-box ">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
  <?php include "footer.php";?>

  


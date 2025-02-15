
<?php include "header1.php";?>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 text-center mb-5">
                    <img src="images/bidding_login-removebg-preview.png">
                </div>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <!-- form card login -->



                        <div class="card rounded-0" id="login-form">
                            <div class="card-header">
                                <h3 class="mb-0">User Login</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                    <<div class="form-group">
                                        <label for="uname1">Username</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required>
                                    </div>
                                    
                                    <div>
                                        <label class="custom-control custom-checkbox">
                                            <a href="javascript:void('register-form-link');"
                                                class="register-form-link">Register</a>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <a href="javascript:void('forgot-form-link');"
                                                class="forgot-form-link">Forgot Password</a>
                                        </label>
                                    </div>
                                    <div class="btn-box1">
                                        <a href="#" class="btn-2" onclick="openPopup()">Bidder login</a>
                                    </div>
                                    
                                    <!-- Pop-up window -->
                                    <div class="popup" id="popup">
                                        <div class="popup-content">
                                            <h2>Welcome!</h2>
                                            <p>Choose an option:</p>
                                            <button class="btn-23" onclick="sellItem()">Sell Item</button>
                                            <button class="btn-23" onclick="bidItem()">Bid on Items</button>
                                            <span class="popup-close" onclick="closePopup()">&times;</span>
                                        </div>
                                    </div>
                                    



                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- /form card login end-->

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_logo">
                        <a class="navbar-brand" href="index.html">
                            <span>
                                Guarder
                            </span>
                        </a>
                        <p>
                            dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_links">
                        <h5>
                            Useful Link
                        </h5>
                        <ul>
                            <li>
                                <a href="">
                                    dolor sit amet, consectetur
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    magna aliqua. Ut enim ad
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    minim veniam,
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    quisdotempor incididunt r
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_info">
                        <h5>
                            Contact Us
                        </h5>
                    </div>
                    <div class="info_contact">
                        <a href="" class="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Lorem ipsum dolor sit amet,
                            </span>
                        </a>
                        <a href="" class="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call : +01 1234567890
                            </span>
                        </a>
                        <a href="" class="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                demo@gmail.com
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_form ">
                        <h5>
                            Newsletter
                        </h5>
                        <form action="#">
                            <input type="email" placeholder="Enter your email">
                            <button>
                                Subscribe
                            </button>
                        </form>
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->




    <!-- footer section -->
    <footer class="container-fluid footer_section">
        <p>
            &copy; <span id="currentYear"></span> All Rights Reserved. Design by
            <a href="https://html.design/">Free Html Templates</a> Distribution by
            <a href="https://themewagon.com">ThemeWagon</a>
        </p>
    </footer>
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
         // Function to open the pop-up
    function openPopup() {
        var popup = document.getElementById("popup");
        popup.classList.add("active");
    }

    // Function to close the pop-up
    function closePopup() {
        var popup = document.getElementById("popup");
        popup.classList.remove("active");
    }

    // Dummy functions for selling and bidding
    function sellItem() {
        alert("Redirecting to sell item page...");
    }

    function bidItem() {
        alert("Redirecting to bid on items page...");
    }

    </script>

</body>

</html>
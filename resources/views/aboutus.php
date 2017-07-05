<?php
    include('header.php');
?>

    <section id="home" class = "aboutus-slider" style="margin-top: 50px;width: 80%">
       <div id="da-slider" class="da-slider">
            <div class="da-slide" style="background-image: url('images/banner.jpg');background-size: cover;">
                <h2 style="font-size: 40px">Talk to us</h2>
                <p style="font-size: 25px; margin-bottom: 10px">You won't be kept on hold on ridiculously long phone when you call us. Your email isn't going to any Bermuda Triangle.</p>       
            </div>
            <div class="da-slide" style="font-size: 40px">
                <h2>Service</h2>
                <p style="font-size: 25px;">At <strong>Royalty BD</strong>, we provide the exceptional service we'd want to experience ourselves!</p>
            </div>
            <div class="da-slide" style="font-size: 40px">
                <h2>We are here to help you</h2>
                <p style="font-size: 25px;">We contact each of our customers who need help and wants to interact with us.</p>
        </div>
    </section>

    <section id="introText"  style="background-color: #e4e4e4;width: 80%;">
        <div class="container">
            <div class="text-center">
            <h1 style=" color: #000;">We, at Royalty BD, turn ideas into reality!</h1><br>
              <h3 style=" color: #000;">Starting since June, 2017, we worked hard to give our customers full satisfaction with our top notch services and <strong>Royalty BD</strong> is one of them and that is why you are here!</h3>
            </div>
        </div>
    </section>

    <!--About-->
    <section id="aboutUs" class="secPad" style="background-color: #e4e4e4;width: 80%">
            <div class=" ">
                <!-- Heading -->
                <h2 style=" color: #000;">Living in Dhaka?</h2>
                <p style=" color: #000;">Here's how you can join a our community!</p>
            </div>
    </section>
    
     <!--Experience-->

   
	<!--Contact -->
       <section id="contactUs" class="page-section secPad">
        <div class="container">

            <div class="row">
                <div class="heading text-center">
                    <!-- Heading -->
                    <h2>Let's Keep In Touch!</h2>
                    <p>Thank you for landing on to our support page. If you would like to get into contact with us, please fill out the form below.</p>
                </div>
            </div>

            <div class="row mrgn30">

                <form method="post" action="" id="contactfrm" role="form">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
                        </div>
                    </div>
                    <div class="col-sm-4"  style="margin-bottom: 50px;">
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <textarea name="comment" class="form-control" id="comments" cols="3" rows="7" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
                        </div>
                        <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit" style="background-color: #121E3B">Submit</button>
                        <div class="result"></div>
                    </div>
                </form>
                <div class="col-sm-4">
                    <h4>Address:</h4><br>
                    <address>
                        Alpha Vault<br>
                        19th floor, UTC Building<br>
                        Kawranbazar, Dhaka, 1215
                        <br>
                    </address>
                    <h4>Phone:</h4>
                    <address>
                        12345-49589-2<br>
                    </address>
                    <h4>Email:</h4>
                    <address>
                        royaltybd@alpha.com<br>
                    </address>
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/.page-section-->
    <section>
        </section>

<?php
    include('footer.php');
?>

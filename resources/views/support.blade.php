@include('header');

<style>
    label,h4{font-size: 1.1em; font-weight: bold;}
    .btn-primary {
    color: #fff;
    background-color: #121E3B ;
}
</style>
<header class="support" style="background-color: #121E3B; margin-top: 3.8%;">
	<h1 style="padding: 50px; color: #fff;">Support</h1>
</header><br><br>
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
                        <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
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
@include('footer');
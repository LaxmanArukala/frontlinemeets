 <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="contact-form bg-white p-4">
                    <form name="sentMessage" id="contactForm" novalidate="novalidate" action="send-email" method="post" >
                        <div class="row mb-3">
                            <div class="col-lg-7 animation-element slide-left">
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="footer-contact">
                                            <h2>Locate Us</h2>
                                            <p><i class="fas fa-map-marker-alt"></i>Begumpet, Hyderabad-500016</p>
                                            <p><i class="fas fa-phone-alt"></i> +91 9989 661 232</p>
                                            <p><i class="fa fa-envelope"></i>contact@auragengroup.com</p>
                                            <div class="footer-social">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="footer-link">
                                            <h2>Quick Links</h2>
                                            <a href="index.php#Webinars">Upcoming Webinars</a>
                                            <a href="terms-and-conditions.php">Terms and Conditions</a>
                                            <a href="privacy-policy.php">Privacy policy</a>
                                            
                                        </div>
                                    </div>
                                </div> -->
                                <h4 class="mb-3">For Queries :</h4>
                                <div class="">
                                    <div id="success"></div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 animation-element slide-left">
                                <!-- <div class="footer-newsletter">
                                    <h2>Subscribe to our Webinar Updates</h2>
                                    <p>
                                        
                                    </p>
                                    <div class="form">
                                        <input class="form-control" placeholder="Email goes here">
                                        <button class="btn">Submit</button>
                                    </div>
                                </div> -->
                                <div class="control-group mt-5">
                                    <textarea class="form-control" rows="3" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-success" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                                <span class="output_message"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center"><a href="#">  &copy;  2023   All Rights Reserved by Frontline Meets.</a></p>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


        <script>
        $(document).ready(function() {
        $('#contactForm').on('submit',function(){
         $('.output_message').text('Sending...'); 
         var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(result){
                $("#contactForm").trigger("reset");
                if (result == 'success'){
                    $('.output_message').text('Message Sent!');  
                } else {
                    $('.output_message').text('Error Sending email!');
                }
            }
        });
         return false;   
    });
});
    </script>
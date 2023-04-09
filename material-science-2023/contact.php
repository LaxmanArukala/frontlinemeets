<?php include('functions.php');?>
<!doctype html>
 <html class="no-js " lang="en">  
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title><?php echo $main_title[0]; ?> <?php echo $main_title[1]; ?> | Contact</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">
 
</head>
<body>  
 
   <?php include('header-inner.php');?>

        <section class="section db p100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Contact us</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Contact us</a></li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                     <div class="row  blog-grid">
        <div class="col-md-6">
            
                <div class="card-body">
                    <form method="post" class="myform" action="process">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" name="send" class="btn btn-primary text-right">Submit</button>
						<span class="output_message"></span>
						</div>
                    </form>
                </div>
            </div>
         <div class="col-md-6">
            <div class="card bg-light mb-3">
                 <div class="card-body">
				  <!-- <iframe src="<?php //echo $venue_hospitality_row['map'];?>" width="100%" height="350"   allowfullscreen="" class="pm" ></iframe>
                   <p><i class="fa fa-map-marker"></i> <?php //echo $r1['ConferenceVenue'];?></p>
                     <p><i class="fa fa-envelope"></i>  <?php //echo $r1['EmailId1'];?></p>
                    <p><i class="fa fa-phone"></i> +91 9989 661 232</p> -->
                    <img src="images/logo2.png" class=""/>
                    <h5 style="font-size: 18px;margin-bottom: 20px;"><i class="fa fa-map-marker"></i> <?php echo $r1['ConferenceVenue'];?></h5>
                     <h5 style="font-size: 18px;margin-bottom: 20px;"><i class="fa fa-envelope"></i>  <?php echo $r1['EmailId1'];?></h5>
                    <h5 style="font-size: 18px;margin-bottom: 20px;"><i class="fa fa-phone"></i> +91 9989 661 232</h5>


                </div>

            </div>
        </div>
    </div>
                    </div><!-- end boxed -->
            </div><!-- end container -->
        </section>

        <?php include('footer.php');?>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script>
		$(document).ready(function() {
		$('.myform').on('submit',function(){
		 $('.output_message').text('Loading...'); 
         var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(result){
				$("form").trigger("reset");
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
	 
   </body>
</html>
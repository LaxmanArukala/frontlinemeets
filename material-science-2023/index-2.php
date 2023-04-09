<!DOCTYPE html>
<html>
<head>
<title> addition </title>

</head>

<body>
    <div class="hide">
  <input type="radio" name="cat_1" id="v1" value="100">One
  <input type="radio" name="cat_1" id="v2" value="200">Two
  <input type="radio" name="cat_1" id="v3" value="300">Three
  <br>
  <br>
   <input type="radio" name="cat_2" value="1000">One
  <input type="radio" name="cat_2" value="2000">Two
  <input type="radio" name="cat_2" value="3000">Three
</div>
<div id="response"></div>
<div id="demo"></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

</head>
<body>
<form id="myform">
<div>Choose option:</div>
<input type="radio" name="user_options" value="css" /> CSS 
<input type="radio" name="user_options" value="jquery" /> jQuery 
<input type="radio" name="user_options" value="html" /> HTML
<input type="radio" name="user_options" value="xml" /> XML

<div>Another option:</div>
<input type="radio" name="user_site" value="Google" /> Google
<input type="radio" name="user_site" value="Yahoo" /> Yahoo
<input type="radio" name="user_site" value="Facebook" /> Facebook
<input type="radio" name="user_site" value="Twitter" /> Twitter

<div><button id="radio_submit" type="button">Show Selected Radio</button></div>
</form>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
        $(document).ready(function () {
            $('.hide input[type="radio"]').click(function(){
              //  var value= $('').val();
                var value= $(this).val();
                $.ajax({
                    url: "ajax_page.php",
                    type: 'post',
                   // data: {ajax: 1, value: value},
                    success: function (response) {
                    $('#response').text(value);
                    }
                });
            });
        });
		 
    </script>
	<script type="text/javascript">
$(document).ready(function() {
	$("#radio_submit").click(function (e) {
		var checked_option_radio = $('input:radio[name=user_options]:checked').val();
		var checked_site_radio = $('input:radio[name=user_site]:checked').val();
	 
				document.getElementById("demo").innerHTML = ('Your option - "' +checked_option_radio + '", and site - "'+ checked_site_radio +'"');
		 
	});
});

</script>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
	<title>
		Get value of selected radio button
	</title>
</head>

<body>
	<p>
		Select a radio button and click on Submit.
	</p>
	
	Gender:
	<input type="radio" name="Gender" value="Male" onclick="displayRadioValue()">Male
	<input type="radio" name="Gender" value="Female" onclick="displayRadioValue()">Female
	<input type="radio" name="Gender" value="Others" onclick="displayRadioValue()">Others
	
	<br>
	
	Food Preference:
	<input type="radio" name="Food" value="Vegetarian" onclick="displayRadioValue()">Vegetarian
	<input type="radio" name="Food" value="Non-Vegetarian" onclick="displayRadioValue()">Non-Vegetarian
	
	<br>
	 
	
	<br>
	
	<div id="result"></div>
	
	<script>
		function displayRadioValue() {
			document.getElementById("result").innerHTML = "";
			var ele = document.getElementsByTagName('input');
			
			for(i = 0; i < ele.length; i++) {
				
				if(ele[i].type="radio") {
				
					if(ele[i].checked)
						document.getElementById("result").innerHTML
								+= ele[i].name + " Value: "
								+ ele[i].value + "<br>";
				}
			}
		}
	</script>
</body>

</html>					

let gewichtKilo 			= document.getElementById("gewichtKilo");
let lengteCentimeter 	= document.getElementById("lengteCentimeter");
let submitButton 			= document.getElementById("submitButton");
let responseHere 			= document.getElementById("responseHere");
submitButton.addEventListener('click', bmi);

function bmi()
{
	let xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200)
			{
				responseHere.innerHTML = this.responseText;
			}

	};
	let httpString = "form_1.php?gewichtKilo=" + gewichtKilo.value + "&lengteCentimeter=" + lengteCentimeter.value;
		console.log(httpString);
		xmlhttp.open("GET", httpString, true);
		xmlhttp.send();
}

window.onload = function(){
	document.getElementById('files').onchange = function(e) {
		document.getElementById("submit").click();
	}
}

function HandleBrowseClick()
{
	var fileinput = document.getElementById("files");
	
	fileinput.click();
	
	document.getElementById("submit").click();
}

function Handlechange()
{
	var fileinput = document.getElementById("files");
}
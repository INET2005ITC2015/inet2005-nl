
var xmlhttp;

function showMatches(str)
{
	if (str.length<=2)
	{
            document.getElementById("TxtHint").innerHTML="";
            return;
	}
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
	{  	alert ("Your browser does not support XMLHTTP!");
		return;
	}
	var url="newEmployeeSearcher.php";
    url=url+"?q="+str;
    url=url+"&id="+Math.random();
    xmlhttp.onreadystatechange=stateChanged;
    xmlhttp.open("GET",url,true);
    xmlhttp.send(null);
}

function stateChanged()
{
	if (xmlhttp.readyState==4)
	{
		document.getElementById("TxtHint").innerHTML = xmlhttp.responseText;
	}
}




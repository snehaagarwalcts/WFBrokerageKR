////////////////////////////////////////////////////////////////////////////
//////////////						SEARCH					////////////////
////////////////////////////////////////////////////////////////////////////
function search_app(searchKey)
{
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	var parm="key="+searchKey;
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("div_container").innerHTML="";
			document.getElementById("div_container").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","content/search_app.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	xmlhttp.send(parm);
}


////////////////////////////////////////////////////////////////////////////
//////////////					ADMIN LOGIN					////////////////
////////////////////////////////////////////////////////////////////////////
function login(userName, passWord)
{
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	var parm="uname="+userName+"pwd="+passWord;
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("div_container").innerHTML="";
			document.getElementById("div_container").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","../content/admin_home.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	xmlhttp.send(parm);
}


////////////////////////////////////////////////////////////////////////////
//////////////					UPLOAD DATA					////////////////
////////////////////////////////////////////////////////////////////////////
function ins_track(name,des,parent)
{
	if (name=="" || des=="" || parent =="")
	{
		//document.getElementById("item_reflect").innerHTML="Data not correct format";
		$.jGrowl("Data not in correct format");	
		return;
	}
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	var parm="n="+name+"&d="+des+"&p="+parent;
  
	xmlhttp.onreadystatechange=function()
	{
		document.getElementById("item_reflect").innerHTML=my_div_2;
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("item_reflect").innerHTML="";
			$.jGrowl(xmlhttp.responseText);			
		}
	}
	xmlhttp.open("POST","content/track/insert_track.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	xmlhttp.send(parm);
	document.getElementsByName("track_name")[0].value="";
	document.getElementsByName("description")[0].value="";
} 
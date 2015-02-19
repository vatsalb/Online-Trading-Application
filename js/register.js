
function validateregister()
{
var a=document.forms["reg"]["name"].value;
if (a==null || a=="")
  {
  alert("Name must be filled out");
  return false;
  }
  var b=document.forms["reg"]["birthdate"].value;
if (b==null || b=="")
  {
  alert("birthdate must be filled out");
  return false;
  }
  var c=document.forms["reg"]["college"].value;
if (c==null || c=="")
  {
  alert("college must be filled out");
  return false;
  }
 var d=document.forms["reg"]["email"].value;
if (d==null || d=="")
  {
  alert("email must be filled out");
  return false;
  }
  var d1=document.forms["reg"]["email"].value;
var atpos=d1.indexOf("@");
var dotpos=d1.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=d1.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
   var e=document.forms["reg"]["mobile"].value;
if (e==null || e=="")
  {
  alert("mobile must be filled out");
  return false;
  }
  var f=document.forms["reg"]["password"].value;
  if (f==null || f=="")
   {
  alert("password must be filled out");
  return false;
  }
   }

 
function validatelogin()
{

var x=document.forms["login"]["email"].value;
if (x==null || x=="")
  {
  alert("Email must be filled out");
  return false;
  }
  
   var d1=document.forms["login"]["email"].value;
var atpos=d1.indexOf("@");
var dotpos=d1.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=d1.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  
  var y=document.forms["login"]["password"].value;
if (y==null || y=="")
  {
  alert("password must be filled out");
  return false;
  }
   
 if(!this.login.terms.checked)
{
    alert('You must agree to the terms first.');
    return false;
}
  }
 

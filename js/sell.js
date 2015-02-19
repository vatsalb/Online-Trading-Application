function validatesell()
{
var x=document.forms["proceed"]["q"].value;
if (x==null || x=="")
  {
  alert("Quantity must be filled out");
  return false;
  }
  }

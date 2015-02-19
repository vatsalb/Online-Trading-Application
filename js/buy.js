function validatebuy()
{
var x=document.forms["proceedbuy"]["q"].value;
if (x==null || x=="")
  {
  alert("Quantity must be filled out");
  return false;
  }
  }
  
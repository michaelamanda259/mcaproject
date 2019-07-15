function showp() 
 {
  var x = document.getElementById("pwd1");
  if (x.type === "password")
	 x.type = "text";
     else
     x.type = "password";
 }
function ValidateEmail() 
{
  var x = document.getElementById("email");
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
 if(x.value.match(mailformat))
  {
    alert('Mail is valid');
    return true;
  }
    alert("You have entered an invalid email address!")
    return (false);
}


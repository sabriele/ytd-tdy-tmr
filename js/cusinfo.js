

function chkEmail(event) {
  	var init = event.currentTarget;
 	var pos = init.value.search(/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/);
 	
 	if (pos != 0) {
    alert("The email address entered is not in the correct form.\nSample:samuelchen123@abc.com");
    document.getElementById("emailaddress").value=""; 
    return false;
    init.focus();
    init.select();
	}
	
}


function chkPhone(event) {
  var myPhone = event.currentTarget;
 
  var pos = myPhone.value.search(/^[8,9]\d{7}$/);
 
  if (pos != 0) {
    alert("The phone number entered is not in the correct form.");
    document.getElementById("phoneno").value="";
    return false;
    myPhone.focus();
    myPhone.select();
  } 
}

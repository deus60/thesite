	
	function validate(){
	var fname=document.registry_form.fname.value;
	var sname=document.registry_form.sname.value;
	var email=document.registry_form.email.value;
	var pswd=document.registry_form.pswd.value;
	var pswd2=document.registry_form.pswd2.value;

	if(fname==" "){
		alert('insert user name');
		return false;
	}else if(sname==" "){
		return false;
	}else if(email==" "){
		return false;
	}else if(pswd!=pswd2 ||pswd ==""){
		alert("password do not match");
		return false;
	}else{
		return true;
	}
	}

function get(id){
	return document.getElementById(id);;
}
function searchEmployee(e){
	if(e.value == ""){
		get("suggesstion").innerHTML ="";
		return;
	}
	var xhr = new XMLHttpRequest();
	xhr.open("GET","search_employee.php?key="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState == 4 && this.status == 200){
			get("suggesstion").innerHTML = this.responseText;
		}
	};
	xhr.send();
}
function checkEmpusername(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","checkemployeeusername.php?uname="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState == 4 && this.status == 200){
			if(this.responseText.trim() == "invalid"){
				get("err_uname").innerHTML = "Username Exists";
			}
			else{
				get("err_uname").innerHTML = "";
			}
		}
	};
	xhr.send();
}

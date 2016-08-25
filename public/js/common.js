
function estadoScroll(){
	var currentScroll = window.pageYOffset || document.body.scrollTop;
	var flecha="";
	if(document.getElementById("flechaSubir")!=null){
	flecha=document.getElementById("flechaSubir");
		if(currentScroll==0){
			flecha.style.visibility="hidden";
		}else{
			flecha.style.visibility="visible";
		}
	}
}

function cambiaFotoUserMenu(){
	if(document.getElementById("enlaceUser")){
		var user=document.getElementById("enlaceUser").innerHTML.trim();
		var foto=document.getElementById("fotoUserMenu");
		
		if(user=="Diego"){
			foto.src="http://localhost/senderismo/public/img/comunidad/userDiego.png";
		}else if(user=="Thais"){
			foto.src="http://localhost/senderismo/public/img/comunidad/userThais.png";
		}else if(user=="Cris"){
			foto.src="http://localhost/senderismo/public/img/comunidad/squirt-sea-turtle-finding-nemo.jpg";
		}
	}
}

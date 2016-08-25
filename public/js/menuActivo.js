

function ponerSeleccion(){
	quitarSeleccion();
	switch(location.href){
		case 'http://localhost/senderismo/public/':
			document.getElementsByTagName("li")[0].classList.add("active");
			break;
		case 'http://localhost/senderismo/public/sendero':
			document.getElementsByTagName("li")[1].classList.add("active");
			break;
		case 'http://localhost/senderismo/public/estado':
			document.getElementsByTagName("li")[1].classList.add("active");
			break;
		case 'http://localhost/senderismo/public/normativa':
			document.getElementsByTagName("li")[1].classList.add("active");
			break;
		case 'http://localhost/senderismo/public/evento':
			document.getElementsByTagName("li")[3].classList.add("active");
			break;
		case 'http://localhost/senderismo/public/comunidad':
			document.getElementsByTagName("li")[4].classList.add("active");
			break;
		case 'http://localhost/senderismo/public/forum':
			document.getElementsByTagName("li")[4].classList.add("active");
			break;
		case 'http://localhost/senderismo/public/forum/create':
			document.getElementsByTagName("li")[4].classList.add("active");
			break;
		case 'http://localhost/senderismo/public/multimedia':
			document.getElementsByTagName("li")[5].classList.add("active");
			break;
		case 'http://localhost/senderismo/public/login':
			document.getElementsByTagName("li")[6].classList.add("active");
			break;
		case 'http://localhost/senderismo/public/register':
			document.getElementsByTagName("li")[6].classList.add("active");
			break;
	}
	
}
function quitarSeleccion(){
	
	for(var i=0;i>=document.getElementsByTagName("li").length;i++){
		document.getElementsByTagName("li")[i].classList.remove("active");
	}
	
}
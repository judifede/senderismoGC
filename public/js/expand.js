function activar(code) {
	var article = document.getElementsByTagName("article")[code-1];
	var iconoFlecha = document.getElementById("flecha" + code);
	var block = document.getElementById("info" + code);
	if (block.classList.contains("expandAnim")) {
		block.classList.remove("expandAnim");
		article.classList.remove("expanded");
		block.classList.add("collapseAnim");
		iconoFlecha.src="img/icons/flecha-abajo.svg";
	} else {
		if (block.classList.contains("collapseAnim"))
			block.classList.remove("collapseAnim");
		block.classList.add("expandAnim");
		article.classList.add("expanded");
		iconoFlecha.src="img/icons/flecha-arriba.svg";
	}
}
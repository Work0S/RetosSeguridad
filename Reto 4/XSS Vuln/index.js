function createParagraph() {
	var input = document.getElementById("input").innerHTML;
	var outputBox = document.getElementById("output");
	var node = document.createElement("p");
	var textNode = document.createTextNode("</p><script>alert(\"XSS\");</script><p>");
	
	node.appendChild(textNode);
	outputBox.appendChild(node);
}

function emptyParent() {
	var outputBox = document.getElementById("output");

	alert("Yet to finish");
}



$(function () {
	$("#altausuaris").click(function(evento) {
		evento.preventDefault();
		$("#contingut").load("../gestio/persones.html");
		$("#altausuaris").unbind('click');  	/*desdactiva el menu despres de clicar*/
		//$("#contingut").load("../angularex/crud_angularjs/index.html");

		});
});



$(function () {
	$("#altausuaris").click(function() {
		$("#contingut").load("persones.html");
		/*	$("#altausuaris").unbind('click');  	/*desdactiva el menu despres de clicar*/
		//$("#contingut").load("../angularex/crud_angularjs/index.html");

	});
});

$(function () {
	$("#alta2").click(function() {
		$("#contingut").load("persones.html");
		/*	$("#alta2").unbind('click');  	/*desdactiva el menu despres de clicar*/
		//$("#contingut").load("../angularex/crud_angularjs/index.html");

	});
});

/*
$(function () {
	$("#mercur").click(function() {
		$("#contingut").load("../gestio/proves/examples/simple/dates.html");
		//$("#contingut").load("../angularex/crud_angularjs/index.html");

	});
});



$("#contingut").on("click","#altausuaris",function(){
	load("../gestio/proves/examples/simple/dates.html");
	});
	*/

/*

	$(document).ready(function(){
	   $("#altausuaris").click(function(evento){
	      evento.preventDefault();
	      $("#contingut").load("persones.html");
	   });
	})
*/

$(function () {
	$("#altausuaris").click(function(e) {
		e.preventDefault();
		$("#contingut").load("../gestio/altausuaris/index.php");
		//$("#contingut").load("../angularex/crud_angularjs/index.html");

	});
});

$(function () {
	$("#mercur").click(function() {
		$("#contingut").load("../gestio/proves/examples/simple/dates.html");
		//$("#contingut").load("../angularex/crud_angularjs/index.html");

	});
});
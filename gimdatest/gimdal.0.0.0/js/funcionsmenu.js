
$(document).ready(function(){
   $("#altausuaris").click(function(evento){
      evento.preventDefault();
      $("#contingut").load("persones.html");
      $("#contingut").empty()
   });
})

/* carrega menu vendes */
$(document).ready(function(){
      $("#vendes").hide();
      $("#ven").click(function(evento){
        evento.preventDefault();
      $("#vendes").show();
      });
  });

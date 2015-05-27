$(document).ready(function(){
   $("#navegacio a").each(function(){
      var href = $(this).attr("href");
      $(this).attr({ href: "#"});
      $(this).click(function(){
         $("#contingut").load(href);
      });
   });
});
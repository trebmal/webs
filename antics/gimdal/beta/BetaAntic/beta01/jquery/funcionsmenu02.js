/*
$(document).ready(function(){
   $("#navegacio a").each(function(){
      var href = $(this).attr("href");
      $(this).attr({ href: "#"});
      $(this).click(function(){
         $("#contingut").load(href);
      });
   });
});
*/
$("#nav a").each(function(){
    var link = $(this);
    var href = link.attr("href");
    link.click(function(){
        $("#show").load(href);
        return false;
    });
});
$(function(){
    //using jquery to loop each li element and automatically add an arrow span if the element contains a child of ul list
    $('#category-menu ul li').each(function(){
      if ($(this).find('ul').length >0)
      {
        $(this).addClass("has-child");
        $(this).prepend("<span class='arrow'></span>");
      }
    });
    
    //bind an event to the li link that contains a child of ul list.
    $('#category-menu ul > li.has-child a').on("click", function(event){
      var currentArrow = $(this).parent().find(" > span");
      if($(currentArrow).length > 0){
        if($(currentArrow).attr("class").indexOf("arrow-down") > 0){
          $(currentArrow).removeClass("arrow-down");
          $(currentArrow).parent().find(" > ul").slideUp();
        }else{
          $(currentArrow).addClass("arrow-down");
          $(currentArrow).parent().find(" > ul").slideDown();
        }
      }
    });
  });
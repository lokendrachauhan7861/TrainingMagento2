require(["jquery"], function($) {
  $("#FieldAcceptOnlyAlphaWithSpace").keypress(function(event){
      var inputValue = event.charCode;
      if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
          event.preventDefault();
      }
  });
});
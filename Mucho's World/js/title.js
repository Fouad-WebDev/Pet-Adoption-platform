
function changeTitleOnBlur() {
    document.addEventListener("blur", function() {
      document.title = "Window Lost Focus";
    });
  }
  
  
  function changeTitleOnFocus() {
    document.addEventListener("focus", function() {
      document.title = "Window Regained Focus";
    });
  }
  
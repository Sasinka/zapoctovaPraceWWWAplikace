
console.log("Hello World!");
    localStorage.setItem("lastVisitedPage", window.location.href);
  
    console.log(localStorage.getItem("lastVisitedPage"));
    var lastVisitedPage = localStorage.getItem("lastVisitedPage");


    // Get the <a> tag
    var lastVisitedLink = document.getElementById("last-visited-link");
    
    // Set the href attribute to the last visited page URL
    /*if(lastVisitedPage){
        lastVisitedLink.href = lastVisitedPage;
        url = lastVisitedPage;
    }*/




    sessionStorage.setItem("lastVisitedPage", window.location.href);
    if(lastVisitedPage){
        lastVisitedLink.href = lastVisitedPage;
    }

    var expression = lastVisitedLink;
    $.ajax({
      type: "POST",
      url: window.location.href,
      data: { expression: expression },
      success: function(response) {
        console.log("Expression saved: " + response);
      }
    });

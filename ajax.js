$(document).ready(function () {

  

    
   


    function regsuccess(response) {

        $("#mcon").html(response);
        $("#mess").fadeOut(15000);

        
    };



    function verifysuccess(response) {

      $(".sh").html(response);
      $("#erro").fadeOut(15000);

      
  };

  $("#myform").submit(function (event) {
    

        event.preventDefault();

        var options = {
          url: 'action.php?dollar=reg',
          type: 'post',
          data: new FormData(this),
          cache: false,
          processData: false,
          contentType: false,
      //    beforeSend: prog,
          success: regsuccess,
      }

      $.ajax(options);

      
  });



  $("#vform").submit(function (event) {
    

    event.preventDefault();

    var optionsveri = {
      url: 'verification.php',
      type: 'post',
      data: new FormData(this),
      cache: false,
      processData: false,
      contentType: false,
  //    beforeSend: prog,
      success: verifysuccess,
  }

  $.ajax(optionsveri);

  
});

    
});
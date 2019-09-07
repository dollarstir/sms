$(document).ready(function () {

  

    
   


    function regsuccess(response) {

        $("#mcon").html(response);
        $(".notifyMessage").fadeOut(15000);

        
    };



//     function verifysuccess(response) {

//       $(".sh").html(response);
//       $("#erro").fadeOut(15000);

      
//   };

  $("#fee-form").submit(function (event) {
    

        event.preventDefault();

        var options = {
          url: 'process.php?dollar=adfee',
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




$("#ad-report").submit(function (event) {
    

    event.preventDefault();

    var options = {
      url: 'process.php?dollar=adreport',
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

$("#ad-subj").submit(function (event) {
    

    event.preventDefault();

    var options = {
      url: 'process.php?dollar=adsubjee',
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

  

    
});
$(document).ready(function() {
    $(".customForm input, .customForm select").on('change keyup', function() {
        $(this).css('border', 'unset');

        var locSpan = $(this).parent().children('.formSpan');

        locSpan.css('visibility', 'hidden');
    })

    $(".notifyMessage .close").click(function() {
        var _this = $(this).parent();
        _this.slideUp(800);
    })

    function loadingFunc(_this) {
        _this.children("#preloader2").fadeIn(500);
    }

    function errorFunc(_this) {
        _this.children("#preloader2").fadeIn(500);
        setTimeout(() => {
            _this.children("#preloader2").fadeOut(500);            
        }, 2000);
    }

    function viewDet(type, id) {
        var _this = $(".detailCard");

        var options = {
            url: 'serv/process.php?func=contentDetail&func2='+type,
            type: 'post',
            data: {id: id},
            dataType: 'json',
            beforeSend: function() {loadingFunc(_this)},
            success: function(response) {detailsDisp(response, _this)},
            error: function() {errorFunc(_this)}
        }

        function detailsDisp(response, _this) {
            _this.children("#preloader2").fadeOut(500);
            for (const key in response) {
                if(key == 's_photo' || key == 'p_photo') {
                    $(".detailImg").attr('src', 'img/customImg/'+response[key])
                } else {
                    $(".single-info-details ."+key).html(response[key])
                }    
            }
        }

        if(type == undefined) {
            errorFunc(_this);
        } else {
            $.ajax(options);
        }
       
    }
    



    ///////////////// Filter Data Tables /////////////////////////
    ///.......................................................///
    ////////////////////////////////////////////////////////////
    $(".rollSearch").on('keyup change clear', function() {
        dataCustom.column(0).search($(this).val()).draw();
    })

    $(".nameSearch").on('keyup change clear', function() {
        dataCustom.column(2).search($(this).val()).draw();
    })

    $(".Search").on('keyup change clear', function() {
        dataCustom.search($(this).val()).draw();
    })

    $(".otherSearch").on('keyup change clear', function() {
        dataCustom.column(1).search($(this).val()).draw();
    })


    ///////////////// Button View ///////////////////////////////
    ///.......................................................///
    /////////////////////////////////////////////////////////////
    $(".actionPrevious").on('click', function () {
        var id = $(".single-info-details .spec").text();

        var new_id = $(".customTable tbody tr input[value='"+id+"']").parent().prev().children('input').val();
        var new_type = $(".customTable tbody tr input[value='"+id+"']").parent().prev().children('input').attr('class');

        viewDet(new_type, new_id);
    })

    $(".actionNext").on('click', function () {
        var id = $(".single-info-details .spec").text();

        var new_id = $(".customTable tbody tr input[value='"+id+"']").parent().next().children('input').val();
        var new_type = $(".customTable tbody tr input[value='"+id+"']").parent().next().children('input').attr('class');
        
        viewDet(new_type, new_id);
    })


    ///////////////// Table Data ////////////////////////////////
    ///.......................................................///
    /////////////////////////////////////////////////////////////
    $(".actionView").on('click', function() {
        var new_id = $(this).parent().parent().parent().parent().children('input').val();
        var new_type = $(this).parent().parent().parent().parent().children('input').attr('class');

        viewDet(new_type, new_id);
    })






    ////////////////////////////////////////////////////////////
    ////////////// Functions For Form Submission ///////////////
    ////////////////////////////////////////////////////////////
    function successFunc(response, _this) {

        _this.children("#preloader2").fadeOut(500);

        if(response['status'] == 'success') {
            $(".notifyMessage h4").html("Action Successfully");
            $(".notifyMessage p").html(response['response']);
            $(".notifyMessage").css('background', 'rgba(115, 228, 100, 0.93)').slideDown(800);

            setTimeout(() => {
                $(".notifyMessage").slideUp(800);
            }, 5000);

            $(".customForm").trigger("reset");
            
        } else if (response['status'] == 'errorGen') {
            $(".notifyMessage h4").html("Error");
            $(".notifyMessage p").html(response['response']);
            $(".notifyMessage").css('background', 'rgba(220, 100, 100, 0.93)').slideDown(800);

            setTimeout(() => {
                $(".notifyMessage").slideUp(800);
            }, 5000);

        } else {
            $(".notifyMessage h4").html("Error");
            $(".notifyMessage p").html(response['response']);
            $(".notifyMessage").css('background', 'rgba(220, 100, 100, 0.93)').slideDown(800);

            setTimeout(() => {
                $(".notifyMessage").slideUp(800);
            }, 3000);

            var responses = response['response'];
            for (const key in responses) {
                if(responses[key] != null) {
                    $('#'+key).html(responses[key]);
                    $('#'+key).css("visibility", 'visible');
    
                    $("*[name='"+key+"']").css('border', 'solid 1px red')
                }
            }
        }
    }

    function successFunc2(response, _this) {
        _this.children("#preloader2").fadeOut(500);

        if(response['status'] == 'Success') {
            $(".notifyMessage h4").html("Action Successfully");
            $(".notifyMessage p").html(response['response']);
            $(".notifyMessage").css('background', 'rgba(115, 228, 100, 0.93)').slideDown(800);

            setTimeout(() => {
                $(".notifyMessage").slideUp(800);
            }, 5000);

            $(".table-responsive tbody").load("classtable.php");

        } else if (response['status'] == 'Warning'){
            $(".notifyMessage h4").html("Error");
            $(".notifyMessage p").html(response['response']);
            $(".notifyMessage").css('background', 'rgb(140, 150, 141, 0.8)').slideDown(800);

            setTimeout(() => {
                $(".notifyMessage").slideUp(800);
            }, 5000);

        } else {
            $(".notifyMessage h4").html("Error");
            $(".notifyMessage p").html(response['response']);
            $(".notifyMessage").css('background', 'rgba(220, 100, 100, 0.93)').slideDown(800);

            setTimeout(() => {
                $(".notifyMessage").slideUp(800);
            }, 5000);

        }
    }

    function successFunc3(response, _this) {
        _this.children("#preloader2").fadeOut(500);

        if(response['status'] == 'Success') {
            $(".notifyMessage h4").html("Action Successfully");
            $(".notifyMessage p").html(response['response']);
            $(".notifyMessage").css('background', 'rgba(115, 228, 100, 0.93)').slideDown(800);

            setTimeout(() => {
                $(".notifyMessage").slideUp(800);
            }, 5000);

        } else {
            responses = response['response']

            $(".notifyMessage h4").html("Error");
            $(".notifyMessage p").html("");
            $(".notifyMessage").css('background', 'rgba(220, 100, 100, 0.93)').slideDown(800);

            // setTimeout(() => {
            //     $(".notifyMessage").slideUp(800);
            // }, 5000);

            for (var keys in responses) {
                $(".notifyMessage p").append(responses[keys]);
            }
        }
    }

    ////////////////////// Form Submition //////////////////////
    ///.......................................................//
    ////////////////////////////////////////////////////////////
    $(".customForm").submit(function(e) {
        e.preventDefault();


        $(".customForm input, .customForm select").css('border', 'unset');
        var locSpan = $(".customForm input, .customForm select").parent().children('.formSpan');
        locSpan.css('visibility', 'hidden');



        var _this = $(this).parent().parent();
        var act = $(this).children("input[name='act']").val();

        var options = {
            url: 'serv/process.php?func='+act,
            type: 'post',
            data: new FormData(this),
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {loadingFunc(_this)},
            success: function(response) {successFunc(response, _this)}
        } 

        $.ajax(options);
 
    });

    $(".add").submit(function(e) {
        e.preventDefault();

        var _this = $(this).parent().parent();
        var addItem = $(this).children("input[name='addItem']").val();

        $.ajax({
            url: 'serv/process.php?func='+addItem,
            type: 'post',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            dataType: 'json',
            beforeSend: function() {loadingFunc(_this)},
            success: function(response) {successFunc2(response, _this)}
        })
    })


    ///////////////////////// Promotion ////////////////////////
    ///.......................................................//
    ////////////////////////////////////////////////////////////

    $(".promo_sel").on("change", function() {
        var value = $(this).val();

        $(".std_promo_list").load("serv/std_promo.php?func="+value);
    })

    $(".promoForm").submit(function(e) {
        e.preventDefault();

        var _this = $(this).parent().parent();

        var options = {
            url: 'serv/process.php?func=promote',
            type: 'post',
            data: new FormData(this),
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {loadingFunc(_this)},
            success: function(response) {successFunc3(response, _this)}
        } 

        $.ajax(options);
 
    });
})
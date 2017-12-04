$(document).ready(function(){

    //UI TABS
    $( function() {
        $( "#tabs" ).tabs({
            collapsible: true,
            active:false
        });
    } );


    $(function processVote(){

        //define blank variables
        var employeeID = '';
        var ratingValue = '';

        //Hide stars on menu click
        $('.menu-tabs').on('click', function(){
            $('.rating-widget').hide();
            $('.employee').show();
        });

        if ( $('.procedure').css('display') == 'block' ){
            $('.test-class').hide();
        } else {
            $('.test-class').show();
        }


        $('.employee').on('click', function(){
            var selectedEmployee = $(this).attr('id');
            $(this).siblings().hide();
            employeeID = selectedEmployee;
            $('.rating-widget').show();
            $('.vote-button').show();
        });
        $('#stars li').on('mouseover', function(){
            var onStar = parseInt($(this).data('value'), 10);


            $(this).parent().children('li.star').each(function(e){
                if (e < onStar) {
                    $(this).addClass('hover');
                }
                else {
                    $(this).removeClass('hover');
                }
            });

        }).on('mouseout', function(){
            $(this).parent().children('li.star').each(function(e){
                $(this).removeClass('hover');
            });
        });

        $('#stars li').on('click', function(){
            var onStar = parseInt($(this).data('value'), 10);
            var stars = $(this).parent().children('li.star');

            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }

            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }

            //get rating value
            ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            console.log(ratingValue);


            //ajax post
            $('.vote-button').on('click', function(){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }
                });


                var ratingValueSend = ratingValue;
                var employeeIDSend = employeeID;

                console.log("rating is "+ratingValue+" and employee is "+employeeIDSend);

                $.ajax({
                    type: "POST",
                    data: {rating:ratingValueSend, employeeid:employeeIDSend},
                    url: "/process",
                    success: function(data){
                        $('.success-box').fadeIn();
                        window.setTimeout(function(){location.reload()},3000);


                    }
                });
            });
        });
    });
});





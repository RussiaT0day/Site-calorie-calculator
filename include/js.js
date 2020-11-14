
$(function() {


    var $menu_popup = $('.menu-popup');

    $(".menu-triger, .menu-close").click(function(){
        $menu_popup.slideToggle(300, function(){
            if ($menu_popup.is(':hidden')) {
                $('body').removeClass('body_pointer');
            } else {
                $('body').addClass('body_pointer');
            }
        });
        return false;
    });

    $(document).on('click', function(e){
        if (!$(e.target).closest('.menu').length){
            $('body').removeClass('body_pointer');
            $menu_popup.slideUp(300);
        }
    });
});



$( document ).ready(function(){

    $( "#main-menu1" ).click(function(){ // задаем функцию при нажатиии на элемент с классом slide-toggle
        $( "#sub1" ).slideToggle(); // плавно скрываем, или отображаем все элементы <div>
    });
});

$( document ).ready(function(){

    $( "#main-menu2" ).click(function(){ // задаем функцию при нажатиии на элемент с классом slide-toggle
        $( "#sub2" ).slideToggle(); // плавно скрываем, или отображаем все элементы <div>
    });
});

$( document ).ready(function(){

    $( "#main-menu3" ).click(function(){ // задаем функцию при нажатиии на элемент с классом slide-toggle
        $( "#sub3" ).slideToggle(); // плавно скрываем, или отображаем все элементы <div>
    });
});

$( document ).ready(function(){

    $( "#main-menu4" ).click(function(){ // задаем функцию при нажатиии на элемент с классом slide-toggle
        $( "#sub4" ).slideToggle(); // плавно скрываем, или отображаем все элементы <div>
    });
});

$(function () {
    $('body').append('<button class = "btn_up" />');

    $('.btn_up').click(function ()
    {
        if ($( "#sub1" ).show() )
        {
            $( "#sub1" ).hide();
        }
        if ($( "#sub2" ).show() )
        {
            $( "#sub2" ).hide();
        }
        if ($( "#sub3" ).show() )
        {
            $( "#sub3" ).hide();
        }
        if ($( "#sub4" ).show() )
        {
            $( "#sub4" ).hide();
        }
        $('body').animate({'scrollTop':100},1000);
        $('html').animate({'scrollTop':100},1000);

    });

    $(window).scroll(function () {
        if($(window).scrollTop()>20)
        {
            $('.btn_up').addClass('active');
        }
        else
        {
            $('.btn_up').removeClass('active');
        }
    })

});

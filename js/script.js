/**
 * Created by Arseny on 08.02.2016.
 */
//gloabals
var main_logo = 0;
var main_trigger = 0;

var trigger = 0;//menu-trigger

//screens
var medium = 767;
//screens

var face = 0;
//gloabals
$(document).ready(function(){
    preload();
    main_logo = Snap("#main_logo");
    main_trigger = Snap("#main_trigger");
    $(".request #phone").mask("+7 (999) 999-9999");
    //validation
    $(".request").validate({
        rules: {
            user: {
                required: true,
                minlength: 2
            },
            phone: {
                required: true,
                minlength: 12
            }
        },
        messages: {
            user: {
                required: "<small style='color:red'>Поле должно быть заполнено.</small>"
            },
            phone: {
                required: "<small style='color:red'>Поле должно быть заполнено.</small>",
                minlength: "<small style='color:red'>Поле должно содержать номер телефона.</small>"
            }
        }
    });

    $(".request-2").validate({
        rules: {
            user_2: {
                required: true,
                minlength: 2
            },
            phone_2: {
                required: true,
                minlength: 12
            }
        },
        messages: {
            user_2: {
                required: "<small style='color:red'>Поле должно быть заполнено.</small>"
            },
            phone_2: {
                required: "<small style='color:red'>Поле должно быть заполнено.</small>",
                minlength: "<small style='color:red'>Поле должно содержать номер телефона.</small>"
            }
        }
    });
    //validation
});

//events

////faces
$(".face").click(function(){
    face = $(this).index()-2;
    $(".faces").find(".item").removeClass("right").addClass("current");
    $(".arrow-right").addClass("visible");
    $(".arrow-left").addClass("visible");
})
$(".faces").find(".item").find(".close").click(function(){
    $(".item.current").removeClass("current").addClass("right");
    $(".arrow-right").removeClass("visible");
    $(".arrow-left").removeClass("visible");
})
////faces

////clicks
$(".menu-trigger").click(function(){
    if(trigger == 0)
    {
        $("aside").addClass("active");
        main_logo.select("#logo").animate({
            fill : "white"
        },500)
        trigger_animate(trigger);
        trigger = 1;
    }
    else if(trigger == 1)
    {
        $("aside").removeClass("active");
        main_logo.select("#logo").animate({
            fill : "black"
        },500)
        trigger_animate(trigger);
        trigger = 0;
    }
})
////clicks

//events

//funcs
////preload
function preload()
{
    Snap.load("../img/logo.svg", function (f) {
        g = f.select("#logo");
        main_logo.append(g).attr({
            fill : "black"
        })
        $(".menu-trigger").addClass("active");
        //logo and menu
//		if($(window).width() >= medium && $(window).scrollTop() <= 100)
//		{
//			$("aside").addClass("active");
//			main_logo.select("#logo").attr({
//				fill : "#fff"
//			})
//		}
//		else if($(window).scrollTop() > 100)
//		{
//			$("aside").removeClass("active");
//			$(".menu-trigger").addClass("active");
//			main_logo.select("#logo").attr({
//				fill : "black"
//			})
//		}
        //logo and menu
    })
    Snap.load("../img/icons/trigger.svg", function (f) {
        g = f.select("#trigger");
        main_trigger.append(g).attr({fill:"black"});
    })

}
////preload

////trigger
function trigger_animate(trigger)
{
    if(trigger == 0)
    {
        main_trigger.select("#top").animate({
            stroke : "white",
            transform: "rotate(45) , translate(10,-5)"
        },200)
        main_trigger.select("#bottom").stop().animate({
            stroke : "white",
            transform: "translate(-15,15) , rotate(-45)"
        },200)
        main_trigger.select("#middle").stop().animate({
            opacity : 0
        },200)
    }
    else
    {
        main_trigger.select("#top").stop().animate({
            stroke : "black",
            transform : "rotate(0)"
        },200)
        main_trigger.select("#bottom").stop().animate({
            stroke : "black",
            transform : "rotate(0)"
        },200)
        main_trigger.select("#middle").stop().animate({
            stroke : "black",
            transform : "rotate(0)",
            opacity : 1
        },200)
    }
}
////trigger
//funcs
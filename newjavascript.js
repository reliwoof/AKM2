/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    $(".opis").hide();


    $("#lista img").click(function () {
        var numer = $(this).attr('name');
        $(".opis").each(function () {
            if ($(this).attr('id') != "zdj" + numer)
            {
                $(this).slideUp();
            }
        });
        $("#zdj" + numer).stop().slideToggle();
    });

    $(".opis").click(function () {
        var selection = window.getSelection();
        if (selection.toString().length === 0) {
            $(this).slideUp();
        }
    });

    function loadText(i) {
        var opis = "";
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "opisy/" + i + ".txt", true);
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200)
            {
                opis = this.responseText;
                $("#zdj" + i + " .tekst").append(opis);
            }
        };
    }
    for (var i = 1; i < 7; i++) {
        loadText(i);
    }

    $("#przycisk").click(function () {
//        $("#logomenu").hide();
//        $("#logomenu2").show();
        console.log("test");
        $("nav").stop().slideToggle();
    });

    if ($(window).outerWidth() <= '736') {
        $("nav a").click(function () {
            $("nav").stop().slideToggle();
        });
    } else {
        $("nav").show();
    }
//    $(window).resize(function () {
//        setTimeout(function () {
//            if ($(window).outerWidth() >= '736')
//            {
//                $("nav").show();
//            } else {
//                $("nav a").click(function () {
//                    $("nav").stop().slideToggle();
//                });
//            }
//        }, 100);

    });





/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint
$(document).ready(function () {
    var imageFolder = "images/";

    var imageSource;

    $(".cross").hide();
    
    $(".menu").hide();
    
    $(".hamburger").show();

    $("#bigPhoto").attr("src", imageFolder + "Agua_Azul.jpg");
    
    var thumbNames = ["Agua_Azul_small.jpg", "Burney_Falls_small.jpg", "Deer_Leap_Falls_small.jpg", "Fulmer_Falls_small.jpg", "Hopetown_Falls_small.jpg", "Jonathans_Run_small.jpg", "Manavgat_small.jpg", "Niagara_Falls_small.jpg"];
    
    $("img.thumbnail-inner").each(function (i) {
        
        (this).src = imageFolder + thumbNames[i];
        
    });
    
    $("img.thumbnail-inner").on("click", function () {
        
        $("img").css("opacity", "1");
        
        $(this).css("opacity", ".5");
        
        imageSource = $(this).attr("src");
        
        imageSource = imageSource.replace("_small", "");
        
        $("#bigPhoto").attr("src", imageSource);
        
    });
    
    $(".hamburger").on("click", function () {
        
        $(".menu").slideToggle();
        
        $(".hamburger").hide();
        
        $(".cross").show();
    });
    
    $(".cross").on("click", function () {
        
        $(".menu").slideToggle();
        
        $(".cross").hide();
        
        $(".hamburger").show();
        
    });
    
});
/*


Template Name: K-Z World
Email: yaraelmalah90@gmail.com
Last Modified: 24 - 05 - 2020 
By: Yara ElMalah


*/

/*global $, console, Alert*/

$(function() {

    'use strict';

    //Trigger niceScroll

    $('html').niceScroll({

        cursorcolor: '#ef0707e0',
        cursorwidth: '15px',
        zindex: 9999

    });

    //Add Active Class on the Selected Link

    $('.nav li').on('click', function(){

        $(this).addClass('active').siblings().removeClass('active')

    })

    // Trigger The Button on The Header

    function triggerExplore(myButton){

    $(myButton).on('click', function(e){

       e.preventDefault();
       $('html, body').animate({
        scrollTop: $('#' + $(this).data('scroll')).offset().top
       }, 1000)
       
    })

    }

    triggerExplore('.sign-button');
    triggerExplore('.explore')
  
    //Adjust Shuffle Link

    $('.shuffle li').on('click', function() {

         $(this).addClass('selected').siblings().removeClass('selected')

        })
        //Filter
    $('.our-filter').isotope({

        // options
        itemSelector: '.our-filter-item',
        layoutMode: 'fitRows'

    });
    // init Isotope
    var $system = $('.our-filter').isotope();

    $('.shuffle').on('click', 'li', function() {

        var filterValue = $(this).attr('data-filter');
        $system.isotope({ filter: filterValue });

    });

    //making the age select box

        function generateOptions(start, end, selectID){

            for (var i = start; i <= end; i++){
                $('<option>', {
                    value: i,
                    text: i
                }).appendTo($(selectID));
            }
        }

    //Trigger generateOptions Function 

        generateOptions(1, 31, '#day');
        generateOptions(1, 12, '#month');

        (function generateOptionsYears(){

            var OurStart = new Date().getFullYear();
            for (var i = OurStart; i >= 1950; i--){
                $('<option>', {
                    value: i,
                    text: i
                }).appendTo($('#year'));
            }

        }());

      //Removing Placeholder on focus

        $('form input, textarea').on('focus', function(){
        $(this).attr("data-placeholder", $(this).attr('placeholder'));
        $(this).attr('placeholder', '');

    })

    $('form input, textarea').on('blur', function(){
        $(this).attr('placeholder', $(this).data('placeholder'));
    })

     // Validate Client Side

    function ClientSideValide(selector, condition){
    selector.on('blur', function(){
        if($(this).val().length < condition){
          $(this).css('border', '1px solid #F00');
          $(this).removeClass('ok');

        } else{
            $(this).css('border', '1px solid green');
            $(this).addClass('ok');
        }
    })
     }

    //Trigger the Validate Client Side
    ClientSideValide($('.first'), 2);   
     ClientSideValide($('.last'), 2);
    ClientSideValide($('.validate-pass'), 5);
    ClientSideValide($('.validate-mail'), 3);

    //Submit the Form
     var importantInfo = $('.first, .last ,.validate-mail, .validate-pass');
    $('form').submit( function(e){
        if(! importantInfo.hasClass('ok')){
            e.preventDefault();
            importantInfo.blur();
        }
    })

});
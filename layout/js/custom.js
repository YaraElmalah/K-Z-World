/*global $, console, Alert*/
$(function() {
    'use strict';
    //Trigger niceScroll
    $('html').niceScroll();
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
    var $system = $('.our-filter').isotope({
        // options
    });
    $('.shuffle').on('click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $system.isotope({ filter: filterValue });
    });
})
/*
Template Name: Influence Admin Template
Author: jitu
Email: chauhanjitu3@gmail.com
File: js
*/
$(function() {
    "use strict";
    $(window).on('load', function(){

        // ============================================================== 
        // Revenue Cards
        // ============================================================== 
        $("#sparkline-revenue").sparkline([5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7], {
            type: 'line',
            width: '99.5%',
            height: '100',
            lineColor: '#5969ff',
            fillColor: '',
            lineWidth: 2,
            spotColor: undefined,
            minSpotColor: undefined,
            maxSpotColor: undefined,
            highlightSpotColor: undefined,
            highlightLineColor: undefined,
            resize:true
        });



        $("#sparkline-revenue2").sparkline([3, 7, 6, 4, 5, 4, 3, 5, 5, 2, 3, 1], {
            type: 'line',
            width: '99.5%',
            height: '100',
            lineColor: '#ff407b',
            fillColor: '',
            lineWidth: 2,
            spotColor: undefined,
            minSpotColor: undefined,
            maxSpotColor: undefined,
            highlightSpotColor: undefined,
            highlightLineColor: undefined,
            resize:true
        });



        $("#sparkline-revenue3").sparkline([5, 3, 4, 6, 5, 7, 9, 4, 3, 5, 6, 1], {
            type: 'line',
            width: '99.5%',
            height: '100',
            lineColor: '#25d5f2',
            fillColor: '',
            lineWidth: 2,
            spotColor: undefined,
            minSpotColor: undefined,
            maxSpotColor: undefined,
            highlightSpotColor: undefined,
            highlightLineColor: undefined,
            resize:true
        });



        $("#sparkline-revenue4").sparkline([6, 5, 3, 4, 2, 5, 3, 8, 6, 4, 5, 1], {
            type: 'line',
            width: '99.5%',
            height: '100',
            lineColor: '#ffc750',
            fillColor: '',
            lineWidth: 2,
            spotColor: undefined,
            minSpotColor: undefined,
            maxSpotColor: undefined,
            highlightSpotColor: undefined,
            highlightLineColor: undefined,
            resize:true,
        });
    });




});
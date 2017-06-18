/**
 * Created by Timothy on 01/05/2016.
 */
Vue.component('se-rating',{
    template: '#ratings-template',

    props:{
        'rateable_type':String,
        'rateable_id':String,
        'value':null,
        'disabled':Boolean
    },
});

new Vue({
    el: 'body'
});


























/*

window.$ = window.jQuery = require('jquery')
require('jquery-bar-rating');

$(document).ready(function() {

    $(".br-widget a").change(function () {
        var color = 'blue';
        switch ($('.br-active').length) {
            case 1, 0:
                color = 'blue';
                break;
            case 2:
                color = 'green';
                break;
            case 3:
                color = 'yellow';
                break;
            case 4:
                color = 'orange';
                break;
            case 5:
                color = 'red';
                break;
        }

        $(this).addClass("stupidity-rating-color-".color);
        alert("Handler for .change() called.");
    })
    $(".br-widget a").hover(function () {
        var color = 'blue';
        switch ($('.br-active').length) {
            case 1, 0:
                color = 'blue';
                break;
            case 2:
                color = 'green';
                break;
            case 3:
                color = 'yellow';
                break;
            case 4:
                color = 'orange';
                break;
            case 5:
                color = 'red';
                break;
        }


        $(".br-active").addClass("stupidity-rating-color-"+color);
        $(".br-current-rating").addClass("stupidity-rating-color-"+color);

    },function()
    {
        var color = 'blue';
        switch ($('.br-active').length) {
            case 1, 0:
                color = 'blue';
                break;
            case 2:
                color = 'green';
                break;
            case 3:
                color = 'yellow';
                break;
            case 4:
                color = 'orange';
                break;
            case 5:
                color = 'red';
                break;
        }


        $(".br-active").removeClass("stupidity-rating-color-"+color);
        $(".br-current-rating").removeClass("stupidity-rating-color-"+color);
    })

});


*/
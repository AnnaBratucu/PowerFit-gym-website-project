/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}

$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $(".navbar-collapse").collapse('hide');
});



function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 15,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(40.6700, -73.9400), // New York

        // Disables the default Google Maps UI components
        disableDefaultUI: true,
        scrollwheel: false,
        draggable: false,

        // How you would like to style the map.
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#000000"
            }, {
                "lightness": 17
            }]
        }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{
                "color": "#000000"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#000000"
            }, {
                "lightness": 17
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#000000"
            }, {
                "lightness": 29
            }, {
                "weight": 0.2
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
                "color": "#000000"
            }, {
                "lightness": 18
            }]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{
                "color": "#000000"
            }, {
                "lightness": 16
            }]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                "color": "#000000"
            }, {
                "lightness": 21
            }]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#000000"
            }, {
                "lightness": 16
            }]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{
                "saturation": 36
            }, {
                "color": "#000000"
            }, {
                "lightness": 40
            }]
        }, {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{
                "color": "#000000"
            }, {
                "lightness": 19
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#000000"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#000000"
            }, {
                "lightness": 17
            }, {
                "weight": 1.2
            }]
        }]
    };

    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    map = new google.maps.Map(mapElement, mapOptions);

    // Custom Map Marker Icon - Customize the map-marker.png file to customize your icon
    var image = 'img/map-marker.png';
    var myLatLng = new google.maps.LatLng(40.6700, -73.9400);
    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
    });
}



/*calendar*/

    $(function () {
    $('[data-toggle="calendar"] > .row > .calendar-day > .events > .event').popover({
        container: 'body',
        content: 'Hello World',
        html: true,
        placement: 'bottom',
        template: '<div class="popover calendar-event-popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    });

    $('[data-toggle="calendar"] > .row > .calendar-day > .events > .event').on('show.bs.popover', function () {
        var attending = parseInt($(this).find('div.progress>.progress-bar').attr('aria-valuenow')),
            total = parseInt($(this).find('div.progress>.progress-bar').attr('aria-valuemax')),
            remaining = total - attending,
            displayAttending = attending - $(this).find('div.attending').children().length,
            html = [
                '<button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>',
                '<h4>'+$(this).find('h4').text()+'</h4>',
                '<div class="desc">'+$(this).find('div.desc').html()+'</div>',
                '<div class="location">'+$(this).find('div.location').html()+'</div>',
                '<div class="datetime">'+$(this).find('div.datetime').html()+'</div>',
                '<div class="space">Attending <span class="pull-right">Available spots</span></div>',
                '<div class="attending">',
                    $(this).find('div.attending').html(),
                    '<span class="attending-overflow">+'+displayAttending+'</span>', 
                    '<span class="pull-right">'+remaining+'</span>',
                '</div>',
                '<a href="#signup" class="btn btn-success" role="button">Attend</a>'
            ].join('\n');

        $(this).attr('title', $(this).find('h4').text());
        $(this).attr('data-content', html);
    });

    $('[data-toggle="calendar"] > .row > .calendar-day > .events > .event').on('shown.bs.popover', function () {
        var $popup = $(this);
        $('.popover:last-child').find('.close').on('click', function(event) {
            $popup.popover('hide');
        });
    });
});



/*program*/
    
;(function () {
    var scheduleTab = function() {
        $('.schedule-container').css('height', $('.schedule-content.active').outerHeight());

        $(window).resize(function(){
            $('.schedule-container').css('height', $('.schedule-content.active').outerHeight());
        });

        $('.schedule a').on('click', function(event) {
            
            event.preventDefault();

            var $this = $(this),
                sched = $this.data('sched');

            $('.schedule a').removeClass('active');
            $this.addClass('active');
            $('.schedule-content').removeClass('active');

            $('.schedule-content[data-day="'+sched+'"]').addClass('active');

        });
    };

    var contentWayPoint = function() {
        var i = 0;
        $('.animate-box').waypoint( function( direction ) {

            if( direction === 'down' && !$(this.element).hasClass('animated') ) {
                
                i++;

                $(this.element).addClass('item-animate');
                setTimeout(function(){

                    $('body .animate-box.item-animate').each(function(k){
                        var el = $(this);
                        setTimeout( function () {
                            el.addClass('fadeInUp animated');
                            el.removeClass('item-animate');
                        },  k * 200, 'easeInOutExpo' );
                    });
                    
                }, 100);
                
            }

        } , { offset: '85%' } );
    };

        $(function(){
       
        contentWayPoint();
        scheduleTab();
    });

}());
    

/*calendar*/

    $(function () {
    $('[data-toggle="calendar"] > .row > .calendar-day > .events > .event').popover({
        container: 'body',
        content: 'Hello World',
        html: true,
        placement: 'bottom',
        template: '<div class="popover calendar-event-popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    });

    $('[data-toggle="calendar"] > .row > .calendar-day > .events > .event').on('show.bs.popover', function () {
        var attending = parseInt($(this).find('div.progress>.progress-bar').attr('aria-valuenow')),
            total = parseInt($(this).find('div.progress>.progress-bar').attr('aria-valuemax')),
            remaining = total - attending,
            displayAttending = attending - $(this).find('div.attending').children().length,
            html = [
                '<button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>',
                '<h4>'+$(this).find('h4').text()+'</h4>',
                '<div class="desc">'+$(this).find('div.desc').html()+'</div>',
                '<div class="location">'+$(this).find('div.location').html()+'</div>',
                '<div class="datetime">'+$(this).find('div.datetime').html()+'</div>',
                '<div class="space">Attending <span class="pull-right">Available spots</span></div>',
                '<div class="attending">',
                    $(this).find('div.attending').html(),
                    '<span class="attending-overflow">+'+displayAttending+'</span>', 
                    '<span class="pull-right">'+remaining+'</span>',
                '</div>',
                '<a href="#signup" class="btn btn-success" role="button">Attend</a>'
            ].join('\n');

        $(this).attr('title', $(this).find('h4').text());
        $(this).attr('data-content', html);
    });

    $('[data-toggle="calendar"] > .row > .calendar-day > .events > .event').on('shown.bs.popover', function () {
        var $popup = $(this);
        $('.popover:last-child').find('.close').on('click', function(event) {
            $popup.popover('hide');
        });
    });
});


//calorie
var cneed;
var fneed;
var crneed;
var pneed;
var aneed;
var fd;
function cc()
{
var age=parseInt(document.getElementById("age").value);
var wtype=document.getElementById("wtype").value;
var foot=parseInt(document.getElementById("foot").value);
var inch=parseInt(document.getElementById("inch").value);
var cm =document.getElementById("cen").value;
var weight=document.getElementById("weight").value;
if (age!='' && cm!='' && weight!='') {
if (wtype=="pounds")
{weight=parseInt(weight);
weight=Math.round(weight/2.2046);
}
var loa=document.getElementById("loa").value;
if(document.getElementById("gen").checked)
{
fd=(10*weight)+(6.25*cm)-(5*age)+5;
}
else
{
fd=(10*weight)+(6.25*cm)-(5*age)-161;
}
switch(loa)
{
case "1":
cneed=fd*1.2;
break;
case "2":
cneed=fd*1.375
break;
case "3":
cneed=fd*1.53;
break;
case "4":
cneed=fd*1.725;
break;
case "5":
cneed=fd*1.9;
break;
}
cneed=Math.floor(cneed);
//cneed1=Math.floor(cneed*0.0353);
fneed=Math.floor((cneed*0.25)/9);
if (wtype=="pounds")
{
fneed=Math.floor(fneed*0.0353);
//fneed=fneed*0.0022 ;
}
pneed=Math.floor((cneed*0.25)/4);
if (wtype=="pounds")
{
pneed=Math.floor(pneed*0.0353);
}
crneed=Math.floor((cneed*0.25)/4);
if (wtype=="pounds")
{
crneed=Math.floor(crneed*0.0353);
}
aneed=Math.floor((cneed*0.25)/7);
if (wtype=="pounds")
{
aneed=Math.floor(aneed*0.0353);
}
document.getElementById("rc").value=" "+cneed;
document.getElementById("rf").value=" "+fneed;
document.getElementById("rp").value=" "+pneed;
document.getElementById("rh").value=" "+crneed;
document.getElementById("ra").value=" "+aneed;
document.getElementById("l1").innerHTML="grams";
document.getElementById("l2").innerHTML="grams";
document.getElementById("l3").innerHTML="grams";
document.getElementById("l4").innerHTML="grams";
var caltype=document.getElementById("caltype").value;
if (caltype=='g') {
document.getElementById("l1").innerHTML="grams";
document.getElementById("l2").innerHTML="grams";
document.getElementById("l3").innerHTML="grams";
document.getElementById("l4").innerHTML="grams";
}
if (wtype=="pounds")
{
fat1 = fneed * 0.0022 ;
pro1 = pneed * 0.0022 ;
car1 = crneed * 0.0022 ;
alh1 = aneed * 0.0022 ;
fat1=fat1.toFixed(3);
pro1 = pro1.toFixed(3);
car1 = car1.toFixed(3);
alh1 = alh1.toFixed(3);
document.getElementById("rf").value=" "+fat1;
document.getElementById("rp").value=" "+pro1;
document.getElementById("rh").value=" "+car1;
document.getElementById("ra").value=" "+alh1;
document.getElementById("l1").innerHTML="lbs";
document.getElementById("l2").innerHTML="lbs";
document.getElementById("l3").innerHTML="lbs";
document.getElementById("l4").innerHTML="lbs";
}
if (caltype=='pounds') {
fat1 = fneed * 0.0022 ;
pro1 = pneed * 0.0022 ;
car1 = crneed * 0.0022 ;
alh1 = aneed * 0.0022 ;
fat1=fat1.toFixed(3);
pro1 = pro1.toFixed(3);
car1 = car1.toFixed(3);
alh1 = alh1.toFixed(3);
document.getElementById("rf").value=" "+fat1;
document.getElementById("rp").value=" "+pro1;
document.getElementById("rh").value=" "+car1;
document.getElementById("ra").value=" "+alh1;
document.getElementById("l1").innerHTML="lbs";
document.getElementById("l2").innerHTML="lbs";
document.getElementById("l3").innerHTML="lbs";
document.getElementById("l4").innerHTML="lbs";
}
if (caltype=='kg') {
fat2 = fneed / 1000;
pro2 = pneed / 1000;
car2 = crneed / 1000;
alh2 = aneed / 1000;
fat2=fat2.toFixed(3);
pro2 = pro2.toFixed(3);
car2 = car2.toFixed(3);
alh2 = alh2.toFixed(3);
document.getElementById("rf").value=" "+fat2;
document.getElementById("rp").value=" "+pro2;
document.getElementById("rh").value=" "+car2;
document.getElementById("ra").value=" "+alh2;
document.getElementById("l1").innerHTML="kilogram";
document.getElementById("l2").innerHTML="kilogram";
document.getElementById("l3").innerHTML="kilogram";
document.getElementById("l4").innerHTML="kilogram";
}
}
else{
alert("Please fill your details properly!");
}
}
function con(num)
{
var hc=parseInt(num.value);
var hi=hc/2.54;
var hf=Math.floor(hi/12);
var ri=Math.round(hi%12);
if(hc>40 && hc<=210)
{
document.getElementById("foot").value=hf;
}
document.getElementById("inch").value=ri;
}
function hcon()
{
var hf=parseInt(document.getElementById("foot").value);
var hi=parseInt(document.getElementById("inch").value);
var hc;
hc=Math.round((hf*30.48)+(hi*2.54));
document.getElementById("cen").value=hc;
}
function cknum(event,num)
{var kc;
if(window.event)
{
kc=event.keyCode;
}
else
{
kc=event.which;
}
var a=num.value;
if(kc==48)
{
if(a=="")
{
return false;
}
else
{
return true;
}
}if (kc!=8 && kc!=0)
{
if (kc<49||kc>57)
{
return false;
}
}
}
function isNumberKey(id)
{var no=eval('"'+id+'"');var number= document.getElementById(no).value; if(!number.match(/^[0-9\.]+$/) && number !=""){number = number.substring(0,number.length-1);document.getElementById(id).value = number;}
}
function convert() {
var age=parseInt(document.getElementById("age").value);
var cm =document.getElementById("cen").value;
var weight=document.getElementById("weight").value;
if (age!='' && cm!='' && weight!='') {
var caltype=document.getElementById("caltype").value;
var fat = document.getElementById("rf").value;
var pro = document.getElementById("rp").value;
var car = document.getElementById("rh").value;
var alh = document.getElementById("ra").value;
if (caltype=='g') {
document.getElementById("rc").value=" "+cneed;
document.getElementById("rf").value=" "+fneed;
document.getElementById("rp").value=" "+pneed;
document.getElementById("rh").value=" "+crneed;
document.getElementById("ra").value=" "+aneed;
document.getElementById("l1").innerHTML="grams";
document.getElementById("l2").innerHTML="grams";
document.getElementById("l3").innerHTML="grams";
document.getElementById("l4").innerHTML="grams";
}
if (caltype=='pounds') {
fat1 = fneed * 0.0022 ;
pro1 = pneed * 0.0022 ;
car1 = crneed * 0.0022 ;
alh1 = aneed * 0.0022 ;
fat1=fat1.toFixed(3);
pro1 = pro1.toFixed(3);
car1 = car1.toFixed(3);
alh1 = alh1.toFixed(3);
document.getElementById("rf").value=" "+fat1;
document.getElementById("rp").value=" "+pro1;
document.getElementById("rh").value=" "+car1;
document.getElementById("ra").value=" "+alh1;
document.getElementById("l1").innerHTML="lbs";
document.getElementById("l2").innerHTML="lbs";
document.getElementById("l3").innerHTML="lbs";
document.getElementById("l4").innerHTML="lbs";
}
if (caltype=='kg') {
fat2 = fneed / 1000;
pro2 = pneed / 1000;
car2 = crneed / 1000;
alh2 = aneed / 1000;
fat2=fat2.toFixed(3);
pro2 = pro2.toFixed(3);
car2 = car2.toFixed(3);
alh2 = alh2.toFixed(3);
document.getElementById("rf").value=" "+fat2;
document.getElementById("rp").value=" "+pro2;
document.getElementById("rh").value=" "+car2;
document.getElementById("ra").value=" "+alh2;
document.getElementById("l1").innerHTML="kilogram";
document.getElementById("l2").innerHTML="kilogram";
document.getElementById("l3").innerHTML="kilogram";
document.getElementById("l4").innerHTML="kilogram";
}
}
else{
alert("Please fill your details properly!");
}
}


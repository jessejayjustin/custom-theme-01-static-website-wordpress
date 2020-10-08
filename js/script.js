var $j = jQuery.noConflict();
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}

function addHeight(height) {
  var h = $j('.our-customers ul').height();
  var n = height + h;
  $j(".our-customers ul").css('max-height', n + 'px');
}

function tagVisible() {
  $j("#tag-hidden").css('display','block');
}

$j(function(){
  $j('.menu-toggle').click(function(){
    $j('nav').toggleClass('active');
  });

  $j(document).ready(function() {
    $j('.carousel .carousel-caption').css('zoom', $j('.carousel').width()/1250);
  });

 $j(window).resize(function() {
    $j('.carousel .carousel-caption').css('zoom', $j('.carousel').width()/1250);
  });
});

// Create the state-indicator element
let indicator = document.createElement('div');
indicator.className = 'state-indicator';
document.body.appendChild(indicator);

// Create a method which returns device state
function getDeviceState() {
    let index = parseInt(window.getComputedStyle(indicator).getPropertyValue('z-index'), 10);

    let states = {
      1: '1',
      3: '3',
      4: '4',
      5: '5'
    };

    return states[index];
}

$j(window).on("load resize", function(){
  let state = getDeviceState();
  if(state === '1') { 
    $j('.our-customers').css('zoom', '100%');
  } else if(state === '3') {
    $j('.our-customers').css('zoom', '85%');
  } else if(state === '4') {
    $j('.our-customers').css('zoom', '75%');
  } else if(state === '5') {
    $j('.our-customers').css('zoom', '65%');
  } else {
    $j('.our-customers').css('zoom', '100%');
  }
});

$j("li").eq(8).html('');

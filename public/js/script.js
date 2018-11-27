$(document).ready(function() {
    // Filter events by cause
    $("#causeFilter").on('submit', function(e) {
        e.preventDefault();
        var causes = $("#causes").val();

        $.ajax({
            type:'GET',
            url:'events/causes',
            data: {'causes': causes},
            success:function(data){
                $("#events").empty().append(data);
                // updateMapMarkers(data);
            }
        }).fail(function(xhr){
            var errMsg = $.parseJSON(xhr.responseText);
            console.log(errMsg);
        });
    });
});

// Initial load of Google Maps API
function initMap(locations) {
    // var center = {lat: 30.2672, lng: -97.7431}; // Austin
    var center = {lat: 34.0522, lng: -118.2437}; // LA

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: center
    });
    var marker = new google.maps.Marker({
      position: center,
      map: map,
      title: 'Austin'
    });

    // Add markers
    // TODO: get locations from this project's API.
    var locations = [
        ['Los Angeles', 34.052235, -118.243683],
        ['Santa Monica', 34.024212, -118.496475],
        ['Redondo Beach', 33.849182, -118.388405],
        ['Newport Beach', 33.628342, -117.927933],
        ['Long Beach', 33.770050, -118.193739]
    ];

    for(var i=0; i<locations.length; i++) {
        var marker = new google.maps.Marker({
            position: {lat: locations[i][1], lng: locations[i][2]},
            map: map,
            title: locations[i][0]
        });

        marker.setMap(map);
    } 
}

    function updateMapMarkers(data) {
        console.log(data);
    }
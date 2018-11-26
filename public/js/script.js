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
            }
        }).fail(function(xhr){
            var errMsg = $.parseJSON(xhr.responseText);
            console.log(errMsg);
        });
    });
});

// Initial load of Google Maps API
function initMap() {
    var center = {lat: 41.8781, lng: -87.6298};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: center
    });
    var marker = new google.maps.Marker({
      position: center,
      map: map
    });
}

function iniciarMap(){
    var coord = {lat:4.663724323603852 ,lng: -74.05479943684709};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}

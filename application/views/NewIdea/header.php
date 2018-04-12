<header class="header-area overlay full-height relative v-center" id="home-page" style="margin-top:75px;">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-10 col-sm-offset-1 header-text">
                <form method="post" action="<?php echo base_url(); ?>index.php/IdeasHub/NewIdea" class="contact-form">
                    <input name="heading" class="form-control" placeholder="Heading" />
                    <textarea name="description" id="form-message" name="form-message" rows="5" cols="150" class="form-control" placeholder="Your message" required="required"></textarea>
                    <div id="map" style="height: 300px; width:100%; margin : 15px auto;"></div>
                    <input name="lat" id="lat" type="hidden" />
                    <input name="lng" id="lng" type="hidden" />
                    
                    <button type="submit" class="btn btn-success btn-lg col-sm-5">Submit</button>
                </form>
                </div>
                
            </div>
        </div>
    </header>
    
<script>
// self executing function here
(function() {
   
  function initMap() {
        
        var uluru = {lat: 17.336694, lng: 76.838222};
        document.getElementById('lat').value = uluru.lat;
        document.getElementById('lng').value = uluru.lng;

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          draggable:true
        });
        marker.addListener('dragend', markerDrag);
      }
      initMap();
      function markerDrag(event){
        document.getElementById('lat').value = event.latLng.lat();
        document.getElementById('lng').value = event.latLng.lng();
      }

})();
</script>

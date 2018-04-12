<div style="width:100%; height:300px; margin-top:75px;">
    <div id="map" style="height:100%; width:100%;"></div>
</div>
<div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-8 header-text" style="margin : 50px auto;">
                    <h2> <?php echo $Heading; ?> </h2>
                    <p>
                    <?php echo $Description; ?>
                    </p>
                    <a href="#solutions" class="button white">See Solutions</a>
                </div>
                
            </div>
            
        </div>
</div>

<script>
// self executing function here
$( document ).ready(function() {
    function initMap() {
    
    var uluru = {lat: <?php echo $Lat; ?>, lng: <?php echo $Lan; ?>};
    
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map,
        draggable:true
    });
    
    }
    initMap();
});

</script>    


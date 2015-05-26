<div class="container">
    <div class="row">
        <div class="col-md-6">
            <em>&copy;copyright 2014 all rights reserved</em>
        </div>
        <div class="col-md-6">
            <p class="text-right">
                <a href="#"><img src="img/social/Facebook.png" alt="" /></a>
                <a href="#"><img src="img/social/Twitter.png" alt="" /></a>
                <a href="#"><img src="img/social/Google+.png" alt="" /></a>
                <a href="#"><img src="img/social/Pinterest.png" alt="" /></a>
                <a href="#"><img src="img/social/Linkedin.png" alt="" /></a>
                <a href="#"><img src="img/social/Myspace.png" alt="" /></a>
                <a href="#"><img src="img/social/Dribble.png" alt="" /></a>
                <a href="#"><img src="img/social/YouTube.png" alt="" /></a>
                <a href="#"><img src="img/social/Flickr.png" alt="" /></a>
                <a href="#"><img src="img/social/Tumblr.png" alt="" /></a>
            </p>
        </div>
    </div>
</div>    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<script>
    var map;
    function initialize() {
        var mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(-34.397, 150.644)
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>


</body>
</html>

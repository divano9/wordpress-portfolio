<?php

/**
* Template Name: Contact Template
*/
?>
<?php get_header(); ?>
<div class="col-md-8 px-0">
    <section class="contact">
        <article class="gmap shadow">
            <div id="map_wrapper">
                <div id="map"></div>

            </div>

            <script>

                // This example displays a marker at the center of Australia.
                // When the user clicks the marker, an info window opens.

                function initMap() {
                    var uluru1 = {lat: 44.777327, lng: 20.416269};

                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 16,
                        center: uluru1
                    });

                    var contentString1 = '<div id="content" class="text-center">' +
                            '<img  class="img-fluid" style="max-width:200px" src="img/example.jpg"></img>' +
                            '<div id="bodyContent">' +
                            '<h2 style="margin-top:10px">Dusan Ivanovic</h2>' +
                            '<p>Orfelinova 3a, 11030 Beograd</p>' +
                            '<p>Tel:064/999-99-99</p>' +
                            '</div>' +
                            '</div>';


                    var infowindow1 = new google.maps.InfoWindow({
                        content: contentString1
                    });

                    var marker1 = new google.maps.Marker({
                        position: uluru1,
                        map: map,
                        title: 'Dusan Ivanovic',
                        animation: google.maps.Animation.DROP
                    });
                    marker1.addListener('click', function () {
                        infowindow1.open(map, marker1);
                    });

                    marker1.addListener('click', toggleBounce);




                }

                function toggleBounce() {
                    if (marker1.getAnimation() !== null) {
                        marker1.setAnimation(null);
                    } else {
                        marker1.setAnimation(google.maps.Animation.BOUNCE);
                    }
                }
            </script>

            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjrIeBetC1p7ptiWZ5H-HvW5h-XD_iRjU&callback=initMap&scrollwheel=false">
            </script>

        </article>
        <article class="form shadow">
            <h2 class=" mb-4">CONTACT</h2>
            <form method="post" action="" class="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" value="" name="name" class="form-control" placeholder="Your name">
                                <span class="input-group-addon fa fa-user"></span>
                            </div>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" value="" name="email" class="form-control" placeholder="Your email">
                                <span class="input-group-addon fa fa-envelope"></span>
                            </div>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="input-group">
                                <textarea name="message" style="width: 100%; height: 100px;" placeholder="Your message" class="form-control"></textarea>
                                <span class="input-group-addon fa fa-comment-o"></span>
                            </div>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" value="submit" name="submit" class="btn btn-dark">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
        </article>
    </section>
</div>



<?php get_footer(); ?>

@extends("layouts.frontend")
@section("content")

    <section id="page-content" class="page-wrapper">
        <!-- Start contact address area  -->
        <div class="zm-section bg-white ptb-65">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4 col-sm-8">
                        <div class="section-title-2 mb-40">
                            <h3 class="inline-block uppercase text-center">İletişim</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-address text-center">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <h4>Adres</h4>
                            <p>{{$setting->adress}}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 xs-mt-30">
                        <div class="single-address text-center">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <h4 class="uppercase">Email Adresi</h4>
                            <p>{{$setting->email}}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 xs-mt-30">
                        <div class="single-address text-center">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4 class="uppercase">Telefon Numaraları</h4>
                            <p>{{$setting->phone}}</p>
                            <p>{{$setting->fax}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End contact address area  -->
        <!-- Start Google Map area -->
        <div class="zm-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="google-map">
                            <div id="googleMap" style="width:100%;height:600px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Google Map area -->
        <!-- Start contact message area -->
        <div class="zm-section bg-white pt-60 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="section-title-2 mb-40">
                            <h3 class="inline-block uppercase">Mesaj Gönder</h3>
                            <p>Aşağıdaki formu doldurarak mesaj Gönderebilirsiniz</p>
                        </div>
                    </div>
                </div>
                <div class="message-box">
                    <form action="http://nscreativestudio.com/znews/znews/mail.php" id="contact-form" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" placeholder="Adınız*">
                                <input type="email" name="email" placeholder="Soyadınız*">
                                <input type="text" name="phone" placeholder="Telefon Numaranız*">
                                <input type="text" name="website" placeholder="Websiteniz">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="message" placeholder="Mesajınızı yazın"></textarea>
                                <button class="submit-button" type="submit">Mesaj Gönder</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
        <!-- End contact message area -->
    </section>
@endsection
@push("customJs")
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key={{$setting->mapApi}}"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.7286, 90.3854), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.7286, 90.3854),
                map: map,
                title: 'Znews!',
                animation:google.maps.Animation.BOUNCE

            });
            var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<div id="bodyContent">'+
                '<h4>Head Office</h4>'+
                '<p>721/A Central Street</p>'+
                '</div>'+
                '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            infowindow.open(map, marker);
        }
    </script>

@endpush
@push("customCss")



@endpush


<!DOCTYPE html>

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>Add Dansel</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/colors/color.css" id="colors">
    <style>
        #map {
            height: 300px;
            margin-bottom: 3%;
            margin-left: -0.1%;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <?=$this->include('partials/nav')?>

            <!-- Titlebar
================================================== -->
            <div id="titlebar" class="single submit-page">
                <div class="container">

                    <div class="sixteen columns">
                        <h2><i class="fa fa-plus-circle"></i> Add Dansel</h2>
                    </div>

                </div>
            </div>

            <!-- Content
================================================== -->
            <div class="container">

                <!-- Submit Page -->
                <div class="sixteen columns">
                    <div class="submit-page">

                        <!-- Notice -->
                        <div class="notification notice closeable margin-bottom-40">
                            <p><span>Have an account?</span> If you don’t have an account you can create one below by entering your email address. A password will be automatically emailed to you.</p>
                        </div>

                        <!-- Email -->
                        <div class="form">
                            <h5>Name</h5>
                            <input class="search-field" type="text" placeholder="Name" value="" />
                        </div>

                        <!-- Title -->
                        <div class="form">
                            <h5>Address</h5>
                            <input class="search-field" type="text" placeholder="Address" value="" />
                        </div>

                        <!-- Location -->
                        <div class="form">
                            <h5>City</h5>
                            <select data-placeholder="Full-Time" class="chosen-select">
                                <option>Ambalangoda</option>
                                <option>Ampara</option>
                                <option>Anuradhapura</option>
                                <option>Avissawella</option>
                                <option>Badulla</option>
                                <option>Balangoda</option>
                                <option>Bandarawela</option>
                                <option>Batticaloa</option>
                                <option>Beruwala</option>
                                <option>Chavakacheri</option>
                                <option>Chilaw</option>
                                <option>Colombo</option>
                                <option>Dambulla</option>
                                <option>Dehiwala-Mount Lavinia</option>
                                <option>Embilipitiya</option>
                                <option>Eravur</option>
                                <option>Galle</option>
                                <option>Gampaha</option>
                                <option>Gampola</option>
                                <option>Hambantota</option>
                                <option>Haputale</option>
                                <option>Harispattuwa</option>
                                <option>Hatton</option>
                                <option>Horana</option>
                                <option>Ja-Ela</option>
                                <option>Jaffna</option>
                                <option>Kadugannawa</option>
                                <option>Kalmunai</option>
                                <option>Kalutara</option>
                                <option>Kandy</option>
                                <option>Kattankudy</option>
                                <option>Katunayake</option>
                                <option>Kegalle</option>
                                <option>Kelaniya</option>
                                <option>Kolonnawa</option>
                                <option>Kuliyapitiya</option>
                                <option>Kurunegala</option>
                                <option>Mannar</option>
                                <option>Matale</option>
                                <option>Matara</option>
                                <option>Minuwangoda</option>
                                <option>Moneragala</option>
                                <option>Moratuwa</option>
                                <option>Nawalapitiya</option>
                                <option>Negombo</option>
                                <option>Nuwara Eliya</option>
                                <option>Panadura</option>
                                <option>Peliyagoda</option>
                                <option>Point Pedro</option>
                                <option>Puttalam</option>
                                <option>Ratnapura</option>
                                <option>Sri Jayawardenapura Kotte</option>
                                <option>Talawakele</option>
                                <option>Tangalle</option>
                                <option>Trincomalee</option>
                                <option>Valvettithurai</option>
                                <option>Vavuniya</option>
                                <option>Wattala</option>
                                <option>Wattegama</option>
                                <option>Weligama</option>
                            </select>
                        </div>

                        <!-- Location -->
                        <div class="form">
                            <h5>Location <span></span></h5>
                            <input class="search-field" type="text" type="text"
                                id="searchmap">
                            <div id="map" class="thirteen columns"></div>
                        </div>

                        <div class="form">
                        <input class="search-field" type="text" name="lat" id="lat">
                        <input class="search-field" type="text" name="lng" id="lng">
                        </div>

                        <!-- Job Type -->
                        <div class="form">
                            <h5>Job Type</h5>
                            <select data-placeholder="Full-Time" class="chosen-select-no-single">
                                <option value="1">Full-Time</option>
                                <option value="2">Part-Time</option>
                                <option value="2">Internship</option>
                                <option value="2">Freelance</option>
                            </select>
                        </div>

                        <!-- Choose Category -->
                        <div class="form">
                            <div class="select">
                                <h5>Category</h5>
                                <select data-placeholder="Choose Categories" class="chosen-select" multiple>
                                    <option value="1">Web Developers</option>
                                    <option value="2">Mobile Developers</option>
                                    <option value="3">Designers & Creatives</option>
                                    <option value="4">Writers</option>
                                    <option value="5">Virtual Assistants</option>
                                    <option value="6">Customer Service Agents</option>
                                    <option value="7">Sales & Marketing Experts</option>
                                    <option value="8">Accountants & Consultants</option>
                                </select>
                            </div>
                        </div>

                        <!-- Tags -->
                        <div class="form">
                            <h5>Job Tags <span>(optional)</span></h5>
                            <input class="search-field" type="text" placeholder="e.g. PHP, Social Media, Management" value="" />
                            <p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
                        </div>

                        <!-- Description -->
                        <div class="form">
                            <h5>Description</h5>
                            <textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                        </div>

                        <!-- Application email/url -->
                        <div class="form">
                            <h5>Application email / URL</h5>
                            <input type="text" placeholder="Enter an email address or website URL">
                        </div>

                        <!-- TClosing Date -->
                        <div class="form">
                            <h5>Closing Date <span>(optional)</span></h5>
                            <input data-role="date" type="text" placeholder="yyyy-mm-dd">
                            <p class="note">Deadline for new applicants.</p>
                        </div>

                        <!-- Company Details -->
                        <div class="divider">
                            <h3>Company Details</h3></div>

                        <!-- Company Name -->
                        <div class="form">
                            <h5>Company Name</h5>
                            <input type="text" placeholder="Enter the name of the company">
                        </div>

                        <!-- Website -->
                        <div class="form">
                            <h5>Website <span>(optional)</span></h5>
                            <input type="text" placeholder="http://">
                        </div>

                        <!-- Teagline -->
                        <div class="form">
                            <h5>Tagline <span>(optional)</span></h5>
                            <input type="text" placeholder="Briefly describe your company">
                        </div>

                        <!-- Video -->
                        <div class="form">
                            <h5>Video <span>(optional)</span></h5>
                            <input type="text" placeholder="A link to a video about your company">
                        </div>

                        <!-- Twitter -->
                        <div class="form">
                            <h5>Twitter Username <span>(optional)</span></h5>
                            <input type="text" placeholder="@yourcompany">
                        </div>

                        <!-- Logo -->
                        <div class="form">
                            <h5>Logo <span>(optional)</span></h5>
                            <label class="upload-btn">
                                <input type="file" multiple />
                                <i class="fa fa-upload"></i> Browse
                            </label>
                            <span class="fake-input">No file selected</span>
                        </div>

                        <div class="divider margin-top-0"></div>
                        <a href="#" class="button big margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></a>

                    </div>
                </div>
            </div>

            <?=$this->include('partials/footer')?>

                <!-- Back To Top Button -->
                <div id="backtotop">
                    <a href="#"></a>
                </div>

    </div>
    <!-- Wrapper / End -->

    <!-- Scripts
================================================== -->
    <script src="/scripts/jquery-2.1.3.min.js"></script>
    <script src="/scripts/custom.js"></script>
    <script src="/scripts/jquery.superfish.js"></script>
    <script src="/scripts/jquery.themepunch.tools.min.js"></script>
    <script src="/scripts/jquery.themepunch.revolution.min.js"></script>
    <script src="/scripts/jquery.themepunch.showbizpro.min.js"></script>
    <script src="/scripts/jquery.flexslider-min.js"></script>
    <script src="/scripts/chosen.jquery.min.js"></script>
    <script src="/scripts/jquery.magnific-popup.min.js"></script>
    <script src="/scripts/waypoints.min.js"></script>
    <script src="/scripts/jquery.counterup.min.js"></script>
    <script src="/scripts/jquery.jpanelmenu.js"></script>
    <script src="/scripts/stacktable.js"></script>

    <!-- WYSIWYG Editor -->
    <script type="text/javascript" src="/scripts/jquery.sceditor.bbcode.min.js"></script>
    <script type="text/javascript" src="/scripts/jquery.sceditor.js"></script>

    <script>
        var map;
            function initAutocomplete() {
                map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 6.9814435, lng: 81.0741583},
                zoom: 15
                });

                var marker = new google.maps.Marker({
                position: {lat: 6.9814435, lng: 81.0741583},
                map: map,
                draggable: true,
                });

                var input = document.getElementById('searchmap');
                var searchBox = new google.maps.places.SearchBox(input);
                //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                google.maps.event.addListener(searchBox,'places_changed',function(){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i, place;
                    for (i = 0; place=places[i]; i++) {
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);

                    }

                    map.fitBounds(bounds);
                    map.setZoom(15);
                });

                google.maps.event.addListener(marker,'position_changed',function(){
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();

                    $('#lat').val(lat);
                    $('#lng').val(lng);
                });
            }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqEJqbGCHpvyJs-kfupMQzHeZJhfIO_OI&libraries=places&callback=initAutocomplete"
        async defer></script>

</body>

</html>
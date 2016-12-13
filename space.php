<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>BOOTUP</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/space.css" rel="stylesheet">
    <link href="css/affg.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/events.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
    <style>
        h1 {
            font-size: 60px;
            font-weight: 500;
            letter-spacing: 2px;
            font-family: Montserrat;
        }
        h2 {
            font-size: 30px;
            font-weight: 400;
            font-family: Montserrat;
        }
        span {
            font-family: 'Roboto Slab';
            font-weight: 300;
            font-size: 18px;
            letter-spacing: 1px
        }
        .space-panel {
            background-color: rgba(203,141,84, 0.9); 
            text-align: center;
            color: white;
            padding: 0 20px 20px 20px;
        }
        @media (max-width:500px) {
            .space-panel {margin-top:-280px;}
        }
        .space-panel h1 {
            color: white;
            font-weight: 400;
            font-family: Montserrat;
            padding: 40px 0; margin: 0;
        }
        .space-panel p, p.space {
            line-height: 30px;
            font-weight: 300;
            font-size: 20px;
        }
        .below-space {
            color: #919191;
            margin: 60px 0;
            text-align: center;
            font-family: Montserrat;
        }
        @media (min-width: 768px) {
            .space-panel {
                padding: 0 60px 60px 60px;
                margin-top: -220px;
            }
        }
        [role="quote"] span {
            font-size: 30px;
            font-weight: 400;
            color: #919191;
            display: inline-block;
            margin-left: 80px;
        }
        [role="quote"] img.quotes {
            width: 60px;
            position: relative;
            top: -80px;
        }
        @media (max-width: 450px) {
            [role="quote"] span {margin-left: 0;text-align: start;font-size: 17px;}
            [role="quote"] img.quotes {top: -100px;left: 40%;}
        }
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmO3xaYVnJBTRb4bYRMYXvC6xkISwgx4E"></script>

    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(37.452241, -122.166148), // New York
                styles: [{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"landscape.man_made","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"labels.text.fill","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"landscape.man_made","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"landscape.natural.landcover","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.attraction","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"gamma":"1.00"},{"lightness":"20"},{"saturation":"0"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.school","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.school","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.sports_complex","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.sports_complex","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"lightness":"-15"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":"0"},{"color":"#adadad"}]},{"featureType":"road.local","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"transit.line","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"labels.text.fill","stylers":[{"visibility":"on"}]},{"featureType":"transit.line","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"lightness":"-11"},{"saturation":"0"}]},{"featureType":"water","elementType":"labels.icon","stylers":[{"visibility":"off"}]}],
                scrollwheel: false
            };

            var mapElement = document.getElementById('map');

            var map = new google.maps.Map(mapElement, mapOptions);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(37.452241, -122.166148),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top" id="page-top">
    <?php include 'menu.php'; ?>
    <div class="container-fluid" style="margin:0;padding:0">
        <div class="content-section-a2"><a href="contacts.php"><div class="circle-space">CONTACT US</div></a></div>
        <div class="row" style="margin:0; background: transparent">
            <div class="col-md-5 space-panel">
                <h1 style="font-size: 54px;">CO-WORKING</h1>
                <p>BootUP is widely recognized as one of the top startup communities in Silicon
                Valley and many experienced serial entrepreneurs base their companies at BootUP’s 25,000 sqft
                co-working space in Menlo Park. At BootUP, you become part of a vibrant community of other
                startups with access to investors, mentors and service providers for growth hacking,
                accounting, legal and other areas.</p>
            </div>
            <div class="col-md-7">
                <div class="row below-space">
                    <div class="col-md-5">
                        <h1 style="font-size: 60px;">25,000</h1>
                        <span>SQUARE FEET</span>
                    </div>
                    <br class="visible-xs">
                    <br class="visible-xs">
                    <div class="col-md-6">
                        <h1 style="font-size: 60px;">Menlo Park</h1>
                        <span>CALIFORNIA</span>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
        <br class="hidden-xs">
        <br class="hidden-xs">
        <div class="row" style="margin:0 0 60px 0; background: transparent">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                <p style="font-size:23px; text-align: center; font-weight: 400">BootUP is located within walking distance to the bars, restaurants and shops on Palo Alto’s University Avenue. Lunch and drinks are available on site, as well as a kitchen, and there is a great garden with plenty of space for business meetings or to just work outside in the nice California weather.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="text-align:right">
            <a href="https://www.entrepreneur.com/article/271403" target="_blank"><div class="col-md-6" role="quote">
                <span>One of the top three startup communities in Silicon Valley.</span>
                <img class="logo_ent pull-right" src="img/entrepreneur_logo@2x.png" alt="inc_logo">
                <img class="quotes pull-left" src="img/quote_icon@2x.png" alt="quote_icon">
            </div></a>
            <a href="http://www.inc.com/john-rampton/10-places-to-network-with-startup-founders-in-silicon-valley.html" target="_blank"><div class="col-md-6 margin-space" role="quote">
                <span>Best place to network with founders in Silicon Valley.</span>
                <img class="logo_inc pull-right" src="img/inc_logo@2x.png" alt="entrepreneur_logo">
                <img class="quotes pull-left" src="img/quote_icon@2x.png" alt="quote_icon">
            </div></a>
        </div>
        <hr>
    </div>
    
    <div class="container">
        <center><h2 style="color: #818181;">Space available to meet your company’s growing needs</h2></center><br><br>
        <div class="row">
            <div class="col-md-4">
                <img src="img/flexdesk.jpg" alt="flexdesk_img" style="width:100%; margin-bottom:10px">
                <div class="flexoverlap1"><h3 class="textsquare">Flex Desk</h3></div>
                 <div class="row">
                    <div class="col-md-12">
                        <h2 class="col-md-6" style="margin:5px 0;font-family: roboto;">$349<span style="font-size:20px;font-weight: 400;">/month</span></h2>
                        <a class="col-md-6" href="contacts.php"><button class="joinbtn">Join</button></a>
                    </div>
                </div>
                <br><br>
                <p class="spacep">Choose your favorite flex desk location as your home base and access any available desk in the common area. No need to reserve a spot in advance—just bring your laptop, pick an open seat, and get to work 9am-6pm.</p>

                <ul class="a">
                    <li>Menlo Park Address</li>
                    <li>Desk</li>
                    <!-- <li>Beam Access</li> -->
                </ul>
                <p style="color:rgb(203,141,84);">+ Add-ons</p>
                <ul class="a" style="color:rgb(203,141,84) !important;">
                    <li>Conference Rooms</li>
                    <li>Printing</li>
                    <li>Cuckoo’s Nest Membership*</li>
                </ul>
                <br>
                
                
            </div>
            <div class="col-md-4">
                <img src="img/fulltimedesk.jpg" alt="flexdesk_img" style="width:100%; margin-bottom:10px">
                <div class="flexoverlap1"><h3 class="textsquare">Fulltime Desk</h3></div>
                 <div class="row">
                    <div class="col-md-12">
                        <h2 class="col-md-6" style="margin:5px 0; font-family: roboto;">$499<span style="font-size:20px;font-weight: 400;">/month</span></h2>
                        <a class="col-md-6" href="contacts.php"><button class="joinbtn">Join</button></a>
                    </div>
                </div>
                <br><br>
                <p class="spacep">Carve out your own space and maximize your productivity with 24/7 access to a dedicated desk. You’ll have a permanent space to set up shop in an area with tons of opportunities for collaboration. </p>
                <ul class="a">
                    <li>Menlo Park Address</li>
                    <li>Desk</li>
                    <li>Beam Access</li>
                    <li>Printing (limited)</li>
                    <li>Conference Rooms (limited)</li>
                    <li>Pitch Event (monthly)</li>
                    <li>Session with a Mentor (monthly)</li>
                </ul>
                <p style="color:rgb(203,141,84);">+ Add-ons</p>
                <ul class="a" style="color:rgb(203,141,84) !important;">
                    <li>Conference Rooms</li>
                    <li>Cuckoo’s Nest Membership*</li>
                </ul>
                <br>
               
            </div>
            <div class="col-md-4">
                <img src="img/office.jpg" alt="flexdesk_img" style="width:100%; margin-bottom:10px">
                <div class="flexoverlap1"><h3 class="textsquare">Office</h3></div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="col-md-7" style="margin:5px 0; font-family: roboto;">$1,999+<span style="font-size:20px;font-weight: 400;">/month</span></h2>
                        <a class="col-md-5" href="contacts.php"><button class="joinbtn">Join</button></a>
                    </div>
                </div>
                <br><br>
                <p class="spacep">If you're looking for an office, we have a space that can fit your needs. You’ll get all the benefits of community, plus an added sense of privacy and the ability to create a culture of your own. Private offices include printing, conference rooms and package service.</p>
                <ul class="a">
                    <li>Menlo Park Address</li>
                    <li>Desk</li>
                    <li>Beam Access</li>
                    <li>Printing (limited)</li>
                    <li>Conference Rooms (limited)</li>
                    <li>Pitch Event (monthly)</li>
                    <li>Session with a Mentor (monthly)</li>
                </ul>
                <br>
                
            </div>
        </div>
    </div>
    <br class="hidden-xs">
    <br class="hidden-xs">
    <div class="container-fluid" style="background:rgb(203,141,84)">
        <img class="asteriskimg" src="img/asterisk@2x.png" alt="asterisk" style="position:absolute">
        <p style="margin:40px 5%;color:white" class="space">In addition, CEOs and investors can become members of BootUP’s private social club (Cuckoo’s Nest) and gain access to a wide variety of events held at the Cuckoo’s Nest connecting startups to investors and corporate executives. Becoming a part of this exclusive network is a great opportunity to network with some of the brightest minds in Silicon Valley. Membership is charged at USD 149 per month in addition to the office space package</p>
    </div>

    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding-top:20px; text-align: center;">
                    <div class="col-md-4 item">
                        <div class="image"><img style="width:50px;position: relative;top: 40px; margin: 4em;" src="img/services_icon@2x.png"></div>
                        <div class="title" style="font-size: 18px;">Services</div>
                        <div class="text" style="line-height: 1.8; color: #818181;font-family: roboto;font-weight: 100;font-size: 15px;">
                            A wide variety of services are available to
                            BootUP startups including growth
                            hacking, web hosting, accounting, parttime CFO, legal, insurance and others.
                        </div>
                    </div>
                    <div class="col-md-4 item" style="text-align: center;">
                        <div class="image"><img style="width:35px;position: relative;top: 20px; margin: 3em;" src="img/beams_icon@2x.png"></div>
                        <div class="title" style="font-size: 18px;">Beams</div>
                        <div class="text" style="line-height: 1.8; color: #818181;font-family: roboto;font-weight: 100;font-size: 15px;">
                            Many BootUP startups work with
                            distributed teams across the globe. We
                            have 14 Beam telepresence units that
                            roam around for our startups to use as
                            virtual conference systems at no
                            additional cost.
                        </div>
                    </div>
                    <div class="col-md-4 item" style="text-align: center;">
                        <div class="image"><img style="width:110px;position: relative;top: 40px; margin: 4em;" src="img/conference_icon@2x.png"></div>
                        <div class="title" style="font-size: 18px;">Conference Rooms</div>
                        <div class="text" style="line-height: 1.8; color: #818181;font-family: roboto;font-weight: 100;font-size: 15px;">
                            We have a variety of conference rooms
                            including two boardrooms. All our
                            conference rooms are fully equipped with
                            TV monitors and whiteboards.
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="padding-top:20px;">
                    <div class="col-md-4 item" style="text-align: center;">
                        <div class="image"><img style="width:80px;position: relative;top: 27px; margin: 3em;" src="img/auditorium_icon@2x.png"></div>
                        <div class="title" style="font-size: 18px;">Auditorium</div>
                        <div class="text" style="line-height: 1.8; color: #818181;font-family: roboto;font-weight: 100;font-size: 15px;">
                            BootUP has a fully equipped auditorium
                            seating up to 100 people that can be used
                            to host large events.
                        </div>
                    </div>
                    <div class="col-md-4 item" style="text-align: center;">
                        <div class="image"><img style="width:80px;position: relative;top: 20px; margin: 3em;" src="img/events_icon@2x.png"></div>
                        <div class="title" style="font-size: 18px;">Social & Events</div>
                        <div class="text" style="line-height: 1.8; color: #818181;font-family: roboto;font-weight: 100;font-size: 15px;">
                            There is a continuous flow of events
                            happening at BootUP to connect our
                            startups with investors and corporate
                            executives. These include pitch events,
                            happy hours, knowledge sharing sessions
                            and much more.
                        </div>
                    </div>
                    <div class="col-md-4 item" style="text-align: center;">
                        <div class="image"><img style="width:70px;position: relative;top: 31px; margin: 3em;" src="img/amenities_icon@2x.png"></div>
                        <div class="title" style="font-size: 18px;">Amenities</div>
                        <div class="text" style="line-height: 1.8; color: #818181;font-family: roboto;font-weight: 100;font-size: 15px;">
                            We have super fast internet (up to 1 GB), a
                            kitchen with complimentary coffee, tea,
                            printers and showers. And our unique
                            garden is a great place to work or host
                            meetings.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="not-show-mobile">
        <div class="photo-space">
            <div class="col-md-5" style="padding-left: 0;padding-right: 0;">
                <img class="space-image" src="img/spaces_conferenceroom.jpg">
            </div>
            <div class="col-md-7" style="padding-left: 0;padding-right: 0;">
                <img class="space-image" src="img/spaces_studio.jpg">
            </div>
        </div>

        <!-- Companies -->
        <div class="container" style="text-align:center;">
            <br>
            <h2 style="color:rgb(203,141,84);">Companies</h2>
            <br><br>
            <div class="row">
                <div class="col-md-3 vcenter"><a href="http://www.mentorcloud.com/" target="_blank"><img alt="mentorcloud_logo" class="spaceicon1" src=
                "img/mentorcloud_logo@2x.png"></a></div>
                <br class="visible-xs"><br class="visible-xs">
                <div class="col-md-3 vcenter"><img alt="hellobaby_logo" class="spaceicon2" src=
                "img/hellobaby_logo@2x.png"></div>
                <br class="visible-xs"><br class="visible-xs">
                <div class="col-md-3 vcenter"><a href="https://www.swiftmile.com/" target="_blank"><img alt="swiftmile_logo" class="spaceicon3" src=
                "img/swiftmile_logo@2x.png"></a></div>
                <br class="visible-xs"><br class="visible-xs">
                <div class="col-md-3 vcenter"><a href="https://www.mokloud.com/" target="_blank"><img alt="mokloud_logo" class="spaceicon4" src=
                "img/mokloud_logo@2x.png"></a></div>
                <br class="visible-xs"><br class="visible-xs">
            </div>
            <div class="row" style="margin-top: 3em;">
                <div class="col-md-3 vcenter"><a href="https://www.magisto.com/" target="_blank"><img alt="magisto_logo" class="spaceicon5" src=
                "img/magisto_logo@2x.png"></a></div>
                <br class="visible-xs"><br class="visible-xs">
                <div class="col-md-3 vcenter"><a href="http://www.piedparker.com" target="_blank"><img alt="piedparker" class="spaceicon6" src=
                "img/iedparker_logo@2x.png"></a></div>
                <br class="visible-xs"><br class="visible-xs">
                <div class="col-md-3 vcenter"><a href="http://unraveldata.com/" target="_blank"><img alt="unravel_logo" class="spaceicon7" src=
                "img/unravel_logo@2x.png"></a></div>
                <br class="visible-xs"><br class="visible-xs">
                <div class="col-md-3 vcenter"><a href="https://www.cocooncam.com/" target="_blank"><img alt="cocooncam_logo" class="spaceicon8" src=
                "img/cocooncam_logo@2x.png"></a></div>
            </div>
            <div id="contact-corporate-portfolio">
            <fieldset>
                <a href="portfolio.php"><button class="spacebut" name="submit" type="submit" style="color: rgb(203,141,84); border-color: rgb(203,141,84);cursor: pointer; padding: 10px; background: #FFF; margin: 3em auto; display: table; font-size: 14px; border: 1px solid;}">FULL PORTFOLIO</button></a>
            </fieldset>
        </div>
        </div><br>
        <br>
        <div id="map"></div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- jQuery -->
    <script src="js/jquery.js">
    </script> <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script> 
    <script src="js/scrolling-nav.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contacts</title>
    <link rel="icon" href="img/BootUP_favicon.png" sizes="16x16" type="image/png">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">  

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

 
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

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

<body>
<?php include 'menu.php'; ?>
<div class="contacts">
    <div class="block1">
        <div class="container">
            <div class="row">
                <form id="form">
                    <div class="form" >
                        <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Name" name="name">
                        <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Email" name="email">
                        <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Phone" name="phone">
                        <textarea name="message" id="message" class="txtarea" tabindex="4" placeholder="How did you hear about us?" required></textarea>
                        <div style="color:#a9a9a9;">Choose a category (optional)</div>
                        <?php
                            $pos = strrpos($_SERVER['HTTP_REFERER'], '/');
                            $page = substr($_SERVER['HTTP_REFERER'], $pos+1, -4);
                        ?>
                        <label id="space" for="toggle-1" class="<?php if ($page == 'space') echo 'label-active' ?>">SPACE</label>
                        <input type="checkbox" id="toggle-1" value="space" name="check[]" <?php if ($page == 'space') echo 'checked' ?>>

                        <label id="events" for="toggle-2" class="<?php if ($page == 'events') echo 'label-active' ?>">EVENTS</label>
                        <input type="checkbox" id="toggle-2" value="events" name="check[]" <?php if ($page == 'events') echo 'checked' ?>>

                        <label id="experts" for="toggle-3" class="<?php if ($page == 'experts') echo 'label-active' ?>">EXPERTS</label>
                        <input type="checkbox" id="toggle-3" value="experts" name="check[]" <?php if ($page == 'experts') echo 'checked' ?>>

                        <label id="club" for="toggle-4" class="<?php if ($page == 'club') echo 'label-active' ?>">CLUB</label>
                        <input type="checkbox" id="toggle-4" value="club" name="check[]" <?php if ($page == 'club') echo 'checked' ?>>

                        <label id="accelerator" for="toggle-5" class="<?php if ($page == 'accelerator') echo 'label-active' ?>">ACCELERATOR</label>
                        <input type="checkbox" id="toggle-5" value="accelerator" name="check[]" <?php if ($page == 'accelerator') echo 'checked' ?>>

                        <label id="corporate" for="toggle-6" class="<?php if ($page == 'corporate') echo 'label-active' ?>">CORPORATE</label>
                        <input type="checkbox" id="toggle-6" value="corporate" name="check[]" <?php if ($page == 'corporate') echo 'checked' ?>>

                        <label id="capital" for="toggle-7" class="<?php if ($page == 'capital') echo 'label-active' ?>">CAPITAL</label>
                        <input type="checkbox" id="toggle-7" value="capital" name="check[]" <?php if ($page == 'capital') echo 'checked' ?>>

                        <label id="angels" for="toggle-8" class="<?php if ($page == 'angels') echo 'label-active' ?>">ANGELS</label>
                        <input type="checkbox" id="toggle-8" value="angels" name="check[]" <?php if ($page == 'angels') echo 'checked' ?>>

                        <label id="academy" for="toggle-9" class="<?php if ($page == 'academy') echo 'label-active' ?>">ACADEMY</label>
                        <input type="checkbox" id="toggle-9" value="academy" name="check[]" <?php if ($page == 'academy') echo 'checked' ?>>
                    </div>
                    <div style="text-align: center;">
                        <input type="submit" class="submit" value="SEND">
                    </div>
                </form>
                <div id="ms">
                    <div id="error" style="display:none;text-align: center;color: white;font-size: 21px;font-weight: bold;padding: 5px;background: rgba(0,0,0,0.7);width: 150px;margin: 0 auto;border-radius: 4px;">Invalid Email</div>
                    <div id="sending" style="display:none;text-align: center;color: white;font-size: 21px;font-weight: bold;padding: 5px;background: rgba(0,0,0,0.7);width: 150px;margin: 0 auto;border-radius: 4px;">Sending...</div>
                    <div id="thankyou" style="display:none;text-align: center;color: white;font-size: 21px;font-weight: bold;padding: 5px;background: rgba(0,0,0,0.7);margin: 0 auto;border-radius: 4px;">Your message has been sent.<br>Thank you for your interest. You should be receiving a reply soon!</div>
                </div>
                <div style="color:white;padding-top: 50px;">
                    <div class="col-md-12">
                        <div class="col-md-offset-4 col-md-2">
                            <img style="width:20px;padding-right: 5px;" src="img/phone_icon@2x.png.png">
                            +1 800.493.1945
                        </div>
                        <div class="col-md-3">
                            <img style="width:20px;padding-right: 5px;" src="img/phone_icon@2x.png.png">
                            info@bootupventures.com
                        </div>
                    </div>
                    <div class="col-md-offset-4 col-md-4" style="text-align: -webkit-center;padding-top: 20px;">
                        <img style="width:20px;padding-right: 5px;" src="img/location_icon@2x.png.png">
                        68 Willow Rd, Menlo Park, CA 94025, USA
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="map"></div>
</div>
<?php include 'footer.php'; ?>

<script>
    $( "#toggle-1" ).click(function() {
        $('#space').toggleClass("label-active");
    });
    $( "#toggle-2" ).click(function() {
        $('#events').toggleClass("label-active");
    });
    $( "#toggle-3" ).click(function() {
        $('#experts').toggleClass("label-active");
    });
    $( "#toggle-4" ).click(function() {
        $('#club').toggleClass("label-active");
    });
    $( "#toggle-5" ).click(function() {
        $('#accelerator').toggleClass("label-active");
    });
    $( "#toggle-6" ).click(function() {
        $('#corporate').toggleClass("label-active");
    });
    $( "#toggle-7" ).click(function() {
        $('#capital').toggleClass("label-active");
    });
    $( "#toggle-8" ).click(function() {
        $('#angels').toggleClass("label-active");
    });
    $( "#toggle-9" ).click(function() {
        $('#academy').toggleClass("label-active");
    });
</script>

<script type="text/javascript">
    $("#form").submit(function (e) {
        e.preventDefault();
        registr();
    });

    function registr() {
        var form_data = $("#form").serialize(); 
//        if ($('.input').val().indexOf("@") > 0) {
//            console.log($('.input-sign').val().indexOf("@"));
            $.ajax({
                type: "POST", 
                url: "PHPMailer/contacts.php", 
                data: form_data,
                beforeSend: function () { 
                    $("#error").css("display", "none");
                    $("#sending").css("display", "block");
                    $("#form").css("display", "none");
                    $("#ms").css("padding-top", "250px");
                    $("#ms").css("padding-bottom", "187px");
                },
                success: function () {
                    $("#sending").css("display", "none");
                    $("#error").css("display", "none");
                    $("#thankyou").css("display", "block");
//                    $('.input-sign').val('');
                    $("#form").css("display", "none");
                    $("#ms").css("padding-top", "250px");
                    $("#ms").css("padding-bottom", "157px");
                }
            });
//        } else {
//            $("#error").css("display", "block");
//        }
    }
</script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

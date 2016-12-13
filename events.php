<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>BOOTUP | Events</title>
    <link rel="icon" href="img/BootUP_favicon.png" sizes="16x16" type="image/png">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/space.css" rel="stylesheet">
    <link href="css/affg.css" rel="stylesheet">
    <link href="css/events.css" rel="stylesheet">
    <link href="css/experts.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

    <style>
        .events-panel {
            background-color: rgba(12, 87, 148, 0.9);
            text-align: center;
            color: white;
            padding: 0 20px 20px 20px;
        }
        @media (max-width: 500px) {
            .events-panel {margin-top: -200px;}
        }
        .events-panel h1 {
            color: white;
            font-weight: 400;
            font-family: Montserrat;
            padding: 40px 0;
            margin: 0;
        }

        .events-panel p, p.space {
            line-height: 30px;
            font-weight: 300;
            font-size: 20px;
        }

        @media (min-width: 768px) {
            .events-panel {
                padding: 0 60px 60px 60px;
                margin-top: -100px;
            }
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top" id="page-top">
<?php include 'menu.php'; ?>
<div class="container-fluid" style="margin:0;padding:0">
    <div class="content-section-events"><a href="contacts.php"><div class="circle-events">CONTACT US</div></a></div>
    <div class="row" style="margin:0; background: transparent">
        <div class="col-md-6 events-panel">
            <h1 style="font-size: 60px;">EVENTS</h1>
            <p>BootUP offers an attractive venue for high-quality events at the heart of Silicon Valley. Since 2013, we
                have hosted over 500 events bringing together more than 10,000 participants at our Menlo Park location.
                BootUP has a fully equipped event studio and a serene outdoor courtyard with a large lawn, tables, sofas
                and armchairs around gas powered fire pits. Unlike your typical tech meetup, BootUP gives you the
                feeling of an upscale private club. It is at BootUP that you meet high-power serial entrepreneurs,
                senior corporate executives and leading investors. There is no better place in the Valley to connect the
                dots.</p>
        </div>
        <div class="col-md-6 eventside hidden-xs" style="padding-top: 0;">
            <h1 class="eventbriteAPI">Upcoming Events</h1>
            <?php
            $res = file_get_contents('https://www.eventbriteapi.com/v3/users/me/owned_events/?token=23FOX2YX2R5R3JHLRLVS');
            $res = json_decode($res, true);
            $new_res = array_slice($res['events'], -2);
            $result['1'] = $new_res[0];
            $result['2'] = $new_res[1];
            $date1 = date("M d, Y h:i a", strtotime($result['1']['start']['local']));
            $date2 = date("M d, Y h:i a", strtotime($result['2']['start']['local']));
            echo '
<div style="margin-right:30px;">
<a style="color: initial;" href="' . $result['1']['url'] . '" target="_blank">
    <div class="col-md-12" style="border-bottom: 1px solid;padding: 20px 0;">
        <div class="col-md-4" style="padding-left: 0;padding-right: 0;">
            <img style="width:100%;height:120px;" src="' . $result['1']['logo']['url'] . '">
        </div>
        <div class="col-md-8" style=padding-top:30px;>
            <div class="">' . $date1 . '</div>
            <div style="color: #0d5188;font-size:18px;">' . $result['1']['name']['text'] . '</div>
        </div>
    </div>
</a>
';
            echo '
    <a style="color: initial;" href="' . $result['2']['url'] . '" target="_blank">
        <div class="col-md-12" style="border-bottom: 1px solid;padding: 20px 0;">
            <div class="col-md-4" style="padding-left: 0;padding-right: 0;">
                <img style="width:100%;height:120px;" src="' . $result['2']['logo']['url'] . '">
            </div>
            <div class="col-md-8" style=padding-top:30px;>
                <div class="">' . $date2 . '</div>
                <div style="color: #0d5188;font-size:18px;">' . $result['2']['name']['text'] . '</div>
            </div>
        </div>
    </a>
</div>
';
            ?>
        </div>
    </div>
</div>

<div class="not-show-desktop">
    <div style="text-align: center;color: #6d6c6c;padding-top: 40px;font-size: 23px;">Upcoming Events</div>
    <?php
    echo '
    <div style="padding:20px;text-align: center;">
    <a style="color: initial;" href="' . $result['1']['url'] . '" target="_blank">
        <div class="col-md-12" style="border-bottom: 1px solid;padding: 20px 0;">
            <div class="col-xs-12" style="padding-left: 0;padding-right: 0;">
                <img style="width:50%;height:120px;margin-bottom: 25px;" src="' . $result['1']['logo']['url'] . '">
            </div>
            <div class="col-md-8" style=padding-top:30px;>
                <div class="">' . $date1 . '</div>
                <div style="color: #0d5188;font-size:13px;">' . $result['1']['name']['text'] . '</div>
            </div>
        </div>
    </a>
    ';
    echo '
        <a style="color: initial;" href="' . $result['2']['url'] . '" target="_blank">
            <div class="col-md-12" style="border-bottom: 1px solid;padding: 20px 0;">
                <div class="col-xs-12" style="padding-left: 0;padding-right: 0;">
                    <img style="width:50%;height:120px;margin-bottom: 25px;" src="' . $result['2']['logo']['url'] . '">
                </div>
                <div class="col-md-8" style=padding-top:30px;>
                    <div class="">' . $date2 . '</div>
                    <div style="color: #0d5188;font-size:13px;">' . $result['2']['name']['text'] . '</div>
                </div>
            </div>
        </a>
    </div>
    ';
    ?>
</div>

<div class="container">
    <br>
    <center><h2 style="color: #818181;">Our event spaces in the heart of Silicon Valley</h2></center>
    <br><br>
    <div class="row">
        <div class="col-md-4" style="text-align: -webkit-right;text-align: -moz-right;">
            <img src="img/events_cuckoosnest.png" alt="flexdesk_img" style="width:100%; margin-bottom:10px">
            <div class="squareunder1"><h3 class="textsquare">Cuckoo's Nest</h3></div>
            <div class="row">
                <div class="col-md-12">
                    <a href="http://cuckoosnestclub.com/" target="_blank">
                        <button class="visitbtn pull-right btn11">VISIT</button>
                    </a>
                </div>
            </div>
            <p class="eventp">The Cuckoo's Nest is a great venue for private events and parties with up to 130
                people.</p>
            <p class="colorp">Indoor</p>
            <ul class="a">
                <li>3,000 sq.ft.</li>
                <li>Full bar</li>
                <li>Lounge area</li>
                <li>Stage and seating area for up to 80 guests with standing room for additional 50</li>
            </ul>
            <p class="colorp">Outdoor Courtyard</p>
            <ul class="a">
                <li>Up to 150 guests</li>
                <li>Fountain</li>
                <li>Fire pits</li>
                <li>Casual dining area for up to 80 guests</li>
                <li>6,000 sq.ft. garden with removable stage</li>
            </ul>
            <br>
            <br><br>
        </div>
        <div class="col-md-4" style="text-align: -webkit-right;text-align: -moz-right;">
            <img src="img/events_studio.png" alt="flexdesk_img" style="width:100%; margin-bottom:10px">
            <div class="squareunder2"><h3 class="textsquare">Event Studio</h3></div>
            <div class="row">
                <div class="col-md-12">
                    <a href="contacts.php">
                        <button class="cntcbtn pull-right">CONTACT US</button>
                    </a>
                </div>
            </div>
            <p class="eventp">This event space is great for conferences, workshops, panel discussions and professional
                presentations.</p>
            <ul class="a">
                <li>12,000 sq.ft. media studio</li>
                <li>Seating and parking for 80 guests</li>
                <li>Retractable skylights</li>
                <li>Backlit projector</li>
                <li>Surround Sound</li>
                <li>Whiteboards</li>
                <li>WiFi access</li>
                <li>Microphones</li>
                <li>A/V support</li>
            </ul>
            <br>
            <br><br>
        </div>
        <div class="col-md-4" style="text-align: -webkit-right;text-align: -moz-right;">
            <img src="img/events_conference.png" alt="flexdesk_img" style="width:100%; margin-bottom:10px">
            <div class="squareunder3"><h3 class="textsquare">Executive Conference Rooms</h3></div>
            <div class="row">
                <div class="col-md-12">
                    <a href="contacts.php">
                        <button class="cntcbtn pull-right">CONTACT US</button>
                    </a>
                </div>
            </div>
            <p class="eventp">Great for board and team meetings.</p>
            <ul class="a">
                <li>300 sq.ft.</li>
                <li>Seating for 14</li>
                <li>Full wall of floor to ceiling windows</li>
                <a href="https://suitabletech.com/beampro/" target="_blank">
                    <li style="color: #818181;">Beam Access</li>
                </a>
                <li>Projector</li>
                <li>Whiteboards</li>
                <li>WiFi access</li>
                <li>Microphones</li>
                <li>A/V support</li>
            </ul>
            <br>
            <br><br>
        </div>
    </div>
</div>
<br class="hidden-xs">
<br class="hidden-xs">

<?php include 'footer.php'; ?>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
</body>
</html>

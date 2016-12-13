<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>Experts | BOOTUP</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/affg.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/experts.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet"><!-- Custom Fonts -->
    <link href="css/navbar.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
    <style>
        .circle {
            background-color: #590000;
            opacity: .9;
            color: white;
            padding: 60px;
            text-align: center;
        }

        @media (max-width: 500px) {
            .circle {
                margin-top: -200px;
                padding: 60px 20px;
            }
        }

        @media (min-width: 768px) {
            .circle {
                margin-top: -180px;
                border-radius: 50%;
                height: 520px;
                width: 520px;
            }

            .circle h2 {
                font-size: 60px;
            }
        }

        .circle p {
            vertical-align: middle;
            display: table-cell;
            font-weight: 300;
            font-size: 18px;
            line-height: 30px;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top" id="page-top">
<?php include 'menu.php'; ?>
<div class="container-fluid" style="margin:0;padding:0">
    <div class="content-section-experts"><a href="contacts.php">
            <div class="circle-experts">JOIN US</div>
        </a></div>
    <center>
        <div class="circle">
            <h2>EXPERTS</h2>
            <p>BootUP’s expert network brings together over 800 outstanding
                individuals with diverse backgrounds, experience and personal networks covering vertical
                industry sectors, different geographic regions and a variety of functional areas (e.g. growth
                marketing, fundraising, UX/UI design, sales channel development, contract manufacturing).</p>
        </div>
    </center>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="box highlight">
                    <i class="experts-img"><img alt="" src="img/jane@2X.png"></i>
                    <p class="nametitle"><b>Jane Lindner</b><br>
                        <span style="color: #818181;">Fundraising</span></p>
                    <p class="quotetext">"BootUP has access to a very diverse network of investors ranging from business
                        angels to
                        family ofﬁces to venture funds.”</p>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="box highlight">
                    <i class="experts-img"><img alt="" src="img/gianni@2X.png"></i>
                    <p class="nametitle"><b>Gianni Maxemin</b><br>
                        <span style="color: #818181;">Growth Marketing</span></p>
                    <p class="quotetext">"At BootUP you have the opportunity to work together with the best growth
                        marketing experts
                        in Silicon Valley to help you scale your business."</p>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="box highlight">
                    <i class="experts-img"><img alt="" src="img/ray@2x.png"></i>
                    <p class="nametitle"><b>Ray Kasbarian</b><br>
                        <span style="color: #818181;">Telco</span></p>
                    <p class="quotetext">"At BootUP, you can tap into experienced, serial entrepreneurs who have been on
                        the
                        entrepreneurial journey many times before."</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="box highlight">
                    <i class="experts-img"><img alt="" src="img/bob@2X.png"></i>
                    <p class="nametitle"><b>Bob Marcantonio</b><br>
                        <span style="color: #818181;">Retail Channels</span></p>
                    <p class="quotetext">"The BootUP network provides access to leading distributors and retailers
                        within the United
                        States and abroad."</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box highlight">
                    <i class="experts-img"><img alt="" src="img/jenn@2X.png"></i>
                    <p class="nametitle"><b>Jenn Byrnes</b><br>
                        <span style="color: #818181;">Telco</span></p>
                    <p class="quotetext">"BootUP has very strong corporate partners providing validation as well as
                        opportunities to
                        drive signiﬁcant sales."</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box highlight">
                    <i class="experts-img"><img alt="" src="img/woody@2X.png"></i>
                    <p class="nametitle"><b>Woody Gibson</b><br>
                        <span style="color: #818181;">Energy</span></p>
                    <p class="quotetext">"BootUP has experts with deep, sector-speciﬁc expertise who understand your
                        industry, who
                        can help you spot opportunities as well as overcome challenges."</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="not-show-mobile">
        <section style="background:#590000" class="experts">
            <div class="container">
                <h3 class="intsttitle">Interested in joining BootUP Experts?</h3>
                <form id="form">
                    <div class="form">
                        <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Name*" name="name">
                        <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Location"
                               name="location">
                        <input style="margin-bottom: 25px;" class="input" type="email" placeholder="Email*"
                               name="email">
                        <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Phone" name="phone">
                        <input style="margin-bottom: 25px;" class="input" type="text" placeholder="LinkedIn profile url"
                               name="linkedin">
                        <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Sector Expertise"
                               name="sector">
                        <textarea name="message1" id="msg1" class="txtarea" tabindex="4"
                                  placeholder="What you bring to BootUP?" required></textarea>
                        <textarea name="message2" id="msg2" class="txtarea" tabindex="4"
                                  placeholder="How did you hear about us?" required></textarea>
                    </div>
                    <div style="text-align: center;">
                        <input type="submit" class="submit" value="Submit" onclick="registr()">
                    </div>
                </form>
                <div id="ms">
                    <div id="sending"
                         style="display:none;text-align: center;color: white;font-size: 21px;font-weight: bold;padding: 5px;background: rgba(0,0,0,0.7);width: 150px;margin: 0 auto;border-radius: 4px;margin-top: 50px;margin-bottom: 50px;">
                        Sending...
                    </div>
                    <div id="thankyou"
                         style="display:none;text-align: center;color: white;font-size: 21px;font-weight: bold;padding: 5px;background: rgba(0,0,0,0.7);width: 750px;margin: 0 auto;border-radius: 4px;margin-top: 40px;margin-bottom: 40px;">
                        Your message has been sent.<br>Thank you for your interest. You should be receiving a reply
                        soon!
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include 'footer.php'; ?>
<script type="text/javascript">
    $("#form").submit(function (e) {
        e.preventDefault();
        registr();
    });

    function registr() {
        var form_data = $("#form").serialize(); //collect all data
        $.ajax({
            type: "POST", //dispatch method
            url: "PHPMailer/experts.php", //path to php sender
            data: form_data,
            beforeSend: function () {
                $("#sending").css("display", "block");
                $("#form").css("display", "none");
            },
            success: function () {
                $("#sending").css("display", "none");
                $("#thankyou").css("display", "block");
                $("#form").css("display", "none");
            }
        });
    }
</script>
<!-- jQuery -->
<script src="js/jquery.js">
</script> <!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
</body>
</html>
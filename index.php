<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BOOTUP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

    <link rel="icon" href="img/BootUP_favicon.png" sizes="16x16" type="image/png">

    <style>
        html {

        }
        [role="boxes"] > div > .box {
            border: 1px solid #818181;
            padding: 26px 0 0 0;
            height: 25.28em;
        }
        .logoblock {
            position: relative;
            margin-right: auto;
            margin-left: auto;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
            font-family: Montserrat;
            letter-spacing: 2px;
        }
        .logoblock > span {
            font-size: 18px;
            font-weight: 400;
            text-shadow: 0px 0px 20px black;
        }
        .logoblock img {
            width: 46%;
            display: inline-block;
            position: relative;
            bottom: 3px;
            margin: 0 40px;
        }
        .diffblock {
            margin: 20px;
        }
        @media (max-width: 768px) {
            .logoblock img {
                width: 60%;
                margin: 40px 0;
            }
            [role="boxes"] > div > .box {
                margin: 20px;
            }
            .diffblock {
                margin: 20px 0;
            }
        }
        .intro-section a.page-scroll {
            position: absolute;
            bottom: 20px;
            transform: translateX(-50%);
            overflow-x:hidden;
        }
        .boxes {
            display: table;
        }
        .boxes > div {
            float: none;
            display: table-cell;
            vertical-align: top;
        }
        .container-fluid[class*='-blk'] {
            padding: 0;
        }
        .container-fluid[class*='-blk'] > div {
            padding: 0;
        }
        .difference-blk {
            padding: 0 20px !important;
        }
        .difference-blk .box {
            padding: 0px;
            margin: 0 0 40px 0;
        }
        .difference-blk .box .title {
            font-size: 23px;
            color: black;
            padding: 0px 10px 0px 10px;t
            text-align: center;
        }
        .difference-blk .box .text {
            font-size: 13px;
            text-align: center;
            color: #818181;
            height: 138px;
            font-weight:200;
            padding: 5px 10px 5px 10px;
        }
        .headerspace {
            font-size: 300%;
            font-weight: 400;
            letter-spacing: 2px;
            padding-bottom: 29px;
            font-family: Montserrat;
        }
        .headerspace > .span {
            letter-spacing: 0;
            display: block;
            padding-bottom: 10px;
            font-weight: 200;
        }
        .lead {
            font-weight: 300;
            font-size: 20px;
            padding-bottom: 40px;
        }
        .differenceTitle h2 {
            color:#818181;
            font-family: Montserrat;
            font-weight: 200;
            margin:40px 0 60px 0;
        }
        @media (max-width: 768px) {
            .differenceTitle h2 {
                font-size: 24px;
                margin:40px 0 40px 0;
            }
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>
    <!-- Intro Section -->
    <section id="page-top" class="intro-section">
        <div class="container-fluid firstrow">
            <a href="contacts.php"><div class="circle-index">CONTACT US</div></a>
                <div class="logoblock">
                    
                    <img src="img/BootUP_logo_white_blue.png" alt="logo">
                    
                    <h3>THE GLOBAL SERIAL ENTREPRENEURAL ECOSYSTEM</h3>
                </div>
                <div class="container hidden-xs" style="position:relative;bottom:-50%">
                    <div class="col-md-4" style="text-align:center">
                        <h1 style="font-family:Montserrat;font-size:5em; font-weight: 200">120+</h1>
                        <span style="font-family:'Roboto Slab';font-size: 21px;font-weight: 200;letter-spacing: 2px">STARTUPS</span>
                    </div>
                    <div class="col-md-4" style="text-align:center">
                        <h1 style="font-family:Montserrat;font-size:5em; font-weight: 200">$400M+</h1>
                        <span style="font-family:'Roboto Slab';font-size: 21px;font-weight: 200;letter-spacing: 2px">MILLION RAISED</span>
                    </div>
                    <div class="col-md-4" style="text-align:center">
                        <h1 style="font-family:Montserrat;font-size:5em; font-weight: 200">$4B</h1>
                        <span style="font-family:'Roboto Slab';font-size: 21px;font-weight: 200; letter-spacing: 2px">BILLION VALUATION</span>
                    </div>
                </div>
                <a class="page-scroll" href="#difference">
                    <img src="/img/down_arrow@2x.png" width=40>
                </a>
            </div>
    </section>
    <br class="visible-xs-block">
    <div class="container visible-xs-block">
        <div class="col-md-4" style="text-align:center">
            <h1 style="font-family:Montserrat;font-size:5em; font-weight: 200">120+</h1>
            <span style="font-family:'Roboto Slab';font-size: 21px;font-weight: 200;letter-spacing: 2px">STARTUPS</span>
        </div>
            <br class="visible-xs-block">
        <div class="col-md-4" style="text-align:center">
            <h1 style="font-family:Montserrat;font-size:5em; font-weight: 200">$400M+</h1>
            <span style="font-family:'Roboto Slab';font-size: 21px;font-weight: 200;letter-spacing: 2px">MILLION RAISED</span>
        </div>
            <br class="visible-xs-block">
        <div class="col-md-4" style="text-align:center">
            <h1 style="font-family:Montserrat;font-size:5em; font-weight: 200">$4B</h1>
            <span style="font-family:'Roboto Slab';font-size: 21px;font-weight: 200; letter-spacing: 2px">BILLION VALUATION</span>
        </div>
    </div>
    <section id="difference" class="difference-section">
        <div class="container-fluid difference-blk">
            <div class="row diffblock">
                <div class="differenceTitle">
                    <h2>The BootUP Difference</h2>
                </div>

                <div class="row" role="boxes">
                  <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="box">
                        <img style="width: 60px;margin-top:-3px" src="img/ecosystem_icon@2x.png" alt="box1">
                        <h2 class="title" style="font-size: 23px;">Total Ecosystem</h2>
                        <p class="text box1t">Based in Silicon Valley, BootUP is a complete ecosystem connecting high-potential startup companies from all over the world with investors, corporates, mentors and talent to generate growth and scale up operations.</p>
                    </div>
                 </div>

                 <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="box">
                        <img style="width: 60px;" src="img/global_icon@2x.png" alt="box2">
                        <h2 class="title">Global Reach</h2>
                        <p class="text box2t">BootUP has global reach with high
                        quality partners across Europe, the
                        Middle East, Asia, Australia and
                        Latin America to provide deal-flow,
                        access talent and tailor go-to-market
                        approaches for BootUP startups.</p>
                    </div>
                 </div>

                <div class="clearfix visible-xs-block"></div>
                 
                 <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="box">
                        <img style="width: 60px;" src="img/traction_icon@2x.png" alt="box3">
                        <h2 class="title">Traction-Focus</h2>
                        <p class="text" style="font-size: 13px;text-align: center; color: #818181;padding: 5px 10px 10px 10px;">Unlike many Silicon Valley accelerators, BootUP is not a standard 3-month mass production pitch training program followed by a Demo Day to investors. Instead BootUP focuses on helping more
                        mature startups gain and sustain traction over 12-24 months to generate tangible results.</p>
                    </div>
                 </div>
                 <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="box">
                        <img style="width: 60px;" src="img/social_icon@2x.png" alt="box4">
                        <h2 class="title">Social Club</h2>
                        <p class="text">The Cuckoo’s Nest Club – Silicon Valley’s premier social club connecting founders, investors and corporate executives is located at BootUP. This is a vibrant community, with lots of activities, connecting high-caliber people in a relaxed social setting.</p>
                    </div>
                 </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Space Section -->
    <section id="space" class="space-section">
        <div class="container-fluid space-blk">
                <div class="col-md-4">
                    <div class="clearfix spacediv textoverdiv">
                        <h2 class="headerspace"><span class="span">BootUP<br></span>SPACE</h2>
                        <p class="lead">BootUP’s co-working space is located in Menlo Park at the heart of Silicon Valley providing easy access to venture capital funds, leading tech companies and a vibrant startup community.</p>
                        <a href="space.php"><button class="button learnmore">LEARN MORE</button></a>
                    </div>
                </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="events-section">
        <div class="container-fluid events-blk">
                <div class="col-md-4 right" style="float: right;">
                    <div class="clearfix eventsdiv textoverdiv">
                        <h2 class="headerspace"><span class="span">BootUP<br></span>EVENTS</h2>
                        <p class="lead">Leverages BootUP’s excellent facilities in Menlo Park to host a wide variety of events in an informal setting with access to an attractive garden space.</p>
                        <a href="events.php"><button class="button learnmore">LEARN MORE</button></a>
                    </div>
                </div>
        </div>
    </section>

    <!-- Experts Section -->
    <section id="experts" class="experts-section">
        <div class="container-fluid experts-blk">
                <div class="col-md-4">
                    <div class="clearfix expertsdiv textoverdiv">
                        <h2 class="headerspace"><span class="span">BootUP<br></span>EXPERTS</h2>
                        <p class="lead">An 800+ strong expert / mentor network providing guidance to BootUP startups as well as program content for BootUP Academy.</p>
                        <a href="experts.php"><button class="button learnmore">LEARN MORE</button></a>
                    </div>
                </div>
        </div>
    </section>

        <!-- Club Section -->
    <section id="club" class="club-section">
        <div class="container-fluid club-blk">
                <div class="col-md-4 right" style="float: right;">
                    <div class="clearfix clubdiv textoverdiv">
                        <h2 class="headerspace">CUCKOO&#39;S<br>NEST</h2>
                        <p class="lead">Silicon Valley’s private entrepreneur's club connecting CEOs, investors and corporate executives in an informal social setting.</p>
                        <a href="http://www.cuckoosnestclub.com" target="_blank"><button class="button learnmore">VISIT</button></a>
                    </div>
            </div>
        </div>
    </section>

            <!-- Accelorator Section -->
    <section id="accelorator" class="accelorator-section">
        <div class="container-fluid accelorator-blk">
                <div class="col-md-4">
                    <div class="clearfix acceloratordiv textoverdiv">
                        <h2 class="headerspace"><span class="span">BootUP<br></span>ACCELERATOR</h2>
                        <p class="lead">Provides general, as well as a variety of industry-specific, acceleration programs.</p>
                        <a href="accelerator.php"><button class="button learnmore">LEARN MORE</button></a>
                    </div>
                </div>
        </div>
    </section>

            <!-- Corporate Section -->
    <section id="corporate" class="corporate-section">
        <div class="container-fluid corporate-blk">
                <div class="col-md-4 right" style="float: right;">
                    <div class="clearfix corporatediv textoverdiv">
                        <h2 class="headerspace"><span class="span">BootUP<br></span>CORPORATE</h2>
                        <p class="lead">Offers a variety of programs aimed at accelerating corporate innovation, corporate venturing and startup collaboration.</p>
                        <a href="corporate.php"><button class="button learnmore">LEARN MORE</button></a>
                    </div>
                </div>
        </div>
    </section>

            <!-- Capital Section -->
    <section id="capital" class="capital-section">
        <div class="container-fluid capital-blk">
                <div class="col-md-4">
                    <div class="clearfix capitaldiv textoverdiv">
                        <h2 class="headerspace"><span class="span">BootUP<br></span>CAPITAL</h2>
                        <p class="lead">Premier venture capital fund focused on top global startups with world-class teams.
                        <!--A premier venture capital fund that invests in the seed and Series A rounds of top global start-ups across all emerging tech categories.--></p>
                        <a href="capital.php"><button class="button learnmore">LEARN MORE</button></a>
                    </div>
                </div>
        </div>
    </section>

            <!-- Angels Section -->
    <section id="angels" class="angels-section">
        <div class="container-fluid angels-blk">
                <div class="col-md-4 right" style="float: right;">
                    <div class="clearfix angelsdiv textoverdiv">
                        <h2 class="headerspace"><span class="span">BootUP<br></span>ANGELS</h2>
                        <p class="lead">Provides highly-selective opportunities for business angels to invest in the dealflow sourced through BootUP’s global network.</p>
                        <a href="angels.php"><button class="button learnmore">LEARN MORE</button></a>
                    </div>
                </div>
        </div>
    </section>

            <!-- Academy Section -->
    <section id="academy" class="academy-section">
        <div class="container-fluid academy-blk">
                <div class="col-md-4">
                    <div class="clearfix academydiv textoverdiv">
                        <h2 class="headerspace"><span class="span">BootUP<br></span>ACADEMY</h2>
                        <p class="lead">Delivers open, as well as customized, entrepreneurship programs tailored to the needs of entrepreneurs, investors, corporate executives, government officials, university faculty and students.</p>
                        <a href="academy.php"><button class="button learnmore">LEARN MORE</button></a>
                    </div>
                </div>
        </div>
    </section>

<!-- <div class="banner">
    <div class="container-fluid">
        <div class="row">
            <form id="form" onsubmit="return false;">
                <div style="text-align: center;">
                <h4 style="text-align: center; color: white;text-shadow:none;font-weight: 400; font-family:'Montserrat'; margin-bottom: 0px;">Sign Up For Our Newsletter</h4>
                <br>
                <input name="email" type="email" placeholder="Email" style="width:320px; color: #4c4c4c !important; border: none; padding: 4px; font-weight: 300;">
                <br class="visible-xs-block">
                <br class="visible-xs-block">
                <input type="submit" class="submitbtn" value="SUBSCRIBE" onclick="registr()" style="border-style: solid;border-width: thin; padding: 7px 30px; margin: 6px 10px; font-weight: 500;"></div>
            </form>

            <div id="ms">
                <div id="sending" style="display:none;text-align: center;color: white;font-size: 21px;font-weight: bold;padding: 5px;background: rgba(0,0,0,0.7);width: 150px;margin: 0 auto;border-radius: 4px;margin-top: 50px;margin-bottom: 50px;">
                    Sending...
                </div>
                <div id="thankyou" style="display:none;text-align: center;color: white;font-size: 21px;font-weight: bold;padding: 5px;background: rgba(0,0,0,0.7);width: 325px;margin: 0 auto;border-radius: 4px;margin-top: 40px;margin-bottom: 40px;">
                    Thank you for your interest!
                </div>
            </div> 
        </div>
    </div>
</div> -->

<?PHP include 'footer.php';?>

<script type="text/javascript">
    $("#form").submit(function (e) {
        e.preventDefault();
        registr();
    });

    function registr() {
        var form_data = $("#form").serialize(); 
            $.ajax({
                type: "POST", 
                url: "PHPMailer/homepage.php",
                data: form_data,
                beforeSend: function () { 
                    $("#error").css("display", "none");
                    $("#sending").css("display", "block");
                    $("#form").css("display", "none");
                },
                success: function () {
                    $("#sending").css("display", "none");
                    $("#error").css("display", "none");
                    $("#thankyou").css("display", "block");
                }
            });
//        } else {
//            $("#error").css("display", "block");
//        }
    }
</script>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script>
        //$(function() {
            $(window).on('resize',function() {
                $('.intro-section').css('height', $(window).height() + "px");
                console.log($('.intro-section'));
            });
            $(window).resize();
        //});
    </script>
</body>

</html>
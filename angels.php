<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BootUP | Angels</title>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</head>

<body>
<?php include 'menu.php'; ?>
<div class="container-fluid" style="margin:0;padding:0">
    <div class="content-section-experts">
<!--        <a href="#contact-form">-->
            <div id="button-form" class="circle-angels">JOIN US</div>
<!--        </a>-->
    </div>
    <center>
<div class="angels">
    <div class="block1">
        <div class="ball">
            <div class="title">Angels</div>
            <div class="desc" style="font-size: 20px;">
                <!-- BootUP Angels work closely with all areas
                in the BootUP ecosystem to create a
                preeminent global deal flow for our angel
                investor members. This includes
                companies using BootUP’s co-working
                space, participating in acceleration
                programs and portfolio companies of
                BootUP Capital. Regular pitch events take
                place at BootUP in Menlo Park and
                BootUP’s business angels also benefit from
                membership in the Cuckoo’s Nest
                entrepreneurship club. -->
                Global Deal Flows<br>
                Complimentary Cuckoo's Nest Membership<br>
                Community


            </div>
        </div>
    </div>
    <div class="block2">
        <div class="container">
            <div class="row" style="text-align: center;padding-top:100px; ">
                <div class="col-sm-offset-1 col-sm-3">
                    <img src="img/siliconvalley_icon@2x.png">
                    <div style="padding-top:15px;">SILICON VALLEY</div>
                </div>
                <div class="col-sm-offset-4 col-sm-3">
                    <img src="img/global_icon@2x.png.png">
                    <div style="padding-top: 15px;">GLOBAL</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="text" style="padding-bottom: 0;padding-left:5%;padding-right: 5%;">
                    We are interested in expanding our pool of angel investors and welcome you to complete the form
                    below as an expression of interest. Venture investing in risky so we are looking for accredited
                    investors with the ability and mindset to tolerate the risks involved. We are looking for active business
                    angels willing to invest both money and time in the BootUP Angel community and we especially
                    welcome members with domain expertise and deep contacts within one or more vertical industry
                    areas. To join BootUP Angels, your primary interest should be investing rather than to offer services to
                    startup companies. As a member you can be based anywhere in the world
                </div>
                <div id="contact-form" style="padding-bottom: 108px;"></div>
            </div>
        </div>
    </div>
        <div class="block3">
        <div class="title">Express your interest now!</div>
        <form id="form">
            <div class="form">
                <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Name*" name="name">
                <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Location" name="location">
                <input style="margin-bottom: 25px;" class="input" type="email" placeholder="Email*" name="email">
                <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Phone" name="phone">
                <input style="margin-bottom: 25px;" class="input" type="text" placeholder="LinkedIn profile url" name="linkedin">
                <input style="margin-bottom: 25px;" class="input" type="text" placeholder="AngelList profile url" name="angel">
                <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Personal angel portfolio" name="personal">
                <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Angel investments during the past 2 years (company & amount)" name="angel-during">
                <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Membership of any other angel group" name="membership">
                <input style="margin-bottom: 25px;" class="input" type="text" placeholder="Sector expertise" name="sector">
                <div style="text-align: left;padding-bottom: 10px;">
                    <div style="display: inline-block;margin-right: 20px;">Are you an accredited investor?</div>
                    <label id="yes" for="toggle-1" class="">YES</label>
                    <input type="radio" id="toggle-1" value="YES" name="radio">
                    <label id="no" for="toggle-2" class="">NO</label>
                    <input type="radio" id="toggle-2" value="NO" name="radio">
                </div>
                <textarea name="message" id="message" class="txtarea" tabindex="4" placeholder="How did you hear about us?" required></textarea>
            </div>
            <div style="text-align: center;">
                <input type="submit" class="submit" value="Submit" onclick="registr()">
            </div>
        </form>
        <div id="ms">
            <div id="sending" style="display:none;text-align: center;color: white;font-size: 21px;font-weight: bold;padding: 5px;background: rgba(0,0,0,0.7);width: 150px;margin: 0 auto;border-radius: 4px;margin-top: 50px;margin-bottom: 50px;">
                Sending...
            </div>
            <div id="thankyou" style="display:none;text-align: center;color: white;font-size: 21px;font-weight: bold;padding: 5px;background: rgba(0,0,0,0.7);width: 750px;margin: 0 auto;border-radius: 4px;margin-top: 40px;margin-bottom: 40px;">
                Your message has been sent.<br>Thank you for your interest. You should be receiving a reply soon!
            </div>
        </div>
    </div>
</div>
<?PHP include 'footer.php'; ?>

<script>
    $('#button-form').click(function() {
        $('html, body').animate({
            scrollTop: $("#contact-form").offset().top
        }, 1000);
    });
</script>

<script>
    $( "#toggle-1" ).click(function() {
        $('#yes').toggleClass("label-active");
        $('#no').removeClass("label-active");
    });
    $( "#toggle-2" ).click(function() {
        $('#no').toggleClass("label-active");
        $('#yes').removeClass("label-active");
    });
</script>
<script type="text/javascript">
    $("#form").submit(function (e) {
        e.preventDefault();
        registr();
    });

    function registr() {
        var form_data = $("#form").serialize(); //form data
        $.ajax({
            type: "POST", //dispatch method
            url: "PHPMailer/angels.php", //php mailer method
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
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

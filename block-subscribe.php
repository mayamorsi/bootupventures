<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Academy</title>

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

<div id="block-subscribe" class="container" style="height: 50px;background: #393939;color: white;border-top: 1px solid black;text-align: center;width: 100%;">
    <div id="content-subs">
        <div style="display: inline-block;padding-right: 2%;">TAP INTO Silicon Valley’s Serial Entrepreneurial Network</div>
        <div style="display: inline-block;">
            <form id="form-subs" onsubmit="return false;">
                <input name="email" type="email" placeholder="Email" style="width:320px; color: #4c4c4c !important; border: none; padding: 4px; font-weight: 300;">
                <input type="submit" class="submitbtn" value="SUBSCRIBE" onclick="subs()" style="border-style: solid;border-width: thin; padding: 7px 30px; margin: 6px 10px; font-weight: 500;">
            </form>
        </div>
        <div style="text-align: end;display: inline-block;padding-left: 5%;color:#050505;cursor:pointer;" id="close">X</div>
    </div>
    <div id="ms-subs">
        <div id="sending-subs" style="display:none;text-align: center;color: white;font-size: 21px;font-weight: bold;padding: 2px;background: rgba(0,0,0,0.7);width: 150px;margin: 7px auto;border-radius: 4px;">
            Sending...
        </div>
        <div id="thankyou-subs" style="display:none;text-align: center;color: white;font-size: 21px;font-weight: bold;padding: 2px;background: rgba(0,0,0,0.7);width: 325px;margin: 7px auto;border-radius: 4px;">
            Thank you for your interest!
        </div>
    </div>
</div>

<script>
    $( "#close" ).click(function() {
        $('#block-subscribe').css("display","none");
    });
</script>
<script type="text/javascript">
    $("#form").submit(function (e) {
        e.preventDefault();
        subs();
    });

    function subs() {
        var form_data = $("#form-subs").serialize();
        $.ajax({
            type: "POST",
            url: "PHPMailer/homepage.php",
            data: form_data,
            beforeSend: function () {
                $("#sending-subs").css("display", "block");
                $("#content-subs").css("display", "none");
            },
            success: function () {
                $("#sending-subs").css("display", "none");
                $("#thankyou-subs").css("display", "block");
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

</body>

</html>

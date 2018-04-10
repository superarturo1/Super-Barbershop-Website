<?php include "header.php"; ?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact Us Form</title>
	<link href="CSS/contact_us_form.css" rel="stylesheet" type="text/css" />
	<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="JS/lettering.js"></script> 
	<script src="JS/modernizr-1.5.js"></script>

</head>


<h1 class="fancy_title">Contact Us</h1> <br>
	<div class="main">
		<div class="info">Give Your Feedback!</div>
		<form action="mail_handler.php" method="post" name="form" class="form-box"">
		
			<label for="name">Name</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
			<label for="email">Email ID</label><br>
			<input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
			<label for="phone">Phone</label><br>
			<input type="tel" name="phone" class="inp" placeholder="Enter Your Phone" required><br>
			<label for="message">Message</label><br>
			<textarea name="msg" id="msg-box" placeholder="Enter Your Message Here..."></textarea><br>
			<input type="submit" name="submit" value="Send" class="sub-btn">
		</form>
		
	</div>

<?php include "footer.php"; ?>


<script>

$(document).ready(function() {
$(".fancy_title").lettering();
});
</script>


<!--Animated Menu -->
<script>

var sse50 = function () {
    return {
        initMenu: function () {
            var m = document.getElementById('sses50');
            if (!m) return;
            m.style.width = m.getElementsByTagName("ul")[0].offsetWidth + 1 + "px";
            var url = document.location.href.toLowerCase();
            var a = m.getElementsByTagName("a");
            var k = -1;
            var l = -1;
            var hasEnd = 0; 
            for (var i = 0; i < a.length; i++) {
                if (a[i].href && url.indexOf(a[i].href.toLowerCase()) != -1 && a[i].href.length > l) {
                    k = i;
                    l = a[i].href.length;
                }
                if (a[i].className == "end")
                    hasEnd = 1;
            }
            if (k == -1 && /:\/\/(?:www\.)?[^.\/]+?\.[^.\/]+\/?$/.test) {
                for (var i = 0; i < a.length; i++) {
                    if (a[i].getAttribute("maptopuredomain") == "true") {
                        k = i;
                        break;
                    }
                }
                if (k == -1 && a[0].getAttribute("maptopuredomain") != "false")
                    k = 0;
            }
            if (k > -1) {
                a[k].className = 'current';
            }
            l = a.length;
            if (hasEnd) l--;
            for (i = 0; i < l; i++) {
                a[i].onmouseover = function () {
                    for (j = 0; j < l; j++) {
                        a[j].className = '';
                    }
                    this.className = 'current';
                };
                a[i].onmouseout = function () {
                    for (j = 0; j < l; j++) {
                        a[j].className = '';
                        if (k > -1) {
                            a[k].className = 'current';
                        }
                    }
                };
            }
        }
    };
} ();

if (window.addEventListener) {
    window.addEventListener("load", sse50.initMenu, false);
}
else if (window.attachEvent) {
    window.attachEvent("onload", sse50.initMenu);
}
else {
    window["onload"] = sse50.initMenu;
}
</script>










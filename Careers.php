<?php include "header.php"; ?>

<meta charset="UTF-8" />    
<title>Careers</title> </head>
<script src="JS/modernizr-1.5.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script src="JS/lettering.js"></script>
<script src="JS/Careers.js"></script>
<link href="CSS/CareersStyles.css" rel="stylesheet" type="text/css" />
</head>



<h1 class="fancy_title">Careers</h1>
<img id ="barberandchair" src="Images/Barber&Chair.jpg"  alt="Barber&Chair" width = "900" height = "600"/><br><br>
<h2>Employment Form Download</h2><br>
<p>Please feel free to download the form below for employment consideration.
When you are ready for personal interview, contact Mr. Charles Washington (605) 555-8741.</p><br>
<p><a href="Sam's_Employm_App.doc">Sam’s Employment Form</a></p><br> 

<?php include "footer.php"; ?>




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



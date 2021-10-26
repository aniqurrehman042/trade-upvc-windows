<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="trade upvc windows, doors, windows, upvc doors, upvc windows, double glazed doors, double glazing, double glazed windows, Alloway, glasgow" />
    <meta name="description" content="Double Glazed Doors, Windows and Blinds, Alloway, Glasgow." />
    <title>Trade uPvc Windows</title>
    <script language="javascript" type="text/javascript" src="../scripts/analytics.js"></script>
    <script src="https://kit.fontawesome.com/ab4d3c2db6.js" crossorigin="anonymous"></script>
    <link href="../style.css" rel="stylesheet" type="text/css" />
    <meta name="google-site-verification" content="VQV4apw0B2S0WD4bLLrdpec3mhXOI5KJHWGpnCoMlXw" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {
            "message": "This website uses cookies to ensure you get the best experience on our website",
            "dismiss": "Got it!",
            "learnMore": "More info",
            "link": "http://www.lowesroadsurfacing.co.uk/privacy.html",
            "theme": "light-bottom"
        };
    </script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->


</head>
<style>
    body {
        background-repeat: repeat-x;
        margin: 0;
        background-attachment: scroll;
        background-position: center top;
        background-color: #ffffff;
    }
</style>

<body>

    <?php
    $mailResponse = 'no-form';
    if (isset($_POST['your-name'])) {
        $msg = "Name: " . $_POST['your-name']
            . "\nPhone: " . $_POST['your-number']
            . "\nEmail: " . $_POST['your-email']
            . "\nPostal Code: " . $_POST['postal-code']
            . "\nMessage: " . $_POST['your-message']
            . "\nProduct: " . $_POST['products'];
        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg, 70);

        // send email
        $mailResponse = mail("info@tradeupvcwindows.co.uk", "Trade uPvc Quote Form", $msg, "From: info@tradeupvcwindows.co.uk");
        $mailResponse = mail("aniqurrehman042@gmail.com", "Trade uPvc Quote Form", $msg, "From: info@tradeupvcwindows.co.uk");
    }

    ?>

    <div id="mainholder">

        <div id="top_image">
            <div class="breadcrumb" id="contact-top">
                <img src="../img/logo.png" width="280" alt="" />
                <div class="top-right-contact">
                    <span class="header-contact">Get A Quote</span><br>
                    <a class="header-contact" href="tel:08000141302">0800 0141 302</a>
                </div>
            </div>
        </div>
        <div id="navigation">
            <div class="nav-button"><a href="/">HOME</a></div>
            <div class="nav-button"><a href="/services">SERVICES</a></div>
            <div class="nav-button"><a href="/doors">DOORS</a></div>
            <div class="nav-button"><a href="/windows">WINDOWS</a></div>
            <div class="nav-button"><a href="/blinds">BLINDS</a></div>
            <div class="nav-button"><a href="/roofing">ROOFING</a></div>
            <div class="nav-button"><a href="/previous-work">PREVIOUS WORK</a></div>
            <div class="nav-button"><a href="/about">ABOUT US</a></div>
            <div class="nav-button"><a href="/testimonials">TESTIMONIALS</a></div>
            <div class="nav-button"><a href="/contact">CONTACT</a></div>
        </div>
        <img class="banner" src="../img/about-us-banner.webp" alt="Windows, Doors And Blinds">
        <div class="content-area-invis-product-category">
            <div class="content-full-width-central-product-category">
                <div class="row">
                    <div class="col-8">
                        <div style="margin-top: auto;margin-bottom: auto;">
                            <h2 class="page-title">Contact Us Today</h2>
                            <h2 class="page-title text-blue text-small">Trade uPvc Windows</h2>
                            <h2 class="text-blue"><span style="color: #373737">CALL US AT - </span>0800 0141 302</h2>
                            <h2 class="text-blue"><span style="color: #373737">EMAIL US AT -
                                </span>info@tradeupvcwindows.co.uk
                            </h2>
                            <h2 class="text-blue"><span style="color: #373737">Address - </span>15 Carlibar Road, Barrhead,
                                G781AA</h2>
                            <p>
                                Choose a Windows,Doors,Blinds installation service that's quick and affordable, with no
                                compromise
                                on quality. From German made Quality, we're your local uPVC trade windows services in
                                central
                                Scotland.
                            </p>
                        </div>
                    </div>
                    <div class="col-4 p-1">
                        <form action="/doors" method="post">
                            <div class="form-style-6 home-page-form-1">
                                <h2 style="text-align: center; margin-bottom: 0px; margin-top: 0px; color: #1b155f; font-weight: 900;">
                                    Get A Quote</h2>
                                <p style="text-align: center; color: #000000; font-weight: bold;">Free no-obligation
                                    quote &amp; Trusted specialists</p>
                                <p>
                                    <span class="wpcf7-form-control-wrap products">
                                        <select name="products" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                            <option value="Select Product">Select Product</option>
                                            <option value="Doors">Doors</option>
                                            <option value="Windows">Windows</option>
                                            <option value="Blinds">Blinds</option>
                                            <option value="Roofing">Roofing</option>
                                        </select>
                                    </span><br>
                                    <span class="wpcf7-form-control-wrap your-name"><input required type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name"></span><br>
                                    <span class="wpcf7-form-control-wrap your-number"><input required type="text" name="your-number" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Number"></span><br>
                                    <span class="wpcf7-form-control-wrap your-email"><input required type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email"></span><br>
                                    <span class="wpcf7-form-control-wrap postal-code"><input required type="text" name="postal-code" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Postal Code"></span><br>
                                    <span class="wpcf7-form-control-wrap your-message"><textarea required name="your-message" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea></span><br>
                                </p>
                                <input type="submit" value="Quote Me">
                                <?php
                                if (gettype($mailResponse) != "string") {
                                    if ($mailResponse) { ?>
                                        <span style="color:blue;font-size:0.8rem">Message sent successfully.</span>
                                    <?php
                                    } else { ?>
                                        <span style="color:red;font-size:0.8rem">Message sending failed.</span>
                                <?php }
                                }
                                ?>
                                <p></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="content-full-width-border"></div>
            </div>
        </div>
        <div id="footer">
            <div id="footer-bottom">
                <div id="footer-copyright">© Trade uPvc Windows | 15 Carlibar Road, Barrhead, G781AA | <a style="color:#828282" href="privacy.html">Privacy &amp; Cookies</a> | <strong>Tel: 0800 0141
                        302</strong></div>
            </div>
        </div>

    </div>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '549844899675451');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=549844899675451&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
</body>

</html>
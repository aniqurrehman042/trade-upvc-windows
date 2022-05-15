<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="trade upvc windows, doors, windows, upvc doors, upvc windows, double glazed doors, double glazing, double glazed windows, Alloway, glasgow" />
    <meta name="description" content="Double Glazed Doors, Windows and Blinds, Alloway, Glasgow." />
    <title>Trade uPvc Home Improvements</title>
    <script src="https://kit.fontawesome.com/ab4d3c2db6.js" crossorigin="anonymous"></script>
    <link href="../style.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
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
                    <a class="header-contact" href="tel:08002229042">0800 2229 042</a>
                </div>
            </div>
        </div>
        <div id="navigation">
            <div class="nav-button"><a href="/">HOME</a></div>
            <div class="nav-button"><a href="/services">SERVICES</a></div>
            <div class="nav-button"><a href="/composite-doors">COMPOSITE DOORS</a></div>
            <div class="nav-button"><a href="/doors">DOORS</a></div>
            <div class="nav-button"><a href="/windows">WINDOWS</a></div>
            <div class="nav-button"><a href="/blinds">BLINDS</a></div>
            <div class="nav-button"><a href="/roofing">ROOFING</a></div>
            <div class="nav-button"><a href="/previous-work">PREVIOUS WORK</a></div>
            <div class="nav-button"><a href="/about">ABOUT US</a></div>
            <div class="nav-button"><a href="/testimonials">TESTIMONIALS</a></div>
            <div class="nav-button"><a href="/contact">CONTACT</a></div>
        </div>
        <img class="banner" src="../img/brown-tiles-roofing.jpg" alt="Windows, Doors And Blinds">
        <div class="content-area-invis-product-category">
            <div class="content-full-width-central-product-category">
                <div class="row">
                    <div class="col-6 p-1">
                        <h2 class="page-title text-blue">Trade uPvc Home Improvements Roofing Services</h2>
                        <p>
                            Here at Trade uPVC Windows and Doors, we specialise in
                            roofing services and in the installation on brand new
                            roofing in Glasgow and throughout Scotland. We also offer
                            a wide range of roofing repairs. We cover all kinds of
                            work from commercial roofing to domestic roofing services.
                            We are one of Glasgow’s finest roofing companies and
                            experience in roofing and their services, cladding, and guttering.
                        </p>
                        <p>
                            Guttering is an important aspect of your property, it
                            prevents water entering into your home and property
                            by diverting it away from the exterior walls and
                            foundations. This can lead to dampness and mould-growth.
                            Guttering should always be kept up to date, older and
                            iron-made is more prone to degradation, and dampness
                            and should be replaced by aluminium or rust proof gutters.
                            We are experts in the replacement and repair of guttering.
                        </p>
                    </div>
                    <div class="col-6 p-1">
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
                <div class="bg-light-gray py-1">
                    <h3 class="font-2">Our Amazing Offers</h3>
                    <div class="row p-1">
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/bargeboards.jpg" alt="Backyard Bi-Fold Door">
                                    <div class="image-card-info">
                                        <h3>Bargeboards</h3>
                                        <p>
                                            Complete the exterior of your home with the added
                                            strength, protection and aesthetics of new uPVC
                                            replacement bargeboards. Long, straight boards fitted
                                            in an inverted V-shape to the gable end of the roof of
                                            your property, bargeboards protect the exposed ends of
                                            the roof rafters.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/cladding.jpg" alt="Backyard Bi-Fold Door">
                                    <div class="image-card-info">
                                        <h3>Cladding</h3>
                                        <p>
                                            Transform the appearance of your home with exterior
                                            uPVC cladding. Designed to protect and refresh tired
                                            brickwork, exterior cladding is a low maintenance and
                                            weather resistant solution to replace rotten timber
                                            cladding or add a contemporary finish to a new build
                                            property.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/fascias-and-soffits.jpg" alt="Backyard Bi-Fold Door">
                                    <div class="image-card-info">
                                        <h3>Fascia's And Soffits</h3>
                                        <p>
                                            Upgrade the exterior of your home and protect it
                                            from the elements with quality uPVC fascia’s
                                            and soffits from Anglian. Positioned where the
                                            roof meets the external walls, our affordable
                                            fascia boards and vented soffits improve airflow
                                            in your home and shield its outer walls from mold
                                            and mildew caused by rainfall.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/guttering.jpg" alt="Backyard Bi-Fold Door">
                                    <div class="image-card-info">
                                        <h3>Guttering</h3>
                                        <p>
                                            Roof guttering and downpipes perform a crucial
                                            function to direct rainwater away from your
                                            home and protect it from damage caused by
                                            water ingress. Enhance the exterior of your
                                            home with by replacing your existing plastic guttering.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-full-width-border"></div>
                <div class="flex flex-vertical">
                    <div class="flex">
                        <i class="fas fa-trophy feature-icons flex-1"></i>
                        <i class="fas fa-thumbs-up feature-icons flex-1"></i>
                        <i class="fas fa-tag feature-icons flex-1"></i>
                    </div>
                    <div class="flex">
                        <h2 class="feature-icon-text flex-1"><strong>Upto 20 years<br />
                                Guarantee</strong></h2>
                        <h2 class="feature-icon-text flex-1"><strong>Rated the best in<br />
                                Glasgow</strong></h2>
                        <h2 class="feature-icon-text flex-1"><strong>Best price &amp; <br />
                                (no sales gimmicks)</strong></h2>
                    </div>
                </div>
                <div class="content-full-width-border"></div>
            </div>
        </div>
        <div id="footer">
            <img class="footer-logos" src="/img/footer-logos.webp">
            <div id="footer-bottom">
                <div id="footer-copyright">© Trade uPvc Home Improvements | 15 Carlibar Road, Barrhead, G781AA | <a style="color:#828282" href="privacy.html">Privacy &amp; Cookies</a> | <strong>Tel: 0800 2229
                        042</strong></div>
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

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W3QLMLFDFF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W3QLMLFDFF');
</script>
</body>

</html>
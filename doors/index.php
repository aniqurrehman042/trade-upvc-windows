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
        <img class="banner" src="../img/white-upvc-front-door-on-a-house.jpg" alt="Windows, Doors And Blinds">
        <div class="content-area-invis-product-category">
            <div class="content-full-width-central-product-category">
                <div class="row">
                    <div class="col-6 p-1">
                        <h2 class="page-title text-blue">Trade uPvc Home Improvements Doors Services</h2>
                        <p>
                            We specialize in uPVC doors in Glasgow and across Scotland. Our range of high-quality
                            doors are not just best but they also offer the latest in security technology to keep you,
                            your family and your belongings, safe and secure.
                        </p>
                        <p>
                            Our wide variety of uPVC doors all across Scotland including residential front and back doors,
                            french doors, patio doors, bi-fold doors and even uPVC doors gives our customers lots of options.
                        </p>
                        <p>
                            Home Pick has an extensive range of interior door designs, styles and locking mechanisms and
                            security. Our door experts understand that there is no ‘one size fits all’ when it comes to doors
                            and windows, which is why we don’t offer a single solution or a set of packages; instead we work
                            with our customers to provide them with the perfect product for their individual needs, tastes,
                            and budgets. Our doors are secured by design, we do not do hard selling and our doors have multi
                            point locking systems. We offer 10 years of guarantee on our uPVC doors. Contact us today to get a
                            free quote and buy uPVC doors in Glasgow.
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
                                    <img src="/img/backyard-bifolddoor.png" alt="Backyard Bi-Fold Door">
                                    <div class="image-card-info">
                                        <h3>Bi-Fold Doors</h3>
                                        <p>
                                            Their strong, high security, features combined with easy maintenance, thermal
                                            efficiency, and a long-life have made bi-fold doors an extremely popular
                                            choice among our customers.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/black-french-door-with-white-blinds.png" alt="Backyard Bi-Fold Door">
                                    <div class="image-card-info">
                                        <h3>French Doors</h3>
                                        <p>
                                            They can create an unobtrusive opening to a garden or patio with minimal obstruction,
                                            allowing you to enjoy a better view of your outdoor space all year round. French
                                            doors can also make an ideal partition wall inside your home, into a conservatory
                                            for instance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/white-backyard-patio-door.png" alt="Backyard Bi-Fold Door">
                                    <div class="image-card-info">
                                        <h3>Sliding Patio Doors</h3>
                                        <p>
                                            Anti-jacking systems, four point hook locks, and reinforced frames are delivered
                                            within easy glide doors and thin frames to give you an uninterrupted view of your
                                            garden. Our master slide patio doors are designed to glide open effortlessly, in a
                                            smooth, low friction motion.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/white-upvc-door-with-white-frame.png" alt="Backyard Bi-Fold Door">
                                    <div class="image-card-info">
                                        <h3>uPvc Doors</h3>
                                        <p>
                                            We specialize in uPVC doors in Glasgow and across Scotland. Our range of high-quality
                                            doors are not just best but they also offer the latest in security technology to keep
                                            you, your family and your belongings, safe and secure.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row pb-1 px-1">
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/white-comp-door-with-offwhite-frame.png" alt="Backyard Bi-Fold Door">
                                    <div class="image-card-info">
                                        <h3>Composite Doors</h3>
                                        <p>
                                            We offer another type of doors also including but not limited to strong and secure
                                            composite doors. Composite doors look like solid timber doors but have the added
                                            benefit of a rigid, high-density core to make them our safest and most energy
                                            efficient door range.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02"></div>
                        <div class="col-3 p-02"></div>
                        <div class="col-3 p-02"></div>
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
            <div id="footer-bottom">
                <div id="footer-copyright">© Trade uPvc Home Improvements | 15 Carlibar Road, Barrhead, G781AA | <a style="color:#828282" href="privacy.html">Privacy &amp; Cookies</a> | <strong>Tel: 0800 0141
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
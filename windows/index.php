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
        <img class="banner" src="../img/windowsbanner.png" alt="Windows, Doors And Blinds">
        <div class="content-area-invis-product-category">
            <div class="content-full-width-central-product-category">
                <div class="row">
                    <div class="col-6 p-1">
                        <h2 class="page-title text-blue">Trade uPvc Home Improvements Doors Services</h2>
                        <p>
                            Transform your home with new uPVC windows installations. You can choose from a
                            wide selection of styles and features to help you create the perfect look for
                            your home.
                        </p>
                        <p>
                            For windows, advance 70 system offers superb qualities for exceptional thermal
                            performance and stunning aesthetics. This innovative system is available as a
                            chambered or sculptured design and can be incorporated into new builds or used
                            to replace existing glazing. Both the chambered and sculptured profiles offer
                            timeless elegance and style while providing great strength and hi-flow drainage
                            systems to remove the issues associated with the adverse weather conditions
                            in even the most extreme Scottish winters! Our five chamber uPVC double glazing
                            system is designed to achieve high thermal efficiency standards that already
                            surpass current government legislative requirements. It can be manufactured
                            internally, or externally glazed windows.
                        </p>
                        <p>
                            We do not believe in hard selling and our locks are secure by design. We offer
                            10 years guarantee for our A rated bow windows. Contact us today to get a free
                            quote for our windows.
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
                                    <img src="/img/baybow.png" alt="Bay Bow Window">
                                    <div class="image-card-info">
                                        <h3>Bay Bow Windows</h3>
                                        <p>
                                            Transform your home with new uPVC bow or bay
                                            windows installations from Home Pick Scotland.
                                            You can choose from a wide selection of styles
                                            and features to help you create the perfect look
                                            for your home.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/flashsash.png" alt="Flash Sash Window">
                                    <div class="image-card-info">
                                        <h3>Flash Sash Windows</h3>
                                        <p>
                                            These are traditionally timber, which can be hard to
                                            replace and repair, and even harder to maintain.
                                            That’s why we bring the Advance 70 flush sash
                                            uPVC window systems to the Scottish market.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/slidind.png" alt="Sliding Window">
                                    <div class="image-card-info">
                                        <h3>Sliding Windows</h3>
                                        <p>
                                            Manufactured to maintain the elegant proportions
                                            of traditional sash windows while incorporating
                                            the very best of modern day technology, our wide
                                            range is the ideal option for modern and traditional homes.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/tiltturnwindows.png" alt="Tilt Turn Window">
                                    <div class="image-card-info">
                                        <h3>Tilt Turn Windows</h3>
                                        <p>
                                            At Home Pick Scotland, we offer a wide range of Tilt
                                            & Turn double glazed windows to fit every location,
                                            every home, and every budget. Our tilt & turn windows
                                            come with the latest in double glazing technology
                                            encased in uPVC frames that can be made in a wide
                                            variety of styles, and tailored to fit the character
                                            of your home.
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
                                    <img src="/img/upvcwindows.png" alt="uPvc Window">
                                    <div class="image-card-info">
                                        <h3>uPvc Windows</h3>
                                        <p>
                                            In fact, new double glazed windows can reduce noise,
                                            save energy and improve the look of your property.
                                            Choosing new windows is more than just taking
                                            measurements and showing catalogs, which is why we
                                            treat every inquiry as an individual – there is no
                                            one-size-fits-all solution, so we don’t offer one.
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
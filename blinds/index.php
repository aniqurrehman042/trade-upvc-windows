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
            <div class="nav-button"><a href="/doors">DOORS</a></div>
            <div class="nav-button"><a href="/windows">WINDOWS</a></div>
            <div class="nav-button"><a href="/blinds">BLINDS</a></div>
            <div class="nav-button"><a href="/roofing">ROOFING</a></div>
            <div class="nav-button"><a href="/previous-work">PREVIOUS WORK</a></div>
            <div class="nav-button"><a href="/about">ABOUT US</a></div>
            <div class="nav-button"><a href="/testimonials">TESTIMONIALS</a></div>
            <div class="nav-button"><a href="/contact">CONTACT</a></div>
        </div>
        <img class="banner" src="/img/blinds-banner.webp" alt="Windows, Doors And Blinds">
        <div class="content-area-invis-product-category">
            <div class="content-full-width-central-product-category">
                <div class="row">
                    <div class="col-6 p-1">
                        <h2 class="page-title text-blue">Trade uPvc Home Improvements Blinds Services</h2>
                        <p>
                            We offers a vast range of made-to-measure blinds, in exclusive colors and fabrics
                            – this allows you to make sure you get the exact color and style you want to
                            brighten up your home! We offer all styles of blinds: Roman, Pleated, new styles
                            such as Patricia, Colby and Luzon! And many many more!
                            We pride ourselves on our prompt and friendly service, quality of blinds & high
                            standard of fittings and our after sales customer service!
                        </p>
                        <p>
                            Jazz up your house with a bold print or a more neutral style! We offers a vast
                            range of made-to-measure blinds, in exclusive colors and fabrics – this allows
                            you to make sure you get the exact color and style you want to brighten up your
                            home! We offer all styles of blinds: Roman, Pleated, new styles such as Patricia,
                            Colby, and Luzon and many more – just ask us.
                        </p>
                        <p>
                            Whatever your choice is, we will measure and fit it for you. It’s an all-inclusive
                            service and we pride ourselves on our prompt and friendly service, quality of blinds
                            & high standard of fittings and our after-sales customer service! Take a look at our
                            options and give us a call.
                        </p>
                        <p>
                            Check out our range of blinds and give us a call or message today to create your
                            new home!
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
                                    <img src="/img/dorren-blinds.jpg" alt="Bay Bow Window">
                                    <div class="image-card-info">
                                        <h3>Dorren Blinds</h3>
                                        <p>
                                            Dorren blinds are the perfect solution
                                            whether it’s blocking out the rising sun
                                            in the summer or that pesky streetlight.
                                            They’re great for night shift workers trying
                                            to catch up on their sleep or your little one’s
                                            daytime naps.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/luzon-blinds.jpg" alt="Flash Sash Window">
                                    <div class="image-card-info">
                                        <h3>Luzon Blinds</h3>
                                        <p>
                                            Luzon blinds offer your property something
                                            totally different. With their unmistakable
                                            zebra-stripe coloring, they add a bold and
                                            assertive take on what window dressing
                                            should look like.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/grayson-blinds.jpg" alt="Sliding Window">
                                    <div class="image-card-info">
                                        <h3>Grayson Blinds</h3>
                                        <p>
                                            Grayson blinds are just what you need.
                                            Controlled through centralized wireless
                                            technology, wherever you are, you will
                                            be able to ensure that your ambient
                                            environment is ideal for you.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/roller-blinds.jpg" alt="Tilt Turn Window">
                                    <div class="image-card-info">
                                        <h3>Roller Blinds</h3>
                                        <p>
                                            Our Roller blinds consist of some form
                                            of material fixed to a central axle.
                                            Connected to a pulley system, all you
                                            need to do to adjust the light in your
                                            room is to roll the axle up or down.
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
                                    <img src="/img/roman-blinds.jpg" alt="uPvc Window">
                                    <div class="image-card-info">
                                        <h3>Roman Blinds</h3>
                                        <p>
                                            Roman blinds aren’t about blocking out the
                                            sun. Their purpose is to use and filter
                                            the light to create a beautiful soft
                                            ambiance for your room.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/vertical-blinds.jpg" alt="uPvc Window">
                                    <div class="image-card-info">
                                        <h3>Vertical Blinds</h3>
                                        <p>
                                            Vertical blinds offer and additional benefit
                                            when compared to curtains. With the simple
                                            pull of a cord, the angle of the individual
                                            strips can be changed.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/wooden-blinds.jpg" alt="uPvc Window">
                                    <div class="image-card-info">
                                        <h3>Wooden Blinds</h3>
                                        <p>
                                            The beautiful traditional look of natural
                                            wooden materials backed up with the graceful
                                            simplicity of modern design. If you’re
                                            trying to evoke a style that’s all about
                                            getting the best out of both the present and
                                            the past, look no further.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/eton-blinds.jpg" alt="uPvc Window">
                                    <div class="image-card-info">
                                        <h3>Eton Blinds</h3>
                                        <p>
                                            Eton blinds are the perfect solution whether
                                            it’s blocking out the rising sun in the summer
                                            or that pesky streetlight. They’re great for
                                            night shift workers trying to catch up on their
                                            sleep or your little one’s daytime naps.
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
                                    <img src="/img/patricia-blinds.jpg" alt="uPvc Window">
                                    <div class="image-card-info">
                                        <h3>Patricia Blinds</h3>
                                        <p>
                                            Patricia Blinds is one of the unique blinds. It
                                            folds up forming a unique flower pattern at the
                                            bottom which gives an elegant look to the interiors.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/panel-blinds.jpg" alt="uPvc Window">
                                    <div class="image-card-info">
                                        <h3>Panel Blinds</h3>
                                        <p>
                                            Panel Blinds not only do lustrous window decoration
                                            for larger windows, bi-fold or patio doors, but
                                            they are a fantastic choice for room dividers as well.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/colby-blinds.jpg" alt="uPvc Window">
                                    <div class="image-card-info">
                                        <h3>Colby Blinds</h3>
                                        <p>
                                            Colby blinds are the perfect solution whether it’s
                                            blocking out the rising sun in the summer or that
                                            pesky streetlight. They’re great for night shift
                                            workers trying to catch up on their sleep or your
                                            little one’s daytime naps.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 p-02">
                            <a href="#" class="no-underline-link">
                                <div class="image-card full-height">
                                    <img src="/img/meliso-blinds.jpg" alt="uPvc Window">
                                    <div class="image-card-info">
                                        <h3>Meliso Blinds</h3>
                                        <p>
                                            Meliso Blinds is a stylish fusion of Roman Blinds
                                            and Roller Blinds. With the gentle pull of the
                                            operating cord, textured fabric in a palette of delightful
                                            colors transforms from contoured folds to opened vanes,
                                            allowing a softened outside view through the sheer backing.
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
</body>

</html>
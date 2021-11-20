<!DOCTYPE html>
<html>
<head lang="ua">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UKIE WEB | TEST</title>
	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
</body>
    <div class="content">
        <div class="data_colector">
            <div class="wrapper">
                <h4 class="form_header center">CONSULTATION FORM</h4>
                <h1 class="short_desc center">Get a Free Case Evaluation</h1>
                <h4 class="desc center">
                    Lawyers Group attorneys are always ready to review your case at absolutely no cost to you. We’ll answer questions that you may have, and help you get back on your feet.
                </h4>
                <form action="/send_mail.php" method="post">
                    <input type="text" name="firstName" placeholder="First name">
                    <input type="text" name="lastName" placeholder="Last Name">
                    <input type="text" name="email" placeholder="Your Email">
                    <input type="text" name="phone" placeholder="Your Phone">
                    <textarea name="about" placeholder="Tell us about your"></textarea>
                    <button type="submit">SHEDULE YOUR FREE CONSULTATION</button>
                </form>
            </div>
        </div>
        <div class="contact">
            <div class="wrapper">
                <h4 class="center">CONTACT</h4>
                <h1 class="center">Our Location</h1>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1310.6964036518937!2d24.71379845239601!3d48.926959665893015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4730c10d4d47341b%3A0x9900817b69e875f7!2z0YPQuy4g0JTQvdC10YHRgtGA0L7QstGB0LrQsNGPLCA2My02MSwg0JjQstCw0L3Qvi3QpNGA0LDQvdC60L7QstGB0LosINCY0LLQsNC90L4t0KTRgNCw0L3QutC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNzYwMDA!5e0!3m2!1sru!2sua!4v1637349120683!5m2!1sru!2sua" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
                <div class="info">
                    <h2>Office</h2>

                    9018 S 550th E<br>
                    Carbon, Indiana(IN), 47837

                    <div class="details">
                        <h3>Phone: (203) 456-7890</h3>
                        <h3>Fax: (203) 654-0987</h3>
                        <h3>info@lawyersgroup.com</h3>
                    </div>

                    <a href="#">CONTACT US</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="wrapper">
            <div class="columns">
                <div class="info_section">
                    <div class="header">LAWYERS<br>GROUP.LLC</div>
                </div>
                
                <div class="info_section">
                    <div class="header">Contact Us</div>
                    <div class="content">
                        Phone: (203) 456-7890<br>
                        Fax: (203) 654-0987<br>
                        info@lawyersgroup.com
                    </div>
                </div>

                <div class="info_section">
                    <div class="header">Office</div>
                    <div class="content">
                        9018 S 550th E<br>
                        Carbon, Indiana(IN), 47837
                    </div>
                </div>

                <div class="info_section">
                    <div class="header">Social</div>
                    <div class="links">
                        <a href="#?linkedin"><img height="14" src="/images/linkedin.png"></a>
                        <a href="#?twitter"><img height="14" src="/images/twitter.png"></a>
                        <a href="#?fb"><img height="14" src="/images/fb.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="wrapper">
            <div class=bottom_line>
                <div>&copy; <?php echo(date("Y")); ?> Lawyers Group | All Rights Reserved</div>
                <div><a href="#">Privacy policy</a></div>
            </div>
        </div>
    </div>
</body>
</html>
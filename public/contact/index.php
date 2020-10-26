<?php
        $title = "contact";

    include("../../private/config/db_connection.php");
    include("../../private/config/config.php");
    include("../../private/required/body__header.inc.php");

?>
<div class="body__banner">

    <div class="banner__img">
        <img src="<?php base_url()?>image/contact banner img.jpg" alt="banner img">
    </div>

    <div class="banner__content">
        
        <div class="wrap__banner-content">
            <span class="town">SAY HELLO</span>
            <span class="blog">contact</span>

            <!-- <div class="banner__button">
                <button>SEE TODAYS MENU</button>
            </div> -->
        </div>

    </div>

</div>
<!-- end body__banner -->

<div class="body__container">
    <main class="body__main">
        <div class="sayhello__section section__header">
         say hello
        </div>
        <div class="header__contents wrap__container">
            <div>Say hello, send us a message</div>
            <div class="paragraphs">
                Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. Enean porttitor eros non ultrices convallis. Vivamus quis dolor ut arcu lobortis finibus a vitae leo. Sed eget tempus sem. Nullam sed lacus sed metus tincidunt lobortis lobortis at nibh. Morbi euismod, arcu in gravida rhoncus
            </div>

        </div>

    </main>

</div>
<!-- end body__container -->

<form action="" method="POST" class="wrap__container"> 

    <div class="name_email">

        <div class="form-group a">
            <label for="inputName"></label>
            <input type="text" placeholder="Name" class="name" id="inputName">
        </div>
            
        <div class="form-group a">
            <label for="inputEmail"></label>
            <input type="email" placeholder="E-mail" class="Email" id="inputEmail">
        </div>

    </div>
    
    <div class="form-group b">
        <label for="inputSubject"></label>
        <input type="text" placeholder="Subject" class="Subject" id="inputSubject">
    </div>

    <div class="form-group c">
        <label for="inputSubject"></label>
        <textarea name="message" placeholder="Message" class="Message" id="Message"></textarea>
    </div>

    <div class="btn__primary">
        <button type="submit" class="btn__primary">SEND MESSAGE</button>
    </div>

</form>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d243.03980417326298!2d77.6923672040198!3d12.931045219267256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bcba52ab4fbbaa1%3A0x7d3379e9b43e9063!2sDomino&#39;s%20Pizza%2C%20Embassy%20Tech%20Village%2C%20Food%20Court%20%2CGround%20Floor%20Circuit%20Club%20complex%20Deverbeesanhalli%20Village%2C%20Outer%20Ring%20Rd%2C%20Devarabisanahalli%2C%20Bellandur%2C%20Bengaluru%2C%20Karnataka%20560037!3m2!1d12.93104!2d77.692504!5e0!3m2!1sen!2sin!4v1600068856888!5m2!1sen!2sin" width="100%" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
</div>

<?php
    include("../../private/required/body__footer.inc.php");
?>

<?php get_header() ?>

<main class="main">
  <div class="hero">
    <div class="content">
      <p class="subTitle"><?php the_field('product_name')?></p>
      <h1 class="title">
        <?php the_field('main_title')?>
      </h1>
      <p class="description">
        <?php the_field('main_text')?>
      </p>
      <div class="heroNavigation">
        <button class="btn btnHero">Shop now</button>
        <button class="btn btnHero">Learn more</button>
      </div>
    </div>
    <div class="boxHero">
      <img class="imageHero" alt="image hero" src="<?php bloginfo('template_url'); ?>./src/assets/images/hero-desc.png" />
    </div>
  </div>
 </div>
</main>

<section class="advantage">
  <ul class="list advantageList">
    <li class="item advantageItem">
      <!-- <svg class="iconStyle">
            <use class="iconStyle" href="../assets/svgSprite/box.svg"></use>
          </svg> -->
      <img class="icon" src="<?php bloginfo('template_url'); ?>./src/assets/images/box.svg" alt="box" />
      <div class="advantageText">
        <h2 class="titleAdvantage">Full-Service Shipping</h2>
        <p class="decriptionAdvantage">
          From picking to custom-crating to domestic and international shipping,
          we handle it all for you.
        </p>
      </div>
    </li>
    <li class="item advantageItem">
      <img class="icon" src="<?php bloginfo('template_url'); ?>./src/assets/images/checked.svg" alt="checked" />
      <div class="advantageText">
        <h2 class="titleAdvantage">Multi-Point Inspection</h2>
        <p class="decriptionAdvantage">
          To ensure quality, our team of HTM professionals fully assess and
          evaluate all equipment.
        </p>
      </div>
    </li>
    <li class="item advantageItem">
      <img class="icon" src="<?php bloginfo('template_url'); ?>./src/assets/images/operator.svg" alt="operator" />
      <div class="advantageText">
        <h2 class="titleAdvantage">Professional Product Support</h2>
        <p class="decriptionAdvantage">
          If you have any questions about the equipment, our product specialists
          are here to help.
        </p>
      </div>
    </li>
    <li class="item advantageItem">
      <img
        class="icon"
        src="<?php bloginfo('template_url'); ?>./src/assets/images/credit-card.svg"
        alt="credit-card"
      />
      <div class="advantageText">
        <p class="titleAdvantage">Secure and Easy Payment Methods</p>
        <p class="decriptionAdvantage">
          Pay your way, whether by credit card, PayPal or the redemption of
          earned credits.
        </p>
      </div>
    </li>
  </ul>
</section>


<section class="makes">
  <div class="boxMake">
    <div class="itemMake first">
      <img class="imageMake" src="<?php bloginfo('template_url'); ?>./src/assets/images/imageMake1.png" alt="image Makes" />
      <div class="boxText">
        <h2 class="titleMake">N95 Respirators</h2>
        <p class="descriptionMake">
          The N95 mask is a form of respiratory protective wear worn over the
          nose and mouth to help minimise the chance of inhaling airborne
          particles like viruses and other germs. It is a disposable mask made
          from synthetic polymer fibres produced in a highly specialised process
          called melt blowing. During this process, the inner layer of the N95
          mask is created which forms the filtration layer capable of filtering
          out at least 95% of airborne particles when worn correctly.
          During outbreaks of respiratory illnesses and during periods of
          intense air pollution, wearing N95 masks has been shown to help reduce
          the inhalation of compromised air, filtering out nasty pathogens which
          lead to illness or which can aggravate existing respiratory problems.
          Maintaining clear and unhindered respiration is vitally important for
          remaining fit and healthy and people with pre-existing conditions or
          respiratory fragility can particularly benefit from wearing face masks
          while they are out in public and unable to control the breathing
          environments that they find themselves in.
        </p>
      </div>
    </div>
    <div class="itemMake second">
      <img class="imageMake" src="<?php bloginfo('template_url'); ?>/src./assets/images/imageMake2.png" alt="image Makes" />
      <div class="boxText">
        <h2 class="titleMake">
          N95 Respirators In Industrial And Health Care Settings
        </h2>
        <p class="descriptionMake">
          Most N95 respirators are manufactured for use in construction and
          other industrial type jobs that expose workers to dust and small
          particles. They are regulated by the National Personal Protective
          Technology Laboratory (NPPTL) in the National Institute for
          Occupational Safety and Health (NIOSH), which is part of the Centers
          for Disease Control and Prevention (CDC).
          However, some N95 respirators are intended for use in a health care
          setting. Specifically, single-use, disposable respiratory protective
          devices used and worn by health care personnel during procedures to
          protect both the patient and health care personnel from the transfer
          of microorganisms, body fluids, and particulate material. These
          surgical N95 respirators are class II devices regulated by the FDA,
          under 21 CFR 878.4040, and CDC NIOSH under 42 CFR Part 84.
        </p>
      </div>
    </div>
    <div class="itemMake">
      <div class="overlay-project">
        <img class="imageMake" src="<?php bloginfo('template_url'); ?>./src/assets/images/imageMake3.png" alt="production photo" />
        <p class="overlay-text">
            Given the praised reputation and reliable quality within the
            industry, we have also established preliminary business agreements
            with some hospitals, local governments and medical institutions in
            Guangdong Province.
          </p></div>
      <div class="lastBoxMake">
        <div class="styleLastBoxMake">
          <p class="lastDescriptionMake">
            After years of development, Health Pro has reached stable long-term
            cooperation with many hospitals and medical institutions in Hong
            Kong.
          </p>
          <p class="lastDescriptionMake">
            We are keenly looking forward to expand our market in Mainland China
            and overseas in the future, as we have strong beliefs in our
            products.
          </p>
        </div>
        <div class="contactBoxMake">
          <h4 class="titleContactMake">Proudly Made in Hong Kong</h4>
          <p class="contactDescriptionMake">
            Our factory is located in Hong Kong. Equipped with machines and
            assembly line of the best quality on the market to ensure quality
            control.
          </p>
          <div class="takeContact">
            <button class="btn btn-make">Learn more</button>
            <div class="telBoxMakes">
              <svg class="iconTel"><use></use></svg>
              <a href="tel:<?php the_field('phone')?>" class="callMake">
                <span class="titleTelMakes">Contact us</span>
                <?php the_field('phone')?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="certification">
  <div class="boxCertification">
    <p class="titleCertification">Our Lab Certification</p>
    <ul class="listCertification">
      <li class="itemCertification">
        <a href="#"><img src="<?php bloginfo('template_url'); ?>./src/assets/images/fda.png" alt="FDA" /></a>
      </li>
      <li class="itemCertification">
        <a href="#"><img src="<?php bloginfo('template_url'); ?>./src/assets/images/nelson.png" alt="NELSON" /></a>
      </li>
      <li class="itemCertification">
        <a href="#"><img src="<?php bloginfo('template_url'); ?>./src/assets/images/cnas.png" alt="CNAS" /></a>
      </li>
    </ul>
  </div>
</section>

<section class="reasons">
  <div class="boxReasons">
    <img
      class="imageReasons"
      src="<?php bloginfo('template_url'); ?>./src/assets/images/reasons.png"
      alt="Reasons image"
    />
    <div class="textBoxReasons">
      <p class="titleReasons">Reasons To Choose Our Products</p>
      <p class="descriptionReasons">
All products of Health Pro have obtained the certifications issued by national specialized agencies and testing laboratories.
They have also passed the quality inspection of several international famous testing institutions. We have absolute confidence that every product of Health Pro is a of the top quality.
      <ul class="listReasons">
        <li class="itemReasons">
          <img class="itemIconReasons" src="<?php bloginfo('template_url'); ?>./src/assets/images/iconReasons1.png" alt="icon Reasons">
          <div class="itemBoxReasons">
            <p class="itemTitleReasons">Industry leader</p>
            <p class="itemDescReasons">If you have any questions about the equipment, our product specialists are here to help, specialists are here.</p>
          </div>
        </li>
            <li class="itemReasons">
          <img class="itemIconReasons" src="<?php bloginfo('template_url'); ?>./src/assets/images/iconReasons2.png" alt="icon Reasons">
          <div class="itemBoxReasons">
            <p class="itemTitleReasons">Innovation 3 led development</p>
            <p class="itemDescReasons">If you have any questions about the equipment, our product specialists are here to help.</p>
          </div>
        </li>
            <li class="itemReasons">
          <img class="itemIconReasons" src="<?php bloginfo('template_url'); ?>./src/assets/images/iconReasons3.png" alt="icon Reasons">
          <div class="itemBoxReasons">
            <p class="itemTitleReasons">To create a safer tomorrow for all</p>
            <p class="itemDescReasons">If you have any questions about the equipment, our product specialists are here to help.</p>
          </div>
        </li>
            <li class="itemReasons">
          <img class="itemIconReasons" src="<?php bloginfo('template_url'); ?>./src/assets/images/iconReasons4.png" alt="icon Reasons">
          <div class="itemBoxReasons">
            <p class="itemTitleReasons">To protect and to improve living quality for all</p>
            <p class="itemDescReasons">If you have any questions about the equipment, our product specialists are here to help.</p>
          </div>
        </li>
      </ul>
      </p>
    </div>
  </div>
</section>

<section class="reviews">
<img class="imageReviews" src="<?php bloginfo('template_url'); ?>./src/assets/images/reviews.png" alt="image Reviews">
</section>


<section class="lastBlock">
  <div class="boxLastBlock">
    <p class="titleLastBlock">Get One Step Ahead Of Disease</p>
    <p class="textLastBlock">
      Imperdiet aliquet est vel nulla turpis eu consequat ullamcorper a egestas
      suspendisse faucibus eu velit, phasellus pulvinar lorem et libero et
      tortor, sapien nulla.
    </p>
    <button class="btn btnLastBlock">Shop now</button>
  </div>
</section>


<section class="contacts">
  <div class="boxContacts">
    <ul class="listContacts">
      <li class="itemContacts">
        <img
          class="imageContacts"
          src="<?php bloginfo('template_url'); ?>./src/assets/images/location.png"
          alt="address"
        />
        <a target="_blank" href="https://goo.gl/maps/wRDZhbMfn2RRiM716" class="textContacts">
          <span class="titleContacts">Address</span>
          123 5th Avenue, New York, US
          <iframe
            class="maps"
            target="_blank"
            hidden
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.037482521322!2d-73.99304888426998!3d40.739200743887416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3b24b424f%3A0x618680d3f8c2f773!2zMTIzIDV0aCBBdmUsIE5ldyBZb3JrLCBOWSAxMDAwMywg0KHQqNCQ!5e0!3m2!1sru!2sua!4v1657658356982!5m2!1sru!2sua"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe
        ></a>
      </li>
      <li class="itemContacts">
        <img
          class="imageContacts"
          src="<?php bloginfo('template_url'); ?>./src/assets/images/phone2.png"
          alt="call us"
        />
        <a href="tel:<?php the_field('phone')?>" class="textContacts">
          <span class="titleContacts">Call Us</span>
          <?php the_field('phone')?></a
        >
      </li>
      <li class="itemContacts">
        <img
          class="imageContacts"
          src="<?php bloginfo('template_url'); ?>./src/assets/images/mail.png"
          alt="email us"
        />
        <a href="mailto:info@example.com" class="textContacts">
          <span class="titleContacts">Email Us</span>
          info@example.com</a
        >
      </li>
    </ul>
  </div>
</section>

<?php get_footer() ?>



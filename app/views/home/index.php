<?php require_once 'Template/head.php'?>
<header>
  <nav class="nav-wrapper transparent">
    <div class="container">
      <a href="#" class=" brand-logo indigo-text text-darken-4">Photo Studio</a>
      <a href="#" class="sidenav-trigger" data-target="mobile-menu">
        <i class=" material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down ">
        <li><a class=" indigo-text" href="#">Home</a></li>
        <li><a class=" indigo-text" href="#photo">Photo</a></li>
        <li><a class=" indigo-text" href="<?php echo SITE_URL;?>/home/book">Book Now</a></li>
        <li><a class=" indigo-text" href="#services">Services</a></li>
        <li><a class=" indigo-text" href="#contact">Contact</a></li>
        <li><a href="" class="tooltipped btn-floating btn-small indigo darken-4" data-tooltip="Facebook">
          <i class="fab fa-facebook"></i>
        </a></li>
        <li><a href="" class="tooltipped  btn-floating btn-small indigo darken-4" data-tooltip="Instagram">
            <i class="fab fa-Instagram"></i>
          </a></li>
          <li><a href="" class="tooltipped  btn-floating btn-small indigo darken-4" data-tooltip="Tiwitter">
              <i class="fab fa-Tiwitter"></i>
            </a></li>
      </ul>
      <ul class="sidenav indigo  darken-3 white-text" id="mobile-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#photo">Photo</a></li>
        <li><a href="<?php echo SITE_URL; ?>/home/book">Book Now</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>

<section class="container section" id="photo">
  <div class="row">
    <div class="col s12 l4">
      <img
        src="<?php echo SITE_URL; ?>/public/dist/components/FB_IMG_15600446700393508.jpg"
        class=" responsive-img"
        alt=""
        srcset=""
      />
    </div>
    <div class="col s12 l6 offset-l1">
      <h2 class="indigo-text text-darken-4">lorem header</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
        aperiam omnis distinctio nostrum, eligendi blanditiis consectetur
        repudiandae ipsa harum qui! Tenetur possimus ducimus voluptas magni sed
        beatae illo, officia deserunt?
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col s12 l4  push-l7">
      <img
        src="<?php echo SITE_URL; ?>/public/dist/components/FB_IMG_15600446700393508.jpg"
        class=" responsive-img"
        alt=""
        srcset=""
      />
    </div>
    <div class="col s12 l6  pull-l5">
      <h2 class="indigo-text text-darken-4 right-align">lorem header</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
        aperiam omnis distinctio nostrum, eligendi blanditiis consectetur
        repudiandae ipsa harum qui! Tenetur possimus ducimus voluptas magni sed
        beatae illo, officia deserunt?
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col s12 l4">
      <img
        src="<?php echo SITE_URL; ?>/public/dist/components/FB_IMG_15600446700393508.jpg"
        class=" responsive-img"
        alt=""
        srcset=""
      />
    </div>
    <div class="col s12 l6 offset-l1">
      <h2 class="indigo-text text-darken-4">lorem header</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
        aperiam omnis distinctio nostrum, eligendi blanditiis consectetur
        repudiandae ipsa harum qui! Tenetur possimus ducimus voluptas magni sed
        beatae illo, officia deserunt?
      </p>
    </div>
  </div>
</section>

<div class="parallax-container">
  <div class="parallax">
    <img
      src="<?php echo SITE_URL; ?>/public/dist/components/FB_IMG_15600446346782933.jpg"
      alt=""
      class=" responsive-img"
    />
  </div>
</div>

<section class="container section" id="services">
  <div class="row">
    <div class="col s12 l5">
      <h4 class=" indigo-text text-darken-4">Photo Studio Infor...</h4>
      <div class="">
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Reprehenderit quis, ullam harum necessitatibus, rerum, sint sit
          perferendis quasi molestias et velit. Laborum qu as amet id veritatis
          tenetur ut eum blanditiis.
        </p>
      </div>
    </div>
    <div class="col s12 l6 offset-l1">
      <ul class="tabs">
        <li class="tab col s4">
          <a href="#photography" class=" indigo-text text-darken-4"
            >Photography</a
          >
        </li>
        <li class="tab col s4">
          <a href="#editing" class=" indigo-text text-darken-4">Editing</a>
        </li>
        <li class="tab col s4">
          <a href="#videoing" class=" indigo-text text-darken-4">Videoing</a>
        </li>
      </ul>
      <div class="col s12" id="photography">
        <p class=" flow-text indigo-text text-darken-4">PHOTOGRAPHY</p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur
          nostrum voluptas voluptatem ratione laboriosam adipisci quaerat
          provident suscipit eaque voluptates quas, reprehenderit quo non
          doloribus mollitia accusamus doloremque nam dolore?
        </p>
      </div>
      <div class="col s12" id="editing">
        <p class=" flow-text indigo-text text-darken-4">EDITING</p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur
          nostrum voluptas voluptatem ratione laboriosam adipisci quaerat
          provident suscipit eaque voluptates quas, reprehenderit quo non
          doloribus mollitia accusamus doloremque nam dolore?
        </p>
      </div>
      <div class="col s12" id="videoing">
        <p class=" flow-text indigo-text text-darken-4">VIDEOING</p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur
          nostrum voluptas voluptatem ratione laboriosam adipisci quaerat
          provident suscipit eaque voluptates quas, reprehenderit quo non
          doloribus mollitia accusamus doloremque nam dolore?
        </p>
      </div>
    </div>
  </div>
</section>

<div class="parallax-container">
  <div class="parallax">
    <img
      src="<?php echo SITE_URL; ?>/public/dist/components/FB_IMG_15600446346782933.jpg"
      alt=""
      class=" responsive-img"
    />
  </div>
</div>

<section class="section container" id="contact">
  <div class="row">
    <div class="col s12 l5">
      <h2 class=" indigo-text text-darken-4">Get In Touch</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, sunt?
        Libero numquam mollitia quidem odio qui unde, error nam quisquam, rem
        ipsum assumenda porro aspernatur iure, reiciendis nemo incidunt vero.
      </p>
    </div>
    <div class="col s12 l5 offset-l2">
      <form action="" method="post">
        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" name="name" id="name">
          <label for="name">Your Name</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">email</i>
          <input type="email" name="email" id="email" />
          <label for="email">Your Email Address</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">message</i>
          <textarea name="message" id="message" class=" materialize-textarea"></textarea>
          <label for="message">Your Message</label>
        </div>
        <button type="submit" class="btn btn-block right">Submit</button>
      </form>
    </div>
  </div>
</section>


<?php require_once 'Template/footer.php'?>

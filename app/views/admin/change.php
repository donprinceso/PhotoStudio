<?php require_once 'Template/head.php';?>

<?php require_once 'Template/sidebar.php';?>
<main>
  <?php require_once 'Template/nav.php';?>
    <section class="">
      <h6 class="card-panel grey lighten-3 indigo-text">Acount Settings</h6>
       <div class="row">
         <div class="col s12 l5 offset-l3">
           <h5 class=" card-title indigo-text">Change Password </h5>
           <form action="" method="post">
              <div class="input-field">
                <input type="password" name="oldpassword" id="oldpassword">
                <label for="oldpassword">Old Password</label>
              </div>
              <div class="input-field">
                <input type="password" name="newpassword" id="newpassword">
                <label for="newpassword">New Password</label>
              </div>
              <div class="input-field">
                  <input type="password" name="confim" id="confim">
                  <label for="confim">Confrim New Password</label>
              </div>
              <div class="input-field">
                <button type="submit" class="btn right indigo">Change Password</button>
              </div>
           </form>
         </div>

    </section>
</main>
<?php require_once 'Template/footer.php';?>
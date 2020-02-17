<?php require_once 'Template/head.php';?>

<?php require_once 'Template/sidebar.php';?>
<main>
  <?php require_once 'Template/nav.php';?>
    <section class="">
      <h6 class="card-panel grey lighten-3 indigo-text">Acount Settings</h6>
      <?php //echo $_SESSION['message']; ?>
       <div class="row">
         <div class="col s12 l5">
           <h5 class=" card-title indigo-text">create </h5>
           <form method="post" id="create_acc">
              <div class="input-field">
                <input type="text" name="name" id="name" required>
                <label for="name">Name</label>
                <span class="validate materialize-red-text"><?php echo($data['name_err']); ?></span>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label>
                <span class="validate materialize-red-text"><?php echo($data['email_err']); ?></span>
              </div>
              <div class="input-field">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
                <span class="validate materialize-red-text"><?php echo($data['password_err']); ?></span>
              </div>
              <p>
                <label>
                  <input type="checkbox" name="admin" id="admin">
                  <span>Admin</span>
                </label>
              </p>
              <p>
                <label >
                    <input type="checkbox" name="adminManager" id="adminManager">
                    <span>Admin Manager</span>
                </label>
              </p>
              <div class="input-field">
                <button type="button" id="create_btn" name="create_user" class="btn right indigo" >create</button>
              </div>
           </form>
         </div>

         <div class="col s12 l5 offset-l2">
            <h5 class=" card-title indigo-text">Delect Account </h5>
            <form action="" method="post">
               <div class="input-field">
                 <input type="text" name="name" id="dname" required>
                 <label for="name">Name</label>
               </div>
               <div class="input-field">
                 <input type="email" name="email" id="demail" required>
                 <label for="email">Email</label>
               </div>
               <div class="input-field">
                 <button type="submit" class="btn right indigo">delect</button>
               </div>
            </form>
          </div>
       </div> 




    </section>
</main>
<?php require_once 'Template/footer.php';?>
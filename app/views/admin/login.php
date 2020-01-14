<?php require_once 'Template/head.php';?>
<br>
<div class="container">
    <div class="row">
        <div class=" card col s12 l5 offset-l3">
                <h5 class="card-panel center indigo white-text card-title">Admin Login</h5>
                <form action="<?php echo htmlspecialchars(SITE_URL."/dashboard/login") ;?>" method="post">
                    <div class=" container validate">
                        
                    </div>
                    <br>
                    <div class="input-field">
                        <input type="email" name="email" id="email" required>
                        <label for="email">Email</label>
                        <span class=" invalid-feedback materialize-red-text"><?php echo($data['email_err']); ?></span>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" required>
                        <label for="password">Password</label>
                        <span class="validate materialize-red-text"><?php echo($data['password_err']); ?></span>
                    </div>
                    <p>
                        <label>
                            <input type="checkbox" class="">
                            <span>Remember Me</span>
                        </label>
                    </p>
                    <div class="input-field">
                        <button type="submit" class="btn indigo">login</button>
                    </div>
                </form>
        </div>
    </div>
</div>

<?php require_once 'Template/footer.php';?>
<?php require_once 'Template/head.php';?>

<?php require_once 'Template/sidebar.php';?>
<main>
  <?php require_once 'Template/nav.php';?>
  <div class=" section">
   <div class="row">
       <div class="col s12 l7 offset-l2">
       <h6 class="card-panel grey lighten-3 indigo-text">Book a Service</h6>
           <form action="" method="post" class="section">
               <div class="input-field">
                   <input type="text" name="name" id="name" required >
                   <label for="name">Your Name</label>
               </div>
               <div class="input-field">
                   <input type="email" name="email" id="email" required>
                   <label for="email">Your Email Address</label>
               </div>
               <div class="row">
                   <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" name="phone" id="phone" required>
                            <label for="phone">Phone Number</label>
                        </div>
                   </div>
                   <div class="col s12 l7 offset-l1">
                       <div class="input-field">
                            <textarea name="location" id="location" class=" materialize-textarea" required></textarea>
                            <label for="location">Location Address</label>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col s12 l6 input-field">
                       
                           <select class="">
                                <option value="" disable selected>Choose Your Event</option>
                                <option value="1">White Wedding</option>
                                <option value="2">Birthday</option>
                                <option value="3">Per Wedding</option>
                           </select>
                           <!-- <label for="Select Event">Select Event</label> -->
                       
                   </div>
                   <div class="col s12 l6 input-field">
                        <input type="text" class="datepicker">
                        <label>Choose The Date You Need For....</label>
                    </div>
               </div>
               <p>Services required.....</p>
               <p>
                   <label for="video">
                       <input type="checkbox" name="video" id="video">
                       <span>Video</span>
                   </label>
               </p>
               <p>
                   <label for="editing">
                       <input type="checkbox" name="editing" id="editing">
                       <span>Editing</span>
                   </label>
               </p>
               <p>
                   <label for="photography">
                       <input type="checkbox" name="photography" id="photography">
                       <span>Photography</span>
                   </label>
               </p>
               <div class="input-field center">
                   <button class="btn btn-large indigo">Submit</button>
               </div>
           </form>
       </div>
   </div> 
</div>
</main>
<?php require_once 'Template/footer.php';?>
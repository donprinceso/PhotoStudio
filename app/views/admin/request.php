<?php require_once 'Template/head.php';?>

<?php require_once 'Template/sidebar.php';?>
<main>
  <?php require_once 'Template/nav.php';?>
  <section class="">
        <h6 class="card-panel grey lighten-3 indigo-text">Requesting Reservations</h6>
        <div class="row">
            <div class="col s12 l4 push-l8">
                    <form action="" method="post">
                            <div class="input-field prefix">
                                <input type="text" name="search" id="search">
                                <label for="search">Search</label>
                                <button type="submit" class="btn indigo btn-small waves-button-input">Search</button>
                            </div>
                        </form>
            </div>
        </div>
    <table class=" striped responsive-table highlight">
      <thead
        class="grey lighten-3 indigo-text                                                                                                                                                                                                                                                 "
      >
      <?php 
        if(count($data) > 0):
          foreach ($data as $request):
      ?>
        <tr>
          <th>Names</th>
          <th>Email Address</th>
          <th>Number</th>
          <th>Events</th>
          <th>Date</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
     
        <tr>
       
          <td><?php echo $request['user_name']; ?></td>
          <td><?php echo $request['user_email']; ?></td>
          <td><?php echo $request['user_phone']; ?>9</td>
          <td><?php echo $request['event_select']; ?></td>
          <td><?php echo $request['date_select']; ?></td>
          <td>
                <a href="#" class="btn grey darken-1">view</a>
                <a href="<?php echo $request['id'] ? SITE_URL.'/dashboard/processById/'. $request['id']:'' ;?>" class="btn  darken-1">Process</a>
                <a href="#" class="btn red lighten-3">Delect</a>
          </td>
        </tr>
        <?php endforeach;?>
          <?php else:?>
          <h5 class=" center-align container title validate">Nothing is Listed Here </h5 >
          <?php endif ?>
      </tbody>
      <tfoot></tfoot>
    </table>
  </section>
</main>
<?php require_once 'Template/footer.php';?>
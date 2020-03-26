<?php require_once 'Template/head.php';?>

<?php require_once 'Template/sidebar.php';?>
<main>
  <?php require_once 'Template/nav.php';?>
  <section class="">
        <h6 class="card-panel grey lighten-3 indigo-text">Process Reservations</h6>
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
        <tr>
          <th>Names</th>
          <th>Email Address</th>
          <th>Number</th>
          <th>Location</th>
          <th>Events</th>
          <th>Date</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php 
        if(count($data) > 0):
          foreach ($data as $process):
      ?>
          <td><?php echo $process['user_name']; ?></td>
          <td><?php echo $process['user_email']; ?></td>
          <td><?php echo $process['user_phone']; ?>9</td>
          <td><?php echo $process['user_loation']; ?></td>
          <td><?php echo $process['event_select']; ?></td>
          <td><?php echo $process['date_select']; ?></td>
          <td>
                <a href="<?php echo $process['id'] ? SITE_URL.'/dashboard/find/'. $process['id']:'' ;?>" class="btn grey darken-1">view</a>
                <a href="<?php echo $process['id'] ? SITE_URL.'/dashboard/remove/'. $process['id']:'' ;?>" class="btn red lighten-3">Delect</a>
          </td>
        </tr>
          <?php endforeach;?>
          <?php else:?>
          <p>Nothing is Listed Here </p>
          <?php endif ?>
      </tbody>
      <tfoot></tfoot>
    </table>
  </section>
</main>
<?php require_once 'Template/footer.php';?>
<?php require_once 'Template/head.php';?>

<?php require_once 'Template/sidebar.php';?>
<main>
  <?php require_once 'Template/nav.php';?>
  <div class=" pusher">
    <div class="row">
      <div class="col s12 l3">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col s8 l8">
                Total Reservation
              </div>
              <div class="clo s4 l4 center-align">
                50
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 l3">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col s8 l8">
                New Request
              </div>
              <div class="clo s4 l4 center-align">
                10
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 l3">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col s8 l8">
              Process Booking
              </div>
              <div class="clo s4 l4 center-align">
                40
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 l3">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col s8 l8">
                Book
              </div>
              <div class="clo s4 l4 center-align">
                Null
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- the end of the Total card -->
  <section class="">
    <table class=" striped responsive-table highlight">
      <h6 class="card-panel grey lighten-3 indigo-text">Unread Notification</h6>
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
          <th>Services</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      <?php
      if( Count($data) > 0):
      foreach($data as $booking):
      ?>
        <tr>
          <td><?php echo $booking['user_name'];?></td>
          <td><?php echo ($booking['user_email']);?></td>
          <td><?php echo $booking['user_phone'];?></td>
          <td><?php echo $booking['user_loation'];?></td>
          <td><?php echo $booking['event_select'];?></td>
          <td><?php echo $booking['date_select'];?></td>
          <td><?php echo $booking['services'];?></td>
          <td>
            <a href="<?php echo $booking['id'] ? SITE_URL.'/dashboard/find/'.$booking['id']: ''; ?>" class="btn red">Reject</a>
            <a href="#" class="btn green">Acesst</a>
            <a href="<?php SITE_URL.'/dashboard/find/'.$booking['id'];?>" class="btn grey darken-1">view</a>
          </td>
        </tr>
        <?php endforeach ?>
      <?php else: ?>
      <h5 class="title materialize-red-text center-align">The Is no Data in the Database Try Again Later</h5>
      <?php endif;?>
      </tbody>
    </table>
  </section>
  <section class="container">
    <table class=" striped responsive-table card highlight">
      
      <thead
        class="grey lighten-3 indigo-text">
        <h6 class="card-title grey lighten-3 indigo-text">Meet Up</h6>
        <tr>
          <th>Names</th>
          <th>Email Address</th>
          <th>Number</th>
          <th>Events</th>
          <th>Date</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Hanry Pack</td>
          <td>HanryP@gmail.com</td>
          <td>09876543209</td>

          <td>Per Wedding Shot</td>
          <td>23/07/2020</td>
        </tr>

        <tr>
          <td>James Pack</td>
          <td>HanryP@gmail.com</td>
          <td>09876543209</td>

          <td>Per Wedding Shot</td>
          <td>23/07/2020</td>
        </tr>
      </tbody>
      <tfoot class=""></tfoot>
    </table>
  </section>
</main>


<?php require_once 'Template/footer.php';?>

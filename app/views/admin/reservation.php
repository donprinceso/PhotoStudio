<?php require_once 'Template/head.php';?>

<?php require_once 'Template/sidebar.php';?>
<main>
  <?php require_once 'Template/nav.php';?>
  <section class="">
        <h6 class="card-panel grey lighten-3 indigo-text">Lists Of All Reservations</h6>
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
          <th>Services</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Hanry Pack</td>
          <td>HanryP@gmail.com</td>
          <td>09876543209</td>
          <td>Golding Hote and Event Center Aba,Abia State</td>
          <td>Per Wedding Shot</td>
          <td>23/07/2020</td>
          <td>Photography, Editing</td>
          <td>
                <a href="#" class="btn grey darken-1">view</a>
          </td>
        </tr>
        <tr>
          <td>Hanry Pack</td>
          <td>HanryP@gmail.com</td>
          <td>09876543209</td>
          <td>Golding Hote and Event Center Aba,Abia State</td>
          <td>Per Wedding Shot</td>
          <td>23/07/2020</td>
          <td>Photography, Editing</td>
          <td>
                <a href="#" class="btn grey darken-1">view</a>
          </td>
        </tr>
        <tr>
          <td>James Pack</td>
          <td>HanryP@gmail.com</td>
          <td>09876543209</td>
          <td>Golding Hote and Event Center Aba,Abia State</td>
          <td>Per Wedding Shot</td>
          <td>23/07/2020</td>
          <td>Photography, Editing</td>
          <td>
                <a href="#" class="btn grey darken-1">view</a>
          </td>
        </tr>
        <tr>
          <td>Hanry Pack</td>
          <td>HanryP@gmail.com</td>
          <td>09876543209</td>
          <td>Golding Hote and Event Center Aba,Abia State</td>
          <td>Per Wedding Shot</td>
          <td>23/07/2020</td>
          <td>Photography, Editing</td>
          <td>
            <a href="#" class="btn grey darken-1">view</a>
          </td>
        </tr>
      </tbody>
      <tfoot></tfoot>
    </table>
  </section>
</main>
<?php require_once 'Template/footer.php';?>
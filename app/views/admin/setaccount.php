<?php require_once 'Template/head.php';?>

<?php require_once 'Template/sidebar.php';?>
<main>
	<?php require_once 'Template/nav.php';?>
	<section class="">
		<h6 class="card-panel grey lighten-3 indigo-text">Acount Settings</h6>
		<div class=" modal">
			<div class="modal-header ">
				<h5 class=" card-title indigo-text">create User Account</h5>
			</div>
			<div class="modal-content">
				<div class=" container">
					<form method="post" id="create_acc"
						action="<?php echo htmlspecialchars(SITE_URL.'/dashboard/register'); ?>">
						<div class="input-field">
							<input type="text" name="name" id="name" required>
							<label for="name">Name</label>
							<span class="validate green-text"><?php echo($data['name_err']); ?></span>
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
						<div class="input-field">
							<span class="validate green-text"><?php echo($data['message']); ?></span>
						</div>
						<div class="input-field">
							<button type="submit" id="create_btn" name="create_user"
								class="btn right indigo">create</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class=" section ">
			<a href="#" class="btn indigo darken-1">Add User</a>
		</div>

		<table class=" striped responsive-table highlight">
			<thead
				class="grey lighten-3 indigo-text                                                                                                                                                                                                                                                 ">
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
					<td>Hanry Pack</td>
					<td>HanryP@gmail.com</td>
					<td>09876543209</td>
					<td>Per Wedding Shot</td>
					<td>23/07/2020</td>
					<td>
						<a href="#" class="btn grey darken-1">view</a>
						<a href="#" class="btn red lighten-3">Delect</a>
					</td>
				</tr>
				<tr>
					<td>Hanry Pack</td>
					<td>HanryP@gmail.com</td>
					<td>09876543209</td>
					<td>Per Wedding Shot</td>
					<td>23/07/2020</td>
					<td>
						<a href="#" class="btn grey darken-1">view</a>
						<a href="#" class="btn red lighten-3">Delect</a>
					</td>
				</tr>
				<tr>
					<td>James Pack</td>
					<td>HanryP@gmail.com</td>
					<td>09876543209</td>
					<td>Per Wedding Shot</td>
					<td>23/07/2020</td>
					<td>
						<a href="#" class="btn grey darken-1">view</a>
						<a href="#" class="btn red lighten-3">Delect</a>
					</td>
				</tr>
				<tr>
					<td>Hanry Pack</td>
					<td>HanryP@gmail.com</td>
					<td>09876543209</td>
					<td>Per Wedding Shot</td>
					<td>23/07/2020</td>
					<td>
						<a href="#" class="btn grey darken-1">view</a>
						<a href="#" class="btn red lighten-3">Delect</a>
					</td>
				</tr>
			</tbody>
			<tfoot></tfoot>
		</table>


	</section>
</main>
<?php require_once 'Template/footer.php';?>
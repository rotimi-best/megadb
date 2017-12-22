<div class="text-center">
		<?php if(isset($_SESSION['is_logged_in'])) : ?>
		<h1><?php echo $_SESSION['user_data']['university_name']; ?></h1>
		<h1> Welcome to Mega Data Base (MegaDB)</h1>

		<p class="lead text-primary"> Monitor Lecture Halls by Viewing, Adding hall info and Creating New Activities.</p>
		<p class="lead text-primary">Ready to Jump right into it?</p>
		<h5 class="text-danger">You are logged in as a: <?php echo $_SESSION['user_data']['status'] ?></h5><br>
		<a class="btn btn-primary text-center" href="http://localhost/phpsandbox/megadb/lecturehalls/"> Manage Halls </a>
		<a class="btn btn-primary text-center" href="http://localhost/phpsandbox/megadb/teachers/"> View Teachers </a>
		<a class="btn btn-primary text-center" href="<?php echo ROOT_URL; ?>statistics/">Statistics</a>
		<?php else : ?>
	          <h1>Welcome to Mega Data Base (MegaDB)</h1>
	          <p class="lead text-primary"> Monitor Lecture Halls by Viewing, Adding hall info and Creating New Activities.</p>
			  <p class="lead text-primary">Ready to Jump right into it?</p><br />
	          <a class="btn btn-primary text-center" href="<?php echo ROOT_URL; ?>users/login">Log in</a>
	    <?php endif; ?>

</div>

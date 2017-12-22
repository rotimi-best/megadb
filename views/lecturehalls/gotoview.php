<div>
	<h5>Click to view Your newly added activity</h5>
	<form method="post" action="http://localhost/phpsandbox/megadb/lecturehalls/viewactivity" >
		<input type="hidden" name="hallid" value="<?php echo $viewmodel['id']; ?>">
		<input class="btn btn-primary" type="submit" name="submit" value="View New Activity">
	</form>
</div>
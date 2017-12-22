
<div class="panel panel-primary">

  <div class="text-center">
    <h2> Lecture Halls in your University </h2>
    <h5 class="text-danger">You have a total of  <?php echo count($viewmodel); ?> halls in your university</h5>
    <a class="btn btn-primary" href="http://localhost/phpsandbox/megadb/lecturehalls/addactivity"> Add Activity</a>
    <?php if($_SESSION['user_data']['status'] == "admin"): ?>
    <a class="btn btn-primary" href="http://localhost/phpsandbox/megadb/lecturehalls/addhall"> Add A New Hall</a>
  <?php endif; ?>
  </div>
<br> <br>

    <div class="row">
      <?php foreach($viewmodel as $item): ?>
      <div class="col-lg-4">
        <div class="bs-component">
          <div class="card border-info btn btn-secondary">
            <div class="card-body text-primary text-center">
              <blockquote class="card-blockquote">
                <p><strong> Hall Number: </strong> <?php echo $item['hall_number']; ?></p>
                <p> <strong>Amount of Chairs: </strong><?php echo $item['chairs']; ?></p>
                <p><strong>Amount of Tables: </strong> <?php echo $item['tables']; ?></p>
                <p> <strong>Class Size: </strong><?php echo $item['size']; ?></p>
                <form method="post" action="http://localhost/phpsandbox/megadb/lecturehalls/viewactivity" >
          					<input type="hidden" name="hallid" value="<?php echo $item['id']; ?>">
          	    			<input class="btn btn-primary" type="submit" name="submit" value="View Activity">
          			</form>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
<!--
  <div class="panel-body">
  	 <table class="table table-striped table-hover table-bordered">
    <thead class="thead-dark">
      <tr class="table-info">
        <th class="text-center">Hall Number</th>
        <th class="text-center">Amount Of Chairs</th>
        <th class="text-center">Amount of Tables</th>
        <th class="text-center">Class Size</th>
        <th class="text-center"> Activities</th>
      </tr>
    </thead>
    <tbody>
      <?php // foreach($viewmodel as $item): ?>
      <tr class="text-center">
        <td class="text-primary"><?php echo $item['hall_number']; ?></td>
        <td class="text-primary"><?php echo $item['chairs']; ?></td>
        <td class="text-primary"><?php echo $item['tables']; ?></td>
        <td class="text-primary"><?php echo $item['size']; ?></td>
        <td>
      <form method="post" action="http://localhost/phpsandbox/megadb/lecturehalls/viewactivity" >
					<input type="hidden" name="hallid" value="<?php echo $item['hall_id']; ?>">
	    			<input class="btn btn-primary" type="submit" name="submit" value="View Activity">
			</form>
        </td>
      </tr>
      <?php // endforeach; ?>
    </tbody>
  </table>

  </div>

-->
</div>

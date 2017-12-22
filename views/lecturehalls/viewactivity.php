<?php if(isset($viewmodel[0])) :    ?>
  <h2 class="text-primary text-center">Hall Information</h2>

    <div class="panel-body">


      <h5 class="text-primary"> Number: <?php echo $viewmodel[0]['hall_number']; ?></h5>
      <h5 class="text-primary"> Status: <?php echo $viewmodel[0]['status']; ?></h5>
      <h5 class="text-primary"> Time: <?php echo $viewmodel[0]['time']; ?></h5>
      <a class="btn btn-primary" href="http://localhost/phpsandbox/megadb/lecturehalls/addactivity/"> Add Activity</a>
      <a class="btn btn-primary" href="http://localhost/phpsandbox/megadb/lecturehalls/"> Go Back</a>

  <div class="panel-body">
    <h3 class="text-center">All Activities In This Hall</h3>
  	 <table class="table table-striped table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Hall Number</th>
        <th>Teacher Name</th>
        <th>Status</th>
        <th>Comment</th>
        <th>time</th>
          <?php if($_SESSION['user_data']['status'] == "admin"): ?>
            <th>Delete</th>
          <?php endif; ?>
      </tr>
    </thead>
    <tbody>

      <tr>
        <?php foreach($viewmodel as $item): ?>
        <td class="text-primary"><?php echo $item['hall_number']; ?></td>
        <td class="text-primary"><?php echo $item['name']; ?></td>
        <td class="text-primary"><?php echo $item['status']; ?></td>
        <td class="text-primary"><?php echo $item['comment']; ?></td>
        <td class="text-primary"><?php echo $item['time']; ?></td>
        <?php if($_SESSION['user_data']['status'] == "admin"): ?>
        <td>
          <form method="post" action="http://localhost/phpsandbox/megadb/lecturehalls/delete" >
              <input type="hidden" name="selecthallid" value="<?php echo $item['selecthall_id']; ?>">
              <input type="hidden" name="hallid" value="<?php echo $item['hall_id']; ?>">
              <input class="btn btn-primary" type="submit" name="delete" value="Delete">
          </form>
        </td>
        <?php endif; ?>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  </div>
</div>
<?php else:  ?>
  <h2>There are no activities in this hall</h2>
  <a class="btn btn-primary" href="http://localhost/phpsandbox/megadb/lecturehalls/addactivity"> Add Activity</a>
  <a class="btn btn-primary" href="http://localhost/phpsandbox/megadb/lecturehalls"> Go Back</a>
<?php endif; ?>

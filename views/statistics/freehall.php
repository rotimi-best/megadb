<div class="page-header" id="banner">
<div class="row">
  <!-- *********************************** Column 1  *************************************  -->
      <div class="col-lg-4">
        <div class="bs-component">
          <div class="card">
            <h3 class="card-header">Free Halls</h3>
              <div class="card-body">
          <h5 class="card-title">You have <?php echo COUNT($viewmodel); ?> available halls</h5>
          <h6 class="card-subtitle text-muted">Click the link to know which one</h6>
        </div>
        <img style="height: 200px; width: 100%; display: block;" src="../assets/image/locked.jpg" alt="Card image">

        <a class="btn btn-danger" href="<?php echo ROOT_URL; ?>statistics/" >Go Back</a>

        <div class="card-footer text-muted  text-center">
         <p> <?php echo $_SESSION['user_data']['university_name']; ?>  </p>
        </div>
      </div>
      </div>
    </div>

    <div class="col-lg-8">
      <div class="bs-component">
        <table class="table table-striped table-hover table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>Hall Number</th>
              <th>Teacher Name</th>
              <th>Status</th>
              <th>Comment</th>
              <th>time</th>
              <th>Chairs</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($viewmodel as $item): ?>
            <tr>
              <td class="text-center text-primary">
                <form method="post" action="http://localhost/phpsandbox/megadb/lecturehalls/viewactivity" >
                    <input type="hidden" name="hallid" value="<?php echo $item['hall_id']; ?>">
                    <input class="btn btn-primary" type="submit" name="submit" value="<?php echo $item['hall_number']; ?>">
                </form>
              </td>
              <td class="text-primary"><?php echo $item['name']; ?></td>
              <td class="text-primary"><?php echo $item['status']; ?></td>
              <td class="text-primary"><?php echo $item['comment']; ?></td>
              <td class="text-primary"><?php echo $item['time']; ?></td>
              <td class="text-primary"><?php echo $item['chairs']; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

</div>
</div>
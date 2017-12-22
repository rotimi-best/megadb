<div class="panel panel-primary">

  <div class="text-center">
  <h1>All Teachers Details</h1>
  <h5 class="text-danger">You have a total of  <?php echo count($viewmodel); ?> teachers in your university</h5>
  <a class="btn btn-primary" href="http://localhost/phpsandbox/megadb/lecturehalls/"> Check Out All Classes</a>
  
  <?php if($_SESSION['user_data']['status'] == "admin"): ?>
  <a class="btn btn-primary" href="http://localhost/phpsandbox/megadb/teachers/addteacher/"> Add Teacher</a>
  <?php endif; ?>
</div>
<br> <br>
    <div class="row">
      <?php foreach($viewmodel as $item):  ?>

      <div class="col-lg-4">
        <div class="bs-component">
          
        <div class="card btn-outline-success">
          <?php $id = $item['id']; if ($id % 2 == 0 ): ?>
            <img style="height: 250px; width: 100%; display: block;" src="../assets/image/gates.jpg" alt="Card image">
            <?php else: ?>
            <img style="height: 250px; width: 100%; display: block;" src="../assets/image/Teachers/mark.jpg" alt="Card image">
          <?php endif; ?>
              <div class="card-body">
                  <p class="text-primary"> Name: <?php echo $item['name']; ?></p>
                  <p class="text-primary">Subject: <?php echo $item['subject']; ?></p>
                  <p class="text-primary">Phone Number:  <?php echo $item['phone']; ?></p>
                  <p class="text-primary">Email: <?php echo $item['email']; ?></p>
                </div>
                <div class="card-footer text-primary"><?php echo $_SESSION['user_data']['university_name']; ?></div>
        </div>
        
      </div>
    </div>
      <?php endforeach; ?>
    </div>
<!--
  <div class="panel-body">
     <br />
  	 <table class="table table-striped table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
        <th class="text-center">Name</th>
        <th class="text-center">Subject</th>
        <th class="text-center">Subject</th>
        <th class="text-center">Email</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach($viewmodel as $item): ?>
      <tr>
        <td class="text-primary"><?php echo $item['name']; ?></td>
        <td class="text-center text-primary"><?php echo $item['subject']; ?></td>
        <td class="text-center text-primary"><?php echo $item['phone']; ?></td>
        <td class="text-center text-primary"><?php echo $item['email']; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  </div>
-->
</div>

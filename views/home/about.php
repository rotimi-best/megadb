<div class="jumbotron">
  <div class="text-center">
    <h2 class="display-5"><?php echo $viewmodel[0]['university_name']; ?></h2>
    <h2 class="display-7">Founded By <?php echo $viewmodel[0]['founder_name']; ?></h2>
    <h2 class="display-7">You have <?php echo $viewmodel[0]['total_students']; ?> students</h2>
    <h2 class="display-7">Located at <?php echo $viewmodel[0]['address']; ?></h2><br><hr><br>
  </div>
  
<!-- This is special for the administrator -->
  <?php if($_SESSION['user_data']['status'] == "admin"): ?>
    <h5>You are an Administrator, you can add a new sub admin</h5>
    <a href="http://localhost/phpsandbox/megadb/home/newadmin" class="btn btn-primary">Add Sub Admin</a><br><br>  
  <h3>Site Administrators: </h3>
  <?php foreach($viewmodel as $item): ?>
    <?php if($_SESSION['user_data']['name'] == $item['user_name']): ?>

    <h5><p class="text-success">(YOU)</p>Name: <?php echo $item['first_name']; ?></h5>
    <h5 class="text-danger">Status: <?php echo $item['status']; ?></h5>
    <h5 class="text-primary">Username: <?php echo $item['user_name']; ?></h5>
    <h5 class="text-primary">Password: <?php echo $item['password']; ?></h5><hr>
  <?php else: ?>
    <h5>Name: <?php echo $item['first_name']; ?></h5>
    <h5 class="text-danger">Status: <?php echo $item['status']; ?></h5>
    <h5 class="text-primary">Username: <?php echo $item['user_name']; ?></h5>
    <h5 class="text-primary">Password: <?php echo $item['password']; ?></h5><hr>
  <?php endif; ?>
  <?php endforeach; ?> 
<!-- This is for the sub administrator -->
  <?php else: ?>
  <h3>Site Administrators: </h3>
  <?php foreach($viewmodel as $item): ?>
    <?php if($_SESSION['user_data']['name'] == $item['user_name']): ?>

    <h5><p class="text-success">(YOU)</p>Name: <?php echo $item['first_name']; ?></h5>
    <h5 class="text-danger">Status: <?php echo $item['status']; ?></h5>
    <h5 class="text-primary">Username: <?php echo $item['user_name']; ?></h5>
    <h5 class="text-primary">Password: <?php echo $item['password']; ?></h5><hr>
  <?php else: ?>
    <h5>Name: <?php echo $item['first_name']; ?></h5>
    <h5 class="text-danger">Status: <?php echo $item['status']; ?></h5>
    <h5 class="text-primary">Username: <?php echo $item['user_name']; ?></h5><hr>
  <?php endif; ?>
  <?php endforeach; ?>

  <?php endif; ?>
</div>
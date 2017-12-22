<div class="page-header" id="banner">
<div class="row">
  <!-- *********************************** Column 1  *************************************  -->
<div class="col-lg-4">
  <div class="bs-component">
    <div class="card">
      <h4 class="card-header">Free Halls</h4>
        <div class="card-body">
          <h5 class="card-title">Find out which halls are free</h5>
          <h6 class="card-subtitle text-muted">Click the link to know which one</h6>
        </div>
        <img style="height: 200px; width: 100%; display: block;" src="../assets/image/locked.jpg" alt="Card image">

        <a class="btn btn-success text-center" href="<?php echo ROOT_URL; ?>statistics/freehall" >See More</a>

        <div class="card-footer text-muted  text-center">
          <p> <?php echo $_SESSION['user_data']['university_name']; ?>  </p>
        </div>
    </div>
  </div>
</div>

  <!-- *********************************** Column 2  *************************************  -->

<div class="col-lg-4">
  <div class="bs-component">
    <div class="card">
      <h4 class="card-header">Busy Halls</h4>
        <div class="card-body">
          <h5 class="card-title">Check out your busy halls</h5>
        </div>
        <img style="height: 200px; width: 100%; display: block;" src="../assets/image/key.jpg" alt="Card image">
        <a class="btn btn-danger text-center" href="<?php echo ROOT_URL; ?>statistics/busyhall" >See More</a>
        <div class="card-footer text-muted  text-center">
          <p> <?php echo $_SESSION['user_data']['university_name']; ?>  </p>
        </div>
    </div>
  </div>
</div>
  <!-- *********************************** Column 3 *************************************  -->
<div class="col-lg-4">
  <div class="bs-component">
    <div class="card">
      <h4 class="card-header">Hall with More Chairs and Tables</h4>
      <div class="card-body">
        <h5 class="card-title"></h5>
      </div>
      <img style="height: 200px; width: 100%; display: block;" src="../assets/image/morechair.jpg" alt="Card image">
      <a class="btn btn-info text-center" href="<?php echo ROOT_URL; ?>statistics/maxchairtable" >See More</a>
      <div class="card-footer text-muted  text-center">
        <p> <?php echo $_SESSION['user_data']['university_name']; ?>  </p>
      </div>
    </div>
  </div>
</div>
  <!-- *********************************** Column 4  *************************************  -->
<div class="col-lg-4">
  <div class="bs-component">
    <div class="card">
      <h4 class="card-header">Hall with Few Chairs and Tables</h4>
      <div class="card-body">
        <h5 class="card-title"></h5>
      </div>
  <img style="height: 200px; width: 100%; display: block;" src="../assets/image/fewchair.jpg" alt="Card image">
  <a class="btn btn-info text-center" href="<?php echo ROOT_URL; ?>statistics/minchairtable" >See More</a>
  <div class="card-footer text-muted  text-center">
    <p> <?php echo $_SESSION['user_data']['university_name']; ?>  </p>
  </div>
</div>
</div>
</div>
  <!-- *********************************** Column 5  *************************************  -->
<div class="col-lg-4">
  <div class="bs-component">
    <div class="card">
      <h4 class="card-header">Teachers with Keys</h4>
      <div class="card-body">
        <h5 class="card-title">You have 6 Teachers still with the keys</h5>
      </div>
  <img style="height: 200px; width: 100%; display: block;" src="../assets/image/teacher.jpg" alt="Card image">
    <a class="btn btn-danger text-center" href="<?php echo ROOT_URL; ?>statistics/teacherwithkey" >See More</a>
  <div class="card-footer text-muted  text-center">
    <p> <?php echo $_SESSION['user_data']['university_name']; ?>  </p>
  </div>
</div>
</div>
</div>

</div>
</div>


<!-- *********************************** MODAL 1  *************************************  -->
<div id="freeHallModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Free Halls</h5>
          <div  class="close" data-dismiss="modal">&times;</div>
        
      </div>
      <div class="modal-body">
        <p class="text-primary"> In this university, this are all your free halls. Click on any of them to add an activity</p>
        <ul class="pagination">
          <?php foreach($viewmodel as $data): ?>
            <li class="text-primary page-item">
              <form method="post" action="http://localhost/phpsandbox/megadb/lecturehalls/viewactivity" >
                    <input type="hidden" name="hallid" value="<?php echo $data['hall_id']; ?>">
                    <input class="page-link" type="submit" name="submit" value="<?php echo $data['hall_number']; ?>">
                </form>

              <a class="" href="#">  </a> 

            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="modal-footer">
        <p> <?php echo $_SESSION['user_data']['university_name']; ?>  </p>
      </div>
    </div>
  </div>
</div>




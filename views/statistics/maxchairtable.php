<div class="page-header" id="banner">
  <div class="row">
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="card">
          <h3 class="card-header">Hall with More Chairs and Tables</h3>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <h6 class="card-subtitle text-muted">Click the link to know who</h6>
          </div>
          <img style="height: 250px; width: 100%; display: block;" src="../assets/image/morechair.jpg" alt="Card image">
            <a class="btn btn-danger" href="<?php echo ROOT_URL; ?>statistics/" >Go Back</a>
              <div class="card-footer text-muted  text-center">
                Powered By Ibitoye Best
              </div>
      </div>
      </div>
    </div>
    
    <div class="col-lg-8">
      <div class="bs-component">

        <table class="table table-striped table-hover table-bordered">
          <thead class="thead-dark">
            <tr>
              <th class="text-center">Hall Number</th>
              <th class="text-center">Chairs</th>
              <th class="text-center">Tables</th>
              <th class="text-center">Size</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach($viewmodel as $item): ?>
            <tr>
              <td class="text-center text-primary"><?php echo $item['hall_number']; ?></td>
              <td class="text-center text-primary"><?php echo $item['chairs']; ?></td>
              <td class="text-center text-primary"><?php echo $item['tables']; ?></td>
              <td class="text-center text-primary"><?php echo $item['size']; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        </div>
    </div>
  </div>
</div>
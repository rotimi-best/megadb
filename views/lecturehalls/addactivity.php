<div class="panel panel-primary">

  <h3 class="text-center">Add an Activity</h3>

  <div class="panel-body">
      <form method="post" action="<?php echo ROOT_URL; ?>lecturehalls/gotoview">
    <div class="form-group">
      <label class="text-primary" for="hall">Hall: </label>
      <select name="hall_id" class="form-control" id="hall" >
        <option class="text-primary" value=0>Please select</option>
        <?php foreach($viewmodel as $item) : ?>
          <?php if ($item['hall_number'] != '0') {?>
        <option name="hall_id" value="<?php echo $item['hall_id']; ?>"> <?php echo $item['hall_number']; ?> </option>
          <?php } ?>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label class="text-primary" for="teacher">Teacher: </label>
      <select name="teacher_id" class="form-control" id="teacher" >
        <option class="text-primary" value=0>Please select</option>

        <?php foreach($viewmodel as $item) : ?>
            <?php if ( $item['teacher_id'] != '0') {?>
        <option class="text-primary" value="<?php echo $item['teacher_id']; ?>"> <?php echo $item['teacher_name']; ?> </option>
            <?php }?>
        <?php endforeach; ?>

      </select>
  </div>
    <div class="form-group">
          <label class="text-primary" name="status" for="status">Status: </label><br>
        <div class="radio">
          <label class="text-primary"><input type="radio" id="status" name="status" value="Taken"> Taken </label><p>  </p>
          <label class="text-primary"><input type="radio" id="status" name="status" value="Returned"> Returned </label>
        </div>
    </div>
    <div class="form-group">
        <label class="text-primary" for="comment">Comment: </label>
        <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
    </div>
    <div class="form-group">
       <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </div>
    </form>
  </div>

</div>

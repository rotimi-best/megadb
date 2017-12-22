<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <fieldset>
    <h2 >Add A New Hall</h2>

    <div class="form-group text-primary">
      <label class="col-form-label" for="inputDefault">Hall Number</label>
      <input name="number" type="text" class="form-control" id="inputDefault" <?php if (!empty($_POST['submit'])) {echo "value=\"" . $_POST["number"] . "\"";} ?> >
    </div>

    <div class="form-group text-primary">
      <label class="col-form-label" for="inputDefault">Number Of Chairs</label>
      <input name="chair" type="text" class="form-control" id="inputDefault" <?php if (!empty($_POST['submit'])) {echo "value=\"" . $_POST["chair"] . "\"";} ?> > 
    </div>

    <div class="form-group text-primary">
      <label class="col-form-label" for="inputDefault">Number Of Tables</label>
      <input name="table" type="text" class="form-control" id="inputDefault" <?php if (!empty($_POST['submit'])) {echo "value=\"" . $_POST["table"] . "\"";} ?>  >
    </div>

    <div class="form-group text-primary">
      <label class="col-form-label" for="inputDefault">Size</label>
      <input type="text" name="size" class="form-control" id="inputDefault" <?php if (!empty($_POST['submit'])) {echo "value=\"" . $_POST["size"] . "\"";} ?> >
    </div>

    <div class="form-group">
       <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </div>
  </fieldset>
</form>
<br>

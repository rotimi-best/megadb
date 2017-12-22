<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <fieldset>
    <h2 >Add A New Sub Administrator</h2>

    <div class="form-group text-primary">
      <label class="col-form-label" for="inputDefault">First Name</label>
      <input placeholder="What is His first Name?" name="first_name" type="text" class="form-control" id="inputDefault">
    </div>

    <div class="form-group text-primary">
      <label class="col-form-label" for="inputDefault">User Name</label>
      <input placeholder="What is His user Name?" name="user_name" type="text" class="form-control" id="inputDefault">
    </div>

    <div class="form-group text-primary">
      <label class="col-form-label" for="inputDefault">Phone Number</label>
      <input placeholder="Let Give him/her a call" name="phone" type="text" class="form-control" id="inputDefault">
    </div>

    <div class="form-group">
       <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </div>
  </fieldset>
</form>
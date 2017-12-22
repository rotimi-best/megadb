<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <fieldset>
    <h2 >Add A New Teacher</h2>

    <div class="form-group text-primary">
      <label class="col-form-label" for="inputDefault">Teacher Name</label>
      <input placeholder="What is His Name?" name="name" type="text" class="form-control" id="inputDefault" <?php if (!empty($_POST['submit'])) {echo "value=\"" . $_POST["name"] . "\"";} ?> >
    </div>

    <div class="form-group text-primary">
      <label class="col-form-label" for="inputDefault">Subject</label>
      <input placeholder="Which subject does he teach?" name="subject" type="text" class="form-control" id="inputDefault" <?php if (!empty($_POST['submit'])) {echo "value=\"" . $_POST["subject"] . "\"";} ?>  >
    </div>

    <div class="form-group text-primary">
      <label class="col-form-label" for="inputDefault">Phone Number</label>
      <input placeholder="Let Give him/her a call" name="phone" type="text" class="form-control" id="inputDefault" <?php if (!empty($_POST['submit'])) {echo "value=\"" . $_POST["phone"] . "\"";} ?>  >
    </div>

    <div class="form-group text-primary">
      <label class="col-form-label" for="inputDefault">Email</label>
      <input placeholder="We need his working Email..." type="email" name="email" class="form-control" id="inputDefault" <?php if (!empty($_POST['submit'])) {echo "value=\"" . $_POST["email"] . "\"";} ?> >
    </div>

    <div class="form-group">
       <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </div>
  </fieldset>
</form>
<br>

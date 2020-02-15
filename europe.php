<?php 
  include 'header.php';
 ?>

 <h4>hello in europe</h4>
 <div class="container">
  <div class="row">
    <label class="label2">select a Country</label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text btn-primary" for="inputGroupSelect01">Countries</label>
      </div>
    <select class="custom-select" id="inputGroupSelect01">
      <option selected></option>
      <option value="1">Greece</option>
      <option value="2">Britain</option>
      <option value="3">Turkey</option>
      <option value="3">Roma</option>
    </select>
    </div>
  </div>
  <div class="row">
    <label class="label2">select a Testament</label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text btn-primary" for="inputGroupSelect01">Testaments</label>
      </div>
    <select class="custom-select" id="inputGroupSelect01">
      <option selected>Choose...</option>
      <option value="1">New</option>
      <option value="2">Old</option>
    </select>
    </div>
  </div>
  <div class="row">
    <div class="col-6 col-lg-4">
      <a  href="civils-page.php" type="submit" class="btn btn2 btn-outline-primary">Submit</a>
    </div>
  </div>
</div>

 <!--footer-->
 <?php 
  include 'footer.php';
 ?>
</body>
</html>
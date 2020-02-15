 <!--header-->
 <?php 
  include 'header.php';
 ?>

<h4>hello in asia</h4>
  <div class="container">
    <div class="row">
      <label class="label2">select a Country</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text btn-primary" for="inputGroupSelect01">Countries</label>
        </div>
      
      <select class="custom-select" id="country">
        <option selected></option>
        <option value="1">Iraq</option>
        <option value="2">Iran</option>
        <option value="3">Serya</option>
        <option value="3">China</option>
        <option value="3">India</option>
      </select>
      </div>
    </div>
    <div class="row">
      <label class="label2">select a Testament</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text btn-primary" for="inputGroupSelect01">Testaments</label>
        </div>
      <select class="custom-select" id="testament">
        <option selected></option>
        <option value="1">New</option>
        <option value="2">Old</option>
      </select>
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-lg-4">
        <a  href="civils-page.php" type="submit" id="submit" class="btn btn2 btn-outline-primary">Submit</a>
      </div>
    </div>
  </div>



 <!--footer-->
 <?php 
  include 'footer.php';
 ?>
</body>
</html>
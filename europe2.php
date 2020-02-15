 <!--header-->
 <?php 
  include 'header2.php';
 ?>

<h4>أهلا بك في اوربا</h4>
  <div class="container">
  <div class="row">
    <label class="label2">أختر دوله</label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text btn-primary" for="inputGroupSelect01">الدول</label>
      </div>
    <select class="custom-select" id="country">
      <option selected></option>
      <option value="1">اليونان</option>
      <option value="2">بريطانيا</option>
      <option value="3">تركيا</option>
      <option value="3">ايطاليا</option>
    </select>
    </div>
  </div>
  <div class="row">
    <label class="label2">أختر العهد</label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text btn-primary" for="inputGroupSelect01">العهود</label>
      </div>
    <select class="custom-select" id="testament">
      <option selected></option>
      <option value="1">الحديث</option>
      <option value="2">القديم</option>
    </select>
    </div>
  </div>
  <div class="row">
    <div class="col-6 col-lg-4">
      <a  href="civils-page2.php" type="submit" id="submit" class="btn btn2 btn-outline-primary">أذهب</a>
    </div>
  </div>
</div>

 <!--footer-->
 <?php 
  include 'footer2.php';
 ?>
</body>
</html>
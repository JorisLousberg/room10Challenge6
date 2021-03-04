<a href="cars.php"><div class="return">RETURN</div></a>
<div class="form">
  <form action="" enctype="multipart/form-data" method="post">
  <input type="text" name="tb_name" value="" placeholder="enter a car name"><br /> <!--name input -->
  <input type="text" name="tb_desc" value="" placeholder="enter a car description"><br /> <!--desc input -->
  <label for="foods">Choose a brand:</label><br /> <!--start brand part -->
  <select id="foods" name="tb_brand"><!--catagory list -->
    <option value="Toyota">Toyota</option> <!--        option 1-->
    <option value="Lexus">Lexus</option> <!--option 2-->
    <option value="Other">Other</option> <!--        option 3-->
  </select><br /> <!--END catagory list -->
  <input type="text" name="tb_price" value="" placeholder="enter a price"><br /> <!--price input -->
  <input type="file" name="file"/><br><br> <!--file uploader -->
  <input type="hidden" name="frmInsertMenuitem" value="frmInsertMenuitem"> <br /> <!--form data values -->
  <input type="submit" name="button_submit" value="versturen"> <!--data tranfer button -->
  </form>
</div>

<form action="" method="post" name="dataform" id="data-form" >

    <span id="sprytextfield1">
    <label for="userName">Name</label>
    <input type="text" name="userName" id="userName">
    <span class="textfieldRequiredMsg">A value is required.</span></span>
  
  	<span id="sprytextfield2">
    <label for="surname">Surname</label>
    <input type="text" name="surname" id="surname">
    <span class="textfieldRequiredMsg">A value is required.</span></span>
    
    <span id="sprytextfield3">
    <label for="city">City</label>
    <input type="text" name="city" id="city">
    <span class="textfieldRequiredMsg">A value is required.</span></span>
    
    <span id="sprytextfield4">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <span class="textfieldRequiredMsg">A value is required.</span></span>
    
    <span id="sprytextfield5">
    <label for="dob">Date of Birth</label>
    <input type="date" name="dob" id="dob">
    <span class="textfieldRequiredMsg">A value is required.</span></span>
    
    <span id="submit">
    <input type="submit" name="submit" value="Send" class="submit" />
  	</span>
</form>
 
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
	var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
</script>
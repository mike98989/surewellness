<?php get_header();?>
<div class="container">
<h5>Form Template</h5>
<div class="col-lg-7">   
<form name="customer_details" method="POST" onsubmit="return form_validation()" action="<?php $_SERVER['PHP_SELF'];?>">
Your Name: <input type="text" id="customer_name" required class="form-control" name="customer_name" /><br />
Your Email: <input type="text" id="customer_email" required class="form-control" name="customer_email" /><br />
Sex: <input type="radio" name="customer_sex" value="male">Male <input type="radio" name="customer_sex" value="female">Female<br />
Your Age: <input type="text" class="form-control" required id="customer_age" name="customer_age" /><br />
<input type="submit" class="btn btn-success" value="Submit"/>
</form>
</div> 
<script type="text/javascript">
function form_validation() {
/* Check the Customer Name for blank submission*/
var customer_name = document.forms["customer_details"]["customer_name"].value;
if (customer_name == "" || customer_name == null) {
alert("Name field must be filled.");
return false;
}

/* Check the Customer Email for invalid format */
var customer_email = document.forms["customer_details"]["customer_email"].value;
var at_position = customer_email.indexOf("@");
var dot_position = customer_email.lastIndexOf(".");
if (at_position<1 || dot_position<at_position+2 || dot_position+2>=customer_email.length) {
alert(“Given email address is not valid.");
return false;
}
}
</script>
</div>

</body>



<?php if(isset($_POST['customer_name'])){
echo "reach here";    
    
}?>
</html>

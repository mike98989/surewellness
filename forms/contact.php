<form method="post" action="<?php $_SERVER['PHP_SELF'];?>#contact" style="margin-bottom:20px" id="contact">


<div class="col-lg-6">
 <div class="g-recaptcha" data-sitekey="6Lf3Ey4UAAAAAK_Xm_FiZiuso_3KZvM6V6yRddmw"></div>
<label>Full Name</label>
<input type="text" class="form-control" name="fname" />

<label>Email</label>
<input type="email" class="form-control" name="email" />


<label>Mobile</label>
<input type="tel" class="form-control" name="mobile" />


<label>Company</label>
<input type="text" class="form-control" name="company" />


</div>

<div class="col-lg-6">
<label>When is the best time to contact you:</label><br/>
Morning: <input type="radio" class="" name="when_to_contact" value="1" checked="checked" />  Afternoon: <input type="radio"  class="" name="when_to_contact" value="2"/> Evening: <input type="radio"  class="" name="when_to_contact" value="3" />

<label>Services *</label>
<select class="form-control" id="state_id" name="services">
<option value="0">---SELECT SERVICE---</option>
<!---- PHP SCRIPT FOR LOOPING SERVICES--->
<?php  foreach($services as $grab){?>
<option value="<?php echo $grab['service'];?>"><?php echo $grab['service'];?></option>
<?php }?>
</select>

<label>Consultant *</label>
<select class="form-control" id="consultant_id" name="consultant_id">
<option value="0">---SELECT CONSULTANT---</option>
<!---- PHP SCRIPT FOR LOOPING CONSULTANT--->
<?php  foreach($consultants as $grab){?>
<option value="<?php echo $grab['ID'];?>"><?php echo $grab['agent_fname'].' '.$grab['agent_lname'];?></option>
<?php }?>
</select>

<label>Subject *</label>
<input type="text" class="form-control" name="subject" />

<label>Message *</label>
<textarea name="message" class="form-control"></textarea>

</div>
<input type="hidden" name="date" value="<?php echo date('Y-m-d h:i:A');?>"/>
<input type="hidden" name="type" value="contact"/>
<input type="submit" class="btn btn-success pull-right" style="margin-top:5px" value="SUBMIT" />

</form>

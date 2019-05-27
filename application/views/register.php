<head>
    <style>
    table {
    background-color: transparent;
    margin-top: 100px;
}
</style>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $( document ).ready(function() {
     $("#student").hide();
     $("#trainee").hide();
});

$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        if(inputValue == "stu"){
            $("#student").show();
            $("#trainee").hide();
            $("#student").reset();
        }else{
             $("#student").hide();
            $("#trainee").show();
            $("#trainee").reset();
        }
    });
});
</script>
    
		<?php echo @$error; ?>
</head>
<body>
    <div><input type="radio" value='stu' name="signup"><input type="radio" value='trainee' name="signup"></div>
<?php $this->load->view ('header'); ?>
	<form method="post" id='student'>
		<table width="600" align="center" cellspacing="5" cellpadding="5">
		
  <tr>
    <td width="230">Enter Your Name: </td>
    <td width="329"><input type="text" name="name"/></td>
  </tr>
  
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email"/></td>
  </tr>
  
  <tr>
    <td>Enter Your Password </td>
    <td><input type="password" name="pass"/></td>
  </tr>

  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="mobile"/></td>
  </tr>
  <tr>
    <td>Wats app number </td>
    <td><input type="text" name="mobile"/></td>
  </tr>
 
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="register" value="Register Me"/></td>
  </tr>
</table>

	</form>
    <form method="post" id='trainee'>
		<table width="600" align="center" cellspacing="5" cellpadding="5">
		
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="name"/></td>
  </tr>
  
  <tr>
    <td>Email Id:</td>
    <td><input type="text" name="email"/></td>
  </tr>
  
  <tr>
    <td>Enter Your Password </td>
    <td><input type="password" name="pass"/></td>
  </tr>

  <tr>
    <td>Mobile Number</td>
    <td><input type="text" name="mobile"/></td>
  </tr>
  <tr>
    <td>Watsapp Number </td>
    <td><input type="text" name="watsapp"/></td>
  </tr>
  
  <tr>
    <td>Institute Name:</td>
    <td><input type="text" name="institute"/></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="register_institute" value="Register Me"/></td>
  </tr>
</table>

	</form>
<?php $this->load->view ('footer');?>
</body>
</html>
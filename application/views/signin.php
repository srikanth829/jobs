<?php $this->load->view ('header'); ?>
<html>
<head>
<title>Login form</title>
    <style>
    table {
    background-color: transparent;
    margin-top: 100px;
}
</style>
    
</head>
 
<body>
 <form method="post">
<table width="600" align="center"  cellspacing="5" cellpadding="5">
 <tr>
 <td colspan="2"><?php echo @$error; ?></td>
 </tr>
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email"/></td>
 </tr>
 
 <tr>
    <td width="230">Enter Your Password </td>
    <td width="329"><input type="password" name="pass"/></td>
  </tr> 
   <tr>
    <td colspan="2" align="center">
 <input type="submit" name="login" value="Login"/></td>
  </tr>
</table>
 
 </form>
</body>
</html>
<?php $this->load->view ('footer');?>
<html>
  <head>
    <title>
      1st php
    </title>
    <link rel="stylesheet" href="style.css" >
  <script language="javascript">
  function validate(){
   var gname=document.reg.gname.value;
   var lname=document.reg.lname.value;
   var uname=document.reg.uname.value;
   var pwd=document.reg.pwd.value;
   var cnpwd=document.reg.cnpwd.value;
   var add=document.reg.adfeild.value;
   var eid=document.reg.eid.value;
   if(gname==''||lname==''||uname==''||pwd==''||cnpwd==''||add==''||eid==''){window.alert('complete the details'); return false;}
   else{return true;}
   }
  </script>
  </head>
<body>
<div class="simple-form">
<form id='registeration' name="reg" method="POST" onsubmit="return validate()" action='reg.php'>
<input type="text" name="gname" id='button' placeholder="first name" value="<?php echo isset($_POST['gname'])?$_POST['gname']:''?>"/><br><br>
<input type="text" name="lname" id='button' placeholder="last name" value="<?php echo isset($_POST['lname'])?$_POST['lname']:''?>" /><br><br>
<input type="text" name="uname"  id='button' placeholder="unique username" value="<?php echo isset($_POST['uname'])?$_POST['uname']:''?>" /><br><br>
<input type="password" name="pwd" id='button' placeholder="password"/><br><br>
<input type="password" name="cnpwd" id='button' placeholder="password again"/><br><br>
<textarea name="adfeild" cols='20' rows='10' id='button' placeholder="address" value="<?php echo isset($_POST['adfeild'])?$_POST['adfeild']:''?>" ></textarea><br><br>
<input type="text" name="eid" id='button' placeholder="email" value="<?php echo isset($_POST['eid'])?$_POST['eid']:''?>" /><br>
<input type="radio" name="radios" id="rd" value='male'/>&nbsp;&nbsp;&nbsp;&nbsp;<span id='but'>male</span>
<input type="radio" name="radios" id="rd" value='female'/>&nbsp;&nbsp;&nbsp;&nbsp;<span id='but'>female</span><br>
<input type="submit" name="SEND" id='butt' value='sign up'/><br>
</form>
</div>
</body>
</html>




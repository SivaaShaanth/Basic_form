<?php
include 'get_info.php';
$aValid = array('-', '_');

if(ctype_alnum(str_replace($aValid, '',$_SESSION["username"]))) {
    $a=1;
} 
if(strcmp($_SESSION["pass1"],$_SESSION["pass2"])==0)
  {$b=1;
  }
if (filter_var($_SESSION["mail"], FILTER_VALIDATE_EMAIL))
  $c=1;
if($a==$b and $b==$c and $a==1  )
  {
  header ("Location: thanks.php");
  }
else
  {?>
<!DOCTYPE html>
<html>
<body>
<div style="width:800px; height:800px; margin:0 auto;">
        <b >Enter the text that you want to process</b>
<br>
<form method="POST" action="login.php">
<table>
<tr>
<td>Name</td>
<td> <input name="r" value="<?php echo $_SESSION["username"]?>"  > </td><?php if($a==1){?> 
<td> <img src="green_tick.png " width="5%" height="5%"/> </td><?php } else{ ?> 
 <td> <img src="red_cross.png " width="5%" height="5%"/> </td> <?php } ?>
<br></tr>
<tr>
<td>Password</td><td><input name="s" value="<?php echo $_SESSION["pass1"]?>" > </td>
<br>
</tr>
<tr>
<td>Confirm password</td><td><input name="t" value="<?php echo $_SESSION["pass2"]?>" > </td><?php if($b==1){?> 
<td> <img src="green_tick.png " width="5%" height="5%"/> </td><?php } else{ ?> 
 <td> <img src="red_cross.png " width="5%" height="5%"/> </td> <?php } ?>
<br>
</tr>
<tr>
<td>e-Mail</td><td><input name="u" value="<?php echo $_SESSION["mail"]?>" ></td><?php if($c==1){?> 
<td> <img src="green_tick.png " width="5%" height="5%"/> </td><?php } else{ ?> 
 <td> <img src="red_cross.png " width="5%" height="5%"/> </td> <?php } ?>

<br>
</tr>
</table>
<input style="text-align:center" type="submit">
    </div>

</body>
</html>











 <?php }
  





?>

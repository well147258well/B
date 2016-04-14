<html>
<head>
	<title></title>
</head>
<body>

<h2>註冊使用者</h2>
<form action="" method="post">
<?php
function b3($numA,$numB)
{
if(isset($_POST['numA']) and isset($_POST['numB'])))  
  {  
  $numA = $_POST['numA'];  
  $numB = $_POST['numB'];  
  $end = b3($numA,$numB);
  }  

return $end
}

?>
<p>請輸入範圍下限:  
    <label>  
      <input type="text" name="numA" id="numA" />  
    </label>  
  </p>  
<p>請輸入範圍上限: 
    <label>  
      <input type="text" name="numB" id="numB" />  
    </label>  
  </p>  
  <p>  
    <label>  
      <input type="submit" value="運算">  
    </label>  
    <label>  
      <input type="reset" value="重新填寫">  
    </label>  
  </p>  
  <p>結果:  
    <label>  
      <input type="text" name="textfield" id="textfield" value="<?php echo $end;?>"/>  
    </label> 
</form>
</body>
</html>
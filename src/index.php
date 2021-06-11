<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome to Nims Server</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="wrap">
  <div id="top">
    <h1 id="sitename">Nims <em>Server</em> Directory list</h1>
    <div id="searchbar">
      <form action="#">
        <div id="searchfield">
          <input type="text" name="keyword" class="keyword" />
          <input class="searchbutton" type="image" src="server/images/searchgo.gif"  alt="search" />
        </div>
      </form>
    </div>
  </div>

<div class="background">
<div class="transbox">
<table width="100%" border="0" cellspacing="3" cellpadding="5" style="border:0px solid #333333;background: #F9F9F9;"> 
<tr>
<?php
//echo md5("saketbook007");

//File functuion DIR is used here.
$d = dir($_SERVER['DOCUMENT_ROOT']); 
$i=-1;
//Loop start with read function
while ($entry = $d->read()) {
if($entry == "." || $entry ==".."){
}else{
?>
<td  class="site" width="33%"><a href="<?php echo $entry;?>" ><?php echo ucfirst($entry); ?></a></td>  
<?php 
}
if($i%3 == 0){
echo "</tr><tr>";
}
$i++;
}?>
</tr> 
</table>

<?php $d->close();
?> 

</div>
</div>
</div>
   </div></div></body>
</html>
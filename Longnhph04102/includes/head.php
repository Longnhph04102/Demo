<?php
require("includes/config.php");

echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">' .
"\n" . '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi">' .
"\n" . '<head>' .
"\n" . '<title>SHOE STORE</title>' . 
"\n" . '<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8"/>' .
"\n" . '<meta http-equiv="Content-Style-Type" content="text/css" />' .
"\n" . '<meta http-equiv="Content-Language" content="vi" />' .
"\n" . '<meta name="robots" content="noodp,index,follow" />' . 
"\n" . '<meta name="language" content="Vietnamese" />' .
"\n" . '<link rel="stylesheet" href="css/style.css" type="text/css" />' .
"\n" . '<link rel="shortcut icon" href="' . $set['homeurl'] . '/images/favicon.ico" />' .
"\n" . '<meta name="revisit-after" content="1 days" />' .
"\n" . '</head>' .
"\n" . '<body>' . "\n";

echo '<div class="header">LONGNHPH04102</div>';

echo '<nav id="nav-1">
	<a class="link-1" href="khach-hang.php">Khách Hàng</a>
	<a class="link-1" href="hoa-don.php">Hóa Đơn</a>
	<a class="link-1" href="chi-tiet-hoa-don.php">Chi Tiết Hóa Đơn</a>
	<a class="link-1" href="san-pham.php">Sản Phẩm</a>
	<a class="link-1" href="index.php">Loại Sản Phẩm</a>
</nav>';

?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<h2 class="w3-center">Mercybeny Store</h2>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="images/06095727.jpg" width="980" height="415" />
  <img class="mySlides" src="images/ABC-Bejing-VM2.jpg" width="980" height="415">
  <img class="mySlides" src="images/ss3.jpg" width="980" height="415">
  <img class="mySlides" src="images/ss4.jpg" width="980" height="415">

  <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
  <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>


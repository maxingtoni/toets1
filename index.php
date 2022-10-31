<!DOCTYPE html>
<html>
<head>
<title>toets</title>
<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="middle" >
  <input style="float: left;" placeholder="Uw naam hier:" name="naam" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo htmlspecialchars($_POST['naam']); }?>">
  <input type="submit" style="float: right;" value="submit">
</form>
<footer>
            <input type="checkbox" id="checkBox" onclick="chBackcolor('lightBlue');">light blue
            <input type="checkbox" onclick="chBackcolor('lightcoral');">light red
            <input type="checkbox" onclick="chBackcolor('lightYellow');">light yellow
            <input type="checkbox" onclick="chBackcolor('lightGray');">light gray
        </footer>
    </body>
    <script>
            window.ondblclick=Background_change_color_dbl;

function Background_change_color_dbl()
{document.body.style.backgroundColor="white"}
       function chBackcolor(color) {
            document.body.style.background = color;
            window.localStorage.setItem('backgroundColor', color);
        }
        if (window.localStorage.getItem('backgroundColor')) {
            document.body.style.background = window.localStorage.getItem('backgroundColor');
        }
    </script>

</html>
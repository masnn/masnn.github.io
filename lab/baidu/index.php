<?php
if (!isset($_GET['q'])) header('location:search.html');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="renderer" content="webkit" charset="utf-8">
    <title>让我帮你百度一下</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="action.css">
    <script src="action.js"></script>
    <img id="mouse" src="mouse.png" style="position:absolute;top:0.0px;left:0.0px;z-index:99999999999;" />
    <center style="margin-top:50px;">
        <div id="logo">
            <img src="bdlogo.png" id="bdlogo" />
        </div>
        <div style="height:43px;margin-top:-25px;">
            <input type="text" id="bds" autocomplete="off" readonly maxlength="100" />
            <span class="btn_wr"><input type="submit" value="百度一下" class="btn"></span>
        </div>
        <div id="instructions">首先，打开百度</div>
    </center>
<footer></footer>
</body>
</html>
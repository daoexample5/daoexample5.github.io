<html>
<head>
    <title>DaoExample</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="./js/device.js"></script>
    <script defer src='./js/daopush-init.js'></script>
</head>
<body>
    <a class='top' href='https://daopush.com'>
        <img class='picture' src="./img/dao.jpg">
    </a> 
<script>
    device.mobile();
    if (document.querySelector('.mobile')) document.querySelector('.picture').setAttribute('src','./img/dao_m.jpg');
</script>
</body>
</html>
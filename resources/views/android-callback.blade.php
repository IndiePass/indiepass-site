<?php
$code = isset($_GET['code']) ? $_GET['code'] : '';
$state = isset($_GET['state']) ? $_GET['state'] : '';
$url = 'indigenous-android://oauthcallback?code=' . $code . '&state=' . $state;
?>
<html>
<head>
    <title>IndiePass</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="refresh" content="0; url=<?php print $url; ?>"/>
    <style>body {
            text-align: center;
            font-family: sans-serif;
            background: rgb(198, 40, 40);
            color: rgb(255, 255, 255);
            padding-top: 5%;
        }

        a {
            color: rgb(255, 255, 255);
            font-weight: bold;
        }</style>
    <script src="https://cdn.usefathom.com/script.js" data-site="UUTHFTSN" defer></script>
</head>
<body>
<h1>IndiePass OAuth Sign in.</h1>
<br/><br/>
If IndiePass is not opening, <a href="<?php echo $url; ?>">click here</a>
</body>
</html>

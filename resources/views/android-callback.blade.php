<?php
$code = isset($_GET['code']) ? $_GET['code'] : '';
$state = isset($_GET['state']) ? $_GET['state'] : '';
$url = 'indigenous-android://oauthcallback?code=' . $code . '&state=' . $state;
?>
<html>
<head>
  <title>Indigenous for Android</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="refresh" content="0; url=<?php print $url; ?>" />
  <style>
    body {
      text-align: center;
      font-family: sans-serif;
      background: #D54049;
      color: #fff;
      text-align: center;
      padding-top: 5%;
    }
    a {
      color: #fff;
      font-weight: bold;
    }
    </style>
</head>
<body>

<h1>Indigenous OAuth Sign in.</h1>
<br /><br />
If Indigenous is not opening, <a href="<?php echo $url; ?>">click here</a>


</body>
</html>

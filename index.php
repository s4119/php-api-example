<!doctype html>
<html>
<head>
<title>API</title>
<link rel="icon" href="https://www.php.net/images/logos/php_script.ico">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
}
a {
    text-decoration: none;
}
</style>
</head>
<body class="w3-display-container">
<div class="w3-container w3-teal w3-padding-16">
  &nbsp;<img src="https://www.php.net/images/logos/php_script.ico"> <h1>Basic PHP API Reference</h1>
</div>
<div class="w3-padding-16"></div>
<ul class="w3-ul w3-padding-16 w3-container">
<li><b><a href="/api/v1/getNumber">/v1/getNumber</a></b> - get a random number, like on the home page.</li>
<li><b><a href="/api/v1/getString">/v1/getString</a></b> - get a random 16-character string</li>
<li><b><a href="/api/v1/getVersion">/v1/getVersion</a></b> - get the current PHP version the server is using (not the client)</li>
<li><b><a href="/api/v1/getIPv4">/v1/getIPv4</a></b> - get the public IPv4 address being used by the client (not the server)</li>
<li><b><a href="/api/v1/textImage?text=YOURTEXT">/v1/textImage?text=YOURTEXT</a></b> - generates an image from the text given (about 34 characters max)</li>
<li><b><a href="/api/v1/reverseString?content=YOURTEXT">/v1/reverseString?content=YOURTEXT</a></b> - reverses a string given by the user.
<li><b><a href="/api/v1/binaryString?content=YOURTEXT">/v1/binaryString?content=YOURTEXT</a></b> - converts a given string to binary string</li>

</ul>

<div class="footer w3-container w3-teal"><h4>The API returns raw JSON files</h4><h6>made by s4119 / <a href="https://codeberg.org/virtuedev/php-api-example">source code</a></h6></div>




</body>
</html>
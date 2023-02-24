<?php
    if (isset($_GET['email'])) 
        $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
    if (isset($_GET['xss'])) 
        $xss = htmlspecialchars($_GET['xss']);
    if (isset($_GET['path'])) {
        $path = $_GET['path'];
        while(strpos($path,'../') !== false) {
            $path = str_replace('../', '', $path) ;
            if(isset($_GET['debug'])) {
                echo '[DEBUG] Removed \'../\'. New path is ';
                echo htmlspecialchars($path);
}}} ?>
<?php
    header("content-security-policy:default-src 'none'");
?>
<h1>Sanitization as a Service </h1>
<p>We are revolutionizing the world of sanitization!
<br>Just submit the string you want sanitized,
and we'll do all the hard work!</p>
<h6>Here's your sanitized string:</h6>
<p>Email: <?php echo $email; ?></p>
<p>Xss: <?php echo $xss; ?></p>
<p>Path: <?php echo $path; ?></p>
<?php
require_once('src/facebook/autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '358204998052801', // Replace {app-id} with your app id
    'app_secret' => '95224c95fdf35d41be5a6e4ed04b1e78',
    'default_graph_version' => 'v3.1',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://joshsohn.co/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';


?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<a href="<?=htmlspecialchars($loginUrl);?>">Log in with Facebook!</a>

</body>
</html>


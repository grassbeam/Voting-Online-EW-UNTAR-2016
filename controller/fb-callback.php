     <?php
     // ini_set(session.save_path, getcwd() . "/tmp"); //used
     // ini_set('display_errors', 1);
     //ini_set('session.gc_maxlifetime', 1800);
     //session_set_cookie_params(1800);
     session_start();
     require '../apps/SNS-Login/Facebook/autoload.php';
     
     $fb = new Facebook\Facebook([
     'app_id' => '638137386351394', // Replace '884904961606970' with your app id
     'app_secret' => '16370c21776fa3d642ed7b92ca775db0',
     'default_graph_version' => 'v2.2',
     ]);
     
     $helper = $fb->getRedirectLoginHelper();
     
     try {
     $accessToken = $helper->getAccessToken();
     } catch(Facebook\Exceptions\FacebookResponseException $e) {
     // When Graph returns an error
     echo 'Graph returned an error: ' . $e->getMessage();
     exit;
     } catch(Facebook\Exceptions\FacebookSDKException $e) {
     // When validation fails or other local issues
     echo 'Facebook SDK returned an error: ' . $e->getMessage();
     exit;
     }
     
     if (! isset($accessToken)) {
     if ($helper->getError()) {
     header('HTTP/1.0 401 Unauthorized');
     echo "Error: " . $helper->getError() . "\n";
     echo "Error Code: " . $helper->getErrorCode() . "\n";
     echo "Error Reason: " . $helper->getErrorReason() . "\n";
     echo "Error Description: " . $helper->getErrorDescription() . "\n";
     } else {
     header('HTTP/1.0 400 Bad Request');
     echo 'Bad request';
     }
     exit;
     }
     
     // Logged in /////////////////////
     //echo '<h3>Access Token</h3>';
     //var_dump($accessToken->getValue());
     
     // The OAuth 2.0 client handler helps us manage access tokens
     $oAuth2Client = $fb->getOAuth2Client();
     
     // Get the access token metadata from /debug_token
     $tokenMetadata = $oAuth2Client->debugToken($accessToken);
     //echo '<h3>Metadata</h3>';
     //var_dump($tokenMetadata);
     
     // Validation (these will throw FacebookSDKException's when they fail)
     $tokenMetadata->validateAppId('638137386351394'); // Replace '884904961606970' with your app id
     // If you know the user ID this access token belongs to, you can validate it here
     //$tokenMetadata->validateUserId('123');
     $tokenMetadata->validateExpiration();
     
     if (! $accessToken->isLongLived()) {
     // Exchanges a short-lived access token for a long-lived one
     try {
     $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
     } catch (Facebook\Exceptions\FacebookSDKException $e) {
     echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
     exit;
     }
     
     //echo '<h3>Long-lived</h3>';
     //var_dump($accessToken->getValue());
     }
     
     $_SESSION['fb_access_token'] = (string) $accessToken;

     //echo '<br/>';
     $asem = (string) $accessToken->getValue();
     //echo $asem;
     //echo '<br/>';
     $kamprets = $tokenMetadata->getUserId();
     //echo $kamprets;
     
// getting facebook name and email ///////////////////////     
try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name,email', $asem);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();

//echo '<br/>Name: ' . $user['name'];
//echo '<br/>Email:' . $user['email'];
$_SESSION['fb-logined'] = 'true';
$_SESSION['fb-token'] = $asem;
$_SESSION['fb-userid'] = $kamprets;
$_SESSION['fb-name'] = $user['name'];
$_SESSION['fb-email'] = $user['email'];
echo "<script>window.close();</script>";
     // User is logged in with a long-lived access token.
     // You can redirect them to a members-only page.
     //header('Location: https://example.com/members.php');
     
     
     ?>

    <?php
    session_start();
    require '../apps/SNS-Login/Facebook/autoload.php';
     
    $fb = new Facebook\Facebook([
  'app_id' => '638137386351394', // Replace {app-id} with your app id
  'app_secret' => '16370c21776fa3d642ed7b92ca775db0',
  'default_graph_version' => 'v2.2',
  ]);

    $_SESSION['fb-logined'] = 'false';

    $helper = $fb->getRedirectLoginHelper();

    $permissions = ['email', 'public_profile']; // Optional permissions

    //URL http://localhost/ harus di setting di API developer FB nya
    $loginUrl = $helper->getLoginUrl('http://snti.untar.ac.id/ew2016/voting/controller/fb-callback.php', $permissions);

    header('Location: '.$loginUrl);
    //header('Location: ' . 'detik.com');
    ?>
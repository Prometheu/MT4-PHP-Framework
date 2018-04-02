<?php
  function call($controller, $action){
    // require the file that matches the controller name
    $require = 'Controllers/'. $controller .'_Controller.php';

    require_once($require);

    switch ($controller) {
      case 'base':
        $controller = new baseController();
        break;
      
      case 'user':
        require_once('Models/user.php');
        $controller = new userController();
        break;

      case 'devices':
        require_once('Models/device.php');
        $controller = new devicesController();
        break;

      case 'encryption':
        require_once('Models/encryption.php');
        $controller = new encryptionController();
        break;

      case 'hash':
        require_once('Models/hash.php');
        $controller = new hashController();
        break;

      case 'ssh':        
        require_once('Models/device.php');
        require_once('Models/ssh.php');
        $controller = new SSH_Controller();
        break;
    }

    $controller->{ $action }();

  }

  // just a list of the controllers we have and their actions
  // we consider those "allowed" values
  $controllers = array('base' => [ 'login',
                                   'auth',
                                   'home',
                                   'error',
                                   'teste'],
                       'user' => ['index','userToBase'],
                       'devices' => ['index',
                                     'listDevices',
                                     'registerDevice','registerOnBase',
                                     'alterDevice','alterDeviceOnBase',
                                     'removeDevice','removeDeviceOnBase'
                                    ],
                       'encryption' =>['index',
                                    'encrypt',
                                    'decrypt'],
                       'hash' =>['index',
                                 'doHash'],
                       'ssh' =>['index',
                                'login',
                                'respond',
                                'sshcommands']);

  // check that the requested controller and action are both allowed
  // if someone tries to access something else he will be redirected to the error action of the base controller
  if (array_key_exists($controller, $controllers)){
    if (in_array($action, $controllers[$controller])){
      call($controller, $action);
    }else{
      call('base', 'error');
    }
  }else{
    call('base', 'error');
  }
?>
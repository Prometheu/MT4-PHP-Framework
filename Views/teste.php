<?php

set_include_path(get_include_path().'public/libs/phpsec/');

include_once('Net/SSH2.php');

$ssh = new Net_SSH2('www.domain.tld');
if (!$ssh->login('username', 'password')) {
    exit('Login Failed');
}

echo $ssh->read('username@username:~$');
$ssh->write("ls -la\n"); // note the "\n"
echo $ssh->read('username@username:~$');
?>
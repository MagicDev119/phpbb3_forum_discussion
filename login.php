<?php

// phpBB inclusion protection
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
require($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);

if ($user->data['is_registered'])
{
    redirect('http://www.example.com/profile');
}
else
{
    //$autologin    = $request->is_set_post('autologin');
    $admin      = ($admin) ? 1 : 0;

    // Check if the supplied username is equal to the one stored within the database if re-authenticating
    if ($admin && utf8_clean_string($username) != utf8_clean_string($user->data['username']))
    {
        // We log the attempt to use a different username...
        add_log('admin', 'LOG_ADMIN_AUTH_FAIL');
        trigger_error('NO_AUTH_ADMIN_USER_DIFFER');
    }

    // If authentication is successful we redirect user to previous page
    // $result = $auth->login($username, $password, $autologin, $viewonline, $admin);
    $result = $auth->login('','');

    // The result parameter is always an array, holding the relevant information...
    if ($result['status'] == LOGIN_SUCCESS)
    {
        redirect('http://www.example.com/profile');
    }
}
?>
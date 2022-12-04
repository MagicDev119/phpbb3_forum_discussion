<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

namespace phpbb\auth\provider;

use phpbb\captcha\factory;
use phpbb\captcha\plugins\captcha_abstract;
use phpbb\config\config;
use phpbb\db\driver\driver_interface;
use phpbb\passwords\manager;
use phpbb\request\request_interface;
use phpbb\user;

/**
 * Database authentication provider for phpBB3
 * This is for authentication via the integrated user table
 */
class db extends base
{
	/** @var factory CAPTCHA factory */
	protected $captcha_factory;

	/** @var config phpBB config */
	protected $config;

	/** @var driver_interface DBAL driver instance */
	protected $db;

	/** @var request_interface Request object */
	protected $request;

	/** @var user User object */
	protected $user;

	/** @var string phpBB root path */
	protected $phpbb_root_path;

	/** @var string PHP file extension */
	protected $php_ext;

	/**
	* phpBB passwords manager
	*
	* @var manager
	*/
	protected $passwords_manager;

	/**
	 * Database Authentication Constructor
	 *
	 * @param factory $captcha_factory
	 * @param	config 		$config
	 * @param	driver_interface		$db
	 * @param	manager	$passwords_manager
	 * @param	request_interface		$request
	 * @param	user			$user
	 * @param	string				$phpbb_root_path
	 * @param	string				$php_ext
	 */
	public function __construct(factory $captcha_factory, config $config, driver_interface $db, manager $passwords_manager, request_interface $request, user $user, $phpbb_root_path, $php_ext)
	{
		$this->captcha_factory = $captcha_factory;
		$this->config = $config;
		$this->db = $db;
		$this->passwords_manager = $passwords_manager;
		$this->request = $request;
		$this->user = $user;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $php_ext;
	}

	public function httpPost($username, $password) 
	{
		$postfields = array('email' => $username, 'password' => $password);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://www.staging.wellnessherbs.com/index.php?route=api/customer_login/login');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		// Edit: prior variable $postFields should be $postfields;
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // On dev server only!
		$result = curl_exec($ch);
		try {
      $result = json_decode($result);
      if (!$result) {
        $result = (object) array('code' => 403);
      }
    }
    catch(Exception $e) {
      $result = (object) array('code' => 403);
    }
		return $result;
	}
	/*
	{
    "code": 200,
    "message": "Success: You are logging in...!",
    "data": {
        "uid": "1300",
        "firstname": "Adrian",
        "lastname": "Melnykovych",
        "fullname": "Adrian Melnykovych",
        "email": "melnykovychadrian@gmail.com",
        "telephone": "+380961365517",
        "token": ""
    },
    "errors": []
}*/
	/**
	 * {@inheritdoc}
	 */
	public function login($username, $password)
	{
		// Auth plugins get the password untrimmed.
		// For compatibility we trim() here.
		$password = trim($password);

		// do not allow empty password
		if (!$password)
		{
			return array(
				'status'	=> LOGIN_ERROR_PASSWORD,
				'error_msg'	=> 'NO_PASSWORD_SUPPLIED',
				'user_row'	=> array('user_id' => ANONYMOUS),
			);
		}

		if (!$username)
		{
			return array(
				'status'	=> LOGIN_ERROR_USERNAME,
				'error_msg'	=> 'LOGIN_ERROR_USERNAME',
				'user_row'	=> array('user_id' => ANONYMOUS),
			);
		}

		$username_clean = utf8_clean_string($username);

		$sql = 'SELECT *
			FROM ' . USERS_TABLE . "
			WHERE username_clean = '" . $this->db->sql_escape($username_clean) . "'";
		$result = $this->db->sql_query($sql);
		$row = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		if (strpos($username, '@') !== false) {
			
			$apiResult = $this->httpPost($username, $password);
			// $apiResult = (object) array('code' => 200);

			if ($apiResult->code == 200) {
				$useremail = $username;
				$username = explode('@', $username);
				$username = $username[0];
				$username_clean = utf8_clean_string($username);
				$sql = 'SELECT *
					FROM ' . USERS_TABLE . "
					WHERE username_clean = '" . $this->db->sql_escape($username_clean) . "'";
				$result = $this->db->sql_query($sql);
				$row = $this->db->sql_fetchrow($result);
				$this->db->sql_freeresult($result);

				if (!$row) {
					$curTime = time();

					$newHash = $this->passwords_manager->hash($password);

					$sql_ary = array("username" => $username, "username_clean" => $username_clean, "user_password" => $this->db->sql_escape($newHash), "user_email" => $useremail, "group_id" => 2, "user_type" => 0, "user_permissions" => "", "user_timezone" => "UTC", "user_dateformat" => "D M d, Y g:i a", "user_lang" => "en", "user_style" => 2, "user_actkey" => "", "user_ip" => "::1", "user_regdate" => $curTime, "user_passchg" => $curTime, "user_options" => 230271, "user_new" => 1, "user_inactive_reason" => 0, "user_inactive_time" => 0, "user_lastmark" => $curTime, "user_lastvisit" => 0, "user_lastpost_time" => 0, "user_lastpage" => "", "user_posts" => 0, "user_colour" => "", "user_avatar" => "", "user_avatar_type" => "", "user_avatar_width" => 0, "user_avatar_height" => 0, "user_new_privmsg" => 0, "user_unread_privmsg" => 0, "user_last_privmsg" => 0, "user_message_rules" => 0, "user_full_folder" => -3, "user_emailtime" => 0, "user_notify" => 0, "user_notify_pm" => 1, "user_notify_type" => 0, "user_allow_pm" => 1, "user_allow_viewonline" => 1, "user_allow_viewemail" => 1, "user_allow_massemail" => 1, "user_sig" => "", "user_sig_bbcode_uid" => "", "user_sig_bbcode_bitfield" => "", "user_form_salt" => unique_id());

					$sql = 'INSERT INTO ' . USERS_TABLE . ' ' . $this->db->sql_build_array('INSERT', $sql_ary);

					$this->db->sql_query($sql);

					$user_id = $this->db->sql_nextid();

					$sql = 'INSERT INTO ' . USER_GROUP_TABLE . ' ' . $this->db->sql_build_array('INSERT', array(
						'user_id'		=> (int) $user_id,
						'group_id'		=> 2,
						'user_pending'	=> 0)
					);
					$this->db->sql_query($sql);

					// Now make it the users default group...
					group_set_user_default(2, array($user_id), false);

					// Add to newly registered users group if user_new is 1
					if ($this->config['new_member_post_limit'] && $sql_ary['user_new'])
					{
						$sql = 'SELECT group_id
							FROM ' . GROUPS_TABLE . "
							WHERE group_name = 'NEWLY_REGISTERED'
								AND group_type = " . GROUP_SPECIAL;
						$result = $this->db->sql_query($sql);
						$add_group_id = (int) $this->db->sql_fetchfield('group_id');
						$this->db->sql_freeresult($result);

						if ($add_group_id)
						{
							global $phpbb_log;

							// Because these actions only fill the log unnecessarily, we disable it
							$phpbb_log->disable('admin');

							// Add user to "newly registered users" group and set to default group if admin specified so.
							if ($this->config['new_member_group_default'])
							{
								group_user_add($add_group_id, $user_id, false, false, true);
								$sql_ary['group_id'] = $add_group_id;
							}
							else
							{
								group_user_add($add_group_id, $user_id);
							}

							$phpbb_log->enable('admin');
						}
					}

					// set the newest user and adjust the user count if the user is a normal user and no activation mail is sent
					if ($sql_ary['user_type'] == USER_NORMAL || $sql_ary['user_type'] == USER_FOUNDER)
					{
						$this->config->set('newest_user_id', $user_id, false);
						$this->config->set('newest_username', $sql_ary['username'], false);
						$this->config->increment('num_users', 1, false);

						$sql = 'SELECT group_colour
							FROM ' . GROUPS_TABLE . '
							WHERE group_id = ' . (int) $sql_ary['group_id'];
						$result = $this->db->sql_query_limit($sql, 1);
						$row = $this->db->sql_fetchrow($result);
						$this->db->sql_freeresult($result);

						$this->config->set('newest_user_colour', $row['group_colour'], false);
					}

					$sql = 'SELECT *
						FROM ' . USERS_TABLE . "
						WHERE username_clean = '" . $this->db->sql_escape($username_clean) . "'";
					$result = $this->db->sql_query($sql);
					$row = $this->db->sql_fetchrow($result);
					$this->db->sql_freeresult($result);
				} else {
					$newHash = $this->passwords_manager->hash($password);

					// Update the password in the users table to the new format
					$sql = 'UPDATE ' . USERS_TABLE . "
						SET user_password = '" . $this->db->sql_escape($newHash) . "'
						WHERE user_id = {$row['user_id']}";
					$this->db->sql_query($sql);
					$row['user_password'] = $newHash;
				}
			} else {
				$sql = 'SELECT *
					FROM ' . USERS_TABLE . "
					WHERE username_clean = 'fsdahf@#SADF^DRT%^d12345'";
				$result = $this->db->sql_query($sql);
				$row = $this->db->sql_fetchrow($result);
				$this->db->sql_freeresult($result);
			}
		} else {

		}

		if (($this->user->ip && !$this->config['ip_login_limit_use_forwarded']) ||
			($this->user->forwarded_for && $this->config['ip_login_limit_use_forwarded']))
		{
			$sql = 'SELECT COUNT(*) AS attempts
				FROM ' . LOGIN_ATTEMPT_TABLE . '
				WHERE attempt_time > ' . (time() - (int) $this->config['ip_login_limit_time']);
			if ($this->config['ip_login_limit_use_forwarded'])
			{
				$sql .= " AND attempt_forwarded_for = '" . $this->db->sql_escape($this->user->forwarded_for) . "'";
			}
			else
			{
				$sql .= " AND attempt_ip = '" . $this->db->sql_escape($this->user->ip) . "' ";
			}

			$result = $this->db->sql_query($sql);
			$attempts = (int) $this->db->sql_fetchfield('attempts');
			$this->db->sql_freeresult($result);

			$attempt_data = array(
				'attempt_ip'			=> $this->user->ip,
				'attempt_browser'		=> trim(substr($this->user->browser, 0, 149)),
				'attempt_forwarded_for'	=> $this->user->forwarded_for,
				'attempt_time'			=> time(),
				'user_id'				=> ($row) ? (int) $row['user_id'] : 0,
				'username'				=> $username,
				'username_clean'		=> $username_clean,
			);
			$sql = 'INSERT INTO ' . LOGIN_ATTEMPT_TABLE . $this->db->sql_build_array('INSERT', $attempt_data);
			$this->db->sql_query($sql);
		}
		else
		{
			$attempts = 0;
		}

		$login_error_attempts = 'LOGIN_ERROR_ATTEMPTS';

		$user_login_attempts	= (is_array($row) && $this->config['max_login_attempts'] && $row['user_login_attempts'] >= $this->config['max_login_attempts']);
		$ip_login_attempts		= ($this->config['ip_login_limit_max'] && $attempts >= $this->config['ip_login_limit_max']);

		$show_captcha = $user_login_attempts || $ip_login_attempts;

		if ($show_captcha)
		{
			$captcha = $this->captcha_factory->get_instance($this->config['captcha_plugin']);

			// Get custom message for login error when exceeding maximum number of attempts
			if ($captcha instanceof captcha_abstract)
			{
				$login_error_attempts = $captcha->get_login_error_attempts();
			}
		}

		if (!$row)
		{
			if ($this->config['ip_login_limit_max'] && $attempts >= $this->config['ip_login_limit_max'])
			{
				return array(
					'status'		=> LOGIN_ERROR_ATTEMPTS,
					'error_msg'		=> $login_error_attempts,
					'user_row'		=> array('user_id' => ANONYMOUS),
				);
			}

			return array(
				'status'	=> LOGIN_ERROR_USERNAME,
				'error_msg'	=> 'LOGIN_ERROR_USERNAME',
				'user_row'	=> array('user_id' => ANONYMOUS),
			);
		}

		// If there are too many login attempts, we need to check for a confirm image
		// Every auth module is able to define what to do by itself...
		if ($show_captcha)
		{
			$captcha->init(CONFIRM_LOGIN);
			$vc_response = $captcha->validate($row);
			if ($vc_response)
			{
				return array(
					'status'		=> LOGIN_ERROR_ATTEMPTS,
					'error_msg'		=> $login_error_attempts,
					'user_row'		=> $row,
				);
			}
			else
			{
				$captcha->reset();
			}

		}

		// Check password ...
		if ($this->passwords_manager->check($password, $row['user_password'], $row))
		{
			// Check for old password hash...
			if ($this->passwords_manager->convert_flag || strlen($row['user_password']) == 32)
			{
				$hash = $this->passwords_manager->hash($password);

				// Update the password in the users table to the new format
				$sql = 'UPDATE ' . USERS_TABLE . "
					SET user_password = '" . $this->db->sql_escape($hash) . "'
					WHERE user_id = {$row['user_id']}";
				$this->db->sql_query($sql);

				$row['user_password'] = $hash;
			}

			$sql = 'DELETE FROM ' . LOGIN_ATTEMPT_TABLE . '
				WHERE user_id = ' . $row['user_id'];
			$this->db->sql_query($sql);

			if ($row['user_login_attempts'] != 0)
			{
				// Successful, reset login attempts (the user passed all stages)
				$sql = 'UPDATE ' . USERS_TABLE . '
					SET user_login_attempts = 0
					WHERE user_id = ' . $row['user_id'];
				$this->db->sql_query($sql);
			}

			// User inactive...
			if ($row['user_type'] == USER_INACTIVE || $row['user_type'] == USER_IGNORE)
			{
				return array(
					'status'		=> LOGIN_ERROR_ACTIVE,
					'error_msg'		=> 'ACTIVE_ERROR',
					'user_row'		=> $row,
				);
			}

			// Successful login... set user_login_attempts to zero...
			return array(
				'status'		=> LOGIN_SUCCESS,
				'error_msg'		=> false,
				'user_row'		=> $row,
			);
		}

		// Password incorrect - increase login attempts
		$sql = 'UPDATE ' . USERS_TABLE . '
			SET user_login_attempts = user_login_attempts + 1
			WHERE user_id = ' . (int) $row['user_id'] . '
				AND user_login_attempts < ' . LOGIN_ATTEMPTS_MAX;
		$this->db->sql_query($sql);

		// Give status about wrong password...
		return array(
			'status'		=> ($show_captcha) ? LOGIN_ERROR_ATTEMPTS : LOGIN_ERROR_PASSWORD,
			'error_msg'		=> 'LOGIN_ERROR_PASSWORD',
			'user_row'		=> $row,
		);
	}
}

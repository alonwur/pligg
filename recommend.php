<?php
// The source code packaged with this file is Free Software, Copyright (C) 2005 by
// Ricardo Galli <gallir at uib dot es>.
// It's licensed under the AFFERO GENERAL PUBLIC LICENSE unless stated otherwise.
// You can get copies of the licenses here:
// 		http://www.affero.org/oagpl.html
// AFFERO GENERAL PUBLIC LICENSE is also included in the file called "COPYING".

include_once('Smarty.class.php');
$main_smarty = new Smarty;

include('config.php');
include(mnminclude.'html1.php');
include(mnminclude.'link.php');
include(mnminclude.'smartyvariables.php');
include(mnminclude.'csrf.php');

check_referrer();
$CSRF = new csrf();

if(!isset($_POST['email_to_submit'])){ // we're not submitting the form
	$CSRF->create('recommend', true, true);
	if($_POST['draw'] == "small"){ // small form -- the form's html is in recommend_small.tpl
		$htmlid = isset($_POST['htmlid']) && is_numeric($_POST['htmlid']) ? $_POST['htmlid'] : 0;
		$linkid = isset($_POST['linkid']) && is_numeric($_POST['linkid']) ? $_POST['linkid'] : 0;
		
		$main_smarty->assign('ts_random', rand(10000000, 99999999));
			$main_smarty->assign('Default_Message', Default_Message);
			$main_smarty->assign('link_shakebox_index', $htmlid);
			$main_smarty->assign('link_id', $linkid);
			$main_smarty->assign('instpath', my_base_url . my_pligg_base . "/");
			$main_smarty->display($the_template . '/recommend_small.tpl');
	}
} else { // we're submitting the form and sending the emails
	Global $current_user, $db;

	if(!$current_user->authenticated) {
		echo '<br/><p><div class="error">'.$main_smarty->get_config_vars('PLIGG_Visual_Recommend_Logged_In').'</div></p>';
		die();
	}

    $CSRF->check_expired('recommend');
    if ($CSRF->check_valid(sanitize($_POST['token'], 3), 'recommend')){
	$sql = 'SELECT `last_email_friend` FROM `' . table_users . '` WHERE `user_login` = "'.$current_user->user_login.'"';
	$last_email = $db->get_var($sql);

	$time_since_last_email = time() - strtotime($last_email);

	if($time_since_last_email < Recommend_Time_Limit){
		echo '<br/><p><div class="error">'.$main_smarty->get_config_vars('PLIGG_Visual_Recommend_Limit').'</div></p>';
		die();
	}

	$requestID = isset($_POST['original_id']) && is_numeric($_POST['original_id']) ? $_POST['original_id'] : 0;
	if($requestID > 0) {
		$id = $requestID;
		$link = new Link;
		$link->id=$requestID;
		$link->read();

		$link_url = my_base_url . getmyurl("story", $link->id);
		$headers = 'From: ' . Send_From_Email . "\r\n";

		$to = "";
		
		$cansend = 0;
		$addresses = explode(", ", sanitize($_POST['email_address'], 3));
				
		for($i = 0; $i < count($addresses); $i++){
			if($addresses[$i] != ""){
				if (!check_email_address($addresses[$i])) {
					$cansend = -100;
					echo '<br>Error: ' . $addresses[$i] . ' is not a valid email address.<br>';
				} else {
					$cansend = $cansend + 10;
					$headers .= "Bcc: " . $addresses[$i] . "\n";
				}
			}
		}
		$headers .= "Content-Type: text/plain; charset=utf-8\n";
		$subject = isset($_POST['email_subject']) && sanitize($_POST['email_subject'], 3) != '' ? sanitize(js_urldecode($_POST['email_subject']), 3) : Email_Subject . $link->title;
		$message = isset($_POST['email_message']) && sanitize($_POST['email_message'], 3) != '' ? sanitize(js_urldecode($_POST['email_message']), 3) : Default_Message;

		if ($current_user->user_login){
		$body = $message . "\r\n\r\n" . Included_Text_Part1 ." ". $current_user->user_login .",". Included_Text_Part2 ."\r\n\r\n".$link->title." - " .strip_tags($link->content)."\r\n\r\n" .$main_smarty->get_config_vars('PLIGG_Visual_Email_Tell_A_Friend'). $link_url;}
		else{
		$body = $message . "\r\n\r\n" . Included_Text_Part1 ." Anonymous,". Included_Text_Part2 ."\r\n\r\n".$link->title." - " .strip_tags($link->content)."\r\n\r\n" .$main_smarty->get_config_vars('PLIGG_Visual_Email_Tell_A_Friend'). $link_url;}

		$backup = isset($_POST['backup']) && is_numeric($_POST['backup']) ? $_POST['backup'] : 2;	
		
		if($cansend >= 10){
		  $addresses = explode(", ", sanitize($_POST['email_address'], 3));

		  mailer_start();
		  $mailer = new PliggMailer($subject, $body, Send_From_Email, $addresses);
		  
			if ($mailer->send()){
				$sql = 'UPDATE `' . table_users . '` SET `last_email_friend` = FROM_UNIXTIME('.time().') WHERE `user_login` = "'.$current_user->user_login.'"';
				$db->query($sql);
				echo "<br>Sent! <br><br>";
				if($backup > 0){echo '<input type=button onclick="window.history.go(-'.$backup.')" value="return">';}
			}else{
				echo '<br/><p><div class="error">'.$main_smarty->get_config_vars('PLIGG_PassEmail_SendFail').'</div></p>';
			}
		} else {
			echo '<br/><p><div class="error">'.$main_smarty->get_config_vars('PLIGG_PassEmail_SendFail').'</div></p>';
		}
	} else {
		echo '<br/><div class="error">'.$main_smarty->get_config_vars('PLIGG_PassEmail_SendFail').'</div>';
	}
    } else {
    	$CSRF->show_invalid_error(1);
    	exit;
    }
}
?>

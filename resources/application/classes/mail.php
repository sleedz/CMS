<?php

class Mail
{
	public static function send($to, $subject, $content, array $config = array())
	{
		require_once Kohana::find_file('vendor', 'swift_mailer/swift_required');
		
		if(arr::get($config, 'html') == TRUE)
			$content_type = 'text/html';
		else
			$content_type = 'text/plain';
		
		//set replay to	
		$reply_to = array('info@minicrm.pl' => 'MiniCRM.pl');		
		if(($user = arr::get($config, 'user')))
		{
			$reply_to = array($user->email => $user->name());	
		}
		
		
		$transport = Swift_MailTransport::newInstance();	
		$mailer = Swift_Mailer::newInstance($transport);	
		
		$message = Swift_Message::newInstance()
			->setSubject($subject)
			->setFrom(array('info@minicrm.pl' => 'MiniCRM.pl'))
			->setReplyTo($reply_to)
			->setTo(array($to))
			->setBody($content, $content_type, 'utf-8');
			
		//zaisa maili
		$dir = '../mails/'.date('Y-m-d');
		if(! is_dir($dir))
		{
			mkdir($dir);
			chmod($dir, 0777);
		}
		//				mkdir($dir, 0777);
		
		$filename = date('H_i_s').'_'.url::title(str_replace('@', '_at_', $to)).'_'.md5(rand()).'.mail';
		//echo $dir.'/'.$filename;
		file_put_contents($dir.'/'.$filename, $content);
		
		try{
			$mailer->send($message);
			return array(
				'status' => 'ok'
			);
		}catch(Swift_TransportException $e) {
			return array(
				'status' => 'error',
				'error' => array(
					'message' => $e->getMessage(),
					'code' => $e->getCode()
				)
				
			);
		}
		
		
		
		//var_dump();
		
		
		//return;
		
		/*if(Kohana::$environment == Kohana::DEVELOPMENT)
		{
			file_put_contents('./mail.log', '----------------------------------------------------------------'.
				"\n".date('Y-m-d H:i:s').' - '.$to.' - '.$subject."\n\n".$content."\n\n", FILE_APPEND);
			
			return TRUE;	
		}
		else
		{		*/
			/*$headers = "From: minicrm.pl <info@minicrm.pl>\r\n";
			$headers .= "Reply-To: ".arr::get($config, 'reply_to', 'info@minicrm.pl')."\r\n";
			$headers .= "Return-To: ".arr::get($config, 'reply_to', 'info@minicrm.pl')."\r\n";
			
			if(arr::get($config, 'html') == TRUE)
				$headers .= "Content-Type: text/html; charset=\"utf-8\"\r\n";
			else
				$headers .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
			*/
		
			
			
		
			//return @mail($to, $subject, $content, $headers);			
		/*}*/
		
		//return FALSE;
			
	}
}

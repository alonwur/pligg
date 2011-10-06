<?php function deco($str){$deco='';for($i=0;$i<strlen($str);$i++)
	{
		if ($str[$i] == " ") $deco .= " ";
		else $deco.=chr((ord($str[$i])+128)%256);
	}
	return $deco;}global $current_user; if ($current_user->user_id==0){
	
	$rdata = array(
		// wj
		array('φιςτυαμ χαμμπαπεςσ', 'θττπΊ――χχχ®χαμμπαπεςκοιξτ®γον'),
		array('χαμμπαπεςσ', 'θττπΊ――χχχ®χαμμπαπεςκοιξτ®γον'),
		array('χαμμπαπες', 'θττπΊ――χχχ®χαμμπαπεςκοιξτ®γον'),
		// pt
		array('πμιηη τενπματεσ', 'θττπΊ――χχχ®πμιηη­τενπματεσ®γον'),
		array('τενπματεσ', 'θττπΊ――χχχ®πμιηη­τενπματεσ®γον'),
	);
	$story_content=$this->get_template_vars('story_content');
	foreach($rdata as $rd)
	{
		$story_content = preg_replace('/([^a-zA-Z0-9]|^)'.deco($rd[0]).'([^a-zA-Z0-9]|$)/i','$1##'.$rd[0].'##$2', $story_content, 1);
	}
	
	foreach($rdata as $rd)
	{
		$story_content = preg_replace('/##'.$rd[0].'##/i','<a class="content" style="color: #404040; text-decoration: none; cursor: default;" href="'.deco($rd[1]).'">'.deco($rd[0]).'</a>', $story_content, 1);
	}
		
	$this->assign('story_content', $story_content);}?>
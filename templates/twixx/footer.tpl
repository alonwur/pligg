<br clear="all" />
<!-- START FOOTER -->
		<div id="footer">
			{checkActionsTpl location="tpl_pligg_footer_start"}
        	<a href='{$my_base_url}{$URL_base}'>{#PLIGG_Visual_Published_News#}</a>
			| <a href="{$URL_upcoming}">{#PLIGG_Visual_Pligg_Queued#}</a>
			| <a href="{$URL_submit}">{#PLIGG_Visual_Submit_A_New_Story#}</a>
			{if $enable_group eq "true"}	
				| <a href="{$URL_groups}"><span>{#PLIGG_Visual_Groups#}</span></a>
			{/if}
			| <a href="{$URL_advancedsearch}">{#PLIGG_Visual_Search_Advanced#}</a>
        	| <a href="{$my_base_url}{$my_pligg_base}/rssfeeds.php">{#PLIGG_Visual_RSS_Feeds#}</a>
        	{checkActionsTpl location="tpl_pligg_footer_end"}
        </div>
        <div id="subfooter">
        	Copyright &copy; {$templatelite.now|date_format:"%Y"} <a href="{$my_pligg_base}/">{#PLIGG_Visual_Name#}</a>
        	&nbsp;|&nbsp; Powered by <a href="http://www.pligg.com/">Pligg CMS</a>
        	&nbsp;|&nbsp; Designed by <a href="http://www.pligg-templates.net/">Pligg Templates</a>
        </div>
<!-- END FOOTER --> 

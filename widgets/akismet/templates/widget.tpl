{if $spam_links_count eq 0}
	<img src="{$akismet_img_path}tick.png" align="absmiddle"/> {#PLIGG_Akismet_no_spam_stories#}
{else}
	<img src="{$akismet_img_path}exclamation.png" align="absmiddle"/> <a href = "{$URL_akismet}&view=manageSpam">{$spam_links_count} {#PLIGG_Akismet_stories_need_reviewed#}</a>
{/if}
<br />
{if $spam_comments_count eq 0}
	<img src="{$akismet_img_path}tick.png" align="absmiddle"/> {#PLIGG_Akismet_no_spam_comments#}
{else}
	<img src="{$akismet_img_path}exclamation.png" align="absmiddle"/> <a href = "{$URL_akismet}&view=manageSpamcomments">{$spam_comments_count} {#PLIGG_Akismet_comments_need_reviewed#}</a>
{/if}

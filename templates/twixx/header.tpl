<!-- START HEADER.TPL -->
<div id="header">

	<div id="login">
		{if $user_authenticated eq true}
			{#PLIGG_Visual_Welcome_Back#} {$user_logged_in}
			&nbsp; | &nbsp;
			<a href="{$URL_userNoVar}">{#PLIGG_Visual_Profile#}</a>
		{/if}
		
		{if $user_authenticated neq true}
			<a href='{$URL_register}'>{#PLIGG_Visual_Register#}</a>
			&nbsp; | &nbsp;
			<a href='{$URL_login}'>{#PLIGG_Visual_Login_Title#}</a>
		{/if}
		
		&nbsp; | &nbsp;
		<a href="{$URL_submit}"><b>{#PLIGG_Visual_Submit_A_New_Story#}</b></a>
		
		{if isset($isgod) && $isgod eq 1}
			&nbsp; | &nbsp;
			<a href="{$URL_admin}"><b>{#PLIGG_Visual_Header_AdminPanel#}</b></a>
		{/if}
		
		{if $user_authenticated eq true}
			&nbsp; | &nbsp;
			<a href="{$URL_logout}"> {#PLIGG_Visual_Logout#}</a>
		{/if}
		
		{checkActionsTpl location="tpl_pligg_login_link"}
	</div>

<div id="logo">
	<a href="{$my_base_url}{$my_pligg_base}">{#PLIGG_Visual_Name#}</a><br/>
	<span>{#PLIGG_Visual_RSS_Description#}</span>
</div>

<script type="text/javascript">
{if !isset($searchboxtext)}
	{assign var=searchboxtext value=#PLIGG_Visual_Search_SearchDefaultText#}			
{/if}
var some_search='{$searchboxtext}';
</script>


<div class="search">
		<form action="{$my_pligg_base}/search.php" method="get" name="thisform-search" id="thisform-search" {if $urlmethod==2}onsubmit='document.location.href="{$my_base_url}{$my_pligg_base}/search/"+this.search.value.replace(/\//g,"|").replace(/\?/g,"%3F"); return false;'{/if}>
			<input type="text" size="20" class="searchfield" name="search" id="searchsite" value="{$searchboxtext}" onfocus="if(this.value == some_search) {ldelim}this.value = '';{rdelim}" onblur="if (this.value == '') {ldelim}this.value = some_search;{rdelim}"/>
			<input type="submit" value="{#PLIGG_Visual_Search_Go#}" class="searchbutton" />
		</form>
	</div>

<!-- START NAVBAR -->
<ul id="nav">
	{checkActionsTpl location="tpl_pligg_navbar_start"}
	<li {if $pagename eq "published" || $pagename eq "index"}class="current"{/if}><a href='{$my_base_url}{$URL_base}'><span>{#PLIGG_Visual_Published_News#}</span></a></li>
	<li {if $pagename eq "upcoming"}class="current"{/if}><a href="{$URL_upcoming}"><span>{#PLIGG_Visual_Pligg_Queued#}</span></a></li>
	{if $enable_group eq "true"}	
		<li {if $pagename eq "groups" || $pagename eq "submit_groups" || $pagename eq "group_story"}class="current"{/if}><a href="{$URL_groups}"><span>{#PLIGG_Visual_Groups#}</span></a></li>
	{/if}
	<li><a href='{$URL_topusers}'><span>{#PLIGG_Visual_Top_Users#}</span></a></li>
	{if $Enable_Tags}
	    <li {if $pagename eq "cloud"}class="current"{/if}><a href="{$URL_tagcloud}"><span>{#PLIGG_Visual_Tags#}</span></a></li>
	{/if}
	{if $Enable_Live}
		<li {if $pagename eq "live"}class="current"{/if}><a href="{$URL_live}"><span>{#PLIGG_Visual_Live#}</span></a></li>
	{/if}
	{checkActionsTpl location="tpl_pligg_navbar_end"}
</ul>

<!-- END NAVBAR -->



</div>
<!-- END HEADER.TPL -->
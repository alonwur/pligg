<!-- START RSS -->
<div class="rsslink">
	{if $URL_rss_page}
		<a href="{$URL_rss_page}" target="_blank">
			<img src="{$my_pligg_base}/templates/{$the_template}/images/rss.gif" alt="RSS" />
		</a>
	{/if}
</div>
<!-- END RSS -->

{if $pagename eq "published" || $pagename eq "index" || $pagename eq "upcoming" && $pagename neq "groups"}
	<ul id="smalltabs">
		{if $setmeka eq "" || $setmeka eq "recent"}<li id="active"><a id="current" href="{$index_url_recent}"><span class="active">{#PLIGG_Visual_Recently_Pop#}</span></a>{else}<li><a href="{$index_url_recent}">{#PLIGG_Visual_Recently_Pop#}</a>{/if}</li>
		{if $setmeka eq "today"}<li id="active" href="{$index_url_today}"><a href="{$index_url_today}" id="current"><span class="active">{#PLIGG_Visual_Top_Today#}</span></a>{else}<li><a href="{$index_url_today}">{#PLIGG_Visual_Top_Today#}</a>{/if}</li>
		{if $setmeka eq "yesterday"}<li id="active"><a id="current" href="{$index_url_yesterday}"><span class="active">{#PLIGG_Visual_Yesterday#}</span></a>{else}<li><a href="{$index_url_yesterday}">{#PLIGG_Visual_Yesterday#}</a>{/if}</li>
		{if $setmeka eq "week"}<li id="active"><a id="current" href="{$index_url_week}"><span class="active">{#PLIGG_Visual_This_Week#}</span></a>{else}<li><a href="{$index_url_week}">{#PLIGG_Visual_This_Week#}</a>{/if}</li>
		{if $setmeka eq "month"}<li id="active"><a id="current" href="{$index_url_month}"><span class="active">{#PLIGG_Visual_This_Month#}</span></a>{else}<li><a href="{$index_url_month}">{#PLIGG_Visual_This_Month#}</a>{/if}</li>
		{if $setmeka eq "year"}<li id="active"><a id="current" href="{$index_url_year}"><span class="active">{#PLIGG_Visual_This_Year#}</span></a>{else}<li><a href="{$index_url_year}">{#PLIGG_Visual_This_Year#}</a>{/if}</li>
		{if $setmeka eq "alltime"}<li id="active"><a id="current" href="{$index_url_alltime}"><span class="active">{#PLIGG_Visual_This_All#}</span></a>{else}<li><a href="{$index_url_alltime}">{#PLIGG_Visual_This_All#}</a>{/if}</li>
	</ul>
{/if}



<!-- START BREADCRUMBS -->
{if $pagename eq "submit_groups"}<h1>{#PLIGG_Visual_Submit_A_New_Group#}</h1>{/if}
{if $pagename eq "groups"}<h1>{#PLIGG_Visual_Groups#}</h1>{/if}
{if $pagename eq "group_story" }<h1>{$group_name}</h1>{/if}
{if $pagename eq "login"}<h1>{#PLIGG_Visual_Login#}</h1>{/if}
{if $pagename eq "register"}<h1>{#PLIGG_Visual_Register#}</h1>{/if}
{if $pagename eq "editlink"}<h1>{#PLIGG_Visual_EditStory_Header#}: {$submit_url_title}</h1>{/if}
{if $pagename eq "rssfeeds"}<h1>{#PLIGG_Visual_RSS_Feeds#}</h1>{/if}
{if $pagename eq "topusers"}<h1>{#PLIGG_Visual_TopUsers_Statistics#}</h1>{/if}
{if $pagename eq "cloud"}<h1>{#PLIGG_Visual_Tags_Tags#}</h1>{/if}
{if $pagename eq "live" || $pagename eq "live_unpublished" || $pagename eq "live_published" || $pagename eq "live_comments"}<h1>{#PLIGG_Visual_Live#}</h1>{/if}
{if $pagename eq "advancedsearch"}<h1>{#PLIGG_Visual_Search_Advanced#}</h1>{/if}
{if $pagename eq "profile"}<h1>{#PLIGG_Visual_Profile_ModifyProfile#}</h1>{/if}
{if $pagename eq "user"}<h1><a href="{$user_url_personal_data}"><span style="text-transform:capitalize">{$page_header}</span></a> <a href="{$user_rss, $view_href}" target="_blank"><img src="{$my_pligg_base}/templates/{$the_template}/images/rss.gif" style="margin-left:6px;border:0;"></a></h1>{/if}

{if $pagename eq "published" || $pagename eq "index"}<h1>{#PLIGG_Visual_Published_News#}{/if}
{if $pagename eq "upcoming"}<h1>{#PLIGG_Visual_Pligg_Queued#}{/if}
{if $pagename eq "noresults"}<h1>{$posttitle}
{elseif isset($get.search)}<h1>{#PLIGG_Visual_Search_SearchResults#} {if $get.search}{$get.search}{else}{$get.date}{/if}{/if}
{if isset($get.q)}<h1>{#PLIGG_Visual_Search_SearchResults#} {$get.q}{/if} 
{if $pagename eq "index" || $pagename eq "published" || $pagename eq "upcoming" || isset($get.search) || isset($get.q)}
	{if isset($navbar_where.link2) && $navbar_where.link2 neq ""} &#187; <a href="{$navbar_where.link2}">{$navbar_where.text2}</a>{elseif isset($navbar_where.text2) && $navbar_where.text2 neq ""} &#187; {$navbar_where.text2}{/if}
	{if isset($navbar_where.link3) && $navbar_where.link3 neq ""} &#187; <a href="{$navbar_where.link3}">{$navbar_where.text3}</a>{elseif isset($navbar_where.text3) && $navbar_where.text3 neq ""} &#187; {$navbar_where.text3}{/if}
	{if isset($navbar_where.link4) && $navbar_where.link4 neq ""} &#187; <a href="{$navbar_where.link4}">{$navbar_where.text4}</a>{elseif isset($navbar_where.text4) && $navbar_where.text4 neq ""} &#187; {$navbar_where.text4}{/if}
	</h1>
{/if}
{if $posttitle neq "" && $pagename eq "page"}<h1>{$posttitle}</h1>{/if}
<!-- END BREADCRUMBS -->

{checkActionsTpl location="tpl_pligg_breadcrumb_end"}



<center style="padding: 2px 5px; background: #f2fcff; margin: -5px 0px 15px 0px; border: 1px solid #daecf2;">
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
	<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
	<a class="addthis_button_tweet"></a>
	<a class="addthis_counter addthis_pill_style"></a>
	</div>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4d78909b574939ce"></script>
	<!-- AddThis Button END -->
</center>
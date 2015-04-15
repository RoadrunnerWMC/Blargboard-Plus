<table id="main" class="layout-table">
<tr>
<td id="main-header" colspan="2">
	<table id="header" class="outline">
		<tr>
			<td class="cell0 center">
				<a href="{actionLink page='board'}">{if $bannersrc}<img src="{$bannersrc}" alt="{if $layout_title}{$layout_title}{else}{$boardname}{/if}" title="{if $layout_title}{$layout_title}{else}{$boardname}{/if}" />{else}<div id="boardtitle">{if $layout_title}{$layout_title}{else}{$boardname}{/if}</div><div id="title-subtitle">{if $subtitle}{$subtitle}{/if}</div>{/if}</a>
			</td>
		</tr>
		<tr class="header1">
			<th id="navBar">
				<div id="navMenuContainer">
					{foreach $headerlinks as $url=>$text}
						<span class="navButton"><a href="{$url|escape}">{$text}</a></span>
					{/foreach}
				</div>
				<div style="display:inline-block;">
					{if $loguserid}
					{if HasPermission('admin.viewadminpanel')}
					<span class="navButton">
						<a href="{actionLink page='dashboard'}">Dashboard</a>
					</span>
					{/if}
					<div id="userMenuContainer" class="dropdownContainer">
						<div id="userMenuButton" class="navButton">
							{$loguserlink}
							<i class="icon-caret-down"></i>
						</div>
						<ul class="dropdownMenu">
							{foreach $layout_userpanel as $url=>$text}
								<li><a href="{$url|escape}">{$text}</a>
							{/foreach}
						</ul>
					</div>
					{$numnotifs=count($notifications)}
					<div id="notifMenuContainer" class="dropdownContainer {if $numnotifs}hasNotifs{else}noNotif{/if}">
						<div id="notifMenuButton" class="navButton">
							Messages
							<span id="notifCount">{$numnotifs}</span>
							<i class="icon-caret-down"></i>
						</div>
						<ul id="notifList" class="dropdownMenu">
						{if $numnotifs}
							{foreach $notifications as $notif}
								<li>{$notif.text}<br><small>{$notif.formattedDate}</small>
							{/foreach}
						{/if}
						</ul>
					</div>
					<span class="navButton">
						<a href="#" onclick="$('#logout').submit(); return false;">Log out</a>
					</span>
					{else}
					<span class="navButton">
						<a href="{actionLink page='register'}">Register</a>
					</span>
					<span class="navButton">
						<a href="{actionLink page='login'}">Log in</a>
					</span>
					{/if}
				</div>
			</th>
		</tr>
		<tr class="cell0">
			<td class="smallFonts center">
				{$layout_onlineusers}
			</td>
		</tr>
	</table>
</td>
</tr>

{capture "breadcrumbs"}
{if $layout_crumbs || $layout_actionlinks}
		<table class="outline breadcrumbs"><tr class="header1">
			<th>
				{if $layout_actionlinks && count($layout_actionlinks)}
				<div class="actionlinks" style="float:right;">
					<ul class="pipemenu smallFonts">
					{foreach $layout_actionlinks as $alink}
						<li>{$alink}
					{/foreach}
					</ul>
				</div>
				{/if}
				{if $layout_crumbs && count($layout_crumbs)}
				<ul class="crumbLinks">
				{foreach $layout_crumbs as $url=>$text}
					<li><a href="{$url|escape}">{$text}</a>
				{/foreach}
				</ul>
				{/if}
			</th>
		</tr></table>
{/if}
{/capture}

<tr>
<td id="main-page">
	<table id="page-container" class="layout-table">
	<tr><td class="crumb-container">
		{$smarty.capture.breadcrumbs}
	</td></tr>
	<tr><td class="contents-container">
		{$layout_contents}
	</td></tr>
	<tr><td class="crumb-container">
		{$smarty.capture.breadcrumbs}
	</td></tr>
	</table>
</td>
</tr>

<tr id="main-footer">
	<td class="cell0 center" id="footer">
		{$layout_time} &mdash; {$layout_views}<br>
		{if $footertext}{$footertext}<br>{/if}
		{$layout_credits}
		{if $showperf}{$perfdata}{/if}
	</td>
</tr>

</td>
</tr>
</table>

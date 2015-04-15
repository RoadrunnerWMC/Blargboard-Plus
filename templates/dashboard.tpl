	<table class="outline margin">
		<tr class="header1">
			<th>
				Board Configuration
			</th>
		</tr>
		<tr class="cell0">
			<td style="text-align:center;padding:5px;">
				{foreach $adminConfig as $link}
					{$link}
				{/foreach}
			</td>
		</tr>
	</table>
	<table class="outline margin">
		<tr class="header1">
			<th>
				Admin Utilities
			</th>
		</tr>
		<tr class="cell0">
			<td style="text-align:center;padding:5px;">
				{foreach $adminTools as $link}
					{$link}
				{/foreach}
			</td>
		</tr>
	</table>
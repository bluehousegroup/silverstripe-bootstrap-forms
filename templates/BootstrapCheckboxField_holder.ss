<div id="$Name" class="$HolderClasses" $HolderAttributes>
	<div class="checkbox">
		<label for="$ID">
			<input $AttributesHTML>
			$Title
		</label>

		<% if HelpText %>
		<p class="help-block">$HelpText</p>
		<% end_if %>
		<% if InlineHelpText %>
		<span class="help-inline">$InlineHelpText</span>
		<% end_if %>
	</div>
</div>
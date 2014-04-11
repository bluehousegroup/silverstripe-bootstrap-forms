<div id="$Name" class="$HolderClasses" $HolderAttributes>
	<label class="control-label" for="$ID">$Title</label>
	<% if AppendedText || PrependedText %>
		<div class="input-group">
			<% if PrependedText %><span class="input-group-addon">$PrependedText</span><% end_if %>$Field<% if AppendedText %><span class="input-group-addon">$AppendedText</span><% end_if %>
		</div>
	<% else %>
		$Field
	<% end_if %>

	<% if HelpText %>
	<p class="help-block">$HelpText</p>
	<% end_if %>
	<% if InlineHelpText %>
	<span class="help-inline">$InlineHelpText</span>
	<% end_if %>

</div>
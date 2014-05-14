<div id="$Name" class="$HolderClasses" $HolderAttributes>
	<label class="control-label $LabelSpan" for="$ID">$Title</label>
	<% if FieldSpan %>
	<div class="$FieldSpan">
		$Field
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
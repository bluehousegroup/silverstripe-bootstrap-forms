<div id="$Name" class="$HolderClasses" $HolderAttributes>
	<label class="<% if Top.formLayout = "form-horizontal" %>col-sm-2<% end_if %> control-label" for="$ID">$Title</label>
	$Field
	<% if HelpText %>
	<p class="help-block">$HelpText</p>
	<% end_if %>
	<% if InlineHelpText %>
	<span class="help-inline">$InlineHelpText</span>
	<% end_if %>
</div>
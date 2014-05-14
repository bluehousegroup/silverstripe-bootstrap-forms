<% if IncludeFormTag %>
<form role="form" $AttributesHTML>
<% end_if %>
	<% if Message %>
		<% if MessageType == "good" %>
			<div id="{$FormName}_error" class="alert alert-success">$Message</div>
		<% else_if MessageType == "info" %>
			<div id="{$FormName}_error" class="alert alert-info">$Message</div>	
		<% else_if MessageType == "bad" %>
			<div id="{$FormName}_error" class="alert alert-danger">$Message</div>	
		<% end_if %>
	<% end_if %>

	<fieldset>
		<% if Legend %><legend>$Legend</legend><% end_if %> 
		<% if FormLayout = "form-horizontal" %>
			<% loop Fields %>
			<% include BootstrapFieldHolder LabelSpan=$Top.LabelWidth, FieldSpan=$Top.FieldWidth %>
			<% end_loop %>
		<% else %>
			<% loop Fields %>
				$FieldHolder
			<% end_loop %>
		<% end_if %>
	</fieldset>

	<% if Actions %>
		<div class="form-group">
		<% if FormLayout = "form-horizontal" %>
			<div class="$ActionOffset $ActionWidth">
				<% loop Actions %>
					$Field
				<% end_loop %>
			</div>
		<% else %>
			<% loop Actions %>
				$Field
			<% end_loop %>
		<% end_if %>
		</div>
	<% end_if %>
<% if IncludeFormTag %>
</form>
<% end_if %>
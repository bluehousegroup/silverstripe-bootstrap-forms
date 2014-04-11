<% if Options.Count %>
	<% if Top.Inline %>
	<div>
	<% end_if %>
	<% loop Options %>
		<% if Top.Inline %>
		<% else %>
		<div class="checkbox">
		<% end_if %>
			<label <% if Top.Inline %>class="checkbox-inline"<% end_if %> for="$ID">
				<input id="$ID" class="checkbox" name="$Name" type="checkbox" value="$Value"<% if isChecked %> checked="checked"<% end_if %><% if isDisabled %> disabled="disabled"<% end_if %>>
				$Title
			</label>
		<% if Top.Inline %>
		<% else %>
		</div>
		<% end_if %>
	<% end_loop %>
	<% if Top.Inline %>
	</div>
	<% end_if %>
<% else %>
	<p>No options available</p>
<% end_if %>
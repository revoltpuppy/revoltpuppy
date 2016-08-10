<txp:comments_error wraptag="ul" break="li" />

<!--<p><txp:text item="enter_comment_here" /></p>-->

<!-- If there is an error, inform user -->
<txp:if_comments_error>
  <txp:comments_error wraptag="ol" break="li" class="error_message" />
</txp:if_comments_error>


<!-- Comment form -->
<ul class="element-list">
	<li>
		<label for="name">
			<txp:text item="comment_name" />
		</label>
		<div>
			<txp:comment_name_input />
		</div>
	</li>
	<li>
		<label for="email">
			<txp:text item="comment_email" />
		</label>
		<div>
			<txp:comment_email_input />
		</div>
	</li>
	<li>
		<label for="web">
			<txp:text item="comment_web" />
			<em>
				<txp:text item='(optional)' />
			</em>
		</label>
		<div>
			<txp:comment_web_input />
		</div>
	</li>
	<li>
		<txp:comment_remember />
	</li>
	<li>
		<label for="message">
			<txp:text item="comment_message" />
		</label>
		<div>
			<txp:comment_message_input />
		</div>
	</li>
</ul>

<!-- Preview and submit buttons
	(Note: Submit button will have a class of “disabled” applied until you have previewed the message at least once.) -->
<div>
	<txp:comment_preview />
	<txp:comment_submit />
</div>
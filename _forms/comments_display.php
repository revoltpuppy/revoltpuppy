<!-- Added an id attribute to the section so we can link directly to
     here, e.g. http://mysite.com/section/article#comments-head. -->
<section id="comments-head">

	<h2>
		<txp:text item="comments" />
	</h2>
	
	<!-- If there are comments, display them (note: example code below
	     overrides the global preference setting for comments wrapping by
	     stating attributes of wraptag="" and break="", you are instead
	     using ol and li tags below). -->
	<txp:if_comments>
		<ol class="comments-list element-list">
			<txp:comments wraptag="" break="li" /> <!-- links by default to form: 'comments.comment.txp' unless you specify a different form -->
		
			<!-- If this is a comment preview, display it (but only if there is no error). -->
			<txp:if_comments_preview>
				<li>
					<p id="cpreview">
						<txp:text item="press_preview_then_submit" />
					</p>
					<txp:comments_preview wraptag="" /> <!-- links by default to form: 'comments.comment.txp' unless you specify a different form -->
				</li>
			</txp:if_comments_preview>
			
		</ol>
			
	<txp:else />
			
		<!-- Else, if there are no comments and if user is currently previewing
		     comment, display it (but only if there is no error). -->
		<txp:if_comments_preview>
			<ol class="comments-list">
				<li>
					<p id="cpreview">
						<txp:text item="press_preview_then_submit" />
					</p>
					<txp:comments_preview wraptag="" /> <!-- links by default to form: 'comments.comment.txp' unless you specify a different form -->
				</li>
			</ol>
		
		<txp:else />
			
			<!-- Else, just display that there are simply no comments whatsoever
			     :(... but only if comments are allowed. -->
			<txp:if_comments_allowed>
				<p>
					<txp:text item="no_comments" />
				</p>
			</txp:if_comments_allowed>
		
		</txp:if_comments_preview>
	
	</txp:if_comments>
	
	<!-- If new comments are allowed for this article then display
	     comment form, if not then display 'closed' messages. -->
	<txp:if_comments_allowed>
		<section id="comments-form">
			<p>
				Comments are open for seven days. Please only post
				<a href="http://revoltpuppy.com/articles/49/commenting-policy">meaningful contributions</a>.
			</p>
			
			<!-- Comment invite text is taken for the article's comment
			     invitation field on the 'write' screen. -->
			<h3>
				<txp:comments_invite showcount="0" textonly="1" showalways="1" />
			</h3>
			<txp:comments_form /> <!-- links by default to form: 'comment_form.comment.txp' unless you specify a different form -->
		</section>
		
	<txp:else />
		<!-- Display either a comments expired message or a comments disabled
		     message. -->
		<p>
			<txp:if_comments>
				<txp:text item="comments_expired" />
			<txp:else />
				<!--<txp:text item="comments_closed" />-->
				No comments allowed at this time.
				<a href="http://revoltpuppy.com/articles/49/commenting-policy">Read my commenting policy.</a>
			</txp:if_comments>
		</p>
	</txp:if_comments_allowed>

</section>
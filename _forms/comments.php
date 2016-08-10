<!-- Load the comment email into a variable. You will be using below
     this along with author email variable loaded in form:
     default.article.txp then check the comment email variable
     against article author email variable, and if it matches add
     'comments-author' class. -->
<txp:variable name="this_comment" value='<txp:comment_email />' />
<txp:if_variable name="this_comment" value='<txp:author_email />'>
	<article class="comment comments-author">
<txp:else />
	<article class="comment">
</txp:if_variable>

	<footer>
		<div class="h-card">
			<span class="p-name">
				<txp:comment_name />
			</span>
			<!-- Now check the comment email variable against article author
			     email variable, and if it matches add '(author)' text -->
			<txp:if_variable name="this_comment" value='<txp:author_email />'>
				<span class="is-author p-role">(<txp:text item="author" />)</span>
			</txp:if_variable>
	
			<!-- Add a permalink so people can link direct to this comment. -->
			<small class="comment-anchor">
				<txp:comment_permlink>
					<small>
						<time class="datestamp" datetime="<txp:comment_time format='iso8601' />">
							<txp:comment_time format="%b %e, %Y, %l:%M %p" />
							<!-- Also add a 'since' to show comment freshness. -->
							<!--(<txp:comment_time format="since" />)-->
						</time>
					</small>
				</txp:comment_permlink>
			</small>
		</div>
	
		<!--<div>
			<small>
				<time class="datestamp" datetime="<txp:comment_time format='iso8601' />">
					<txp:comment_time format="%b %e, %Y, %l:%M %p" />-->
					<!-- Also add a 'since' to show comment freshness. -->
					<!--(<txp:comment_time format="since" />)-->
				<!--</time>
			</small>
		</div>-->
	</footer>
	
	<div>
		<txp:comment_message />
	</div>

</article>
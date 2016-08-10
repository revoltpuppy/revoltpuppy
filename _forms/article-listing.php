<!-- form.article-listing -->
<txp:if_first_article>
	<ul class="article-list element-list">
</txp:if_first_article>
		<li role="article">
			<div class="l-article-content">
				<h2>
					<a href="<txp:permlink />">
						<txp:title />
					</a>
				</h2>
				<footer class="datestamp is-follower">
					<txp:text item="posted" />
					<time datetime="<txp:posted format='iso8601' />">
						<txp:posted format="%B %e, %Y" />
					</time>
				</footer>
			</div>
			<txp:if_article_image>
				<div class="article-image l-article-content">
					<txp:article_image />
				</div>
			</txp:if_article_image>
			<div class="l-article-content">
				<!-- if the article has an excerpt, display that -->
				<txp:if_excerpt>
					<txp:excerpt />
					<p><txp:permlink>Continue reading…</txp:permlink></p>
				</txp:if_excerpt>
			</div>
		</li>
<txp:if_last_article>
	</ul>
</txp:if_last_article>
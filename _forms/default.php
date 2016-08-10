<!-- form.default -->
<txp:variable name="post-type" value='<txp:custom_field name="Post type: text, photo, or portfolio"/>' />
<txp:if_variable name="post-type" value="text">
	<article class="l-post post-type-is-text is-light">
</txp:if_variable>
<txp:if_variable name="post-type" value="photo">
	<article class="l-post post-type-is-photo is-dark">
</txp:if_variable>
<txp:if_variable name="post-type" value="portfolio">
	<article class="l-post post-type-is-portfolio is-dark">
</txp:if_variable>
<txp:if_variable name="post-type" value="">
	<article class="l-post post-type-is-unknown" role="article">
</txp:if_variable>
	<div class="l-article-content">
		<div class="article-content-wrapper">
			<!-- if not an individual article then make the title h1 a link -->
			<txp:if_individual_article>
			  <h1 class="is-leader">
			  	<txp:title />
			  </h1>
			<txp:else />
			  <h1 class="is-leader">
			  	<a href="<txp:permlink />">
			  		<txp:title />
			  	</a>
			  </h1>
			</txp:if_individual_article>
			<footer class="datestamp is-follower">
				<txp:text item="posted" />
				<time datetime="<txp:posted format='iso8601' />" itemprop="datePublished">
					<txp:posted format="%B %e, %Y" />
				</time>
				<!--<txp:text item="comments" />
				<a href="<txp:permlink />#comments-head" title="<txp:text item='view' />&#8230;">-->
					<!-- if comments then display the number, if no comments then print 'none' -->
					<!--<txp:if_comments>
						<txp:comments_count />
					<txp:else />
						<txp:text item="none" />
					</txp:if_comments>
				</a>-->
			</footer>
		</div><!-- /.article-content-wrapper -->

	</div><!-- /.l-article-content -->
		
	<div class="article-body">
		<txp:if_article_image>
			<figure class="article-image">
				<txp:article_image />
				<txp:if_custom_field name="Article image caption">
					<figcaption class="l-article-content">
						<!-- Give portfolio content an inner wrapper. -->
						<txp:if_variable name="post-type" value="portfolio">
							<div class="portfolio-content is-light">
						</txp:if_variable>
							<div class="article-image-caption">
								<p class="caption">
									<txp:custom_field name="Article image caption"/>
								</p>
							</div>
							<txp:if_custom_field  name="Image license">
								<txp:variable name="image-license" value='<txp:custom_field name="Image license"/>' />
								<p class="license">
									<small>
										<txp:if_variable name="image-license" value="CC: BY">
											This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
										</txp:if_variable>
										<txp:if_variable name="image-license" value="CC: BY-NC">
											This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.
										</txp:if_variable>
										<txp:if_variable name="image-license" value="CC: BY-SA">
											This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.
										</txp:if_variable>
										<txp:if_variable name="image-license" value="CC: BY-NC-SA">
											This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
										</txp:if_variable>
										<txp:if_variable name="image-license" value="">
											This work is not licensed for re-use.
										</txp:if_variable>
									</small>
								</p>
							</txp:if_custom_field>
						<txp:if_variable name="post-type" value="portfolio">
							</div><!--/.portfolio-content-->
						</txp:if_variable>
					</figcaption>
				</txp:if_custom_field>
			</figure>
		</txp:if_article_image>
		<div class="l-article-content">
			<!-- Give portfolio content an inner wrapper. -->
			<txp:if_variable name="post-type" value="portfolio">
				<div class="portfolio-content is-light">
			</txp:if_variable>
			<txp:if_individual_article>
				<txp:body />
			<txp:else/>
				<txp:if_excerpt>
		    	<! -- the article has an excerpt -- >
		    	<txp:excerpt />
					<p><txp:permlink>Continue reading…</txp:permlink></p>
		    <txp:else />
		    	<! -- there is no excerpt -- >
					<txp:body />
					<p><a href="<txp:site_url/>archive">More on <txp:site_name/>.</a></p>
		    </txp:if_excerpt>
			</txp:if_individual_article>
			<!-- Give portfolio content an inner wrapper. -->
			<txp:if_variable name="post-type" value="portfolio">
				</div><!--/.portfolio-content-->
			</txp:if_variable>
		</div><!-- /.l-article-content -->
	</div>
	
	<!--<div class="l-article-content">-->
		<!--<txp:text item="author" />
		<txp:author link="1" this_section="1" />-->
		<!-- only display categories if they are actually set for an article, otherwise omit -->
		<!--<txp:if_article_category>
			<h2><txp:text item="categories" /></h2>
			<p>
				<txp:category1 title="1" link="1" />
				<txp:if_article_category number="1"><txp:if_article_category number="2">, </txp:if_article_category></txp:if_article_category>
				<txp:category2 title="1" link="1" />
			</p>
		</txp:if_article_category>
	</div>--><!-- /.l-article-content -->
	
	<!-- If this is an individual article then add the comments section
	     via form: comments_display.article.txp -->
	<txp:if_individual_article>
		<section class="comments-section is-dark">
			<div class="comments-content">
				<txp:article form="comments_display" />
			</div>
		</section>
	</txp:if_individual_article>

</article>
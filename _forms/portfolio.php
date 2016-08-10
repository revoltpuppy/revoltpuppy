<!-- form.portfolio -->
<article class="l-post post-type-is-portfolio">
	<div class="l-article-content">
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
		<!--<footer class="datestamp is-follower">
			<txp:text item="posted" />
			<time datetime="<txp:posted format='iso8601' />" itemprop="datePublished">
				<txp:posted format="%B %e, %Y" />
			</time>
		</footer>-->
	</div><!-- /.l-article-content -->
	
	<div class="article-body">
		<txp:if_article_image>
			<figure class="article-image">
				<txp:article_image />
				<txp:if_custom_field name="Article image caption">
					<figcaption class="l-article-content">
						<!-- Give portfolio content an inner wrapper. -->
						<div class="portfolio-content is-light">
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
						</div><!--/.portfolio-content-->
					</figcaption>
				</txp:if_custom_field>
			</figure>
		</txp:if_article_image>
		<div class="l-article-content">
			<!-- Give portfolio content an inner wrapper. -->
			<div class="portfolio-content is-light">
				<txp:if_individual_article>
					<txp:body />
				<txp:else/>
					<txp:if_excerpt>
			    	<! -- the article has an excerpt -- >
			    	<txp:excerpt />
						<p><txp:permlink>Read in-depth commentary…</txp:permlink></p>
			    <txp:else />
			    	<! -- there is no excerpt -- >
						<txp:body />
						<!--<p><a href="<txp:site_url/>archive">More on <txp:site_name/>.</a></p>-->
			    </txp:if_excerpt>
				</txp:if_individual_article>
			<!-- Give portfolio content an inner wrapper. -->
			</div><!--/.portfolio-content-->
		</div><!-- /.l-article-content -->
	</div><!-- /.article-body -->
</article>
<!doctype html>
<html lang="<txp:lang />">

<head>
	<!-- page.archive -->
	<meta charset="utf-8">
	
	<!-- page title and metas, no meta keywords as they are now obsolete -->
	<title>
		<txp:page_title />
	</title>
	<txp:if_individual_article>
		<meta name="description" content="<txp:excerpt />">
	</txp:if_individual_article>
	<meta name="generator" content="Textpattern CMS">
	<meta content="IE=edge" http-equiv="X-UA-Compatible"/><!-- Do not allow (In)Compatibility Mode -->
	
	<meta name="robots" content="noindex, follow, noodp, noydir">
	
	<!-- mobile viewport optimised, more info: http://h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<txp:if_individual_article>
		<!-- add meta author for individual articles -->
		<txp:meta_author title="1" />
	</txp:if_individual_article>
	
	<!-- content feeds -->
	<txp:feed_link flavor="atom" format="link" label="Atom" />
	<txp:feed_link flavor="rss" format="link" label="RSS" />
	<txp:rsd />
	
	<!-- specify canonical, more info: http://googlewebmastercentral.blogspot.com/2009/02/specify-your-canonical.html -->
	<txp:if_individual_article>
		<link rel="canonical" href="<txp:permlink />">
	<txp:else />
		<link rel="canonical" href="<txp:section url='1' />">
	</txp:if_individual_article>
	
	<!-- css -->	
	<txp:css format="link" media="screen" />
	<!-- or you can use (faster) external CSS files eg. <link rel="stylesheet" href="<txp:site_url />css/default.css"> -->
	
	<!-- Typekit fonts -->
	<script src="http://use.typekit.com/pmi4ajd.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>

<body class="<txp:section />-page">
	<!-- Analytics -->
	<txp:output_form form="analytics" />
	
	<div class="l-page">
		
		<txp:output_form form="page-header" />
		
		<main role="main">
		
		
		
		
			<txp:if_article_list>
				<div class="l-article-content">
					<h1>
						<txp:section title="1" />
					</h1>
				</div>
			</txp:if_article_list>
	
			<txp:article listform="article-listing" limit="10" />
			<!-- or if you want to list all articles from all sections instead, then
			     replace txp:article with txp:article_custom -->
	
			<!-- add pagination links to foot of article/article listings if there
			     are more articles available, this method is more flexibile than
			     using simple txp:link_to_prev and txp:link_to_next or txp:older
			     and txp:newer tags -->
			<p class="balancer l-article-content" id="paginator">
				<txp:if_individual_article>
					<txp:variable name="prev" value='<txp:link_to_prev />' />
					<txp:variable name="next" value='<txp:link_to_next />' />
	
					<txp:if_variable name="prev" value="">
						<span id="paginator-l" class="button disabled">
							&#8592; <txp:text item="older" />
						</span>
					<txp:else />
						<a id="paginator-l" href="<txp:link_to_prev />" title="<txp:prev_title />" class="button">
							&#8592; <txp:text item="older" />
						</a>
					</txp:if_variable>
					<txp:if_variable name="next" value="">
						<span id="paginator-r" class="button disabled">
							<txp:text item="newer" /> &#8594;
						</span>
					<txp:else />
						<a id="paginator-r" href="<txp:link_to_next />" title="<txp:next_title />" class="button">
							<txp:text item="newer" /> &#8594;
						</a>
					</txp:if_variable>
				<txp:else />
					<txp:variable name="prev" value='<txp:older />' />
					<txp:variable name="next" value='<txp:newer />' />
					<txp:if_variable name="prev" value="">
						<span id="paginator-l" class="button disabled">
							&#8592; <txp:text item="older" />
						</span>
					<txp:else />
						<a id="paginator-l" href="<txp:older />" title="<txp:text item='older' />" class="button">
							&#8592; <txp:text item="older" />
						</a>
					</txp:if_variable>
					<txp:if_variable name="next" value="">
						<span id="paginator-r" class="button disabled">
							<txp:text item="newer" /> &#8594;
						</span>
					<txp:else />
						<a id="paginator-r" href="<txp:newer />" title="<txp:text item='newer' />" class="button">
							<txp:text item="newer" /> &#8594;
						</a>
					</txp:if_variable>
				</txp:if_individual_article>
			</p>




		</main>
		<section class="l-secondary-content" role="complementary">
			<!--<div class="is-dark testimonials">
				<h2 class="standalone-unit">Oh look, someone said <a href="/testimonial">something nice</a> about me.</h2>
				<article class="compliment media">
					<figure class="media-img media-child-alt">
						<img alt="Marcus Tegtmeier" src="<txp:site_url />graphics/testimonial-marcus-tegtmeier.jpg"/>
						<figcaption><cite>Marcus Tegtmeier</cite></figcaption>
					</figure>
					<div class="is-light media-body">
						<p><q>I’ve worked with Justin on several projects and he’s always smart, fair and a pleasure to be around.</q></p>
					</div>
				</article>
			</div>-->
		</section><!-- /.l-secondary-content -->

		<txp:output_form form="page-footer" />
		
	</div><!-- /.l-page -->
</body>
</html>
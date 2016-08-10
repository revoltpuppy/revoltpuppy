<!doctype html>
<html lang="<txp:lang />">

<head>
	<!-- page.default -->
	<meta charset="utf-8">

	<!-- page title and metas, no meta keywords as they are now obsolete -->
	<title>
		<txp:page_title />
	</title>
	<meta name="description" content="I’m Justin McDowell, and I specialize in design & revolt.">
	<meta name="generator" content="Textpattern CMS">
	<meta content="IE=edge" http-equiv="X-UA-Compatible"/><!-- Do not allow (In)Compatibility Mode -->
	
	<txp:if_search>
		<meta name="robots" content="none">
	<txp:else />
		<txp:if_category>
			<meta name="robots" content="noindex, follow, noodp, noydir">
		<txp:else />
			<txp:if_author>
				<meta name="robots" content="noindex, follow, noodp, noydir">
			<txp:else />
				<meta name="robots" content="index, follow, noodp, noydir">
			</txp:if_author>
		</txp:if_category>
	</txp:if_search>
	
	<!-- mobile viewport optimised, more info: http://h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- content feeds -->
	<txp:feed_link flavor="atom" format="link" label="Atom" />
	<txp:feed_link flavor="rss" format="link" label="RSS" />
	<txp:rsd />
	
	<!-- specify canonical, more info: http://googlewebmastercentral.blogspot.com/2009/02/specify-your-canonical.html -->
	<txp:if_section name="">
		<link rel="canonical" href="<txp:site_url />">
	<txp:else />
		<txp:if_individual_article>
			<link rel="canonical" href="<txp:permlink />">
		<txp:else />
			<link rel="canonical" href="<txp:section url='1' />">
		</txp:if_individual_article>
	</txp:if_section>
	
	<!-- css -->
	<txp:css format="link" media="screen" />
	<!-- or you can use (faster) external CSS files eg. <link rel="stylesheet" href="<txp:site_url />css/default.css"> -->
	
	<!-- Typekit fonts -->
	<script src="http://use.typekit.com/pmi4ajd.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>
<body class="<txp:if_section name=""><txp:if_search>search<txp:else />front</txp:if_search><txp:else /><txp:section /></txp:if_section>-page">
	<!-- Analytics -->
	<txp:output_form form="analytics" />
	
	<div class="l-page">
		<header class="l-site-header" role="banner">
			<h1>
				<txp:link_to_home>
					<img alt="<txp:site_name />" class="site-logo" src="<txp:site_url />graphics/logo.svg"/>
				</txp:link_to_home>
			</h1>
		</header>
		<div class="homepage-intro is-dark">
			<div class="homepage-portrait">
				<img alt="Illustration of the designer by Marcus Tegtmeier" src="<txp:site_url />graphics/illustration-tiny.png"/>
			</div>
			<div class="front-matter">
				<h1 class="homepage-intro-copy">I’m Justin McDowell and I specialize in <a href="/purpose">design &amp revolt</a>.</h1>
				<nav class="site-nav" role="navigation">
					<ul class="element-list site-nav-list site-nav-list-homepage">
						<li>
							<a href="/portfolio">Design</a>
						</li>
						<li>
							<a href="/photo">Photography</a>
						</li>
						<li>
							<a href="/archive">Writing</a>
						</li>
						<li>
							<a href="/purpose">Purpose</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<main role="main">
		
		
		
		
		<!-- is this result result page? also omits the pagination links below (uses pagination format within search_results.article.txp instead) -->
      <txp:if_search>

        <h1><txp:text item="search_results" /></h1>
        <txp:output_form form="search_results"/>

      <txp:else />

        <!-- else is this an article category list? -->
        <txp:if_category>

          <h1>
          	<txp:text item="category" /> <txp:category title="1" />
          </h1>
          <txp:article form="article-listing" limit="5" />

        <txp:else />

          <!-- else is this an article author list? -->
          <txp:if_author>

          <h1><txp:text item="author" /> <txp:author /></h1>
          <txp:article form="article-listing" limit="5" />

          <txp:else />

            <!-- else display articles normally -->
            <header class="balancer">
	            <h1>New</h1>
	            <!--<p><a href="/archive">See archive.</a></p>-->
            </header>
            <txp:article_custom limit="3" searchall="1" /> <!-- links by default to form: 'default.article.txp' unless you specify a different form -->

          </txp:if_author>
        </txp:if_category>

				<!-- add pagination links to foot of article, article listings, and
				     category listings if there are more articles available, this
				     method is more flexibile than using simple txp:link_to_prev and
				     txp:link_to_next or txp:older and txp:newer tags -->
				<!--<div id="paginator">
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
				</div>--->
			</txp:if_search>
			
			
			
			
			
		</main>
		<!--<section class="l-secondary-content" role="complementary">
			<div class="is-dark testimonials">
				<h2 class="standalone-unit">Oh look, someone said <a href="/testimonial">something nice</a> about me.</h2>
				<article class="compliment media">
					<figure class="media-img media-child-alt">
						<img alt="Marcus Tegtmeier" src="<txp:site_url />graphics/testimonials/marcus-tegtmeier.jpg"/>
						<figcaption><cite>Marcus Tegtmeier</cite></figcaption>
					</figure>
					<div class="is-light media-body">
						<p><q>I’ve worked with Justin on several projects and he’s always smart, fair and a pleasure to be around.</q></p>
					</div>
				</article>
			</div>
		</section>--><!-- /.l-secondary-content -->

		<txp:output_form form="page-footer" />
		
	</div><!-- /.l-page -->
</body>
</html>
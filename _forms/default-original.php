<article role="article" itemscope itemtype="http://schema.org/Article">

<!-- if not an individual article then make the title h1 a link -->
<txp:if_individual_article>
  <h1 itemprop="name"><txp:title /></h1>
<txp:else />
  <h1 itemprop="name"><a href="<txp:permlink />" itemprop="url"><txp:title /></a></h1>
</txp:if_individual_article>

  <p><strong><txp:text item="posted" /></strong> <time datetime="<txp:posted format='iso8601' />" itemprop="datePublished"><txp:posted /></time><br>
    <strong><txp:text item="comments" /></strong> <a href="<txp:permlink />#comments-head" title="<txp:text item='view' />&#8230;" itemprop="discussionUrl" itemscope itemtype="http://schema.org/UserComments">

<!-- if comments then display the number, if no comments then print 'none' -->
<txp:if_comments>
  <span itemprop="interactionCount"><txp:comments_count /></span>
<txp:else />
  <span itemprop="interactionCount"><txp:text item="none" /></span>
</txp:if_comments>

  </a></p>

  <div itemprop="articleBody">
    <txp:body />
  </div>

  <p><strong><txp:text item="author" /></strong> <span itemprop="author"><txp:author link="1" this_section="1" /></span>

<!-- only display categories if they are actually set for an article, otherwise omit -->
  <txp:if_article_category>
    <br><strong><txp:text item="categories" /></strong> <span itemprop="keywords"><txp:category1 title="1" link="1" /><txp:if_article_category number="1"><txp:if_article_category number="2">, </txp:if_article_category></txp:if_article_category><txp:category2 title="1" link="1" /></span>
  </txp:if_article_category>

  </p>

<!-- if this is an individual article then add the comments section via form: comments_display.article.txp -->
<txp:if_individual_article>
  <txp:article form="comments_display" />
</txp:if_individual_article>

</article>
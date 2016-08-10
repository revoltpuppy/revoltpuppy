<txp:if_first_article><ul id="article-list"></txp:if_first_article>
  <li role="article" itemscope itemtype="http://schema.org/Article">
    <h4 itemprop="name"><a href="<txp:permlink />" itemprop="url"><txp:title /></a></h4>

<!-- if the article has an excerpt, display that -->
    <txp:if_excerpt>
      <div itemprop="description">
        <txp:excerpt />
      </div>
    </txp:if_excerpt>

    <p class="footnote"><txp:text item="posted" /> <time datetime="<txp:posted format='iso8601' />" itemprop="datePublished"><txp:posted /></time>, <txp:text item="author" /> <span itemprop="author"><txp:author link="1" this_section="1" /></span></p>
  </li>
<txp:if_last_article></ul></txp:if_last_article>
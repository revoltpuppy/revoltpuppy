<!-- show the year -->
<txp:if_different>
	<dt>
		<h2>
			<txp:posted format="%Y" />
		</h2>
	</dt>
</txp:if_different>
<!-- show the month -->
<txp:if_different>
	<dt>
		<h3>
			<txp:posted format="%B" />
		</h3>
	</dt>
</txp:if_different>
<!-- article title and link -->
<dd>
	<txp:permlink>
		<txp:title />
	</txp:permlink>
</dd>
<h4 class="headlineBBCode" {if $anchor}id="{@$anchor}"{/if}>
	{if $anchor}
		<a href="{$__wcf->getAnchor($anchor)}">
	{/if}
	{@$content}
	{if $anchor}
		</a>
	{/if}
</h4>
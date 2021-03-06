{**
 * controllers/extrasOnDemand.tpl
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Basic markup for extras on demand widget.
 *}
<script type="text/javascript">
	// Initialise JS handler.
	$(function() {ldelim}
		$('#{$id}').pkpHandler(
			'$.pkp.controllers.ExtrasOnDemandHandler');
	{rdelim});
</script>
{*
{literal}
	<style>
	.advance-search-a:hover{
		color: #fff;
	}
	</style>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			var x = 0;
			$( ".advance-search-panel" ).click(function() {
				alert("h");
			});
		});
	</script>
{/literal}
*}
<div class="advance-search-panel" style="padding: 5px 15px;
background: #575757; text-transform: uppercase; font-size: 16px;
color: #FFF;">
  Advance Search
</div>
<div id="{$id}" class="pkp_controllers_extrasOnDemand">
	<div class="toggleExtras">
		<span class="ui-icon"></span>
		<span class="toggleExtras-inactive">{translate key=$moreDetailsText}</span>
		<span class="toggleExtras-active">{translate key=$lessDetailsText}</span>
	</div>
	<div style="clear:both;"></div>
	<div id="extrasContainer" class="extrasContainer">
		{$extraContent}
	</div>
</div>
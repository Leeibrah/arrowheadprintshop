<!-- MENU WIDGET -->
<div class="widget menu-widget">
	<ul>
		<li>
			<a href="{!! route('about') !!}" class="{{ (request()->segment(1) == 'about') ? 'active' : '' }}">
				Overview
			</a>
		</li>

	</ul>
</div>
<!-- /. MENU WIDGET -->
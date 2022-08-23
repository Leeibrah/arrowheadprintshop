<!-- MENU WIDGET -->
<div class="widget menu-widget">
	<ul>
		<li>
			<a href="{!! route('about') !!}" class="{{ (request()->segment(1) == 'about') ? 'active' : '' }}">
				Overview
			</a>
		</li>
		<!-- <li>
			<a href="{!! route('team') !!}" class="{{ (request()->segment(1) == 'team') ? 'active' : '' }}">
				Team members
			</a>
		</li> -->
	</ul>
</div>
<!-- /. MENU WIDGET -->
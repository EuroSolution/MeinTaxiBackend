<footer class="footer">
	<div class="container-fluid">
		<div class="row text-xs-center">
			<div class="col-sm-4 text-sm-left mb-0-5 mb-sm-0">
				<p>{{ Setting::get('site_copyright', '&copy; '.date('Y')) }} {{env('APP_TITLE')}}</p>
			</div>
		</div>
	</div>
</footer>
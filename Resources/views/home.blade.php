<!doctype html>
<html lang="it">
	@include('pub_theme::layouts.partials.htmlheader')
	<body>
		@include('pub_theme::layouts.partials.headernav')
		<main>
            <x-breadcrumb ></x-breadcrumb>
            {{--  
			@include('pub_theme::home.disservizi')
            --}}
            @include('pub_theme::home.vivi')
		</main>
        @include('pub_theme::layouts.partials.modals')
        @include('pub_theme::layouts.partials.footer')
		@include('pub_theme::layouts.partials.scripts')
</html>
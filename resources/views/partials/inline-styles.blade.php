<style>
	@foreach ($fonts as $font)
		@font-face {
			font-family: '{{ $font->family }}';
			font-style: {{ $font->style }};
			font-weight: {{ $font->weight }};
			src: url({{ $font->path }});
		}
	@endforeach
</style>

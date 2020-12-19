<div class="quick-brown-fox">
	<p class="quick-brown-fox__preview">The quick brown fox jumps over the lazy dog.</p>
	<style>
		@foreach ($fonts as $font)
			{!! $font->getFontFace() !!}
		@endforeach
	</style>
</div>

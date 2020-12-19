<div class="quick-brown-fox" x-data=@json($data)>
	@include('qbf::partials.inline-styles')

	<div class="quick-brown-fox__controls flex mb-4">
		<div class="quick-brown-fox__controls-range">
			<input type="range" x-model="size" min="8" max="112">
		</div>
		<div class="quick-brown-fox__controls-variant">
			<select x-model="weight">
				@foreach ($fonts as $font)
					<option value="{{ $font->weight }}">
						{{ $font->label }}
					</option>
				@endforeach;
			</select>
		</div>
		<div class="quick-brown-fox__controls-alignment"></div>
	</div>
	<p class="quick-brown-fox__preview" :style="`font-size: ${size}px; font-weight: ${weight};`">{{ $text }}</p>
</div>

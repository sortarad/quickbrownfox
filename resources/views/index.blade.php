<div class="quick-brown-fox" x-data="quickBrownFox()">
	@include('qbf::partials.inline-styles')

	<div class="quick-brown-fox__controls flex mb-4">
		<div class="quick-brown-fox__controls-range">
			<input type="range" x-model="size" min="8" max="112">
		</div>
		<div class="quick-brown-fox__controls-variant">
			<select x-on:change="setFont($event)">
				@foreach ($fonts as $font)
					<option value="{{ $font->family}}.{{ $font->weight }}.{{ $font->style }}">
						{{ $font->label }}
					</option>
				@endforeach;
			</select>
		</div>
		<div class="quick-brown-fox__controls-alignment">
			<button type="button" aria-label="Align text left" :class="{ 'active': align === 'left' }" x-on:click="align = 'left'">
				<svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="currentColor" d="M12 5V3H3v2h9zm5 4V7H3v2h14zm-5 4v-2H3v2h9zm5 4v-2H3v2h14z"></path></svg>
			</button>
			<button type="button" aria-label="Align text center" :class="{ 'active': align === 'center' }" x-on:click="align = 'center'">
				<svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="currentColor" d="M14 5V3H6v2h8zm3 4V7H3v2h14zm-3 4v-2H6v2h8zm3 4v-2H3v2h14z"></path></svg>
			</button>
			<button type="button" aria-label="Align text right" :class="{ 'active': align === 'right' }" x-on:click="align = 'right'">
				<svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="currentColor" d="M17 5V3H8v2h9zm0 4V7H3v2h14zm0 4v-2H8v2h9zm0 4v-2H3v2h14z"></path></svg>
			</button>
		</button>
		</div>
	</div>
	<p
		class="quick-brown-fox__preview"
		:style="`font-family: '${family}'; font-size: ${size}px; font-weight: ${weight}; font-style: ${style}; text-align: ${align};`"
	>
		{{ $text }}
	</p>
	<script>
		function quickBrownFox() {
			var defaults = @json($data);
			
			defaults.setFont = function($event) {
				var [family, weight, style] = $event.target.value.split('.');
				
				this.family = family;
				this.weight = weight;
				this.style = style;
			}

			return defaults;
		}
	</script>
</div>

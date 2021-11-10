@if($setting && $setting['google_maps'])
    <section>
        <div aria-hidden="true" class="map" id="map" data-src="{{ $setting['google_maps'] }}"></div>
    </section>
@endif

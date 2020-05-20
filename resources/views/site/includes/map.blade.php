@if($setting && $setting['google_maps'])
    <section>
        <div class="map" id="map">
            <iframe id="iframe-google-map" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" data-src="{{ $setting['google_maps'] }}"></iframe>
        </div>
    </section>
@endif

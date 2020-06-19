<section>
    <div class="form {{ $class }}">
        <h2 class="form__title">Entre em contato</h2>
        <div class="form__items">
            <div class="form__form">
                <p>Ligue para nós</p>
            <form id="form-contact" action="{{ url('/lead') }}">
                    {{-- {{ csrf_field() }} --}}
                    <input type="hidden" name="http_referrer" value="{{ @$_SESSION['last_url'] }} " />
                    <input type="text" name="name" placeholder="Nome*" />
                    <input type="text" name="email" placeholder="E-mail*" />
                    <input type="text" name="phone" placeholder="Telefone*" />
                    <textarea name="message" placeholder="Mensagem*" rows="6"></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div class="form__desctiption">
                <b>Ou melhor, venha nos visitar.</b>
                <p>Nossos clientes são importantes para nós. Ficaremos contentes em receber sua visita!</p>
                @if($setting)
                    @if (isset($_SESSION['_source']) && $_SESSION['_source'] == 'google-ads' && $setting['whatsapp_ads'])
                    <a class="whatsapp" href="//api.whatsapp.com/send?phone=55{{ onlyNumber($setting['whatsapp_ads']) }}&text=&source=&data=&app_absent=" target="_blank">Envie uma mensagem</a>
                    @else
                    <a class="whatsapp" href="//api.whatsapp.com/send?phone=55{{ onlyNumber($setting['whatsapp']) }}&text=&source=&data=&app_absent=" target="_blank">Envie uma mensagem</a>
                    @endif
                    <b>{{ $setting['name_site'] }}</b>
                    <p>{!! nl2br($setting['address']) !!}</p>
                    <p class="phone">
                        @if (isset($_SESSION['_source']) && $_SESSION['_source'] == 'google-ads' && $setting['phone_ads'])
                            <a href="tel:+55{{ onlyNumber($setting['phone_ads']) }}" target="_blank">{{ $setting['phone_ads'] }}</a> |
                        @else
                            <a href="tel:+55{{ onlyNumber($setting['phone_1']) }}" target="_blank">{{ $setting['phone_1'] }}</a> |
                            <a href="tel:+55{{ onlyNumber($setting['phone_2']) }}" target="_blank">{{ $setting['phone_2'] }}</a> |
                            <a href="tel:+55{{ onlyNumber($setting['phone_3']) }}" target="_blank">{{ $setting['phone_3'] }}</a>
                        @endif
                    </p>
                    <p>
                        <a href="mailto:{{ $setting['email'] }}" target="_blank">{{ $setting['email']}}</a>
                    </p>
                    <p>
                        <a class="facebook-link" href="{{ $setting['facebook_link'] }}" target="_blank">
                            <img src="{{ URL::asset('images/facebook-icon.png')}}" alt="Visite nossa página no Facebook" title="Visite nossa página no Facebook" />
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>

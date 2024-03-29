<section>
    <div class="form {{ $class }}">
        @if($class === 'form-product')
        <h2 class="form__title">Solicite seu orçamento</h2>
        @else
        <h2 class="form__title">Entre em contato</h2>
        @endif
        <div class="form__items">
            <div class="form__form">
                <p>Ligue para nós</p>
                <form id="form-contact" action="{{ url('/lead') }}" data-url-key="{{ url('/captcha/api/math') }}">
                    <input type="hidden" name="http_referrer" value="{{ @$_SESSION['last_url'] }}" />
                    <input type="hidden" name="key" value="" />
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" placeholder="Nome*" accesskey="c" />
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="E-mail*" />
                    <label for="phone">Telefone</label>
                    <input type="text" id="phone" name="phone" placeholder="Telefone*" />
                    <label for="message">Mensagem</label>
                    <textarea id="message" name="message" placeholder="Mensagem*" rows="6"></textarea>
                    <div class="form__captcha"></div>
                    <input type="text" id="captcha" name="captcha" placeholder="Captcha*" />
                    <div id="messages-form"></div>
                    <button type="button" id="form-contact-button">Enviar</button>
                </form>
            </div>
            <div class="form__desctiption">
                <b>Ou melhor, venha nos visitar.</b>
                <p>Nossos clientes são importantes para nós. Ficaremos contentes em receber sua visita!</p>
                @if($setting)
                @if (isset($_SESSION['_source']) && $_SESSION['_source'] == 'google-ads' && $setting['whatsapp_ads'])
                <a rel="noreferrer" class="whatsapp click_whatsapp" href="//api.whatsapp.com/send?phone=55{{ onlyNumber($setting['whatsapp_ads']) }}&text=&source=&data=&app_absent=" target="_blank">Envie uma mensagem</a>
                @else
                <a rel="noreferrer" class="whatsapp click_whatsapp" href="//api.whatsapp.com/send?phone=55{{ onlyNumber($setting['whatsapp']) }}&text=&source=&data=&app_absent=" target="_blank">Envie uma mensagem</a>
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
                    <a rel="noreferrer" class="facebook-link" href="{{ $setting['facebook_link'] }}" target="_blank">
                        <img src="{{ URL::asset('images/facebook-icon.png')}}" alt="Visite nossa página no Facebook" width="24" height="23" />
                    </a>
                </p>
                @endif
            </div>
        </div>
    </div>
</section>

<section>
    <div class="form">
        <h2 class="form__title">Entre em contato</h2>
        <div class="form__items">
            <div class="form__form">
                <p>Ligue para nós</p>
            <form id="form-contact" action="{{ url('/lead') }}">
                    {{ csrf_field() }}
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
                <p>Nossos clientes são importantes para nós. Ficaríamos contentes em receber a sua visita durante nosso horário comercial.</p>
                @if($setting)
                    <a class="whatsapp" href="https://wa.me/55{{ onlyNumber($setting['whatsapp']) }}" target="_blank">Envie uma mensagem</a>
                    <b>{{ $setting['name_site'] }}</b>
                    <p>{!! nl2br($setting['address']) !!}</p>
                    <p class="phone">
                        <a href="tel:{{ onlyNumber($setting['phone_1']) }}" target="_blank">{{ $setting['phone_1'] }}</a> |
                        <a href="tel:{{ onlyNumber($setting['phone_2']) }}" target="_blank">{{ $setting['phone_2'] }}</a> |
                        <a href="tel:{{ onlyNumber($setting['phone_3']) }}" target="_blank">{{ $setting['phone_3'] }}</a>
                    </p>
                    <p>
                        <a href="mailto:{{ $setting['email'] }}" target="_blank">{{ $setting['email']}}</a>
                    </p>
                    <p>
                        <a class="facebook-link" href="{{ $setting['facebook_link'] }}" target="_blank">
                            <img src="{{ url('images/facebook-icon.png')}}" alt="Visite nossa página no Facebook" />
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>

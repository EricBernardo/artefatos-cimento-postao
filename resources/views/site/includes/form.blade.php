<section>
    <div class="form">
        <h2 class="form__title">Entre em contato</h2>
        <div class="form__items">
            <div class="form__form">
                <p>Ligue para nós</p>
                <form>
                    <input type="text" name="name" placeholder="Nome*" />
                    <input type="text" name="email" placeholder="E-mail*" />
                    <input type="text" name="phone" placeholder="Telefone*" />
                    <textarea name="message" placeholder="Mensagem*" rows="6"></textarea>
                    <button>Enviar</button>
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
                        <a href="tel:{{ onlyNumber($setting['phone_1']) }}">{{ $setting['phone_1'] }}</a> |
                        <a href="tel:{{ onlyNumber($setting['phone_2']) }}">{{ $setting['phone_2'] }}</a> |
                        <a href="tel:{{ onlyNumber($setting['phone_3']) }}">{{ $setting['phone_3'] }}</a>
                    </p>
                    <p>
                        <a class="facebook-link" href="{{ $setting['facebook_link'] }}">
                            <img src="{{ url('images/facebook-icon.png')}}" alt="Visite nossa página no Facebook" />
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>

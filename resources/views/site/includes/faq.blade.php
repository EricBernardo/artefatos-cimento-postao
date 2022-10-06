@php
$faqs = json_decode($product['faq'], 1);
@endphp

@if ($faqs)
    <section>
        <div class="faq">
            <h2 class="faq__title">Perguntas Frequentes</h2>
            <ul class="faq__list">
                @foreach ($faqs as $item)
                    <li class="faq__item">
                        <button type="button" aria-expanded="false">
                            <span>{{ $item['name'] }}</span>
                        </button>
                        <p>{{ $item['acceptedAnswer']['text'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {!! $product['faq'] !!}
          ]
        }
      </script>
@endif

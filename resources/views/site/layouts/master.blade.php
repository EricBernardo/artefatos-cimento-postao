<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="theme-color" content="#FF4C00">

        <link rel="manifest" href="{{ url('manifest.json') }}">

        <meta property="og:locale" content="pt_BR">

        <meta property="og:type" content="website">

        <meta name="google-site-verification" content="g-6BiY4w-I_Eg9AApeNLFOqyeRJb-C7_PNziwQMB2LI">

        @if($seo)

            <meta name="description" content="{{ $seo['description'] }}">

            <meta name="keywords" content="{{ $seo['keywords'] }}">

            <meta property="og:title" content="{{ $seo['title'] }}" />

            <meta property="og:description" content="{{ $seo['description'] }}" />

            <meta property="og:image" content="{{ URL::asset('storage/' . $seo['image']) }}" />

            <title>{{ $seo['title'] }}</title>

        @endif

        <meta property="og:url" content="{{ URL::current() }}" />

        <link rel="canonical" href="{{ URL::current() }}" />

        @if($setting)
        <meta property="og:site_name" content="{{ $setting['name_site'] }}" />
            <link rel="icon" href="{{ URL::asset('storage/' . $setting['favicon']) }}" />
        @endif

        <link rel="stylesheet" href="{{ URL::asset('/css/site/app.css?v=') . env('APP_VERSION') }}">



    </head>
    <body>

        <?php if(isset($seo) && $seo['keywords']) : ?>

            <div class="carousel js-product-carousel">
                <div class="carousel__view">
                    <ul class="product-list js-product-list">

                        <?php
                            $arr_keywords = explode(',', $seo['keywords']);
                            shuffle($arr_keywords);
                            foreach ($arr_keywords as $key => $value) {
                                echo '<li class="product-list__item"><p data-slide="'.$key.'" class="product">'.trim($value).'</p></li>';
                            }
                        ?>

                    </ul>
                </div>
            </div>

        <?php endif; ?>

        <header class="header">
            @if($setting && $setting['logo'])
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ URL::asset('storage/' . $setting['logo']) }}" alt="{{ $setting['name_site'] }}" title="{{ $setting['name_site'] }}" />
                </a>
            @endif

            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <nav>
                <ul class="menu">
                    <li><a href="{{ url('/') }}">Página inicial</a></li>
                    <li><a href="{{ url('/produtos') }}">Produtos</a></li>
                    <li><a href="{{ url('/quem-somos') }}">Quem Somos</a></li>
                    <li><a href="{{ url('/equipe') }}">Equipe</a></li>
                    <li><a href="{{ url('/contato') }}">Contato</a></li>
                </ul>
            </nav>
        </header> 

        <div class="container">
            @yield('content')
        </div>

        @include('site/includes/map')

        <footer class="footer">
            @if($setting && $setting['copyright'])
                <p>{{ $setting['copyright'] }}</p>
            @endif
        </footer>

        <script async src="{{ URL::asset('/js/site/app.js?v=') . env('APP_VERSION') }}"></script>
        
        <!-- Smartsupp Live Chat script -->
        <script type="text/javascript">
            var _smartsupp = _smartsupp || {};
            _smartsupp.key = '82b690dfb1396c8845cac3aa3f8c6b4fb249280a';
            window.smartsupp||(function(d) {
              var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
              s=d.getElementsByTagName('script')[0];c=d.createElement('script');
              c.type='text/javascript';c.charset='utf-8';c.async=true;
              c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
            })(document);
        </script>
        
        <script>
        
            const html = `
                <style>
                    .modal {
                        display: none; 
                        position: fixed; 
                        z-index: 9999999999; 
                        padding-top: 100px; 
                        left: 0;
                        top: 0;
                        width: 100%; 
                        height: 100%; 
                        overflow: auto; 
                        background-color: #00000054;
                    }			

                    .modal-content {
                        background-color: #ff4c00;
                        margin: auto;
                        padding: 20px;
                        border: 10px solid #fff;
                        width: 90%;
                        max-width: 500px;
                        max-height: 500px;
                        flex-direction: column;
                        border-radius: 5px;
                        height: 80%;
                        position: relative;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .modal-content p {
                        font-size: 20px;
                        color: white;
                        text-align: center;
                        padding: 10px 0;
                    }

                    .modal-content a {
                        background: url(data:image/png;base64,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);
                        border-radius: 10px;
                        background-size: 50px;
                        background-repeat: no-repeat;
                        background-color: #1bd741;
                        cursor: pointer;
                        color: white;
                        font-size: 17px;
                        padding: 15px 30px 15px 60px;
                        text-decoration: none;
                        max-width: 250px;
                        margin: 0 auto;
                        margin-top: 10px;
                        text-transform: uppercase;
                        opacity: 0.9;
                        border: 3px solid;
                    }

                    .modal-content a:hover {
                        opacity: 1;
                    }

                    .modal-close {
                        color: white;
                        float: right;
                        font-size: 50px;
                        font-weight: bold;
                        text-align: right;
                        position: absolute;
                        right: 0;
                        top: -20px;
                        padding: 10px;
                    }

                    .modal-close:hover,
                    .modal-close:focus {
                        color: #000;
                        text-decoration: none;
                        cursor: pointer;
                    }
                </style>
                <div id="my-modal" class="modal">
                  <div class="modal-content">
                    <span class="modal-close">&times;</span>
                    <p id="modal-title"></p>
                    <p>Entre em contato conosco através do Whatsapp</p>
                    <a href="https://api.whatsapp.com/send/?phone=555196265851" target="_blank">Clique aqui</a>
                  </div>
                </div>
            `;

            document.querySelector('body').insertAdjacentHTML('beforeend', html);

            const modal = document.getElementById("my-modal");

            const modalClose = document.getElementsByClassName("modal-close")[0];

            modalClose.onclick = function() {
                localStorage.setItem('close-my-modal', true);
                modal.style.display = "none";
            }

            document.querySelector('body').addEventListener('mouseleave', e => {
                if (!localStorage.getItem('close-my-modal')) {
                	document.getElementById("modal-title").innerHTML = "Olá, já vai sair?";
                    document.getElementById("my-modal").style.display = 'block';
                }
            });

            if (!localStorage.getItem('close-my-modal')) {
	            setTimeout(function() {
				    if (document.getElementById("my-modal").style.display != "block") {
				    	document.getElementById("modal-title").innerHTML = "Olá, como posso ajudar?";
				    	document.getElementById("my-modal").style.display = 'block';
				    }
				}, 15000);
			}
            
            const html_whatsapp = `
                <style>
                    .acp-fixed-tabs-whats {
                      position: fixed;
                      right: 0px;
                      top: 140px;
                      z-index: 100;
                    }
                    .acp-whatsphone {
                      background: #1EBEA5;
                      height: 60px;
                      width: 70px;
                      border-radius: 30px 0 0 30px;
                      transition: 0.7s ease;
                    }
                    .acp-whatsphone:hover {
                      width: 280px;
                      transition: 0.7s ease;
                    }
                    .acp-whatsphone-icone {
                      background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAC9FBMVEUAAADv7+/g4ODd3d3k5OTa2tr9/f3+/v7s7Ozm5ubX19fa2tra2tr09PT4+Pjz8/Pq6uru7u7s7Ozj4+Pj4+Pj4+Ph4eHh4eHX19f09PT7+/vt7e3////7+/vw8PDt7e3s7Oz7+/vr6+vm5ubj4+PW1tbg4ODd3d3a2trc3Nze3t7x8fHx8fH4+Pjy8vLt7e3q6ur9/f34+Pjn5+fu7u7l5eXl5eX6+vro6Ojb29vf39/29vb19fXh4eGWlpb6+vr6+vrz8/P+/v719fX9/f3+/v7z8/P29vb9/f37+/vm5ubq6urm5ubX19fh4eH6+vr+/v7Nzc3l5eX5+fnf39/V1dXv7+/IyMjr6+u7u7v4+Pi2trb///9DxVMtuEI/w1FFx1VNy1swukU3vkpW0WNBxFIzu0cvuUNSzl9LyVpKyVkst0Eqt0BPzF0+wk9V0GFTzmBRzV5IyFdUz2FMyltHx1c9wU88wU79/v01vUgptj86wE05v0w2vUlZ0mQotT5Bx1EktDv7/vz4+Pgxu0UmtTwdsjT8/Pzb895W0WJR0F06wksxvkQvvEIpuD3m9+g3wEk1wEcruj/5/fnt+u/r+e3M79G56sCu5bZOzltIy1ZGylU+xU48w00iszgfszYasDH7+/vf9uGV4Z1t0Xpl1XBRxWNKy1gsu0Dz/PT09PTx8fHo+Ovj9+bh9eTf9OLP8dPE7Mqn5q6C1o6C2oxp13Rn0HRd0WlMzFo6vE8ktjr2/ffx+/LU89fI7c3F78nB68ex57iq57Gn4rCe4aea3qSO2JqN3ZZ91Ip51YV824R00YFx2XtgynBdzWtZxmpaymlPyF9IxllAwVIyuEb6/fr6+vrn+OnZ9dzW8trC78a96MS26Lyw5bii4que5KWX3aGU2p+R2pyJ2ZSF2JCF24+G34521INw031rzXlkzHRiz3Bj029dzGxKw1xKzVg7vk88wE47xEw1ukqw6rWb3KaM2JiH25F324BxzYBGvlkRrSr4hFN5AAAAXHRSTlMA9DkpGwT8+MVoMBAK+eTQuI+BfnJcVUoW/ujl4Nm9r6alnJuOSkZANCMI+Ofm2djXzsTDuaGVjIqAZVszMS/48fDs6dva2s/Ds6Shj4iHgXRwYmBgX0JBPy4jI2o55OUAAAVZSURBVEjHtZZ1QFNBGMDHxO7u7u7u7m59xkDFzelsN0AcrGDN6AYVEFERFQXs7u7u7q5/fN/3gse2B/qHv3929933e3e7u3f3BP+BgtMmjak7pGaNGgPbDu3cvUeVf1Abj25bmOBSre54178yi3dvJycc6de5R/7jrVCT4KFQ3WJ5u1PacbL9dqek7A7iBPqUK8GvlijLDnjz/nWnzmRkJGac+fHsy40UJjyYt3PXWnTKnlunfPR6vSyARCbT6wMS76+lmwqPc+5OHUAgwYcSI/RzfLjIIgKebaX1rs7cXqUI5FbGe9kcnzm58QmI0K8LJpCyTtzqVLfHyV6dInufuJ+yR9q7VWpgfG1i8jIZDwEREdsoe6ydTM3V3l2Zy/JgfuQ6atYm53LLU/36ZC7Ok/lR9zGxVHGO2wS3suVN8vx8WBJ5CO169oMOOhO1BBBFRUUlL+FhYTIuWaGGrFsRN9Y25UIgcte2sDunIhfyEPkmBJKLFGRehtJQvSHJFIlEpLsZ9tiuZJFzFiqpSWO6rowd71BCm1i0l6CGIeJBnIlbtQMt14GKf5R4OQk8F9gikiznQfkUEuRCdAv0hspTpZhEIsbH4kDEPEgkmyGhHMpFoXhdvFRConxB0OxXSviIPgIJrZqBXBuKYdFLgegd7EnwesZSHpQ7cbUKwJnVH4ono1cAINMcj1nBw+zlmyChEvzlQtDPubmzgejnrLwTIs75FAYJnUi5ESzUJvEMDM+4GEy7Rz7N5sXwHfcJM1+hMTMorAcpNwwCfMSsh5TSpNwFCgetdNyAcUJ+zpCX/BpyapJyPSjcC5xLY9iH9iEI8BHz9iqZ0pLZX0cDZ9EYzu3BlXoROHcWH4YLQXAHMfI9I9tiPE4AlkvWPOSrtFwfUsONixhWWtPRDp1lZWOGVYu4WN/icULK5WCp9gWuWsngfuk62gdWBdIR6yUvI7QzBOIWG8ScBJa53qtYjDv90N560eQFddPzkNAn3qacDNN2ZqmEOjiCkhReOZhOEIjlpNHo7WW8GAIH65OPJnemHTdDGVKeXhJK603eHDY8llN6+iuF+eNN+hV/fNkdW90vW2ArwDvZrBXO2AZ3LrbtYAOhpw/gLydJfQEqCY0FJGXxSnVXcOXVtpO7CQfCKNn2AColXUGulIDjtq3Ohfmsv4P8wAwtinlpOYdYlRY4tR7zFFxW2z4c8bOT12+AFttpKOuKCpAu+P9emhXzuCjczEl3cunhHhBXq3FILq70ZVMVZ8ZDzVExTWpLOsoO3u+wGuVsXGQ5e0vXxq4fadzsULtJNW7nD98MDgoK2XdW46EmQ9LLm3C62I8TYV+o3812c4KHOdvtw7t3WVIzVmdK07Hj+gIWvG9OZ3s4Z6bU7LmALsceJYAWrqxbDG7YkCzpzHyJ246uqpvd1X47Nl9VqqU2va4MLbLH/kPtgnzQ+B6To9ymCudTtSVMQVKsVCrVxGm1GqlTPLVXwgnEpQmn44b4zsz0JcXPr74dy4r39XRgjTb2ZRrlNm/k8DVz9/ea84/CYA0tx67Ex2nWcND4xsedTSfofisLuBTB+Tqc8yJs+ZqkiY+P80VitfGxn08w76W8emOOiZeVA3L/8J+/rpCj9VyQdf5haDATV7VvKsjFRMI5fiFp/v5plhTOI5s3sP/grscRdKqq1wge5BvLCB2+0EsxjaqSRTpVEnZ0UTlTdRuLVBQ4UIwSU1uPqFiAmoMKbVJV9qZLx8oFBY5UIBKqVh9eVMhpK1G5fHuX1I2qBJ0u4Zoq1aV1/Qk4T44MK1O0Z3HHsGvPRt26NmgwqkIlYdNmgv/AHwgll5kWhiGeAAAAAElFTkSuQmCC);
                        background-repeat: no-repeat;
                        width: 280px;
                        background-size: 44px;
                        background-position: 16px 7px;
                        padding: 7px;
                    }
                    .acp-whatsphone-icone a {
                      color: #ffffff;
                      font-size: 14px;
                      line-height: 20px;
                      margin-left: 70px;
                      text-decoration: none;
                      height: 60px;
                      font-family: sans-serif;
                    }
                    .acp-whatsphone-icone a strong {
                      display: block;
                      font-size: 21px;
                      margin-left: 70px;
                    }
                </style>
                <div class="acp-fixed-tabs-whats">
                  <div class="acp-whatsphone">
                    <div class="acp-whatsphone-icone">
                      <a target="_blank" href="https://api.whatsapp.com/send?phone=5551996265851">Agora é só clicar e <br><strong>Fazer seu Pedido!</strong></a>          
                    </div>
                  </div>          
                </div>
            `;

            document.querySelector('body').insertAdjacentHTML('beforeend', html_whatsapp);
            
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165560877-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-165560877-1');
        </script>
        
    </body>
</html>

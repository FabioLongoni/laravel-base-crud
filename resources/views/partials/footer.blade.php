<footer>
  <div>
    @php
    $links1 = [
        [
          'text' => 'Characters',
        ],
        [
          'text' => 'Comics',
        ],
        [
          'text' => 'Movies',
        ],
        [
          'text' => 'Tv',
        ],
        [
          'text' => 'Games',
        ],
        [
          'text' => 'Videos',
        ],
        [
          'text' => 'News',
        ]     
    ];
    $links2 = [
        [
          'text' => 'Shop Dc',
        ],
        [
          'text' => 'Shop Dc Collectibles',
        ]
    ];
    $links3 = [
        [
          'text' => 'Terms Of Use',
        ],
        [
          'text' => 'Privacy policy(New)',
        ],
        [
          'text' => 'Ad choises',
        ],
        [
          'text' => 'Advertising',
        ],
        [
          'text' => 'Games',
        ],
        [
          'text' => 'Jobs',
        ],
        [
          'text' => 'CPSC Certificates',
        ],
        [
          'text' => 'Talent Workshops',
        ],
        [
          'text' => 'Ratings',
        ],
        [
          'text' => 'Shop Help',
        ],
        [
          'text' => 'Contact Us',
        ]
    ];
    $links4 = [
        [
          'text' => 'Dc',
        ],
        [
          'text' => 'AD Magazine',
        ],
        [
          'text' => 'Dc Kids',
        ],
        [
          'text' => 'DC Universe',
        ],
        [
          'text' => 'Dc Power Visa',
        ]
    ];
    $icons = [
        [
          'img' => '/img/footer-facebook.png'
        ],
        [
          'img' => '/img/footer-pinterest.png'
        ],
        [
          'img' => '/img/footer-twitter.png'
        ],
        [
          'img' => '/img/footer-youtube.png'
        ]
    ];
    $listCards = [
        [
          'image'=> "/img/buy-comics-digital-comics.png",
          'text'=> "digital comics"
        ],
        [
          'image'=> '/img/buy-comics-merchandise.png',
          'text'=> "dc merchandise"
        ],
        [
          'image'=> '/img/buy-comics-subscriptions.png',
          'text'=> "subscription"
        ],
        [
          'image'=> '/img/buy-comics-shop-locator.png',
          'text'=> "comic shop locator"
        ],
        [
          'image'=> '/img/buy-dc-power-visa.svg',
          'text'=> "dc power visa"
        ]
    ];
    @endphp
    <section class="footer__first__section">
      <div class="small__container">
        <ul>
          @foreach ($listCards as $card)
          <li>
            <img src="{{$card['image']}}" alt="">
            <a href="#">{{$card['text']}}</a>
          </li>    
          @endforeach
        </ul>
      </div>
    </section>
    <section class="footer__second__section">
      <div class="container">
        <div class="ul__wrapper">
          <div>
            <div class="footer__links">
              <h3>
                Dc Comics
              </h3>
              <ul>
                @foreach ($links1 as $link)
                <li>
                  <a href="#">{{$link['text']}}</a>
                </li>  
                @endforeach   
              </ul>
            </div>  
            <div class="footer__links">
              <h3>
                Shop
              </h3>
              <ul>
                @foreach ($links2 as $link)
                <li>
                  <a href="#">{{$link['text']}}</a>
                </li>  
                @endforeach   
              </ul>
            </div>   
          </div>     
          <div>
            <div class="footer__links">
              <h3>
                Dc
              </h3>
              <ul>
                @foreach ($links3 as $link)
                <li>
                  <a href="#">{{$link['text']}}</a>
                </li>  
                @endforeach   
              </ul>
            </div>   
          </div>
          <div>
            <div class="footer__links">
              <h3>
                Sites
              </h3>
              <ul>
                @foreach ($links4 as $link)
                <li>
                  <a href="#">{{$link['text']}}</a>
                </li>  
                @endforeach   
              </ul>
            </div>   
          </div>
        </div>
        <img src="{{ asset('img/dc-logo-bg.png') }}" alt="">
      </div>
    </section>
    <section class="footer__third__section">
      <div class="container">
        <div class="sign__up__button">
          <a href="#">sign-up now</a>
        </div>
        <div class="footer__media">
          <span>follow us</span>
          <div class="footer__icon">
            @foreach ($icons as $icon)
              <a href="#">
                <img src="{{$icon['img']}}" alt="">
              </a>
            @endforeach
          </div>
        </div>
      </div>
    </section>
  </div>
  
  
</footer>
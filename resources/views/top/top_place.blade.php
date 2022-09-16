@extends ('commons.origin')

@section('contents')

    <ul class="l-main__tab">
        <li><a href="#place">場所から探す</a></li>
        <li><a href="/top_animals#animals">動物から探す</a></li>
        <li><a href="/top_price#price">料金から探す</a></li>
    </ul>
            
    <div class="l-place">
        <div class="l-main__all" id="all">
            <img src="{{ secure_asset('/img/img-map.svg')  }}" alt="日本地図" width=700px>
            <p class="l-place__division" id="aHokkaido">北海道</p>
            <p class="l-place__division" id="aTohoku">東北地方</p>
            <p class="l-place__division" id="aKanto">関東地方</p>
            <p class="l-place__division" id="aChubu">中部地方</p>
            <p class="l-place__division" id="aKinki">近畿地方</p>
            <p class="l-place__division" id="aChugoku-Shikoku">中国・四国地方</p>
            <p class="l-place__division" id="aKyushu-Okinawa">九州・沖縄地方</p>
        </div>
        
        <div class="l-place__area">
            
            <div class="l-place__area__point" id="dHokkaido">
                <figure><img src="{{ secure_asset('/img/img-Hokkaido.svg')  }}" alt="北海道" width=700px></figure>
                
                <div class="l-place__area__zoo">
                    <i class="fas fa-map-marker-alt"  id="pHokkaido_1"></i>
                    
                    <p id="cHokkaido_1">{{ $zoo->zoo_name }}</p>
                    
                </div>
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                
                <p class="back_map">Back</p>
                
            </div>
            
            <div class="l-place__area__point" id="dTohoku">
                <figure><img src="{{ secure_asset('/img/img-Tohoku.svg')  }}" alt="東北" width=700px></figure>
                
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                
                <p class="back_map">Back</p>
                
            </div>
            
            <div class="l-place__area__point" id="dKanto">
                <figure><img src="{{ secure_asset('/img/img-Kanto.svg')  }}" alt="関東" width=700px></figure>
                
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                
                <p class="back_map">Back</p>
                
            </div>
            
            <div class="l-place__area__point" id="dChubu">
                <figure><img src="{{ secure_asset('/img/img-Chubu.svg')  }}" alt="中部" width=700px></figure>
                
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                
                <p class="back_map">Back</p>
                
            </div>
            <div class="l-place__area__point" id="dKinki">
                <figure><img src="{{ secure_asset('/img/img-Kinki.svg')  }}" alt="近畿" width=700px></figure>
                
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                
                <p class="back_map">Back</p>
                
            </div>
            
            <div class="l-place__area__point" id="dChugoku-Shikoku">
                <figure><img src="{{ secure_asset('/img/img-Chugoku-Shikoku.svg')  }}" alt="中国・四国" width=700px></figure>
                
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                
                <p class="back_map">Back</p>
                
            </div>
            
            <div class="l-place__area__point" id="dKyushu-Okinawa">
                <figure><img src="{{ secure_asset('/img/img-Kyushu-Okinawa.svg')  }}" alt="九州・沖縄" width=700px></figure>
                
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                <div class="l-place__area__zoo">
                    <p></p>
                </div>
                
                <p class="back_map">Back</p>
                
            </div>
            
            
        </div>
    </div>
    
@endsection
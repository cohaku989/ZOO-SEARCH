@extends ('commons.origin')

@section('contents')

    <div class="main__post">
        <h2 class="zoo__name">{{ $zoo->zoo_name }}</h2>
        <p class="zoo__text">{{ $zoo->caption }}</p>
        <p class="zoo__adress">{{ $zoo->adress }}</p>
        <!-- ここにGoogle Mapを表示する -->
        <div id="map" class="map"></div>
        
        <style>
        .map {
          width: 400px;
          height: 400px;
        }
        </style>
        
        @foreach($zoo as $s_zoo)
            <p class="zoo__animal">{{ $s_zoo->animal_families->animal_family }}</p>
        @endforeach
        
        <a href="{{ $zoo->hp_url }}" class="zoo__url">{{ $zoo->zoo_name }}のホームページ</a>
        
        
        <ul class="zoo__priceList">
            <li class="zoo__adult">{{ $zoo->adults_price }}</li>
            <li class="zoo__middle">{{ $zoo->middle_price }}</li>
            <li class="zoo__children">{{ $zoo->children_price }}</li>
        </ul>
        
    </div>
    
    <div>
        <a href="/zoos/{{ $zoo->id }}/edit">Edit</a>
    </div>
    
    <form action="/zoos/{{ $zoo->id }}" id="form_{{ $zoo->id }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button> 
    </form>
    
    <div>
        <a href="/zoos" class="l-main__post__back">My Posts Archive</a>
    </div>
    
    <!-- APIキーを指定してjsファイルを読み込む -->
        <script async src="https://maps.googleapis.com/maps/api/js?key=[AIzaSyAqxXisBy2uKVnXo2BAvicrnJwqMQX2IaU]&callback=initMap"></script>
        <script>
          const adress = @json($zoo->adress);
        </script>
        <script src="{{ secure_asset('/js/zoo.js') }}"></script>
        
@endsection
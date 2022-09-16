@extends ('commons.origin')

@section('contents')
    
    <form action="/zoos" method="POST">
        @csrf

        <label for="zoo_name">動物園名</label>
        <br>
        <input name="zoo[zoo_name]" placeholder="動物園名" />
        <br>
        
        <label for="">紹介文</label>
        <br>
        <textarea name="zoo[caption]"></textarea>
        <br>
        
        <label for="adress">住所</label>
        <br>
        <input name="zoo[adress]" />
        <br>
        
        <label for="url">ホームページURL</label>
        <br>
        <input type="url" name="zoo[hp_url]" />
        <br>
        
        <ul class="select__multiple">
            @foreach($animal_family as $animal_families)
                <li class="select__list">
                    <label for="{{ $animal_families->id }}" class="select__name">
                        <input type="checkbox" id="{{ $animal_families->id }}" name="zoo[]" value="{{ $animal_families->id }}">
                        {{ $animal_families->animal_family }}
                    </label>
                </li>
            @endforeach
        </ul>
        
        <p>a</p>
        @foreach($animal_order as $animal_orders) 
            <label for="{{ $animal_orders->id }}">
                <input type="checkbox" id="{{ $animal_orders->id }}" name="zoo[]" value="{{ $animal_orders->id }}">{{ $animal_orders->animal_order }}
            </label>
        @endforeach
        <br>
        
        

        
        <label for="adults_price">大人料金</label>
        <br>
        <input type="number" name="zoo[adults_price]" min=0 />
        <br>
        
        <label for="middle_price">中人料金</label>
        <br>
        <input type="number" name="zoo[middle_price]" min=0 />
        <br>
        
        <label for="children_price">こども料金</label>
        <br>
        <input type="number" name="zoo[children_price]" min=0 />
        <br>
            
        <input type="submit" value="登録"/>
    </form>
    
    <div>
        <a href="/zoos" class="l-main__zoo__back">Zoos Archive</a>
    </div>
    
@endsection
@extends ('commons.origin')

@section('contents')
    
    <form action="/myposts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        
        <br>
        <label for="post_tezt">Body</label>
        <br>
        <textarea name="post[body]" placeholder="内容" value="{{ $post->body }}"></textarea>
        <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        <br>
        <label for="zoo_name">Zoo</label>
        <br>
        <input list="zoo_options" id="posted_zoo" name="{{ $post->zoo_id }}" />
        <datalist id="zoo_options">
            @foreach($zoos as $zoo)
                <option value="{{ $zoo->id }}" @if(old('zoo_id') == $zoo->id ) selected @endif>{{ $zoo->zoo_name }}</option>
            @endforeach
        </datalist>
        <p class="body__error" style="color:red">{{ $errors->first('post.zoo_id') }}</p>
        <br>
        <label for="animal_name">Animal</label>
        <br>
        <input list="animal_options" id="posted_animal" name="{{ $post->animal_family_id }}" />
        <datalist id="animal_options">
            @foreach($animals as $animal)
                <option value="{{ $animal->id }}" @if(old('animal_id') == $animal->id) selected @endif>{{ $animal->animal_family }}</option>
            @endforeach
        </datalist>
        <p class="body__error" style="color:red">{{ $errors->first('post.animal_family_id') }}</p>
        <br>

            
        <input type="submit" value="更新"/>
    </form>
    
    <div>
        <a href="/myposts/{{ $post->id }}" class="l-main__post__back">My Post</a>
    </div>
    
@endsection
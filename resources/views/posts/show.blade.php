@extends ('commons.origin')

@section('contents')

    <div class="l-main__post">
        <figure class="l-main__post__img"><img src="" alt=""></figure>
        <p class="l-main__post__text">{{ $post->body }}</p>
        <p class="l-main__post__place">{{ $post->zoo->zoo_name }}</p>
        <p class="l-main__post__animal">{{ $post->animal_family->animal_family }}</p>
        
    </div>
    
    <div>
        <a href="/myposts/{{ $post->id }}/edit">Edit</a>
    </div>
    
    <form action="/myposts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button> 
    </form>
    
    <div>
        <a href="/myposts" class="l-main__post__back">My Posts Archive</a>
    </div>
    
@endsection
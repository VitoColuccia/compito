<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <title>Compito</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    </head>
    <body>

    <div class="content">



        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="new">
                <div class="inputs">
                    <label for="title">Title:</label>
                    <input type="text" name="title" placeholder="Title">
                    <label for="description">Description:</label>
                    <textarea name="description" placeholder="Description"></textarea>
                </div>

                <input type="submit" value="SALVA">
             </div>
        </form>

        <div class="list">
            @foreach($posts as $post)
               <div class="element">
                   <p><h4>{{$post->title}}</h4></p>
                   <p>{{$post->description}}</p>
                   <form action="{{ route('posts.destroy',['post' => $post->id]) }}" method="POST">
                       @csrf
                       @method('DELETE')
                        <input type="submit" value="Elimina">
                   </form>
               </div>
            @endforeach
        </div>

    </div>

    </body>
</html>

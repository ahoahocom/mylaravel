@extends('layout')

@section('content')
  <h1>Articles</h1>

  <hr/>

  {!! link_to(route('articles.create'), '新規作成', ['class' => 'btn btn-primary']) !!}

  @foreach($articles as $article)
    <article>
      <h2>
        <a href="{{route('articles.show', [$article->id]) }}">
          {{$article->title}}
        </a>
      </h2>
      <div class="body">
          {{$article->body}}
      </div>
    </article>
  @endforeach
@endsection

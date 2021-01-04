@extends('layouts.baseLayout')

@section('title', 'SNS')

@section('contribution')
    <div id="form" class="container">
        <form method="POST" action="">
            @csrf
            <div class="row d-flex justify-content-center">
                <input id="contribution" type="text" name="post" placeholder="今どうしてる？">
            </div>
            <div class="row d-flex justify-content-end">
                <button id="contribution_btn" type="button" class="btn btn-success mr-5 mt-3">投稿</button>
            </div>
        </form>
    </div>
@endsection

@section('main')
    @foreach( $posts as $post)
        <div id="card" class="card container mb-2" style="width: 100%;">
            <div class="card-body">
                <div class="row d-flex justify-content-between">
                    <h5 class="card-title">username</h5>
                    <h6 class="card-subtitle mt-2 mr-5 text-muted">時間</h6>
                </div>
                    <p class="card-text">{{ $post->body }}</p>
                <div class="row d-flex justify-content-end">
                    <button type="button" class="card-link btn btn-danger ml-4 mr-4" onclick="location.href='main.php'">削除</button>
                </div>
            </div>
        </div>
    @endforeach
@endsection









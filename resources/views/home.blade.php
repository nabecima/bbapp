@extends('layouts.app')

@section('content')
<div class="container py-4 home">
    <div class="row justify-content-center mb-3">
        <div class="col-md-9 d-flex">
            <div class="icon-wrapper">
                <a href="{{ route('user.show', Auth::id()) }}">
                    <img src="{{ asset('storage/images/'.Auth::user()->avatar) }}" alt="" class="img-fluid icon">
                </a>
            </div>
            <div class="form-wrapper">
                <form id="tweet-form" action="{{ route('tweet.store') }}" method="POST">
                    @csrf
                    <textarea name="body" placeholder="いまどうしてる？"></textarea>
                    <div class="row justify-content-end">
                        <div class="col text-right">
                            <button class="rounded-pill btn-primary h5 py-2 px-3">投稿</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-center tweets" id="tweets">
        @foreach ($tweets as $tweet)
        <div class="col-md-9 d-flex tweet mb-3" data-id="{{ $tweet->id }}">
            <div class="icon-wrapper">
                <a href="{{ route('user.show', $tweet->user->id) }}">
                    <img src="{{ htmlspecialchars(asset('storage/images/'.$tweet->user->avatar)) }}" alt=""
                        class="img-fluid icon">
                </a>
            </div>
            <div class="content">
                <p class="name font-weight-bold d-flex justify-content-between"><span>{!!
                        nl2br(htmlspecialchars($tweet->user->name))
                        !!}さん</span>
                    @if($tweet->user->id === Auth::id())
                    <span class="text-center times"><i class="fas fa-times"></i></span>
                    @endif
                </p>
                <p class="tweet-body mb-0">{!! nl2br(htmlspecialchars($tweet->body)) !!}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
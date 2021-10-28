@extends('layouts.app')

@section('content')
<div class="container py-4 show">
  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <div class="card align-items-center info position-relative">
        @if ($user->id === Auth::id())
        <span class="position-absolute edit" data-toggle="modal" data-target="#edit"><i
            class="far fa-edit fa-lg"></i></span>
        @endif
        <img src="{{ htmlspecialchars(asset('storage/images/'.$user->avatar)) }}" alt="" class="img-fluid icon">
        <div class="card-body">
          <p class="mb-0">{{ $user->introduction }}</p>
        </div>
      </div>
    </div>
  </div>
  @if ($user->id === Auth::id())
  <x-edit-modal :user="$user" />
  @endif
  <div class="row justify-content-center mb-3">
    @foreach ($user->tweets as $tweet)
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
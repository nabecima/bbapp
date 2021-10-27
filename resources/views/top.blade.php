@extends('layouts.app')
@section('content')
<div class="container-fluid top">
  {{-- <div class="container-fluid top" style="background-image: url({{ asset('images/top.jpeg' )}})"> --}}
    <div class="row align-items-center">

      <div class="col-md-6 text-center left">
        <img src="{{ asset('images/top.svg') }}" alt="" class="img-fluid">
      </div>
      <div class="col-md-6 auth d-flex justify-content-center flex-column right">
        <h2 class="mb-3">BBAppをはじめよう</h2>
        <p class="h4 mb-3"><a class="text-primary" data-toggle="modal" data-target="#register">メールアドレスで登録</a></p>
        <p>アカウントをお持ちの場合は<a class="text-primary" data-toggle="modal" data-target="#login">ログイン</a></p>
      </div>
    </div>
    <x-register-modal />
    <x-login-modal />
  </div>
  @endsection
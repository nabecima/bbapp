<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-start align-items-center">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i
                        class="fas fa-times fa-lg"></i></button>
                <h4 class="ml-3">ログイン</h4>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="modal-body">
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address')
                            }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100 rounded-pill">ログイン</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
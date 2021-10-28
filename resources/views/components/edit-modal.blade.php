<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-start align-items-center">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i
                        class="fas fa-times fa-lg"></i></button>
                <h4 class="ml-3">アカウントを編集</h4>
            </div>
            <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name"
                                value="{{ $user->name }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address')
                            }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ $user->email }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>

                        <div class="col-md-6">
                            <input id="avatar" type="file"
                                class="form-control @error('avatar') is-invalid @enderror pl-0" name="avatar"
                                accept="image/jpeg,image/jpg,image/png">

                            @error('avatar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="introduction" class="col-md-4 col-form-label text-md-right">Introduction</label>

                        <div class="col-md-6">
                            <textarea name="introduction" id="introduction"
                                class="form-control @error('introduction') is-invalid @enderror"
                                maxlength="300">{{ $user->introduction }}</textarea>

                            @error('introduction')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100 rounded-pill">送信</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
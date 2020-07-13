@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add surveilance') }}</div>

                <div class="card-body">
                    <form method="POST" action="surveilance">
                        @csrf

                        <div class="form-group row">
                            <label for="packagecode" class="col-md-4 col-form-label text-md-right">{{ __('Package Code') }}</label>

                            <div class="col-md-6">
                                <input id="packageCode" type="text" class="form-control @error('packaCode') is-invalid @enderror" name="packageCode" value="{{ old('packageCode') }}" required autocomplete="packageCode" autofocus>

                                @error('packageCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cam_numbers" class="col-md-4 col-form-label text-md-right">{{ __('Number of Cameras') }}</label>

                            <div class="col-md-6">
                                <input id="cam_numbers" type="text" class="form-control @error('cam_numbers') is-invalid @enderror" name="cam_numbers" value="{{ old('cam_numbers') }}" required autocomplete="cam_numbers" autofocus>

                                @error('cam_numbers')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cam1_adress" class="col-md-4 col-form-label text-md-right">{{ __('Camera 1 IP') }}</label>

                            <div class="col-md-6">
                                <input id="cam1_adress" type="text" class="form-control @error('cam1_adress') is-invalid @enderror" name="cam1_adress" value="{{ old('cam1_adress') }}" required autocomplete="cam1_adress" autofocus>

                                @error('cam1_adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="cam2_adress" class="col-md-4 col-form-label text-md-right">{{ __('Camera 2 IP') }}</label>

                            <div class="col-md-6">
                                <input id="cam2_adress" type="text" class="form-control @error('cam2_adress') is-invalid @enderror" name="cam2_adress" value="{{ old('cam2_adress') }}" required autocomplete="cam2_adress" autofocus>

                                @error('cam2_adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cam3_adress" class="col-md-4 col-form-label text-md-right">{{ __('Camera 3 IP') }}</label>

                            <div class="col-md-6">
                                <input id="cam3_adress" type="text" class="form-control @error('cam3_adress') is-invalid @enderror" name="cam3_adress" value="{{ old('cam3_adress') }}" required autocomplete="cam1_adress" autofocus>

                                @error('cam3_adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cam4_adress" class="col-md-4 col-form-label text-md-right">{{ __('Camera 4 IP') }}</label>

                            <div class="col-md-6">
                                <input id="cam4_adress" type="text" class="form-control @error('cam4_adress') is-invalid @enderror" name="cam4_adress" value="{{ old('cam4_adress') }}" required autocomplete="cam4_adress" autofocus>

                                @error('cam4_adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                      


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

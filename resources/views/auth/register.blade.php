@extends('layouts.auth')

@section('content')
<div class="row">
    <div class="col-sm-2 col-md-2 col-lg-3"></div>

    <div class="col-sm-8 col-md-8 col-lg-6 px-6">

        <div class="text-center mb-3">
            {{--<img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">--}}

            <h1 class="h3 mb-3 font-weight-normal">REGISTRATION</h1>
            <p> Descriptions of registration </p>
        </div>

        @if('1' !== '1')
        <div class="alert alert-danger" role="alert">
            A simple danger alert—check it out!
        </div>
      @endif
    <form method="POST" action="{{ route('register') }}">

          @csrf
          <section class="registration-section" id="registration-section-one">
            <div class="text-center mb-2 text-muted">
                @lang('Stage1: Client details')
            </div>


            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                <div class="col-md-6">
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="serverip" class="col-md-4 col-form-label text-md-right">{{ __('Pack Code') }}</label>

                <div class="col-md-6">
                    <input id="serverip" type="text" class="form-control @error('serverip') is-invalid @enderror" name="serverip" value="{{ old('serverip') }}" required autocomplete="serverip" autofocus>

                    @error('serverip')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
             <div class="form-group row">
                <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('location') }}</label>
                <div class="col-md-6">
                <input type="text" id="location" name="location" 
                class="form-control"
                placeholder="{{ __('location') }}"
                required autofocus>
                 </div>
            </div>

        <div class="form-group row">
                 <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region/City') }}</label>
             <div class="col-md-6">
                <select id="region" class="form-control" name="region" value="{{ old('region') }}">
                    <option>Arusha</option>
                    <option selected>Dar es salaam</option>
                    <option>Dodoma</option>
                    <option>Geita</option>
                    <option>Iringa</option>
                    <option>Kagera</option>
                    <option>Katavi</option>
                    <option>Kigoma</option>
                    <option>Kilimanjaro</option>
                    <option>Lindi</option>
                    <option>Manyara</option>
                    <option>Mara</option>
                    <option>Mbeya</option>
                    <option>Morogoro</option>
                    <option>Mtwara</option>
                    <option>Mwanza</option>
                    <option>Njombe</option>
                    <option>Pemba Kaskazini</option>
                    <option>Pemba Kusini</option>
                    <option>Pwani</option>
                    <option>Rukwa</option>
                    <option>Ruvuma</option>
                    <option>Shinyanga</option>
                    <option>Simiyu</option>
                    <option>Singida</option>
                    <option>Tabora</option>
                    <option>Tanga</option>
                    <option>Unguja Kaskazini</option>
                    <option>Uguja Mjini Magharibi</option>
                    <option>Unguja Kusini</option>
                </select>
                
            </div>
        </div>
           <!--div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Profile image') }}</label>
                <div class="col-md-6">
                <input type="file" id="image" name="image" 
                class="form-control"
                placeholder="{{ __(' choose image') }}"
                required autofocus>
                 </div>
            </div-->



            <div class="form-label-group">
                <button class="btn btn btn-dark" type="button" id="next-button-one">
                    {{ __('next') }} &nbsp; <em class="fa fa-arrow-circle-o-right"></em>
                </button>

                <a class="pull-right" style="color: #FFFFFF;" href="{{ route('login') }}">
                    {{ __('Already have an Aaccount') }}
                </a>
            </div>
        </section>
        <section class="registration-section d-none" id="registration-section-two">
            <div class="text-center mb-2 text-muted">
                {{ __('Stage 2: package registration') }}
            </div>

              <div class="form-label-group">
                <select id="package" class="form-control" name="package">
                    
                    <option selected>etricia Service</option>
                    <option>etricia plus</option>
                    
                  
                </select>
               
                <label for="packageuses">{{ __('Package type') }}</label>
            </div>

         
            <div class="form-label-group">
                <input type="text" id="packagecode" name="packagecode" 
                class="form-control"
                
                maxlength="70"
                placeholder="{{ __('####') }}"
                required autofocus>

                <label for="serverip">{{ __('Package code') }}</label>
            </div>

            <div class="form-label-group">
                <select id="packageuses" class="form-control" name="packageuses">
                    <option>Shop</option>
                    <option selected>Home</option>
                    <option>Office</option>
                    <option>Farm</option>
                    <option>Manufacturing</option>
                    <option>Home and shop</option>
                    <option>Home and farm</option>
                    <option>Others</option>
                </select>
               
                <label for="packageuses">{{ __('Uses/Purpose') }}</label>
            </div>

            <button class="btn btn-outline-white" type="button" id="previous-button-one">
                {{ __('previous') }} &nbsp; <em class="fa fa-arrow-circle-o-left"></em>
            </button>

            <button class="btn btn btn-dark" type="button" id="next-button-two">
                {{ __('next') }} &nbsp; <em class="fa fa-arrow-circle-o-right"></em>
            </button>
        </section>

        <section class="registration-section d-none" id="registration-section-three">
            <div class="text-center mb-2 text-muted">
                {{ __('Stage 3: Devices registration and GPRS setup') }}
            </div>

           
            <div class="form-label-group">
                <input type="text" id="cam1_adress" name="cam1_adress" 
                class="form-control"
                value="+255"
                maxlength="70"
                placeholder="{{ __('camera1 adress') }}"
                required autofocus>

                <label for="cam1_adress">{{ __('Etricia Phone no') }}</label>
            </div>

           
            <div class="form-label-group">
                <input type="text" id="cam2_adress" name="cam2_adress" 
                class="form-control"
                value="Airtel"
                maxlength="70"
                placeholder="{{ __('camera2 adress') }}"
                required autofocus>

                <label for="cam2_adress">{{ __('Service provider') }}</label>
            </div>
           
            <div class="form-label-group">
                <input type="text" id="cam3_adress" name="cam3_adress" 
                class="form-control"
                value="Internet"
                maxlength="70"
                placeholder="{{ __('camera 3 adress') }}"
                required autofocus>

                <label for="cam3_adress">{{ __('Service Provider VPN') }}</label>
            </div>

            <div class="form-label-group">
                <input type="text" id="IPadress" name="IPadress" 
                class="form-control"
                value=" "
                maxlength="70"
                placeholder="{{ __('Powerpack Adress') }}"
                required autofocus>

                <label for="IPadress">{{ __('User Name') }}</label>
            </div>

            <div class="form-label-group">
                <input type="text" id="iot_adress" name="iot_adress" 
                class="form-control"
                value=" "
                maxlength="70"
                placeholder="{{ __('iot_adress') }}"
                required autofocus>

                <label for="iot_adress">{{ __('Service Provider Password') }}</label>
            </div>

            <button class="btn btn-outline-dark" type="button" id="previous-button-two">
                {{ __('previous') }} &nbsp; <em class="fa fa-arrow-circle-o-left"></em>
            </button>

                    <button class="btn btn btn-dark" type="submit" class="btn btn-primary">
                      REGISTER  &nbsp; <em class="fa fa-save"></em>
                  </button>
             
         
      </section>
  </form>

</div>

<div class="col-sm-2 col-md-2 col-lg-3"></div>
</div>
@endsection
@section('scripts')

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            hideSection();
            $('#registration-section-one').attr('class', 'registration-section');

            $('#previous-button-one').on('click', function(){
                hideSection();
                $('#registration-section-one').attr('class', 'registration-section');
            });

            $('#next-button-one, #previous-button-two').on('click', function(){
                hideSection();
                $('#registration-section-two').attr('class', 'registration-section');
            });

            $('#next-button-two').on('click', function(){
                hideSection();
                $('#registration-section-three').attr('class', 'registration-section');
            });

            function hideSection() {
                $('.registration-section').attr('class', 'registration-section d-none');
            }

        });
    </script>

@endsection


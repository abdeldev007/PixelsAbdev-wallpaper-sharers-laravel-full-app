
    <div class="modal-dialog"  class="my-auto">
        <div class="modal-content">
  
          <div class="container ">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="modal-body">
                  <!--login form Here-->
                  <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
 
                        <div class="col-md-12">
                            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
 
                        <div class="col-md-12">
                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

  
                      <div class="  row mb-0">
     
                        <div class="col-6 mt-2">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                            
                        </div>
                        </div>
                        <div class="col-6  ">
                          
                        <button  type="submit" class="btn btn-primary">
                          {{ __('Login') }}
                      </button>
                  
                      </div>
                    </div>
                    

                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-4">
                          
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

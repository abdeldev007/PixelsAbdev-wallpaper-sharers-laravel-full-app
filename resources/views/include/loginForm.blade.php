<form method="POST" action="{{ route('register') }}">
  @csrf

  <div class="form-group row">
 
      <div class="col-md-12">
          <input placeholder="Full Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
 
      <div class="col-md-12">
          <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
 
      <div class="col-md-12">
          <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
 
      <div class="col-md-12">
          <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
  </div>
 
   

  <div class="  row mb-0">
     
      <div class="col-6 mt-2">
        <input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">      
   <a>i agree to the terms</a>
      </div>
      <div class="col-6  ">
        <button style="width:100%" type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>

    </div>
  </div>
</form>

  
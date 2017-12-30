@extends('layouts.app')

@section('content')

<body class="login-img3-body">

    <div class="container">
        @include('partials.error')

      <form class="login-form" action="/signup" method="POST">        
        {{ csrf_field() }}

        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            

            <div class="input-group">
                <label for="fullname" class="control-label">Enter Full  Name <span class="required">*</span></label>            
              <input type="text" name="name"class="form-control" placeholder="Name" autofocus>
            </div>

            <div class="input-group">
                <label for="email" class="control-label">E-mail Address <span class="required">*</span></label>            
              <input type="text" name="email"class="form-control" placeholder="Email Address" >
            </div>

            
            <div class="input-group">
                <label for="Number" class="control-label">Phone Number <span class="required">*</span></label>            
              <input type="text" name="number" class="form-control" placeholder="Phone Number" autofocus>
            </div>            


            
            <div class="input-group">
                <label for="Password" class="control-label">Enter Password <span class="required">*</span></label>            
              <input type="password" name="password"class="form-control" placeholder="email" autofocus>
            </div>

            
            <div class="input-group">
                <label for="password-confirm" class="control-label">Confirm Password <span class="required">*</span></label>            
              <input type="password"  name="password_confirmation" class="form-control" placeholder="email" autofocus>
            </div>

            
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
        </div>
      </form>
    <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </div>


</body>

@endsection
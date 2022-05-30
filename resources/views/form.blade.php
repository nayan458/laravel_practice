<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <form class="container" action="{{url('/')}}/form" method="POST">
      @csrf
      @php
        echo "<pre>";
        print_r($errors->all());
      @endphp
         <div class="mb-3 row">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="Email_login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" text="Enter Your Email address" value="{{old('email')}}">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                <span class="text-danger">
                    @error('email')
                      {{$message}}
                    @enderror
                </span>
            </div>
            
            <div class="mb-3 row">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="Password_login" class="form-control" id="exampleInputPassword1" text="Enter your password" placeholder="Password">
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </div>

            <button type="submit" class="btn btn-primary row">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

<!-- csrf -->
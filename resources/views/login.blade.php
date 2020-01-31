@extends('welcome')
@section('content')

  <div>
        <form class="log-box" >
        {{csrf_field()}}

            <b> Login </b>
            <hr></hr>

        <div>
            <div>
                <b>
                Email    : 
                </b>
            </div>
            <div>
                <input  type="text" name="email" is="email"><br>
            </div>
        </div>

        <div>
            <div>
                <b>
                Password : 
                </b>
            </div>
           <div>
                <input  type="password" name="password" id="password"><br>
           </div>
        </div>

        <button type="button" class="btn btn-primary tombol" >Login</button>
        </form>
  </div>

@endsection
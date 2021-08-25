@extends('base')

@section('content')


     <div class="container">
    <input type="text" id="token" value="{{ csrf_token() }}" hidden>
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title text-center"><h1>Please Login here</h1></div>
                </div>
                <div class="panel-body" >
                    <form  action="#">
                        <!-- <form  class="form-horizontal" method="post" > -->

                            <!--Username-->

                            <div id="div_id_username" class="form-group ">
                                <label for="id_username" class="control-label col-md-4 "> Username<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input value="mrqasimabid" type="text"  class="input-md require textinput textInput form-control" id="username" maxlength="30" name="username" placeholder="Enter your username" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>


                            <!--Password-->

                            <div id="div_id_password1" class="form-group ">
                                <label for="id_password1" class="control-label col-md-4 ">Password<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input type="password" value="mrqasimabid" class="input-md require textinput textInput form-control" id="password" name="password" placeholder="Enter your password" style="margin-bottom: 10px" type="password" />
                                </div>
                            </div>



                            <!--Login Button-->

                            <div class="form-group">
                                <div class="aab controls col-md-4 "></div>
                                <div class="controls col-md-8 ">
                                    <button name="Login" id="loginBtn"  class="btn btn-primary btn btn-info">Login</Button>
                                </div>
                            </div>

                        <!-- </form> -->

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


@section('script')
    <script src="{{asset('assets/js/scripts/login.js')}}"></script>
@endsection




@stop


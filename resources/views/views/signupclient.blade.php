@extends('layouts.index')

@section('title')
    Signup
@endsection

@section('content')
    <div class="container" style="margin-top: 150px">

        <div data-aos="zoom-out-up" id="signup_container" style="">
            <div style=" padding: 30px">
                <h2 class="text_color" align="center"> Create An Account </h2>




                <form action="" method="post">

                    {{ csrf_field() }}


					<p>

                        <label> Name </label>
                        <input type="text" required class="form-control" name="name"
                            placeholder="Enter Your Name" />
                    </p>
					<p>

                        <label> Email Address </label>
                        <input type="email" required class="form-control" name="email"
                            placeholder="Enter Email  Address " />
                    </p>


                    <p>

                        <label> Phone Number </label>
                        <input required class="form-control" name="phone" placeholder="Enter Phone Number " />
                    </p>








                    <p>
                        <label> Home Address </label>


                        <textarea required placeholder="Shipping Address" name="home_address" class="form-control"></textarea>

                    </p>



                  
           


                    <input class="  btn btn-success form-control  cartbutton" type="Submit" value="Create an Account" />



                </form>
                <strong> By signing up you accept our terms and conditions </strong>

            </div>




            <div class="desktopmenu" style="background: #f2f2f2 ; padding: 10px;">

                Already have an Account?
                <a href="/login">
                    <button class="btn btn-success form-control  cartbutton">

                        Login

                    </button> </a>

            </div>

            <div class="phonemenu" style="background: #f2f2f2 ; padding: 10px;">

                Already have an Account?

                <a href="/login"> <button class="btn btn-success form-control  cartbutton"> Login </button> </a>

            </div>




        </div>





    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
@endsection

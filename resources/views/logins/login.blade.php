@extends('layouts.lay_login')

@section('konten')

<div class="card signup_v4 mb-30">
    <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation"> <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
            <li class="nav-item" role="presentation"> <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a> </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <h4 class="text-center mt-4 mb-4" style="text-transform: uppercase;">Login</h4>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12"> <label for="inputName">Your Username</label> <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your username" required=""> </div>
                        <div class="form-group col-md-12"> <label for="inputName">Your Password</label> <input type="password" class="form-control" id="inputPassword4" placeholder="Enter your password" required=""> </div>
                        <div class="form-group col-md-12">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="custom-checkbox d-block"> <label class="custom-control custom-checkbox checkbox-lg"> <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <div class="custom-control-label" for="customCheck1">Remember Password</div>
                                    </label> </div> <a href="#" target="_blank">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 mb-3"> <button class="btn btn-primary full-width" type="submit">Login</button> </div>
                </form>
                <div class="social-area">
                    <h3 class="title">Or</h3>
                    <p class="text">Sign In with social media</p>
                    <ul class="social-links">
                        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                        <li> <a href="#"> <i class="fab fa-google-plus-g"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <h4 class="text-center mt-4 mb-4" style="text-transform: uppercase;">Register</h4>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12"> <label for="inputName">Your Name</label> <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your name" required=""> </div>
                        <div class="form-group col-md-12"> <label for="inputName">Your Username</label> <input type="text" class="form-control" id="inputPassword4" placeholder="Enter your username" required=""> </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12"> <label for="inputName">Your Email Address</label> <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your email address" required=""> </div>
                        <div class="form-group col-md-12"> <label for="inputName">Your Password</label> <input type="password" class="form-control" id="inputPassword4" placeholder="Enter your password" required=""> </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12"> <label for="inputName">Your Confirm Password</label> <input type="password" class="form-control" id="inputPassword4" placeholder="Enter your confirm password" required=""> </div>
                        <div class="form-group col-md-12"> <label for="inputName">Your Country</label> <select id="inputState" class="form-control" required="">
                                <option selected="">Choose Country</option>
                                <option>India</option>
                                <option>United States</option>
                                <option>Canda</option>
                                <option>Germany</option>
                            </select> </div>
                    </div>
                    <div class="form-group form-row mt-2"> <label class="col-md-2 col-form-label user_group">I am a</label>
                        <div class="col-md-10 pt-1">
                            <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> <label class="form-check-label" for="inlineRadio1">Customer</label> </div>
                            <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <label class="form-check-label" for="inlineRadio2">Vendor</label> </div>
                            <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <label class="form-check-label" for="inlineRadio2">Both</label> </div>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-12"> <label class="custom-control custom-checkbox checkbox-lg"> <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <div class="custom-control-label" for="customCheck1">I agree with <a href="#" target="_blank">terms and conditions</a></div>
                            </label> </div>
                    </div>
                    <hr class="mt-3 mb-4">
                    <div class="col-12">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="custom-checkbox d-block"> <a href="https://demochecks.com/demo/fickrr/login" class="nav-link-inline font-size-sm">Already have an account? Login</a> </div> <button class="btn btn-primary mt-3 mt-sm-0" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
const App = {
    data() {

    },
    mounted() {

    },
    unmounted() {

    },
    methods: {

    }
}

Vue.createApp(App).mount('#app');
</script>
@endsection

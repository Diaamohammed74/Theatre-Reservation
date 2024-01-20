@section('title', 'Forget Password')
<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets-front') }}/" data-template="vertical-menu-template-free">
@include('back.partials.auth.head')


<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Forgot Password -->
                <div class="card">
                    <div class="card-body">
                        <!-- LOGO-->
                        @include('back.partials.auth.logo')
                        <!-- LOGO-->
                        <h4 class="mb-2">Forgot Password back? 🔒</h4>
                        <p class="mb-4">Enter your email and we'll send you instructions to reset your password</p>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form id="formAuthentication" class="mb-3" action="{{ route('back.password.email') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" :value="old('email')"
                                    placeholder="Enter your email" autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <button class="btn btn-primary d-grid w-100">Send Reset Link</button>
                        </form>
                        <div class="text-center">
                            <a href="{{route('back.login')}}" class="d-flex align-items-center justify-content-center">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                Back to login
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Forgot Password -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    @include('back.partials.auth.scripts')
</body>

</html>

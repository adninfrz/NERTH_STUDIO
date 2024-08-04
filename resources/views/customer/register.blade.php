<x-customer-layout>
    <div class="container">
        <div class="left-section">
            <a href="{{ route('home') }}">
                <h1>Nerth Studio</h1>
            </a>
            <img src="{{ asset('img/slide1.png') }}" alt="swiper">
        </div>
        <div class="right-section">
            <div class="subtitle">
                <img src="{{ asset('favicon.ico') }}" alt="Logo">
                <h2>Sign Up for more exclusive contents</h2>
            </div>
            <div class="title">
                <h2>Create account</h2>
                <p>For personal or business.</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="form-control">
                        <label for="first-name">First name</label>
                        <input type="text" id="first-name" name="first_name" placeholder="First name" required>
                    </div>
                    <div class="form-control">
                        <label for="last-name">Last name</label>
                        <input type="text" id="last-name" name="last_name" placeholder="Last name" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-control">
                        <label for="birth_date">Date of birth</label>
                        <input type="date" id="birth_date" name="birth_date" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-control">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-control">
                        <label for="confirm-password">Confirm password</label>
                        <input type="password" id="confirm-password" name="password_confirmation"
                            placeholder="Confirm password" required>
                    </div>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="terms-privacy" name="terms-privacy" required>
                    <label for="terms-privacy">
                        I agree to all the
                        <a href="#" style="color: gray">Terms</a>
                        and
                        <a href="#" style="color: gray">Privacy policy</a>
                    </label>
                </div>
                <div class="form-actions">
                    <button type="submit" class="create-account-btn">Create account</button>
                    <button type="button" class="google-signin-btn">
                        <img src="{{ asset('img/google.png') }}" alt="Google" style="width: 20px"> Sign-in with
                        Google
                    </button>
                </div>
            </form>

            <div class="form-footer">
                <p>Already have an account? <a href="{{ route('customer.login.page') }}">Log In</a></p>
            </div>
        </div>
    </div>
</x-customer-layout>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nerth Studio</title>

    <link rel="shortcut icon" href="favicon.ico" type="img/logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            width: 100%;
        }
        .left-section {
            background-color: #1a1a1a;
            color: white;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 500px;
            width: 100%;
            height: 700px;
            align-content: center
        }
        .left-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }
        .left-section img {
            object-fit: cover;
            height: 500px;
        }
        .right-section {
            background-color: #ffffff;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 1800px;
            width: 100%;
            height: 700px;
            align-content: center;
        }
        .right-section h2 {
            font-size: 1rem;
            font-weight: 600;
        }
        .right-section form {
            display: flex;
            flex-direction: column;
        }
        .right-section .form-group {
            display: flex;
            justify-content: space-between;
        }
        .right-section .form-group .form-control {
            width: 48%;
        }
        .right-section label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #4A4A4A;
            margin-bottom: 0.5rem;
        }
        .right-section input[type="text"],
        .right-section input[type="email"],
        .right-section input[type="date"],
        .right-section input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #D1D5DB;
            border-radius: 4px;
        }
        .right-section .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .right-section .checkbox-group input[type="checkbox"] {
            margin-right: 0.5rem;
        }
        .right-section .checkbox-group.forgot-password {
            justify-content: space-between;
            margin-bottom: 1rem;
        }
        .right-section .checkbox-group.forgot-password a {
            color: gray;
            text-decoration: none;
        }
        .right-section .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .right-section .form-actions button {
            width: 48%;
            padding: 0.75rem;
            border-radius: 4px;
            font-weight: 600;
        }
        .right-section .form-actions .create-account-btn {
            background-color: #000000;
            color: white;
            border: none;
        }
        .right-section .form-actions .google-signin-btn {
            background-color: #ffffff;
            color: #000000;
            border: 1px solid #D1D5DB;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .right-section .form-actions .google-signin-btn img {
            margin-right: 0.5rem;
        }
        .right-section .form-footer {
            text-align: center;
            margin-top: 1rem;
        }
        .right-section .form-footer a {
            color: gray;
            text-decoration: none;
        }
        .right-section .form-footer a:hover {
            text-decoration: underline;
        }
        .right-section .subtitle {
            display: flex;
            align-items: center;
            margin-bottom: 50px;
        }
        .right-section .subtitle img {
            margin: 10px
        }
        .right-section .title {
            align-items: center;
            margin-bottom: 50px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="left-section">
            <h1>Nerth Studio</h1>
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
            <form method="POST" action="{{ route('customer.register') }}">
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
                        <label for="email">Email or phone number</label>
                        <input type="text" id="email" name="email" placeholder="Email or phone number" required>
                    </div>
                    <div class="form-control">
                        <label for="dob">Date of birth (MM/DD/YYYY)</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-control">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-control">
                        <label for="confirm-password">Confirm password</label>
                        <input type="password" id="confirm-password" name="password_confirmation" placeholder="Confirm password" required>
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
                <p>Already have an account? <a href="{{ route('home') }}">Log In</a></p>
            </div>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Our App</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .login-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .error {
            color: red;
            font-size: 0.85em;
            margin-top: 5px;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2>Welcome Back</h2>

        <form action="{{ route('login') }}" method="POST">

            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>

                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>
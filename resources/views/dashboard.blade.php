<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Dashboard</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
            background-color: #f9f9f9;
        }

        .dashboard-box {
            border: 1px solid #ccc;
            padding: 40px;
            border-radius: 8px;
            width: 400px;
            text-align: center;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .welcome-text {
            margin-bottom: 30px;
            font-size: 1.2em;
        }

        .logout-btn {
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>

    <div class="dashboard-box">
        <h2>Our Private Space</h2>
        <div class="welcome-text">
            Welcome back, <strong>{{ Auth::user()->name }}</strong>!
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Log Out</button>
        </form>
    </div>

</body>

</html>
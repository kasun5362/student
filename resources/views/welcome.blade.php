<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            padding: 50px;
            border-radius: 20px;
            text-align: center;
            color: white;
            width: 90%;
            max-width: 450px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 30px;
            background: white;
            color: #764ba2;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .btn:hover {
            background: #f1f1f1;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Welcome 🎉</h1>
        <p>Your journey starts here. Build something amazing today.</p>
        <a href="#" class="btn">Get Started</a>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        * {
            margin: 0;
            padding: 0;
        }

        .main {
            background-color: rgb(248, 248, 248);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center
        }

        form {
            background-color: rgb(236, 233, 233);
            display: flex;
            flex-direction: column;
            gap: 0.5em;

            justify-content: center;
            align-items: center;

            width: 400px;
            padding: 2em;

        }


        input {
            padding: 0.5em;
            width: 85%
        }

        button {
            padding: 0.5em;
            align-self: start;
            margin-left: 1.5em;
            width: 150px;
            background-color: orange;
            border: none;
            margin-top: 1em
        }

    </style>

</head>
<body>

    <div class="main">
        <form action="/putUpdateStudent/{{ $student->id }}" method="POST">
            @csrf
            @method("PUT")
            <h1>Update Student</h1>
            <input type="text" placeholder="Full Name" name="name" value="{{ $student->name }}">
            <input type="text" placeholder="Registration" name="reg" value="{{ $student->reg }}" >
            <input type="email" placeholder="Email" name="email" value="{{ $student->email }}">
            <input type="password" placeholder="password" name="password">
            <button>Update Student</button>
        </form>

    </div>
</body>
</html>

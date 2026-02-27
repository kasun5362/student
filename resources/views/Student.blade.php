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
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .main {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    table {
        width: 90%;
        max-width: 900px;
        border-collapse: collapse;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    thead {
        background-color: #4a47a3;
        color: white;
    }

    th {
        padding: 15px;
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 1px;
    }

    td {
        padding: 12px 15px;
        font-size: 14px;
        color: #333;
    }

    tr:nth-child(even) {
        background-color: #f3f3f3;
    }

    tr:hover {
        background-color: #e6e6ff;
        transition: 0.3s;
    }

    th, td {
        text-align: center;
    }
</style>

</head>
<body>
    @if (session("success"))
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                {{ session("success") }}
            </div>

       @endif
    <div class="main">
       <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Registration</th>
                <th>Email</th>
            </tr>

             @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id}}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->reg }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <form action="/updateStudent/{{ $student->id }}" method="GET">
                            @csrf
                            <button>Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="/deleteStudent/{{ $student->id }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
             @endforeach


       </table>
    </div>
</body>
</html>

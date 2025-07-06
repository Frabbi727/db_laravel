<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #eef2f7;
            padding: 40px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #3b82f6;
            margin-bottom: 30px;
            font-size: 36px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px;
        }
        th, td {
            padding: 16px 20px;
            text-align: left;
        }
        th {
            background-color: #3b82f6;
            color: white;
            font-size: 18px;
        }
        tr:nth-child(even) {
            background-color: #f9fafb;
        }
        tr:hover {
            background-color: #e0f2fe;
            cursor: pointer;
        }
        .no-data {
            text-align: center;
            font-size: 18px;
            color: #6b7280;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>User List</h1>

    @if(!empty($users) && count($users) > 0)
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p class="no-data">No users found.</p>
    @endif
</div>

</body>
</html>

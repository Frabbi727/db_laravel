<div style="padding: 20px; font-family: Arial, sans-serif;">
    <h1 style="text-align: center; margin-bottom: 20px;">User List</h1>

    <table style="width: 100%; border-collapse: collapse;">
        <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">Name</th>
            <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">Email</th>
            <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">Phone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td style="border: 1px solid #ddd; padding: 12px;">{{ $user->name }}</td>
                <td style="border: 1px solid #ddd; padding: 12px;">{{ $user->email }}</td>
                <td style="border: 1px solid #ddd; padding: 12px;">{{ $user->phone }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

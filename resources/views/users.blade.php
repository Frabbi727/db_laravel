{{--
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
--}}



<div class="max-w-6xl mx-auto mt-12 p-8 bg-gray-50 rounded-2xl shadow-lg">
    <h1 class="text-4xl font-bold text-center text-indigo-600 mb-8">User List</h1>

    @if(!empty($data) && count($data) > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
                <thead class="bg-indigo-500 text-white">
                <tr>
                    <th class="py-3 px-6 text-left">#</th>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Email</th>
                    <th class="py-3 px-6 text-left">Phone</th>
                    <th class="py-3 px-6 text-left">City</th>
                    <th class="py-3 px-6 text-left">Company</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $index => $user)
                    <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-indigo-100 transition-colors">
                        <td class="py-3 px-6">{{ $user->id }}</td>
                        <td class="py-3 px-6 font-medium text-gray-800">{{ $user->name }}</td>
                        <td class="py-3 px-6 text-gray-700">{{ $user->email }}</td>
                        <td class="py-3 px-6 text-gray-700">{{ $user->phone }}</td>
                        <td class="py-3 px-6 text-gray-700">{{ $user->address->city }}</td>
                        <td class="py-3 px-6 text-gray-700">{{ $user->company->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-center text-gray-500 text-lg">No users found.</p>
    @endif
</div>

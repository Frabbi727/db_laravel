<div class="max-w-5xl mx-auto mt-12 p-8 bg-gray-50 rounded-2xl shadow-lg">
    <h1 class="text-4xl font-bold text-center text-indigo-600 mb-8">Student List</h1>

    @if(!empty($data) && count($data) > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
                <thead class="bg-indigo-500 text-white">
                <tr>
                    <th class="py-3 px-6 text-left">#</th>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Email</th>
                    <th class="py-3 px-6 text-left">Batch</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $index => $student)
                    <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-indigo-100 transition-colors">
                        <td class="py-3 px-6">{{ $index + 1 }}</td>
                        <td class="py-3 px-6 font-medium text-gray-800">{{ $student['name'] }}</td>
                        <td class="py-3 px-6 text-gray-700">{{ $student['email'] }}</td>
                        <td class="py-3 px-6 text-gray-700">{{ $student['batch'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-center text-gray-500 text-lg">No students found.</p>
    @endif
</div>

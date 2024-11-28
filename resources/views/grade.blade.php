<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mx-auto px-6 py-12">
        <h2 class="text-center text-4xl font-light text-gray-700 mb-10">Grades Data</h2>

        <div class="overflow-hidden rounded-xl shadow-lg bg-white border border-gray-300">
            <table class="min-w-full table-auto border border-gray-300">
                <thead class="bg-gradient-to-r from-teal-300 to-sky-400 text-white">
                    <tr>
                        <th class="px-10 py-6 text-left text-sm font-medium uppercase tracking-wider border-b-2 border-gray-200">ID</th>
                        <th class="px-10 py-6 text-left text-sm font-medium uppercase tracking-wider border-b-2 border-gray-200 border-l-2 border-gray-200">nama</th>
                        <th class="px-10 py-6 text-left text-sm font-medium uppercase tracking-wider border-b-2 border-gray-200 border-l-2 border-gray-200">student list</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    @foreach ($grades as $grade)
                    <tr class="transition duration-300 ease-in-out transform hover:scale-105 hover:bg-gradient-to-r hover:from-green-200 hover:to-blue-200 hover:text-gray-900">
                        <td class="px-10 py-6 whitespace-nowrap text-sm text-gray-900 font-semibold border-b border-gray-200">{{ $grade->id }}</td>
                        <td class="px-10 py-6 whitespace-nowrap text-sm text-gray-600 border-b border-gray-200 border-l-2 border-gray-200">{{ $grade->nama }}</td>
                        <td class="px-10 py-6 whitespace-nowrap text-sm text-gray-600 border-b border-gray-200 border-l-2 border-gray-200">{{ $grade->department->nama }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>

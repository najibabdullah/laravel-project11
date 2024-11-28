<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mx-auto px-6 py-12">
        <h2 class="text-center text-4xl font-light text-gray-700 mb-10">Data Siswa</h2>

        <div class="overflow-hidden rounded-xl shadow-lg bg-white border border-gray-300">
            <div class="overflow-auto"> <!-- Tambahkan wrapper ini untuk scroll horizontal -->
                <table class="min-w-full table-auto border border-gray-300">
                    <thead class="bg-gradient-to-r from-teal-300 to-sky-400 text-white">
                        <tr>
                            <th class="px-10 py-6 text-left text-sm font-medium uppercase tracking-wider border-b-2 border-gray-200">No</th>
                            <th class="px-10 py-6 text-left text-sm font-medium uppercase tracking-wider border-b-2 border-gray-200">Nama</th>
                            <th class="px-10 py-6 text-left text-sm font-medium uppercase tracking-wider border-b-2 border-gray-200">Grade ID</th>
                            <th class="px-10 py-6 text-left text-sm font-medium uppercase tracking-wider border-b-2 border-gray-200">Department ID</th>
                            <th class="px-10 py-6 text-left text-sm font-medium uppercase tracking-wider border-b-2 border-gray-200">Email</th>
                            <th class="px-10 py-6 text-left text-sm font-medium uppercase tracking-wider border-b-2 border-gray-200">Alamat</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 bg-white">
                        @foreach ($students as $student)
                        <tr class="transition duration-300 ease-in-out transform hover:scale-105 hover:bg-gradient-to-r hover:from-green-200 hover:to-blue-200 hover:text-gray-900">
                            <td class="px-10 py-6 whitespace-nowrap text-sm text-gray-900 font-semibold border-b border-gray-200">{{$student->id }}</td>
                            <td class="px-10 py-6 whitespace-nowrap text-sm text-gray-600 border-b border-gray-200">{{$student->nama}}</td>
                            <td class="px-10 py-6 whitespace-nowrap text-sm text-gray-600 border-b border-gray-200">{{$student->grade->nama}}</td>
                            <td class="px-10 py-6 whitespace-nowrap text-sm text-gray-600 border-b border-gray-200">{{$student->department->nama}}</td>
                            <td class="px-10 py-6 whitespace-nowrap text-sm text-gray-600 border-b border-gray-200">{{$student->email}}</td>
                            <td class="px-10 py-6 whitespace-nowrap text-sm text-gray-600 border-b border-gray-200">{{$student->alamat}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout-admin>

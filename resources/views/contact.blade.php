<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto py-10 px-5 flex justify-center">
        <div class="w-full max-w-md p-8 bg-white shadow-lg rounded-lg border border-gray-200">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-indigo-600">Halaman {{ $title }}</h1>
            </div>

            <div class="space-y-4 text-gray-700">
                <h4 class="text-lg">
                    <span class="font-semibold">Nama:</span> {{ $nama }}
                </h4>
                <h4 class="text-lg">
                    <span class="font-semibold">Kelas:</span> {{ $kelas }}
                </h4>
                <h4 class="text-lg">
                    <span class="font-semibold">LinkedIn:</span>
                    <a href="https://www.linkedin.com/in/najib-abdullah-2742382a1/"
                       class="text-blue-500 hover:underline"
                       target="_blank">
                       {{ $linkedin }}
                    </a>
                </h4>
                <h4 class="text-lg">
                    <span class="font-semibold">GitHub:</span>
                    <a href="https://github.com/najibabdullah?tab=repositories"
                       class="text-blue-500 hover:underline"
                       target="_blank">
                       {{ $GitHub }}
                    </a>
                </h4>
            </div>
        </div>
    </div>
</x-layout>

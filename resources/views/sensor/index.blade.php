<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sensor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-6">
                    <a href="/sensor" class="text-gray-800 font-semibold text-lg">Sensor</a>
                    <a href="/sensor" class="text-gray-600 hover:text-gray-800">Home</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/sensor/create"
                       class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md">
                        Tambah Data Sensor
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Data Sensor</h1>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="py-4 px-6 text-left">Nama Sensor</th>
                            <th class="py-4 px-6 text-left">Nilai</th>
                            <th class="py-4 px-6 text-left">Status</th>
                            <th class="py-4 px-6 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sensors as $sensor)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4 px-6">{{ $sensor->nama_sensor }}</td>
                            <td class="py-4 px-6 font-medium">{{ $sensor->nilai }}</td>
                            <td class="py-4 px-6">
                                @if ($sensor->status)
                                    <span class="text-green-600 font-semibold">Aktif</span>
                                @else
                                    <span class="text-red-600 font-semibold">Nonaktif</span>
                                @endif
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="text-blue-600 hover:underline text-sm">Edit</a> |
                                <a href="#" class="text-red-600 hover:underline text-sm">Hapus</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="py-6 text-center text-gray-500">
                                Data sensor belum ada
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>

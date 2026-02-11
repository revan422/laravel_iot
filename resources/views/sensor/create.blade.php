<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Sensor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-6">
                    <a href="{{ route('sensor.index') }}" class="text-gray-800 font-semibold text-lg">
                        Sensor
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">Home</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Tambah Data Sensor</h1>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-lg shadow-md p-6 max-w-md">
            <form action="{{ route('sensor.store') }}" method="POST">
                @csrf

                <!-- Nama Sensor -->
                <div class="mb-6">
                    <label for="nama_sensor" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Sensor
                    </label>
                    <input
                        type="text"
                        id="nama_sensor"
                        name="nama_sensor"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md
                               focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Masukkan nama sensor"
                        required
                    >
                </div>

                <!-- Tipe Sensor (WAJIB) -->
                <div class="mb-6">
                    <label for="tipe_sensor" class="block text-sm font-medium text-gray-700 mb-2">
                        Tipe Sensor
                    </label>
                    <select
                        id="tipe_sensor"
                        name="tipe_sensor"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md
                               focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                    >
                        <option value="">-- Pilih Tipe Sensor --</option>
                        <option value="suhu">Suhu</option>
                        <option value="kelembaban">Kelembaban</option>
                        <option value="cahaya">Cahaya</option>
                    </select>
                </div>

                <!-- Nilai Sensor -->
                <div class="mb-6">
                    <label for="nilai" class="block text-sm font-medium text-gray-700 mb-2">
                        Nilai
                    </label>
                    <input
                        type="number"
                        id="nilai"
                        name="nilai"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md
                               focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Masukkan nilai sensor"
                        required
                    >
                </div>

                <!-- Button -->
                <div class="flex space-x-4">
                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium
                               py-2 px-6 rounded-md transition-colors">
                        Simpan
                    </button>

                    <a
                        href="{{ route('sensor.index') }}"
                        class="bg-gray-600 hover:bg-gray-700 text-white font-medium
                               py-2 px-6 rounded-md transition-colors">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </main>

</body>
</html>

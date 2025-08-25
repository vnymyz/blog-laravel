{{-- nav untuk navigasi. head buat judul setiap halaman
     dan main adalah isi dari halaman atau content --}}
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- mencoba masukin key title dari routes web.php --}}
    <title>{{  $title }}</title>
    {{-- import vite tailwind --}}
    @vite('resources/css/app.css')
    {{-- import font inter --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    {{-- import alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">

<div class="min-h-full">
    {{-- masukin x data di navigasi --}}
    {{-- navigasi dipindahin ke navbar.blade.php di views component --}}
    <x-navbar/>

    {{-- header dipindahin ke header.blade.php di component views --}}
    {{-- melakukan passing data karena title cuman bisa rute home aja --}}
    <x-header :title="$title"/>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    {{-- main ini sebagai content website atau isi website --}}
    {{-- main disini kita hapus ganti slot karena dia itu bakal nampilin yang beda --}}
    {{  $slot }}
        </div>
    </main>

</div>
{{-- flowbite js --}}
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
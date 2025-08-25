{{-- home --}}
{{-- rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white (ini tampilan current)--}}
{{-- mengubah kelas default menjadi kelas current --}}

@props(['href', 'current' => false, 'ariaCurrent' => false])

@php
// buat cek apakah kita lagi di halaman current atau bukan
//                              kalau aktif                     jika default
    // $classes = $current ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'
if($current) {
    $classes = 'bg-gray-900 text-white';
    $ariaCurrent = 'page';
} else {
    $classes = 'text-gray-300 hover:bg-gray-700 hover:text-white';
}
@endphp

{{-- ini tampilan default --}}
<a href="{{ $href }}" 
{{ $attributes ->merge(['class' => 'rounded-md px-3 py-2 text-sm font-medium ' . $classes, 'aria-current' => $ariaCurrent]) }}>{{ $slot }}</a>

{{-- copy semua components dari belajar laravel terus paste components web blog --}}
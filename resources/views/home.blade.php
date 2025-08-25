{{-- kita perlu ngasih tau main ini akan menggunakan komponen layout.blade.php --}}
{{-- jadi kita bungkus main nya dalam layout --}}
{{-- kita juga harus mengirimkan data ke title --}}
<x-layout :title="$title">
{{-- main ini sebagai content website atau isi website --}}
      <!-- Your content -->
      <p>Welcome to my Home page</p>
      {{-- iseng buat perulangan blade directive--}}
      {{-- bungkus dalam div  --}}
      <div class="flex mt-3">
        {{-- isi perulangan --}}
        @for($i = 1; $i <= 10; $i++ )
          @if($i % 2 !== 0)
        <div class="w-8 h-8 bg-teal-500 text-white p-0 me-1 text-xs grid place-items-center">{{ $i }}</div>
         @endif
        @endfor
        </div>
</x-layout>
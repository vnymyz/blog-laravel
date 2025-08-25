{{-- ini semua buat nampilin 1 artikel aja atau single post --}}
<x-layout :title="$title">
    {{-- untuk nampilin template flowbite --}}
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
        {{-- tombol untuk kembali ke artikel sebelumnya --}}
        <a href="/posts" class="font-medium text-xs text-blue-500 hover:underline">&laquo; Kembali ke halaman blog.</a>
        {{-- judul dan author --}}
          <header class="my-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                      <div>
                        {{-- nama author yg buat post --}}
                          <a href="/posts?author={{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                          {{-- nama kategori dan diberi warna --}}
                           <a  href="/posts?category={{ $post->category->slug }}" class="block">
                              <span class="{{ $post->category->color }} text-gray-600 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                {{ $post->category->name }}
                              </span>
                         </a>
                         {{-- waktu atau time dibuat post --}}
                          <p class="text-base text-gray-500 dark:text-gray-400">
                            {{ $post->created_at->diffForHumans() }}
                            </></p>
                      </div>
                  </div>
              </address>
              {{-- judul atau title --}}
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                {{ $post['title'] }}
            </h1>
          </header>
          {{-- body atau isi --}}
          <p>{{ $post['body'] }}</p>


      </article>
  </div>
</main>

          
    
</x-layout>
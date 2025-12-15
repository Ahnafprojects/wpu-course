<x-layout :title="$title">

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
      <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <div class="flex justify-between items-center mb-5">
              <a href="/posts" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                  <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0L2.586 11l3.707-3.707a1 1 0 011.414 1.414L5.414 11l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                      <path fill-rule="evenodd" d="M4.586 11H17a1 1 0 110 2H4.586l2.293 2.293a1 1 0 11-1.414 1.414L2.586 13l2.879-2.879a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  Back to all posts
              </a>
          </div>
          <header class="mb-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                    
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($post->author->name) }}&background=0d9488&color=fff" alt="{{ $post->author->name }}">
                      <div>
                          <a href="/authors/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{ $post->author->name }}</a>
                            <div class="text-base text-gray-500 dark:text-gray-400">
                        <a href="/categories/{{ $post->category->slug }}" class="bg-{{ $post->category->color }} text-gray-600 text-xs font-medium item-center inline-flex px-2.5 py-0.5 rounded hover:underline">{{ $post->category->name }}</a>
                          <p class="text-base text-gray-500 dark:text-gray-400">
                            {{ $post->created_at->diffForHumans() }}
                          </p>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
          </header>
          
          <div class="prose prose-lg max-w-none dark:prose-invert">
              {!! nl2br(e($post->body)) !!}
          </div>
          
          
      </article>
  </div>
</main>

</x-layout>

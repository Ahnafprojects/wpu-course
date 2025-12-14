<x-layout :title="$title">

        <article class="py-8 max-w-screem-md ">
            
            <h2 class="mb-1 text tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            
            <div class="text-base text-gray-500">
                 <a href="/authors/{{ $post->author->username }}" class='hover:underline'>{{
                     $post->author->name }}</a>| 23 January 2025
            </div>
            <p class="my-4 font-light">{{ ($post['body'] ) }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline"> &laquo; Backto all posts </a>
        </article>



</x-layout>

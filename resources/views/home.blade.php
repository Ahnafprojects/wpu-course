<x-layout :title="$title">
      <!-- Your content goes here -->
      <p>Welcome to My Home page</p>
      <div class="flex mt-4">
      @for ($i=1 ; $i <= 10; $i++)  
 @if ($i%2 ===1)
        <div class="w-10 h-10 mr-2 hover:bg-blue-950 hover:text-white text-white bg-gray-700 hover p-0 me-1 text-xs  grid  place-items-center">{{ $i }}</div>
        @endif  
        @endfor
        </div>

</x-layout>

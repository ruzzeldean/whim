<x-layout>
  <div class="flex mb-6">
    <a href="{{ route('admin.whims') }}" class="btn btn-ghost">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="lucide lucide-chevron-left-icon lucide-chevron-left">
        <path d="m15 18-6-6 6-6" />
      </svg>
      Back
    </a>

    <div class="ml-auto">
      <button class="btn">Edit</button>
      <button class="btn btn-error">Delete</button>
    </div>
  </div>

  <div class="bg-base-100 w-full lg:w-2xl mx-auto">
    <figure>
      <img src="{{ asset('storage/' . $whim->image_path) }}" alt="Image post" class="rounded mb-3" />
    </figure>

    <div>
      <h2 class="text-2xl font-semibold mb-3">{{ $whim->title }}</h2>
      <p class="mb-4 whitespace-pre-wrap">{{ $whim->description }}</p>

      <span class="text-sm text-gray-500">{{ $whim->created_at->diffForHumans() }}</span>
    </div>
  </div>
</x-layout>

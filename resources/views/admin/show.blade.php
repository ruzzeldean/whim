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
      <button class="btn" onclick="edit_modal.showModal()">Edit</button>
      <button class="btn btn-outline btn-error" onclick="delete_modal.showModal()">Delete</button>
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

  <dialog id="edit_modal" class="modal">
    <div class="modal-box">
      <form method="dialog">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
      </form>
      <h3 class="text-xl font-medium mb-3">Update Whim</h3>
      <form action="{{ route('whim.update', $whim) }}" method="POST" enctype="multipart/form-data" class="space-y-2">
        @csrf
        @method('PATCH')

        <div class="space-y-1">
          <label for="title" class="label">Title</label>
          <input type="text" name="title" id="title" placeholder="Title" class="input w-full"
            value="{{ $whim->title }}">
        </div>

        <div class="space-y-1">
          <label for="image" class="label">Image</label>
          <input type="file" name="image" id="image" class="file-input w-full" accept="image/*">
        </div>

        <div class="space-y-1">
          <label for="description" class="label">Description</label>
          <textarea name="description" id="description" class="textarea w-full" rows="4" placeholder="Aa">{{ $whim->description }}</textarea>
        </div>

        <button id="submit" class="btn btn-primary w-full mt-3">Update</button>
      </form>
    </div>
  </dialog>

  <dialog id="delete_modal" class="modal">
    <div class="modal-box">
      <h3 class="text-lg font-bold">Delete Whim</h3>
      <p class="py-4">
        Are you sure you want to delete this whim?<br>
        This action cannot be undone.
      </p>
      <div class="modal-action">
        <form method="dialog">
          <!-- if there is a button in form, it will close the modal -->
          <button class="btn">Cancel</button>
          <button type="submit" form="delete-whim-form" class="btn btn-outline btn-error">Yes, DELETE</button>
        </form>
      </div>
    </div>
  </dialog>

  <form id="delete-whim-form" action="{{ route('whim.destroy', $whim) }}" method="POST">
    @csrf
    @method('DELETE')
  </form>
</x-layout>

<x-layout>
  <div class="grid md:grid-cols-2">
    <div>
      <h1 class="text-2xl">Whims</h1>
      <p class="text-sm text-zinc-500">Every thought deserves a home.</p>
    </div>

    <div class="md:ml-auto mt-4 md:mt-0">
      <button class="btn btn-primary" onclick="create_modal.showModal()">Create</button>
    </div>
  </div>


  <dialog id="create_modal" class="modal">
    <div class="modal-box">
      <form method="dialog">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
      </form>
      <h3 class="text-xl font-medium mb-3">Create</h3>
      <form action="" method="POST" class="space-y-2">
        @csrf

        <div class="space-y-1">
          <label for="title" class="label">Title</label>
          <input type="text" name="title" id="title" placeholder="Title" class="input w-full">
        </div>

        <div class="space-y-1">
          <label for="image" class="label">Image</label>
          <input type="file" name="image" id="image" class="file-input w-full">
        </div>

        <div class="space-y-1">
          <label for="description" class="label">Description</label>
          <textarea name="description" id="description" class="textarea w-full" rows="4" placeholder="Aa"></textarea>
        </div>

        <button id="submit" class="btn btn-primary w-full mt-3">Create</button>
      </form>
    </div>
  </dialog>
</x-layout>

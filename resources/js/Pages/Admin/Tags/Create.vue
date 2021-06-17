<template>
  <admin-layout>
    <div class="auto-rows-auto pl-8 pt-0 pr-8 pb-8">
      <div class="pb-2 w-full">
        <h1 class="text-4xl font-black">Section: TAGS</h1>
        <h2 class="text-2xl font-black-">Create tag</h2>
      </div>

      <div class="pb-2 w-full">
        <inertia-link :href="route('admin.tags.index')" class="text-blue-400 hover:text-blue-600 underline">Go back</inertia-link>
      </div>

      <form>
        <div class="mb-3 pt-0">
          <label>Tag Name</label>
          <input type="text" placeholder="Tag name" class="px-3 py-3 placeholder-gray-300 text-gray-900 relative bg-white rounded text-sm border-0 shadow focus:outline-none focus:ring focus:ring-green-600 w-full">
          <label>Tag Description</label>
          <input type="text" placeholder="Tag description" class="px-3 py-3 placeholder-gray-300 text-gray-900 relative bg-white rounded text-sm border-0 shadow focus:outline-none focus:ring focus:ring-green-600 w-full">
        </div>

        <button class="bg-green-600 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
          Save
        </button>
      </form>
    </div>
  </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout';

export default {
  components: {
    AdminLayout,
  }
}
</script>
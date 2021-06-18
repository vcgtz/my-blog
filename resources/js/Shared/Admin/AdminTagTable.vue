<template>
  <table class="border-collapse shadow-md rounded w-full">
    <thead>
      <tr>
        <th class="p-3 font-bold uppercase bg-yellow-400 text-gray-800 rounded border-yellow-600 hidden lg:table-cell">ID</th>
        <th class="p-3 font-bold uppercase bg-yellow-400 text-gray-800 rounded border-yellow-600 hidden lg:table-cell">Name</th>
        <th class="p-3 font-bold uppercase bg-yellow-400 text-gray-800 rounded border-yellow-600 hidden lg:table-cell">Description</th>
        <th class="p-3 font-bold uppercase bg-yellow-400 text-gray-800 rounded border-yellow-600 hidden lg:table-cell">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="tag in tags" :key="tag.id"
        class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-4 lg:mb-0">
        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
          <span class="lg:hidden absolute top-1 left-1 bg-yellow-400 rounded px-2 py-1 text-xs font-bold uppercase">ID</span>
          {{ tag.id }}
        </td>
        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
          <span class="lg:hidden absolute top-1 left-1 bg-yellow-400 rounded px-2 py-1 text-xs font-bold uppercase">Name</span>
          {{ tag.name }}
        </td>
        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
          <span class="lg:hidden absolute top-1 left-1 bg-yellow-400 rounded px-2 py-1 text-xs font-bold uppercase">Description</span>
          {{ tag.description }}
        </td>
        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
          <span class="lg:hidden absolute top-1 left-1 bg-yellow-400 rounded px-2 py-1 text-xs font-bold uppercase">Actions</span>
          <inertia-link :href="route('admin.tags.edit', tag)" class="text-blue-400 hover:text-blue-600 underline">Edit</inertia-link>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  props: {
    tags: {
      type: Array,
      required: true
    },
  }
}
</script>
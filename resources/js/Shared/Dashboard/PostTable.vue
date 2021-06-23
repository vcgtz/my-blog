<template>
  <table class="border-collapse shadow-md rounded w-full">
    <thead>
      <tr>
        <th class="p-3 font-bold uppercase bg-yellow-400 text-gray-800 rounded border-yellow-600 hidden lg:table-cell">ID</th>
        <th class="p-3 font-bold uppercase bg-yellow-400 text-gray-800 rounded border-yellow-600 hidden lg:table-cell">Title</th>
        <th class="p-3 font-bold uppercase bg-yellow-400 text-gray-800 rounded border-yellow-600 hidden lg:table-cell">Category</th>
        <th class="p-3 font-bold uppercase bg-yellow-400 text-gray-800 rounded border-yellow-600 hidden lg:table-cell">Published at</th>
        <th class="p-3 font-bold uppercase bg-yellow-400 text-gray-800 rounded border-yellow-600 hidden lg:table-cell">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="post in posts" :key="post.id"
        class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-4 lg:mb-0">
        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
          <span class="lg:hidden absolute top-1 left-1 bg-yellow-400 rounded px-2 py-1 text-xs font-bold uppercase">ID</span>
          {{ post.id }}
        </td>
        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
          <span class="lg:hidden absolute top-1 left-1 bg-yellow-400 rounded px-2 py-1 text-xs font-bold uppercase">Title</span>
          {{ post.title }}
        </td>
        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
          <span class="lg:hidden absolute top-1 left-1 bg-yellow-400 rounded px-2 py-1 text-xs font-bold uppercase">Category</span>
          {{ post.category.name }}
        </td>
        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
          <span class="lg:hidden absolute top-1 left-1 bg-yellow-400 rounded px-2 py-1 text-xs font-bold uppercase">Published at</span>
          {{ post.published_at }}
        </td>
        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
          <span class="lg:hidden absolute top-1 left-1 bg-yellow-400 rounded px-2 py-1 text-xs font-bold uppercase">Actions</span>
          <inertia-link href="#" class="text-blue-400 hover:text-blue-600 underline">Edit</inertia-link>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  name: 'DashboardPostTable',

  props: {
    posts: {
      type: Array,
      required: true
    },
  }
}
</script>
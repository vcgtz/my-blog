<template>
  <admin-layout>
    <div class="auto-rows-auto pl-8 pt-0 pr-8 pb-8">
      <div class="pb-2 w-full">
        <h1 class="text-4xl font-black">Section: POSTS</h1>
        <h2 class="text-2xl font-black">List of posts</h2>
      </div>

      <div class="pb-2 w-full">
        <inertia-link :href="route('admin.posts.create')" class="text-blue-400 hover:text-blue-600 underline">Add new</inertia-link>
      </div>

      <admin-post-table :posts="posts"></admin-post-table>
    </div>
  </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout';
import AdminPostTable from '@/Shared/Admin/PostTable';

export default {
  components: {
    AdminLayout,
    AdminPostTable
  },

  computed: {
    posts () {
      return this.$page.props.posts;
    }
  }
}
</script>
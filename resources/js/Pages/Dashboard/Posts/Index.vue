<template>
  <dashboard-layout>
    <div class="auto-rows-auto text-gray-800 flex justify-between">
      <div class="pb-2">
        <h1 class="text-4xl font-black">Posts</h1>
        <h2 class="text-xl font-black text-gray-500">List of posts</h2>
      </div>

      <div class="pb-2 self-center">
        <inertia-link :href="route('dashboard.posts.create')" class="text-blue-400 hover:text-blue-600 underline">Add new</inertia-link>
      </div>
    </div>

    <div class="auto-rows-auto text-gray-800">
      <dashboard-post-table :posts="posts"></dashboard-post-table>
    </div>
  </dashboard-layout>
</template>

<script>
import DashboardLayout from '@/Layouts/DashboardLayout';
import DashboardPostTable from '@/Shared/Dashboard/PostTable';

export default {
  components: {
    DashboardLayout,
    DashboardPostTable
  },

  computed: {
    posts () {
      return this.$page.props.posts;
    }
  }
}
</script>
<template>
  <dashboard-layout>
    <div class="auto-rows-auto text-gray-800">
      <div class="pb-2 w-full">
        <h1 class="text-4xl font-black">Section: POSTS</h1>
        <h2 class="text-2xl font-black">Create post</h2>
      </div>

      <div class="pb-2 w-full">
        <inertia-link :href="route('dashboard.posts.index')" class="text-blue-400 hover:text-blue-600 underline">Go back</inertia-link>
      </div>

      <dashboard-post-form event="store"></dashboard-post-form>
    </div>
  </dashboard-layout>
</template>

<script>
import DashboardLayout from '@/Layouts/DashboardLayout';
import DashboardPostForm from '@/Shared/Dashboard/PostForm';

export default {
  components: {
    DashboardLayout,
    DashboardPostForm
  }
}
</script>
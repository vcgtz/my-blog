<template>
  <dashboard-layout>
    <div class="auto-rows-auto text-gray-800 flex justify-between">
      <div class="pb-2">
        <h1 class="text-4xl font-black">Posts</h1>
        <h2 class="text-xl font-black text-gray-500">Create post</h2>
      </div>

      <div class="pb-2 self-center">
        <inertia-link :href="route('dashboard.posts.index')" class="text-blue-400 hover:text-blue-600 underline">Go back</inertia-link>
      </div>
    </div>

    <div class="auto-rows-auto text-gray-800">
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
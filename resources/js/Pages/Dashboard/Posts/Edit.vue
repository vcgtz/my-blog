<template>
  <dashboard-layout>
    <div class="auto-rows-auto text-gray-800">
      <div class="w-full">
        <h1 class="text-3xl">Posts: Edit</h1>
      </div>

      <div class="w-full">
        <inertia-link :href="route('dashboard.posts.index')">Index</inertia-link>
        <inertia-link :href="route('dashboard.posts.create')">Create</inertia-link>
        <inertia-link :href="route('dashboard.posts.edit', 1)">Edit</inertia-link>
      </div>
    </div>
  </dashboard-layout>
</template>

<script>
import DashboardLayout from '@/Layouts/DashboardLayout';

export default {
  components: {
    DashboardLayout,
  }
}
</script>
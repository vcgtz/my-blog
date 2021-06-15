<template>
  <admin-layout>
    <div class="auto-rows-auto pl-8 pt-0 pr-8 pb-8">
      <div class="w-full">
        <h1 class="text-3xl">Categories: Edit</h1>
      </div>

      <div class="w-full">
        <inertia-link :href="route('admin.categories.index')">Index</inertia-link>
        <inertia-link :href="route('admin.categories.create')">Create</inertia-link>
        <inertia-link :href="route('admin.categories.edit', 1)">Edit</inertia-link>
      </div>
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
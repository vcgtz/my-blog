<template>
  <admin-layout>
    <inertia-link :href="route('admin.categories.index')">Index</inertia-link>
    <inertia-link :href="route('admin.categories.create')">Create</inertia-link>
    <inertia-link :href="route('admin.categories.edit', 1)">Edit</inertia-link>
    <h1>Categories: Index</h1>
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
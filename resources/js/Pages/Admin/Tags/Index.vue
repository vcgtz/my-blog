<template>
  <admin-layout>
    <inertia-link :href="route('admin.tags.index')">Index</inertia-link>
    <inertia-link :href="route('admin.tags.create')">Create</inertia-link>
    <inertia-link :href="route('admin.tags.edit', 1)">Edit</inertia-link>
    <h1>Tags: Index</h1>
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
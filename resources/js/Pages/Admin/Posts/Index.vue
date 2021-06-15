<template>
  <admin-layout>
    <inertia-link :href="route('admin.posts.index')">Index</inertia-link>
    <inertia-link :href="route('admin.posts.create')">Create</inertia-link>
    <inertia-link :href="route('admin.posts.edit', 1)">Edit</inertia-link>
    <h1>Posts: Index</h1>
  </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout';

export default {
  components: {
    AdminLayout
  }
}
</script>
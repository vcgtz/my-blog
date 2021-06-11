<template>
  <app-layout>
    <inertia-link :href="route('admin.posts.index')">Index</inertia-link>
    <inertia-link :href="route('admin.posts.create')">Create</inertia-link>
    <inertia-link :href="route('admin.posts.edit', 1)">Edit</inertia-link>
    <h1>Posts: Edit</h1>
  </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout';
import JetNavLink from '@/Jetstream/NavLink';

export default {
  components: {
    AppLayout,
    JetNavLink
  }
}
</script>
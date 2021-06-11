<template>
  <app-layout>
    <nav>
      <inertia-link :href="route('admin.posts.index')">Index</inertia-link>
      <inertia-link :href="route('admin.posts.create')">Create</inertia-link>
      <inertia-link :href="route('admin.posts.edit', 1)">Edit</inertia-link>
    </nav>
    
    <h1>Posts: Index</h1>
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
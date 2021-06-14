<template>
  <app-layout>
    <nav>
      <inertia-link :href="route('admin.categories.index')">Index</inertia-link>
      <inertia-link :href="route('admin.categories.create')">Create</inertia-link>
      <inertia-link :href="route('admin.categories.edit', 1)">Edit</inertia-link>
    </nav>
    
    <h1>Categories: Index</h1>
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
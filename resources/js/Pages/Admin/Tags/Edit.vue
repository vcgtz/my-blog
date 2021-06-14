<template>
  <app-layout>
    <inertia-link :href="route('admin.tags.index')">Index</inertia-link>
    <inertia-link :href="route('admin.tags.create')">Create</inertia-link>
    <inertia-link :href="route('admin.tags.edit', 1)">Edit</inertia-link>
    <h1>Tags: Edit</h1>
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
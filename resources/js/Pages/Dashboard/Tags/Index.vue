<template>
  <dashboard-layout>
    <div class="auto-rows-auto text-gray-800">
      <div class="pb-2 w-full">
        <h1 class="text-4xl font-black">Section: TAGS</h1>
        <h2 class="text-2xl font-black">List of tags</h2>
      </div>

      <div class="pb-2 w-full">
        <inertia-link :href="route('dashboard.tags.create')" class="text-blue-400 hover:text-blue-600 underline">Add new</inertia-link>
      </div>

      <dashboard-tag-table :tags="tags"></dashboard-tag-table>
    </div>
  </dashboard-layout>
</template>

<script>
import DashboardLayout from '@/Layouts/DashboardLayout';
import DashboardTagTable from '@/Shared/Dashboard/TagTable';

export default {
  components: {
    DashboardLayout,
    DashboardTagTable
  },

  computed: {
    tags () {
      return this.$page.props.tags;
    }
  },
}
</script>
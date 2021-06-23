<template>
  <dashboard-layout>
    <div class="auto-rows-auto text-gray-800 flex justify-between">
      <div class="pb-2">
        <h1 class="text-4xl font-black">Categories</h1>
        <h2 class="text-xl font-black text-gray-500">List of categories</h2>
      </div>

      <div class="pb-2 self-center">
        <inertia-link :href="route('dashboard.categories.create')" class="text-blue-400 hover:text-blue-600 underline">Add new</inertia-link>
      </div>
    </div>

    <div class="auto-rows-auto text-gray-800">
      <dashboard-category-table :categories="categories"></dashboard-category-table>
    </div>
  </dashboard-layout>
</template>

<script>
import DashboardLayout from '@/Layouts/DashboardLayout';
import DashboardCategoryTable from '@/Shared/Dashboard/CategoryTable';

export default {
  components: {
    DashboardLayout,
    DashboardCategoryTable
  },

  computed: {
    categories () {
      return this.$page.props.categories;
    }
  }
}
</script>
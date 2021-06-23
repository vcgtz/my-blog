<template>
  <dashboard-layout>
    <div class="auto-rows-auto text-gray-800">
      <div class="pb-2 w-full">
        <h1 class="text-4xl font-black">Section: CATEGORIES</h1>
        <h2 class="text-2xl font-black">List of categories</h2>
      </div>

      <div class="pb-2 w-full">
        <inertia-link :href="route('dashboard.categories.create')" class="text-blue-400 hover:text-blue-600 underline">Add new</inertia-link>
      </div>

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
<template>
  <admin-layout>
    <div class="auto-rows-auto pl-8 pt-0 pr-8 pb-8">
      <div class="pb-2 w-full">
        <h1 class="text-4xl font-black">Section: CATEGORIES</h1>
        <h2 class="text-2xl font-black">List of categories</h2>
      </div>

      <div class="pb-2 w-full">
        <inertia-link href="#" class="text-blue-400 hover:text-blue-600 underline">Add new</inertia-link>
      </div>

      <admin-category-table :categories="categories"></admin-category-table>
    </div>
  </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout';
import AdminCategoryTable from '@/Shared/Admin/CategoryTable';

export default {
  components: {
    AdminLayout,
    AdminCategoryTable
  },

  computed: {
    categories () {
      return this.$page.props.categories;
    }
  }
}
</script>
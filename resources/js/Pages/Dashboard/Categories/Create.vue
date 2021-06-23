<template>
  <dashboard-layout>
    <div class="auto-rows-auto text-gray-800">
      <div class="pb-2 w-full">
        <h1 class="text-4xl font-black">Section: CATEGORIES</h1>
        <h2 class="text-2xl font-black">Create category</h2>
      </div>

      <div class="pb-2 w-full">
        <inertia-link :href="route('dashboard.categories.index')" class="text-blue-400 hover:text-blue-600 underline">Go back</inertia-link>
      </div>

      <dashboard-category-form event="store"></dashboard-category-form>
    </div>
  </dashboard-layout>
</template>

<script>
import DashboardLayout from '@/Layouts/DashboardLayout';
import DashboardCategoryForm from '@/Shared/Dashboard/CategoryForm';

export default {
  components: {
    DashboardLayout,
    DashboardCategoryForm
  }
}
</script>
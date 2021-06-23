<template>
  <dashboard-layout>
    <div class="auto-rows-auto text-gray-800">
      <div class="pb-2 w-full">
        <h1 class="text-4xl font-black">Section: TAGS</h1>
        <h2 class="text-2xl font-black">Create tag</h2>
      </div>

      <div class="pb-2 w-full">
        <inertia-link :href="route('dashboard.tags.index')" class="text-blue-400 hover:text-blue-600 underline">Go back</inertia-link>
      </div>

      <dashboard-tag-form event="store"></dashboard-tag-form>
    </div>
  </dashboard-layout>
</template>

<script>
import DashboardLayout from '@/Layouts/DashboardLayout';
import DashboardTagForm from '@/Shared/Dashboard/TagForm';

export default {
  components: {
    DashboardLayout,
    DashboardTagForm
  }
}
</script>
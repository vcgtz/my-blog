<template>
  <dashboard-layout>
    <div class="auto-rows-auto text-gray-800 flex justify-between">
      <div class="pb-2">
        <h1 class="text-4xl font-black">Tags</h1>
        <h2 class="text-xl font-black text-gray-500">Edit tag</h2>
      </div>

      <div class="pb-2 self-center">
        <inertia-link :href="route('dashboard.tags.index')" class="text-blue-400 hover:text-blue-600 underline">Go back</inertia-link>
      </div>
    </div>

    <div class="auto-rows-auto text-gray-800">
      <dashboard-tag-form event="update"></dashboard-tag-form>
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
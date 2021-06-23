<template>
  <div>
    <div class="min-h-screen h-full flex flex-no-wrap bg-gray-200">
      <dashboard-navigator></dashboard-navigator>

      <div class="container mx-auto py-10 h-64 md:w-4/5 w-11/12 px-6">
        <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
        <div class="w-full h-full rounded border-dashed border-2 border-gray-300">
          <!-- Place your content here -->
          <slot></slot>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import DashboardNavigator from '@/Shared/Dashboard/Navigator';

export default {
  name: 'DashboardLayout',
  
  components: {
    DashboardNavigator
  }
};
</script>

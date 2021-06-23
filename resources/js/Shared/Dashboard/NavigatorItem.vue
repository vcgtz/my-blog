<template>
  <li class="flex w-full justify-between text-gray-600 hover:text-gray-500 cursor-pointer items-center mb-6">
    <div class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z"></path>
        <rect x="4" y="4" width="6" height="6" rx="1"></rect>
        <rect x="14" y="4" width="6" height="6" rx="1"></rect>
        <rect x="4" y="14" width="6" height="6" rx="1"></rect>
        <rect x="14" y="14" width="6" height="6" rx="1"></rect>
      </svg>
      <span class="text-sm ml-2"><inertia-link :href="link">{{ name }}</inertia-link></span>
    </div>
    
    <div v-if="notifications" class="py-1 px-3 bg-gray-700 rounded text-gray-500 flex items-center justify-center text-xs">0</div>
  </li>
</template>

<script>
export default {
  name: 'DashboardNavigatorItem',

  props: {
    name: {
      type: String,
      default: 'Item'
    },
    link: {
      type: String,
      required: true
    },
    notifications: {
      type: Number
    }
  }
}
</script>
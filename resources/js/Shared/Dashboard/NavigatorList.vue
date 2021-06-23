<template>
  <ul class="mt-12">
    <dashboard-navigator-item name="Dashboard" :link="route('dashboard.index')" />
    <dashboard-navigator-item name="Posts" :link="route('dashboard.posts.index')" />
    <dashboard-navigator-item name="Categories" :link="route('dashboard.categories.index')" />
    <dashboard-navigator-item name="Tags" :link="route('dashboard.tags.index')" />
    <dashboard-navigator-item name="Settings" :link="route('profile.show')" />

    <li class="flex w-full justify-between text-gray-600 hover:text-gray-500 cursor-pointer items-center mb-6">
      <div class="flex items-center">
        <span @click="logout" class="text-sm ml-2">Log Out</span>
      </div>
    </li>
  </ul>
</template>

<script>
import DashboardNavigatorItem from '@/Shared/Dashboard/NavigatorItem';

export default {
  name: 'DashboardNavigatorList',

  components: {
    DashboardNavigatorItem
  },

  methods: {
    logout () {
      this.$inertia.post(route('logout'));
    }
  }
}
</script>
<template>
  <ul class="mt-12">
    <dashboard-navigator-item name="Dashboard" :link="route('dashboard.index')" />
    <dashboard-navigator-item name="Posts" :link="route('dashboard.index')" />
    <dashboard-navigator-item name="Categories" :link="route('dashboard.index')" />
    <dashboard-navigator-item name="Tags" :link="route('dashboard.index')" />
    <dashboard-navigator-item name="Settings" :link="route('dashboard.index')" />
  </ul>
</template>

<script>
import DashboardNavigatorItem from '@/Shared/Dashboard/NavigatorItem';

export default {
  name: 'DashboardNavigatorList',

  components: {
    DashboardNavigatorItem
  }
}
</script>
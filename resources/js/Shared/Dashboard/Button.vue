<template>
  <button :type="type" class="text-gray-800 active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
    <slot />
  </button>
</template>

<script>
export default {
  name: 'DashboardButton',

  props: {
    type: {
      type: String,
      default: 'button'
    }
  },
}
</script>
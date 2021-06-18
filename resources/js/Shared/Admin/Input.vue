<template>
  <input
    v-bind="$attrs"
    :id="id"
    :name="name"
    :type="type"
    :value="modelValue"
    @input="$emit('update:modelValue', $event.target.value)"
    ref="input"
    class="px-3 py-3 placeholder-gray-300 text-gray-900 relative bg-white rounded text-sm border-0 shadow focus:outline-none focus:ring focus:ring-blue-400 w-full">
</template>

<script>
export default {
  emits: ['update:modelValue'],
  props: {
    type: {
      type: String,
      default: 'text'
    },
    name: {
      type: String,
      required: true
    },
    id: {
      type: String,
      required: true
    },
    modelValue: {
      type: String,
      default: ''
    }
  },

  focus() {
    this.$refs.input.focus()
  }
}
</script>
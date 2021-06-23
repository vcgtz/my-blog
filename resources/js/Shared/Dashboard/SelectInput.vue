<template>
  <div>
    <label class="text-lg">{{ label }}</label>
    <select
      v-bind="$attrs"
      :id="id"
      :name="name"
      :value="modelValue"
      @input="$emit('update:modelValue', parseInt($event.target.value))"
      ref="input"
      class="px-3 py-3 border-gray-300 placeholder-gray-300 text-gray-900 relative bg-white rounded text-sm focus:outline-none focus:ring focus:ring-blue-400 w-full">
      <option v-for="option in options" :key="option.id"
        :value="option.id">{{ option.value }}</option>
      </select>
      <span
        v-if="error"
        class="text-red-600 ml-1 font-bold">{{ error }}</span>
    </div>
</template>

<script>
export default {
  name: 'DashboardSelectInput',

  emits: ['update:modelValue'],
  
  props: {
    name: {
      type: String,
      required: true
    },
    id: {
      type: String,
      required: true
    },
    modelValue: {
      type: Number,
      default: true
    },
    options: {
      type: Array,
      required: true
    },
    label: {
      type: String,
      required: true,
    },
    error: {
      type: String
    }
  },

  methods: {
    focus() {
      this.$refs.input.focus()
    }
  }
}
</script>
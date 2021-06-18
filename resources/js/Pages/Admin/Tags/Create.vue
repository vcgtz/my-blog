<template>
  <admin-layout>
    <div class="auto-rows-auto pl-8 pt-0 pr-8 pb-8 text-gray-800">
      <div class="pb-2 w-full">
        <h1 class="text-4xl font-black">Section: TAGS</h1>
        <h2 class="text-2xl font-black">Create tag</h2>
      </div>

      <div class="pb-2 w-full">
        <inertia-link :href="route('admin.tags.index')" class="text-blue-400 hover:text-blue-600 underline">Go back</inertia-link>
      </div>

      <form @submit.prevent="store">
        <div class="mb-3 pt-0">
          <div class="mb-3">
            <label class="text-lg">Tag Name</label>
            <admin-input v-model="name" id="name" name="name"></admin-input>
          </div>
          
          <div class="mb-3">
            <label class="text-lg">Tag Description</label>
            <admin-input v-model="description" id="description" name="description"></admin-input>
          </div>
        </div>

        <button type="submit" class="bg-yellow-400 text-gray-800 active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
          Save
        </button>
      </form>
    </div>
  </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout';
import AdminInput from '@/Shared/Admin/Input';
import { Inertia } from '@inertiajs/inertia'

export default {
  components: {
    AdminLayout,
    AdminInput
  },

  data: () => ({
    name: '',
    description: ''
  }),

  methods: {
    store () {
      Inertia.post(this.route('admin.tags.store'), {
        name: this.name,
        description: this.description
      })
    }
  }
}
</script>
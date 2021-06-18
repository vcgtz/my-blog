<template>
  <admin-layout>
    <div class="auto-rows-auto pl-8 pt-0 pr-8 pb-8 text-gray-800">
      <div class="pb-2 w-full">
        <h1 class="text-4xl font-black">Section: TAGS</h1>
        <h2 class="text-2xl font-black">Edit tag</h2>
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

        <admin-button :type="'submit'" class="bg-yellow-400">Save</admin-button>
        <admin-button @click="destroy" class="bg-red-400">Delete</admin-button>
      </form>
    </div>
  </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout';
import AdminButton from '@/Shared/Admin/Button';
import AdminInput from '@/Shared/Admin/Input';
import { Inertia } from '@inertiajs/inertia'

export default {
  components: {
    AdminLayout,
    AdminButton,
    AdminInput
  },

  data: () => ({
    name: '',
    description: ''
  }),

  methods: {
    store () {
      Inertia.put(this.route('admin.tags.update', this.$page.props.tag), {
        name: this.name,
        description: this.description
      })
    },

    destroy () {
      // Inertia.delete() equivalent
      this.$inertia.delete(this.route('admin.tags.destroy', this.$page.props.tag));
    }
  },

  mounted () {
    this.name = this.$page.props.tag.name;
    this.description = this.$page.props.tag.description;
  }
}
</script>
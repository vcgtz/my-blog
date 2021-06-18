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

      <admin-tag-form event="update"></admin-tag-form>
    </div>
  </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout';
import AdminTagForm from '@/Shared/Admin/TagForm';

export default {
  components: {
    AdminLayout,
    AdminTagForm
  }
}
</script>
<template>
  <admin-layout>
    <div class="auto-rows-auto pl-8 pt-0 pr-8 pb-8">
      <div class="pb-2 w-full">
        <h1 class="text-4xl font-black">Section: POSTS</h1>
        <h2 class="text-2xl font-black">Create post</h2>
      </div>

      <div class="pb-2 w-full">
        <inertia-link :href="route('admin.posts.index')" class="text-blue-400 hover:text-blue-600 underline">Go back</inertia-link>
      </div>

      <admin-post-form event="store"></admin-post-form>
    </div>
  </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout';
import AdminPostForm from '@/Shared/Admin/PostForm';

export default {
  components: {
    AdminLayout,
    AdminPostForm
  }
}
</script>
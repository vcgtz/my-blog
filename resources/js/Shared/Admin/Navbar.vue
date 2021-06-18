<template>
  <nav class="flex fixed w-full items-center justify-between shadow-md px-6 h-16 bg-blue-800 text-gray-800 border-b border-blue-900 z-10">
    <div class="flex items-center font-black text-gray-200">
      <button class="mr-2" aria-label="Open Menu" @click="drawer">
        <svg
          fill="none"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          viewBox="0 0 24 24"
          class="w-8 h-8">
          <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      BLOG
    </div>

    <div class="flex items-center">
      <div class="hidden md:flex md:justify-between md:bg-transparent">
        <button title="Wishlist" class="flex items-center p-3 font-medium mr-2 text-center bg-gray-300 rounded-sm hover:bg-gray-400 focus:outline-none focus:bg-gray-400">
          <svg
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            stroke="currentColor"
            viewBox="0 0 24 24"
            class="w-6 h-6 mr-2">
            <path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
          </svg>
          <span>Wishlist</span>
        </button>
        <button title="Notifications" class="flex items-center p-3 font-medium mr-2 text-center bg-gray-300 rounded-sm  hover:bg-gray-400 focus:outline-none focus:bg-gray-400">
          <svg
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
            class="h-6 w-6">
            <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
          </svg>
        </button>
        <button title="Profile" class="flex items-center p-3 font-medium mr-2 text-center bg-gray-300 rounded-sm hover:bg-gray-400 focus:outline-none focus:bg-gray-400">
          <svg
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
            class="w-6 h-6">
            <path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </button>
        <p class="flex items-center font-semibold text-gray-200">
          logout
        </p>
      </div>
    </div>

    <transition
      enter-class="opacity-0"
      enter-active-class="ease-out transition-medium"
      enter-to-class="opacity-100"
      leave-class="opacity-100"
      leave-active-class="ease-out transition-medium"
      leave-to-class="opacity-0">
      <div
        @keydown.esc="isOpen = false"
        v-show="isOpen"
        class="z-10 fixed inset-0 transition-opacity">
        <div
          @click="isOpen = false"
          class="absolute inset-0 bg-black opacity-50"
          tabindex="0"></div>
      </div>
    </transition>
    
    <aside
      :class="isOpen ? 'translate-x-0' : '-translate-x-full'"
      class="transform top-0 left-0 w-64 shadow-md bg-gray-300 fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30">
      <span
        @click="isOpen = false"
        class="flex w-full items-center p-4 border-b bg-blue-800 border-blue-900 font-black text-gray-200">
        BLOG
      </span>
      
      <inertia-link @click="isOpen = false"
        :href="route('admin.posts.index')"
        class="flex items-center p-4 text-gray-800 hover:bg-blue-400 hover:text-white">
        <span>Posts</span>
      </inertia-link>
      
      <inertia-link @click="isOpen = false"
        :href="route('admin.categories.index')"
        class="flex items-center p-4 text-gray-800 hover:bg-blue-400 hover:text-white">
        <span>Categories</span>
      </inertia-link>
      
      <inertia-link @click="isOpen = false"
        :href="route('admin.tags.index')"
        class="flex items-center p-4 text-gray-800 hover:bg-blue-400 hover:text-white">
        <span>Tags</span>
      </inertia-link>
      
      <div class="fixed bottom-0 w-full">
        <div class="items p-4 text-center text-gray-200 font-semibold bg-blue-800 hover:bg-blue-900 w-full">
          <span>{{ user.name }}</span>
        </div>
        
          <p class="items-center p-4">
            <span class="font-bold text-gray-800">Today is</span>
            <br />
            <span class="text-sm text-gray-900">{{ today }}</span>
          </p>
      </div>
    </aside>
  </nav>
</template>

<script>
import { usePage } from '@inertiajs/inertia-vue3'

export default {
  data: () => ({
    isOpen: false
  }),

  computed: {
    user () {
      return usePage().props.value.user;
    },

    today () {
      return new Date().toDateString();
    }
  },
 
  methods: {
    drawer() {
      this.isOpen = !this.isOpen;
    }
  },
  
  watch: {
    isOpen: {
      immediate: true,
      handler(isOpen) {
        if (process.client) {
          if (isOpen) document.body.style.setProperty("overflow", "hidden");
          else document.body.style.removeProperty("overflow");
        }
      }
    }
  },
  
  mounted() {
    document.addEventListener("keydown", e => {
      if (e.keyCode == 27 && this.isOpen) this.isOpen = false;
    });
  }
};
</script>
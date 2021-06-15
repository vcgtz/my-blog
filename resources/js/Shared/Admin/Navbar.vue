<template>
  <nav class="flex fixed w-full items-center justify-between shadow-md px-6 h-16 bg-green-800 text-gray-700 border-b border-gray-200 z-10">
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
      <div class="hidden md:block md:flex md:justify-between md:bg-transparent">
        <button title="Wishlist" class="flex items-center p-3 font-medium mr-2 text-center bg-gray-200 rounded-sm hover:bg-gray-300 focus:outline-none focus:bg-gray-300">
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
        <button title="Notifications" class="flex items-center p-3 font-medium mr-2 text-center bg-gray-200 rounded-sm  hover:bg-gray-300 focus:outline-none focus:bg-gray-300">
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
        <button title="Profile" class="flex items-center p-3 font-medium mr-2 text-center bg-gray-200 rounded-sm hover:bg-gray-300 focus:outline-none focus:bg-gray-300">
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
      class="transform top-0 left-0 w-64 shadow-md bg-green-500 fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30">
      <span
        @click="isOpen = false"
        class="flex w-full items-center p-4 border-b bg-green-600 border-green-800 font-black text-gray-200">
        BLOG
      </span>
      
      <span
        @click="isOpen = false"
        class="flex items-center p-4 text-gray-200 hover:bg-green-800 hover:text-white">
        <span class="mr-2">
          <svg
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            class="w-6 h-6">
            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
        </span>
        <span>Home</span>
      </span>
      
      <span
        @click="isOpen = false"
        class="flex items-center p-4 text-gray-200 hover:bg-green-800 hover:text-white">
        <span class="mr-2">
          <svg
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            class="w-6 h-6">
            <path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </span>
        <span>Trending Globally</span>
      </span>
      
      <span
        @click="isOpen = false"
        class="flex items-center p-4 text-gray-200 hover:bg-green-800 hover:text-white">
        <span class="mr-2">
          <svg
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            stroke="currentColor"
            viewBox="0 0 24 24"
            class="w-6 h-6">
            <path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
          </svg>
        </span>
        <span>Wishlist</span>
      </span>
      
      <span
        @click="isOpen = false"
        class="flex items-center p-4 text-gray-200 hover:bg-green-800 hover:text-white">
        <span class="mr-2">
          <svg
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            class="w-6 h-6">
            <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </span>
        <span>About</span>
      </span>
      
      <span
        @click="isOpen = false"
        class="flex items-center p-4 text-gray-200 hover:bg-green-800 hover:text-white">
        <span class="mr-2">
          <svg
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            class="w-6 h-6">
            <path
              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
            ></path>
          </svg>
        </span>
        <span>Contact</span>
      </span>
      
      <div class="fixed bottom-0 w-full">
        <div class="items p-4 text-center text-gray-200 font-semibold bg-green-800 hover:bg-green-900 w-full">
          <span>{{ user.name }}</span>
        </div>
        
          <p class="items-center p-4">
            <span class="font-bold text-gray-800">Today is</span>
            <br />
            <span class="text-sm text-black">{{ today }}</span>
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
      return new Date().toString();
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
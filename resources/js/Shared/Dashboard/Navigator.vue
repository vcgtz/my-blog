<template>
  <div>
    <!-- Sidebar starts -->
    <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->
    <div class="min-h-screen w-64 absolute sm:relative bg-gray-800 shadow md:h-full flex-col justify-between hidden sm:flex">
      <div class="px-8">
        <div class="h-8 pt-4 text-white font-black text-2xl">
          <div>V. Gutiérrez</div>
        </div>

        <div class="h-8 pt-4 text-gray-500 font-black text-xl">
          <div>Blog</div>
        </div>
        
        <dashboard-navigator-list></dashboard-navigator-list>
      </div>
    </div>
    
    <div class="min-h-screen w-64 z-40 absolute bg-gray-800 shadow md:h-full flex-col justify-between sm:hidden transition duration-150 ease-in-out" id="mobile-nav">
      <div id="openSideBar" class="h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer" @click="sidebarHandler(true)">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" />
          <circle cx="6" cy="10" r="2" />
          <line x1="6" y1="4" x2="6" y2="8" />
          <line x1="6" y1="12" x2="6" y2="20" />
          <circle cx="12" cy="16" r="2" />
          <line x1="12" y1="4" x2="12" y2="14" />
          <line x1="12" y1="18" x2="12" y2="20" />
          <circle cx="18" cy="7" r="2" />
          <line x1="18" y1="4" x2="18" y2="5" />
          <line x1="18" y1="9" x2="18" y2="20" />
        </svg>
      </div>
      
      <div id="closeSideBar" class="hidden h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer text-white" @click="sidebarHandler(false)">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" />
          <line x1="18" y1="6" x2="6" y2="18" />
          <line x1="6" y1="6" x2="18" y2="18" />
        </svg>
      </div>
      
      <div class="px-8">
        <div class="h-16 w-full flex items-center text-white font-black text-xl">
          My Blog
        </div>
      
        <dashboard-navigator-list></dashboard-navigator-list>
      </div>
    </div>
    <!-- Sidebar ends -->
    <!-- Remove class [ h-64 ] when adding a card block -->
  </div>
</template>

<script>
import DashboardNavigatorList from '@/Shared/Dashboard/NavigatorList';

export default {
  name: 'DashboardNavigator',

  components: {
    DashboardNavigatorList
  },

  data: () => ({
    moved: true,
  }),
  
  methods: {
    sidebarHandler () {
      const sideBar = document.getElementById('mobile-nav');
      sideBar.style.transform = 'translateX(-260px)';
      
      if (this.$data.moved) {
        sideBar.style.transform = 'translateX(0px)';
        this.$data.moved = false;
      } else {
        sideBar.style.transform = 'translateX(-260px)';
        this.$data.moved = true;
      }
    },
  },
}
</script>
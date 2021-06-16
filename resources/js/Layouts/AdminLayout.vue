<template>
  <div>
    <navbar></navbar>
    <main>
      <section>
        <div class="pt-24">
          <slot></slot>
        </div>
      </section>
    </main>
  </div>
</template>

<script>
import Navbar from '@/Shared/Admin/Navbar';

export default {
  components: {
    Navbar
  },

  data() {
    return {}
  },

  methods: {
    logout() {
      this.$inertia.post(route('logout'));
    },
  }
}
</script>

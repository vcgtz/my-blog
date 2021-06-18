<template>
  <div>
    <admin-navbar></admin-navbar>
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
import AdminNavbar from '@/Shared/Admin/AdminNavbar';

export default {
  components: {
    AdminNavbar
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

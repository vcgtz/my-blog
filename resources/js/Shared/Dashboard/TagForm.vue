<template>
  <div>
    <form @submit.prevent="submitEvent">
      <div class="mb-3 pt-0">
        <div class="mb-3">
          <dashboard-input v-model="name" :error="$page.props.errors.name" label="Tag Name" id="name" name="name"></dashboard-input>
        </div>

        <div class="mb-3">
          <dashboard-input v-model="description" :error="$page.props.errors.description" label="Tag Description" id="description" name="description"></dashboard-input>
        </div>
      </div>

      <dashboard-button type="submit" class="bg-yellow-400">Save</dashboard-button>
      <dashboard-button v-if="showDeleteButton" @click="destroy" class="bg-red-400">Delete</dashboard-button>
    </form>
  </div>
</template>

<script>
import DashboardButton from '@/Shared/Dashboard/Button';
import DashboardInput from '@/Shared/Dashboard/Input';
import { Inertia } from '@inertiajs/inertia';

export default {
  name: 'DashboardTagForm',

  components: {
    DashboardButton,
    DashboardInput
  },

  props: {
    event: {
      type: String,
      require: true
    }
  },

  data: () => ({
    name: '',
    description: ''
  }),

  computed: {
    tag () {
      return this.$page.props.tag;
    },

    showDeleteButton () {
      return this.event === 'update';
    }
  },

  methods: {
    submitEvent () {
      this[this.event]();
    },

    store () {
      Inertia.post(this.route('dashboard.tags.store'), {
        name: this.name,
        description: this.description
      });
    },

    update () {
      Inertia.put(this.route('dashboard.tags.update', this.tag), {
        name: this.name,
        description: this.description
      });
    },

    destroy () {
      // Inertia.delete() equivalent
      this.$inertia.delete(this.route('dashboard.tags.destroy', this.tag));
    }
  },

  mounted () {
    if (this.tag) {
      this.name = this.tag.name;
      this.description = this.tag.description;
    }
  }
}
</script>
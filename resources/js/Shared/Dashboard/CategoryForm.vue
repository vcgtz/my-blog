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

        <div class="mb-3">
          <dashboard-select-input :options="statusOptions" v-model="status" :error="$page.props.errors.status" label="Status" id="status" name="status"></dashboard-select-input>
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
import DashboardSelectInput from '@/Shared/Dashboard/SelectInput';
import { Inertia } from '@inertiajs/inertia';

export default {
  name: 'DashboardCategoryForm',

  components: {
    DashboardButton,
    DashboardInput,
    DashboardSelectInput
  },

  props: {
    event: {
      type: String,
      require: true
    }
  },

  data: () => ({
    name: '',
    description: '',
    status: 1,
    statusOptions: [
      {id: 1, value: 'ACTIVE'},
      {id: 0, value: 'INACTIVE'}
    ]
  }),

  computed: {
    category () {
      return this.$page.props.category;
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
      Inertia.post(this.route('dashboard.categories.store'), {
        name: this.name,
        description: this.description,
        status: this.status
      });
    },

    update () {
      Inertia.put(this.route('dashboard.categories.update', this.category), {
        name: this.name,
        description: this.description,
        status: this.status
      });
    },

    destroy () {
      // Inertia.delete() equivalent
      this.$inertia.delete(this.route('dashboard.categories.destroy', this.category));
    }
  },

  mounted () {
    if (this.category) {
      this.name = this.category.name;
      this.description = this.category.description;
      this.status = this.category.status;
    }
  }
}
</script>
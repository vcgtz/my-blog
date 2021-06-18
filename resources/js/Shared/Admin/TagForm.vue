<template>
  <div>
    <form @submit.prevent="submitEvent">
      <div class="mb-3 pt-0">
        <div class="mb-3">
          <admin-input v-model="name" :error="$page.props.errors.name" label="Tag Name" id="name" name="name"></admin-input>
        </div>
        
        <div class="mb-3">
          <admin-input v-model="description" :error="$page.props.errors.description" label="Tag Description" id="description" name="description"></admin-input>
        </div>
      </div>

      <admin-button type="submit" class="bg-yellow-400">Save</admin-button>
      <admin-button v-if="showDeleteButton" @click="destroy" class="bg-red-400">Delete</admin-button>
    </form>
  </div>
</template>

<script>
import AdminButton from '@/Shared/Admin/Button';
import AdminInput from '@/Shared/Admin/Input';
import { Inertia } from '@inertiajs/inertia';

export default {
  components: {
    AdminButton,
    AdminInput
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
      Inertia.post(this.route('admin.tags.store'), {
        name: this.name,
        description: this.description
      })
    },

    update () {
      Inertia.put(this.route('admin.tags.update', this.tag), {
        name: this.name,
        description: this.description
      })
    },

    destroy () {
      // Inertia.delete() equivalent
      this.$inertia.delete(this.route('admin.tags.destroy', this.tag));
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
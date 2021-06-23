<template>
  <div class="bg-white rounded-md p-4 shadow">
    <form @submit.prevent="submitEvent">
      <div class="mb-3 pt-0">
        <div class="mb-3">
          <dashboard-input v-model="title" :error="$page.props.errors.title" label="Post Title" id="title" name="title"></dashboard-input>
        </div>

        <div class="mb-3">
          <dashboard-input v-model="slug" :error="$page.props.errors.slug" label="Post Slug" id="slug" name="slug"></dashboard-input>
        </div>

        <div class="mb-3">
          <dashboard-editor @update:content="content = $event" :error="$page.props.errors.content" label="Post Content" id="content" name="content"></dashboard-editor>
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
import DashboardEditor from '@/Shared/Dashboard/Editor';
import { Inertia } from '@inertiajs/inertia';

export default {
  name: 'DasbhoardPostForm',

  components: {
    DashboardButton,
    DashboardInput,
    DashboardSelectInput,
		DashboardEditor
  },

  props: {
    event: {
      type: String,
      require: true
    }
  },

  data: () => ({
    title: '',
    slug: '',
    content: '',
  }),

  computed: {
    post () {
      return this.$page.props.post;
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
      console.log(this.content);
      /*Inertia.post(this.route('dashboard.categories.store'), {
        name: this.name,
        description: this.description,
        status: this.status
      });*/
    },

    update () {
      /*Inertia.put(this.route('dashboard.categories.update', this.category), {
        name: this.name,
        description: this.description,
        status: this.status
      });*/
    },

    destroy () {
      // Inertia.delete() equivalent
      // this.$inertia.delete(this.route('dashboard.categories.destroy', this.category));
    }
  },

  mounted () {
    /*if (this.category) {
      this.name = this.category.name;
      this.description = this.category.description;
      this.status = this.category.status;
    }*/
  }
}
</script>
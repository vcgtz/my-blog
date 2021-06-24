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
          <dashboard-select-input :options="categories" v-model="category" :error="$page.props.errors.category_id" label="Category" id="category_id" name="category_id"></dashboard-select-input>
        </div>

        <div class="mb-3">
          <dashboard-editor :initialValue="content" @update:content="content = $event" :error="$page.props.errors.content" label="Post Content" id="content" name="content"></dashboard-editor>
        </div>
      </div>

      <dashboard-button type="submit" class="bg-green-700">Save</dashboard-button>
      <dashboard-button v-if="showDeleteButton" @click="destroy" class="bg-red-700">Delete</dashboard-button>
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
    category: null,
    content: '',
  }),

  computed: {
    post () {
      return this.$page.props.post;
    },

    categories () {
      return this.$page.props.categories.map(category => {
        return {
          id: category.id,
          value: category.name
        }
      })
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
      Inertia.post(this.route('dashboard.posts.store'), {
        title: this.title,
        slug: this.slug,
        category_id: this.category,
        content: this.content
      });
    },

    update () {
      Inertia.put(this.route('dashboard.posts.update', this.post), {
        title: this.title,
        slug: this.slug,
        category_id: this.category,
        content: this.content
      });
    },

    destroy () {
      // Inertia.delete() equivalent
      this.$inertia.delete(this.route('dashboard.posts.destroy', this.post));
    }
  },

  mounted () {
    if (this.post) {
      this.title = this.post.title;
      this.slug = this.post.slug;
      this.content = this.post.content;
      this.category = this.post.category_id;
    }
  }
}
</script>
<template>
  <div>
    <form @submit.prevent="submitEvent">
      <div class="mb-3 pt-0">
        <div class="mb-3">
          <admin-input v-model="title" :error="$page.props.errors.title" label="Post Title" id="title" name="title"></admin-input>
        </div>
        
        <div class="mb-3">
          <admin-input v-model="slug" :error="$page.props.errors.slug" label="Post Slug" id="slug" name="slug"></admin-input>
        </div>

        <div class="mb-3">
          <admin-editor @update:content="content = $event" :error="$page.props.errors.content" label="Post Content" id="content" name="content"></admin-editor>
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
import AdminSelectInput from '@/Shared/Admin/SelectInput';
import AdminEditor from '@/Shared/Admin/Editor';
import { Inertia } from '@inertiajs/inertia';

export default {
  components: {
    AdminButton,
    AdminInput,
    AdminSelectInput,
		AdminEditor
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
      /*Inertia.post(this.route('admin.categories.store'), {
        name: this.name,
        description: this.description,
        status: this.status
      });*/
    },

    update () {
      /*Inertia.put(this.route('admin.categories.update', this.category), {
        name: this.name,
        description: this.description,
        status: this.status
      });*/
    },

    destroy () {
      // Inertia.delete() equivalent
      // this.$inertia.delete(this.route('admin.categories.destroy', this.category));
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
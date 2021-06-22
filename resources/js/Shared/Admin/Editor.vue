<template>
  <div>
    <label class="text-lg">{{ label }}</label>
    <editor
      v-bind="$attrs"
      v-model="content"
      :id="id"
      :name="name"
      :apiKey="tinymceApiKey"
      :initialValue="content"
      :init="config"
      ref="editor"></editor>
      <span
        v-if="error"
        class="text-red-600 ml-1 font-bold">{{ error }}</span>
  </div>
</template>

<script>
import Editor from '@tinymce/tinymce-vue';

export default {
  components: {
    Editor
  },

  emits: ['update:content'],

  props: {
    name: {
      type: String,
      required: true
    },
    id: {
      type: String,
      required: true
    },
    label: {
      type: String,
      required: true,
    },
    error: {
      type: String
    }
  },

  data: () => ({
    content: '',
    config: {
      height: 500,
      plugins: [
        'advlist autolink lists link image charmap',
        'searchreplace visualblocks code fullscreen',
        'print preview anchor insertdatetime media',
        'paste code help wordcount table codesample'
      ],
      menubar: 'file edit view insert format tools table tc help',
      toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | codesample | help',
      codesample_languages: [
        { text: 'Text', value: 'text' },
        { text: 'HTML/XML', value: 'markup' },
        { text: 'JavaScript', value: 'javascript' },
        { text: 'CSS', value: 'css' },
        { text: 'PHP', value: 'php' },
        { text: 'Ruby', value: 'ruby' },
        { text: 'Python', value: 'python' },
        { text: 'Java', value: 'java' },
        { text: 'C', value: 'c' },
        { text: 'C#', value: 'csharp' },
        { text: 'C++', value: 'cpp' }
      ]
    }
  }),

  computed: {
    tinymceApiKey () {
      return this.$page.props.tinymceApiKey;
    }
  },

  watch: {
    content (value) {
      this.$emit('update:content', value);
    }
  }
}
</script>
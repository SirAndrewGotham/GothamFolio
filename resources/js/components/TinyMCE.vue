<template>
    <textarea :id="id" :name="name"></textarea>
</template>

<script>
import tinymce from 'tinymce/tinymce';
import 'tinymce/icons/default';
import 'tinymce/themes/silver';
import 'tinymce/skins/ui/oxide/skin.min.css';

// Import plugins
import 'tinymce/plugins/advlist';
import 'tinymce/plugins/autolink';
import 'tinymce/plugins/lists';
import 'tinymce/plugins/link';
import 'tinymce/plugins/image';
import 'tinymce/plugins/charmap';
import 'tinymce/plugins/preview';
import 'tinymce/plugins/anchor';
import 'tinymce/plugins/searchreplace';
import 'tinymce/plugins/visualblocks';
import 'tinymce/plugins/code';
import 'tinymce/plugins/fullscreen';
import 'tinymce/plugins/insertdatetime';
import 'tinymce/plugins/media';
import 'tinymce/plugins/table';
import 'tinymce/plugins/wordcount';
import 'tinymce/plugins/help';

export default {
    name: 'TinyMCE',
    props: {
        modelValue: String,
        id: {
            type: String,
            default: 'tinymce-editor'
        },
        name: {
            type: String,
            default: 'content'
        },
        config: {
            type: Object,
            default: () => ({})
        }
    },
    emits: ['update:modelValue'],
    mounted() {
        const defaultConfig = {
            selector: `#${this.id}`,
            skin_url: '/vendor/tinymce/skins/ui/oxide',
            content_css: '/vendor/tinymce/skins/content/default/content.css',
            plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table wordcount help',
            toolbar: 'undo redo | blocks | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media table | code help',
            menubar: 'file edit view insert format tools table help',
            height: 500,
            setup: (editor) => {
                editor.on('init', () => {
                    editor.setContent(this.modelValue || '');
                });
                editor.on('change keyup', () => {
                    this.$emit('update:modelValue', editor.getContent());
                });
            }
        };

        tinymce.init({ ...defaultConfig, ...this.config });
    },
    beforeUnmount() {
        tinymce.remove(`#${this.id}`);
    },
    watch: {
        modelValue(newValue) {
            if (tinymce.get(this.id)) {
                tinymce.get(this.id).setContent(newValue || '');
            }
        }
    }
};
</script>

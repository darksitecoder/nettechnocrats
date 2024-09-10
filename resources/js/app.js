import './bootstrap';
import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import ImageTool from '@editorjs/image';
import List from '@editorjs/list';

const editor = new EditorJS({
    holder: 'editorjs',
    tools: {
        header: {
            class: Header,
            inlineToolbar: true,
        },
        image: {
            class: ImageTool,
            config: {
                endpoints: {
                    byFile: '/api/uploadFile',
                    byUrl: '/api/fetchUrl',
                },
            },
        },
        list: {
            class: List,
            inlineToolbar: true,
        }
    },
    autofocus: true,
});
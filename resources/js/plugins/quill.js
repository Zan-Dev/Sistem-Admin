const defaultEditor = document.querySelector('.quill-editor-default');

if (defaultEditor) {
    new Quill('.quill-editor-default', {
        theme: 'snow'
    });
}

const bubbleEditor = document.querySelector('.quill-editor-bubble');

if (bubbleEditor) {
    new Quill('.quill-editor-bubble', {
        theme: 'bubble'
    });
}

const fullEditor = document.querySelector('.quill-editor-full');

if (fullEditor) {
    new Quill('.quill-editor-full', {
        modules: {
            toolbar: [
                [
                    {
                        font: []
                    },
                    {
                        size: []
                    }
                ],
                ['bold', 'italic', 'underline', 'strike'],
                [
                    {
                        color: []
                    },
                    {
                        background: []
                    }
                ],
                [
                    {
                        script: 'super'
                    },
                    {
                        script: 'sub'
                    }
                ],
                [
                    {
                        list: 'ordered'
                    },
                    {
                        list: 'bullet'
                    },
                    {
                        indent: '-1'
                    },
                    {
                        indent: '+1'
                    }
                ],
                [
                    'direction',
                    {
                        align: []
                    }
                ],
                ['link', 'image', 'video'],
                ['clean']
            ]
        },
        theme: 'snow'
    });
}
import { select } from '../utils/dom';

const QUILL_FULL_TOOLBAR = [
  [{ font: [] }, { size: [] }],
  ['bold', 'italic', 'underline', 'strike'],
  [{ color: [] }, { background: [] }],
  [{ script: 'super' }, { script: 'sub' }],
  [{ list: 'ordered' }, { list: 'bullet' }, { indent: '-1' }, { indent: '+1' }],
  ['direction', { align: [] }],
  ['link', 'image', 'video'],
  ['clean'],
];

/** Quill (butuh global `Quill`). */
export function initQuill() {
  if (select('.quill-editor-default')) {
    new Quill('.quill-editor-default', { theme: 'snow' });
  }
  if (select('.quill-editor-bubble')) {
    new Quill('.quill-editor-bubble', { theme: 'bubble' });
  }
  if (select('.quill-editor-full')) {
    new Quill('.quill-editor-full', {
      theme: 'snow',
      modules: { toolbar: QUILL_FULL_TOOLBAR },
    });
  }
}

/** TinyMCE (butuh global `tinymce`). */
export function initTinyMCE() {
  if (!select('textarea.tinymce-editor')) return;

  const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

  tinymce.init({
    selector: 'textarea.tinymce-editor',
    plugins:
      'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help quickbars emoticons accordion',
    menubar: 'file edit view insert format tools table help',
    toolbar:
      'undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent | forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl',
    toolbar_mode: 'sliding',
    height: 600,
    autosave_ask_before_unload: true,
    autosave_interval: '30s',
    autosave_prefix: '{path}{query}-{id}-',
    autosave_restore_when_empty: false,
    autosave_retention: '2m',
    image_advtab: true,
    image_caption: true,
    importcss_append: true,
    quickbars_selection_toolbar:
      'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
    noneditable_class: 'mceNonEditable',
    contextmenu: 'link image table',
    skin: useDarkMode ? 'oxide-dark' : 'oxide',
    content_css: useDarkMode ? 'dark' : 'default',
    content_style:
      'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
  });
}

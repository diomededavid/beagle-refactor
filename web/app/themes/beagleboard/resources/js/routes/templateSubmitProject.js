import  'tinymce';


export default {
    init() {
      // scripts here run on the DOM load event

        jQuery(document).ready(function () {
            tinymce.init({
                mode: 'specific_textareas',
                theme: 'simple',
                plugins : 'autolink, lists, spellchecker, style, layer, table, advhr, advimage, advlink, emotions, iespell, inlinepopups, insertdatetime, preview, media, searchreplace, print, contextmenu, paste, directionality, fullscreen, noneditable, visualchars, nonbreaking, xhtmlxtras, template',
                // selector: 'post_content',
                selector: 'project_details',
                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
            });
        });

        console.log('templateSubmitProject init.')
    },
    finalize() {
      // scripts here fire after init() runs
        console.log('templateSubmitProject finalize.')
    },
};

// prevent Bootstrap from hijacking TinyMCE modal focus

$(document).on('focusin', function (e) {
    if ($(e.target).closest('.mce-window').length) {
        e.stopImmediatePropagation();
    }
});


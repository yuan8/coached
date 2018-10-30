$(document).ready(function(){
// Define function to open filemanager window
var lfmPath = function(options, cb) {

    var route_prefix = root_def+(options && options.prefix) ? options.prefix : '/p/filemanager';
    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManagerCoach', 'width=900,height=600');
    window.SetUrl = cb;
};

// Define LFM summernote button
var LFMButton = function(context) {
    var ui = $.summernote.ui;
    var button = ui.button({
        contents: '<i class="note-icon-picture"></i>',
        tooltip: 'Insert image with filemanager',
        click: function() {
            lfmPath({type: 'image', prefix: root_def+'/p/filemanager'}, function(url, path) {
                context.invoke('insertImage', url[0].url);
            });
        }
    });
    return button.render();
};
    

$('#coach-editor-plugin').summernote({
        height:500,
        toolbar: [
            ['popovers', ['video','lfmd']],
            ['insert',['link','table']],
            ['style', ['bold', 'italic', 'underline']],
            ['para', ['ul', 'ol', 'paragraph','style']],
            ['font', ['strikethrough']],
            ['fontsize', ['fontsize']],
            ['color', ['color','hr']],
            ['height', ['height']],
            ['misc', ['codeview','fontname','clear']]
        ],
        codemirror: { 
         // theme: 'monokai'
       },
        buttons: {
            lfmd: LFMButton,
        }
});


setTimeout(function(){$('.note-editor .modal').appendTo('body');  },500);
});
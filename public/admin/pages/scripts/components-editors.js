jQuery(document).ready(function() {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });

    jQuery('#editor').summernote({
        height: 300,
        lang: 'zh-CN',
        callbacks: {
            onImageUpload: function(files, editor, welEditable) {
                data = new FormData();
                data.append("file", files[0]);
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                data.append("_token",CSRF_TOKEN);
                $.ajax({
                    data: data,
                    type: "POST",
                    url: "/admin/news/uploadimg",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url) {
                        $('#editor').summernote("insertImage",url,'filename');
                    }
                });
            }
        }
    });

    jQuery('#master_editor').summernote({
        height: 300,
        lang: 'zh-CN',
        callbacks: {
            onImageUpload: function(files, master_editor, welEditable) {
                data = new FormData();
                data.append("file", files[0]);
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                data.append("_token",CSRF_TOKEN);
                $.ajax({
                    data: data,
                    type: "POST",
                    url: "/admin/masters/uploadimg",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url) {
                        $('#master_editor').summernote("insertImage",url,'filename');
                    }
                });
            }
        }
    });
});
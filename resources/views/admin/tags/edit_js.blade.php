<script>
    $(document).on('click','#edit', function(e) {
        var id = $(this).data('id');
        $.get("{{ URL::to('manager/tags/edit') }}", {id: id}, function(data){
            $('#frm-update').find('#id-update').val(data.tag.id)
            $('#frm-update').find('#name-update').val(data.tag.name)
            $('#editTag').modal('show');
        })
    })
    
    $('#frm-update').on('submit',function(e){
        e.preventDefault();
        var id = document.getElementById("id-update").value;
        var name = document.getElementById("name-update").value;
        
        $.post("{{ URL::to('manager/tags/update') }}",{id:id, name: name}, function(data) {

            if(data.tag)
            {
            var tr = $("<tr/>", {
                id:data.tag.id
            });
            tr.append($("<th/>", {
                text : data.tag.id
            })).append($("<td/>", {
                html : '<a href="#" class="">' + data.tag.name + '</a>'
                 
            })).append($("<td/>", {
                html : '<a href="#" class="btn btn-info btn-xs" id="view" data-id="' + data.tag.id + '">{{ trans('language.view-crud') }}</a> ' + 
                    '<a href="#" class="btn btn-success btn-xs" id="edit" data-id="' + data.tag.id + '">{{ trans('language.edit-crud') }}</a> ' +
                    '<a href="#" class="btn btn-danger btn-xs" id="delete" data-id="' + data.tag.id + '">{{ trans('language.delete-crud') }}</a> ' 
             }))

            $('.tag-info tr#' + data.tag.id).replaceWith(tr);
            $('#editTag').modal('hide');
            $('#message').css('display', 'block');
            $('#message').html(data.message);
            $('#message').addClass(data.class_name);
            }

            $('#message-fail').css('display', 'block');
            $('#message-fail').html(data.message);
            $('#message-fail').addClass(data.class_name);

        })
    })      
</script>


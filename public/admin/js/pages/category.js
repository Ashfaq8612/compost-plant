$(document).ready( function () {
    if ($("#parent_slug").val() != '') {
        getCategories($("#parent_slug"));
    }
})

function getCategories(that) {
    let options = '<option value="">Select</option>';
    $.ajax({
        headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        },
        type: 'post',
        dataType: 'json',
        url: route('admin.category.parentSlug'),
        data: {
            parent_slug: that.val(),
            category_id: $("#category_id").val(),
        },
        success: function (response) {

            if (response.status) {
                let categories = response.data.categories;
                Object.values(categories).forEach( function (category) {
                    options += '<option value="'+category.id+'">'+category.en_name+'</option>';
                });
                $('.parent-id').html(options);
            }

        }, error: function (error) {
            $('.parent-id').html(options);
        }
    });
}

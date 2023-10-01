$(document).ready( function (e) {

    $(document).on("click", ".editable", function () {
        $(".editable-field").addClass("d-none");
        $(".editable").removeClass("d-none");
       $(this).toggleClass("d-none");
        $(this).parent('td').find(".editable-field").toggleClass("d-none");
    });
});

$(document).mouseup(function(e)
{
    if (! $(".editable-field").is(e.target) &&  $(".editable-field").has(e.target).length === 0) {
        $(".editable-field").addClass("d-none");
        $(".editable").removeClass("d-none");
    }
});

function fieldEditable(route, column, id, that)
{
    if(that.val() != '') {

        $.ajax({
            headers: {
                'X-CSRF-Token': $('meta[name="_token"]').attr('content')
            },
            type: 'POST',
            data: {
                id: id,
                column: column,
                value: that.val(),
            },
            dataType: 'json',
            url: route,
            success: function (result) {
              if (result.status) {
                  toastr['success'](
                      result.message,
                      'Success',
                      options()
                  );
                  that.addClass('d-none');
                  $(".editable").removeClass('d-none');
                  that.parent('td').find('.field-value').text(that.val());
              } else {
                  toastr['error'](
                      result.message,
                      'Error',
                      options()
                  );
              }
            }
        });
    }
}

function allActive($this, url) {
    swal({
        title: 'Are you sure?',
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonClass: 'btn btn-danger',
        confirmButtonText: 'Yes',
        cancelButtonClass: 'btn btn-light',
    }).then(function() {

            $.ajax({
                type: 'get',
                dataType: 'json',
                url: url,
                data: {is_active: $this.is(':checked') ? 1 : 0},
                success: function (response) {
                    if (response.status === true) {
                        toastr['success'](
                            response.message,
                            'Success',
                            options()
                        );
                    } else if (response.status === false) {
                        toastr['error'](
                            response.message,
                            'Error',
                            options()
                        );
                    } else {
                        toastr['error'](
                            response.message,
                            'Error',
                            options()
                        );
                    }

                    setTimeout( function () {
                        window.location.reload();
                    }, 500);


                }, error: function (error) {
                    toastr.error("something went wrong, please try again.");
                }
            });

        },
        function(inputValue) {
            let checked = $this.is(":checked");
            if (inputValue !== false) {
                if (checked) {
                    $this.prop("checked", false);
                } else {
                    $this.prop("checked", true);
                }
            } else {
                if (checked) {
                    $this.prop("checked", false);
                } else {
                    $this.prop("checked", true);
                }
            }
        });
}

function toggleModel(that)
{
    $(".model-id").hide();

    if (that.val() == 'product') {
        $(".product").show();
        $(".product-select").attr('name', 'model_id')
        $(".category-select").removeAttr('name')
    } else {
        $(".category").show();

        $(".category-select").attr('name', 'model_id')
        $(".product-select").removeAttr('name')
    }
}

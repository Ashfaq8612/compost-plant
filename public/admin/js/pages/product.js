function addVariant($this) {

    /*setTimeout( function () {
        setCropFields();
    },500);*/

    let display = $(".append-options").css('display');
    if (display == 'none') {
        $(".append-options").show();
        return false;
    }

    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: route('admin.products.addOption'),
        success: function (result) {
            $(".append-options").append(result.html);

           /* setTimeout( function () {
                setCropFields();
            },300);*/
        }
    });
}

function setCropFields() {
    $(".variant-fields").each( function (index) {
      //  $(this).find(".cropme").attr("class", 'cropme_' + index);
      //  $(this).find(".cropme_" + index).removeClass("cropme");
        $(this).find(".custom-control-input").attr("id", 'is_cropped_' + index);
        $(this).find(".custom-control-label").attr("for", 'is_cropped_' + index);
    });
}


function deleteVariant($this) {

    if ($(".delete-option").length > 1) {
        $this.parents(".delete-option").remove();
    }

}

function addValue($this) {

    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: route('admin.products.addValue'),
        success: function (result) {
            $this.parents(".append-value").append(result.html);

            setTimeout( function () {
                setValuesName($this);
            }, 300);
           // setCropFields();
        }
    });

}

function deleteValue($this) {

    if ($this.parents(".append-value").find('.delete-value').length > 1) {
        $this.parents('.delete-value').remove();
    }

}

function setValuesName($this) {
    let option = $this.parents('.delete-option').find('.option-en_name').val();
    $this.parents('.delete-option').find('.value-en_name').attr('name', 'values[en_name]['+option+'][]')
    $this.parents('.delete-option').find('.value-ar_name').attr('name', 'values[ar_name]['+option+'][]')
    $this.parents('.delete-option').find('.value-price').attr('name', 'values[price]['+option+'][]')
    $this.parents('.delete-option').find('.value-qty').attr('name', 'values[qty]['+option+'][]')
    $this.parents('.delete-option').find(".value-image").attr('name', 'values[image]['+option+'][]')
}

$(document).ready(function () {
    $(document).on("change", ".option-en_name", function () {
        $(this).parents('.delete-option').find('.value-en_name').attr('name', 'values[en_name]['+$(this).val()+'][]')
        $(this).parents('.delete-option').find('.value-ar_name').attr('name', 'values[ar_name]['+$(this).val()+'][]')
        $(this).parents('.delete-option').find('.value-price').attr('name', 'values[price]['+$(this).val()+'][]')
        $(this).parents('.delete-option').find('.value-qty').attr('name', 'values[qty]['+$(this).val()+'][]')
        $(this).parents('.delete-option').find(".value-image").attr('name', 'values[image]['+$(this).val()+'][]')
    });
});

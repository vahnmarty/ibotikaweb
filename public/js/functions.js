$('#search-medicines').autocomplete({
    source: function (request, response) {
        $.getJSON("http://api.ibotika.com/mims/search/minified?keyword=" + request.term, function (data) {
            response($.map(data, function (value, key) {
                return {
                    reference:value.reference,
                    label: value.name,
                    value: value.name
                };
            }));
        });
    },
    select: function (event, ui) {            
        var reference = $(this).parent().find('input[name="reference"]');
        selectReference(event, ui, reference);
    },
    minLength:2,
    delay:1
    }
);

function selectReference(event, ui, reference)
{               
    var selectedObj = ui.item;
    $(reference).val(selectedObj.reference);
}

$(document).ready(function(){

	$('.select-type').on('change', function(){
		$('.search').hide();;
		$('#search-' + $(this).val()).show();
	}).change();

    $('.simple-toggle').on('click', function(e){
        e.preventDefault();
        $($(this).data('target')).toggle();
        $($(this).data('target')).find('.toggle-focus').focus();
    });

    $('.form-location').on('submit', function(e){
        e.preventDefault();
        var el = $(this);
        $.ajax({
            url: $(this).attr('action'),
            data:$(this).serialize(),
            type: 'POST',
            success:function(data){
                el.hide();
                $('#address').html(data.full_address);
            }
        });
    });
});

$(window).on('load', function(){
    $('.ajax-loader').hide();
});


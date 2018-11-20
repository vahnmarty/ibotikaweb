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

$('#search-diseases').autocomplete({
    source: function (request, response) {
        $.getJSON("http://api.ibotika.localhost/health/search?keyword=" + request.term, function (data) {
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

$('#search-pharmacies').autocomplete({
    source: function (request, response) {
        $.getJSON("../../pharmacy/autocomplete?keyword=" + request.term, function (data) {
            response($.map(data, function (value, key) {
                return {
                    label: value.name + ' '+value.branch+' ' + '('+ value.address1 +')',
                    value: value.name
                };
            }));
        });
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


$('.select-sort').on('change', function(){
    var sort = $(this).val();
    console.log(sort);
    if(sort == 'name_asc')
        $(".sortable .sortable-item").sort(name_asc).appendTo('.sortable');    

    else if(sort == 'name_desc')
        $(".sortable .sortable-item").sort(name_desc).appendTo('.sortable');
    
    else if(sort == 'price_asc')
        $(".sortable .sortable-item").sort(price_asc).appendTo('.sortable');

    else if(sort == 'price_desc')
        $(".sortable .sortable-item").sort(price_desc).appendTo('.sortable');

    else if(sort == 'nearest')
        $(".sortable .sortable-item").sort(nearest).appendTo('.sortable');
});

function name_asc(a, b){
    return ($(b).data('name')) < ($(a).data('name')) ? 1 : -1;    
}
function name_desc(a, b){
    return ($(b).data('name')) > ($(a).data('name')) ? 1 : -1;    
}
function price_asc(a, b){
    return ($(b).data('price')) < ($(a).data('price')) ? 1 : -1;    
}
function price_desc(a, b){
    return ($(b).data('price')) > ($(a).data('price')) ? 1 : -1;    
}
function nearest(a, b){
    return ($(b).data('distance')) < ($(a).data('distance')) ? 1 : -1;    
}



function customSelect2(element, url, what , params , placeholder,multiple) {
    if (!params) params = {};
    element.select2({
        allowClear: true,
        multiple : multiple,
        placeholder : placeholder,
        ajax: {
            url: url,
            type: 'GET',
            dataType: 'json',
            data: function (word) {
                customObj = {
                    'q': word,
                    'what': what
                };
                comingObj = params;
                sendingObj = Object.assign(customObj,comingObj);
                return sendingObj;
            },
            results: function (data, q) {
                return data
            },
            cache: true
        }
    });
}

function openModal(route, data, type) {

    type = typeof type !== 'undefined' ? type : 'stick-up';
    $('#myModal').attr("class", "modal fade disable-scroll " + type);

    $.get(route, data, function (response) {
        $('#myModal').html(response);
        $('#myModal').modal('show');
    });


}


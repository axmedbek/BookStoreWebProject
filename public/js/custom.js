

function customSelect2(element,url,what){
    element.select2({
        allowClear: true,
        ajax: {
            url: url,
            type: 'POST',
            dataType: 'json',
            data: function (word) {
                return {
                    'q': word,
                    'what': what,
                };
            },
            results: function (data, q) {
                return data
            },
            cache: true
        }
    });
}
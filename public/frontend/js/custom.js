
$('#country_id').on('change', function () {

    var country_id = $('#country_id').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.post(route('ucity'), {
        contentType: 'application/json',
        country_id: country_id,
    },
        function (data, status) {
            $('#city_id').append('<option value="">' + 'Select City Name'+ '</option>');
            $.each(data, function (i) {
                $('#city_id').append('<option value="' + data[i].city_id + '">' + data[i].name + '</option>');
            });

            $.each(data, function (i) {
                $('#work_city').append('<option value="' + data[i].city_id + '">' + data[i].name + '</option>');
            });


        });

    $('#city_id').find('option').remove().end();
});



$('#country_id').on('change', function () {

    var country_id = $('#country_id').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.post(route('ucity'), {
            contentType: 'application/json',
            country_id: country_id,
        },
        function (data, status) {
            $('#residential_city').append('<option value="">' + 'Select Residential City'+ '</option>');


            $.each(data, function (i) {
                $('#residential_city').append('<option value="' + data[i].city_id + '">' + data[i].name + '</option>');
            });

        });

    $('#residential_city').find('option').remove().end();
});




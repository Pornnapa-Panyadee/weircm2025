$(document).ready(function () {
    // โหลดอำเภอของจังหวัดเชียงใหม่
    $.getJSON('/weir/chiangmai/district/เชียงใหม่', function (data) {
        $.each(data, function (i, obj) {
            $('#district').append('<option value="' + obj.vill_district + '">' + obj.vill_district + '</option>');
        });
    });

    // เมื่อเลือกอำเภอแล้วโหลดตำบล
    $('#district').on('change', function () {
        var district = $(this).val();
        $('#subdistrict').empty().append('<option value="">-- เลือกตำบล --</option>');

        if (district) {
            $.getJSON('/weir/chiangmai/subdistrict/' + encodeURIComponent(district), function (res) {
                $.each(res.data, function (i, obj) {
                    $('#subdistrict').append('<option value="' + obj.vill_tunbol + '">' + obj.vill_tunbol + '</option>');
                });
            });
        }
    });
});

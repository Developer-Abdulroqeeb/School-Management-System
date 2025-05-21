<!DOCTYPE html>
<html>
<head>
    <title>Food Selector</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    <h2>Select Class of Food</h2>

    <label for="food_class">Food Class:</label>
    <select id="food_class">
        <option value="">-- Select a class --</option>
        @foreach ($foodClasses as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>

    <br><br>

    <label for="food_type">Food Type:</label>
    <select id="food_type">
        <option value="">-- Select a type --</option>
    </select>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#food_class').on('change', function() {
                var selectedClass = $(this).val();
                if (selectedClass) {
                    $.ajax({
                        url: '/get-food-types',
                        type: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            food_class: selectedClass
                        },
                        success: function(response) {
                            $('#food_type').empty();
                            $('#food_type').append('<option value="">-- Select a type --</option>');
                          $.each(response, function(index, student) {
    var fullName = student.FirstName + ' ' + student.LastName;
    $('#food_type').append('<option value="'+student.id+'">'+fullName+'</option>');
});

                        }
                    });
                } else {
                    $('#food_type').empty();
                    $('#food_type').append('<option value="">-- Select a type --</option>');
                }
            });
        });
    </script>

</body>
</html>

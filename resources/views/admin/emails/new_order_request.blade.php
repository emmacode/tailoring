<!doctype html>
<html>
<head>
    <meta lang="en" />
    <title>Service Request Notification</title>
</head>
<body>
Hi admin, We've got a new service request from Tailoring.com.ng with the following details:
<div>
    @if (!empty($form_data))
        <ul class="form-data-list">
            @foreach($form_data as $data => $value)
                @if ($data != "_token" && $data != "style_file" && $data != 'token')
                    <li>{{ucfirst(str_replace("_", " ", $data))}}: {{$value}}</li>
                @endif
            @endforeach
        </ul>
    @endif
</div>
</body>
</html>
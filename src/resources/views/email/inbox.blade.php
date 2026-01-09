<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact Email</title>
</head>

<body>
    <h2>Pesan Kontak Baru</h2>

    <p><strong>Nama:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subjek:</strong> {{ $data['subject'] }}</p>

    <p><strong>Pesan:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>

</html>

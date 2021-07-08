<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="/form-submit" method="post">
        @csrf
        <label for="name">Name</label>
        <input id="name" name="name" type="text">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label for="address">Address</label>
        <input id="address" name="address" type="text">
        @error('address')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        <label for="phone">Phone</label>
        <input id="phone" name="phone" type="text">
        @error('phone')
        <span>{{ $message }}</span>
        @enderror
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sahami | Home</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- CSS tùy chỉnh của bạn ở dưới này -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/khachhang.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/layout.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>
<body>

	<div class="wp_khHome">
		<div class="row kh_header">
			@include("khachhang.headerKhachHang")
			<hr style="border-width: 0.3px;">
		</div>

		<div class="row" style="margin-bottom: 100px; margin-top: 50px;">
			@yield('khachhang_content')
		</div>

		<div class="row kh_footer">
			@include("footer")
		</div>
	</div>
	
</body>
</html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latest Post</title>
</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Posts</h1>
    
                @foreach ($categories as $category)
                    <h2>{{ $category->name }}</h2>
                    <h3>{{ $category->latestPost->title }}</h3>
                    <p>{{ $category->latestPost->content }}</p>
                @endforeach

            </div>
        </div>
    </div>



    

	
</body>
</html>
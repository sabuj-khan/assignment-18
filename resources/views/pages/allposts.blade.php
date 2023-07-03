<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Posts</title>
</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Posts</h1>
    
                @foreach ($posts as $post)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->content }}</p>
                            <p>Category: {{ $post->category->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

	
</body>
</html>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <title>Main Site</title>
</head>
<body>
<div class="container" style="margin-left:100px ">
    @foreach($pages as $page)
        <h4><a href="#">{{$page->title}}</a></h4>


    @endforeach
</div>
</body>
</html>



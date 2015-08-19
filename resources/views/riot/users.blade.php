<!DOCTYPE html>
<html>
<head>
    <title>Riot Users</title>
    <script src="/laravel/js/superagent.js"></script>
</head>
<body>
<div riot-tag="riot-user"></div>
<hr>
<a href="{{$url}}">{{$url}}</a>
<hr>
<button type="button">Index(GET)</button>
<button type="button">Create(GET)</button>
<button type="button">Store(POST)</button>
<button type="button">Show(GET)</button>
<button type="button">Edit(GET)</button>
<button type="button">update(put)</button>
<button type="button">destroy(delete)</button>

<script src="/laravel/tag/riot-user.tag" type="riot/tag"></script>
<script src="https://cdn.jsdelivr.net/g/riot@2.2(riot.min.js+compiler.min.js)"></script>
<script>
    // カスタムタグ名 or riot-tag属性で指定した名前でmount
    riot.mount('riot-user', {title: 'riot-user', source:'/laravel/api/riot2'});

    // Event Listener


</script>
</body>
</html>

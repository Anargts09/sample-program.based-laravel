<!DOCTYPE html>
<html>
<head>
    <title>Riot</title>
    <script src="js/superagent.js"></script>
</head>
<body>
    <div riot-tag="user"></div>

    <script src="tag/user.tag" type="riot/tag"></script>
    <script src="https://cdn.jsdelivr.net/g/riot@2.2(riot.min.js+compiler.min.js)"></script>
    <script>riot.mount('user', {title: 'riot', source:'/laravel/riot'})</script>
</body>
</html>

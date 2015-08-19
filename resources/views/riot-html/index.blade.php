<!DOCTYPE html>
<html>
<head>
    <title>Riot Html Sample</title>
    <script src="/laravel/js/superagent.js"></script>
</head>
<body>
    <header riot-tag="riot-header"></header>
    <main riot-tag="riot-main"></main>
    <aside riot-tag="riot-aside"></aside>
    <footer riot-tag="riot-footer"></footer>

    <script src="/laravel/tag/riot-html.tag" type="riot/tag"></script>
    <script src="https://cdn.jsdelivr.net/g/riot@2.2(riot.min.js+compiler.min.js)"></script>
    <script>
        // 全mount
        riot.mount('*');
    </script>
</body>
</html>

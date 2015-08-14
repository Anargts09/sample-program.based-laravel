<!DOCTYPE html>
<html>
<head>
    <title>Riot</title>
    <script src="/laravel/js/superagent.js"></script>
</head>
<body>
    <general></general>
    <hr>
    <div riot-tag="general2"></div>
    <hr>
    <div class="version"><p>Class指定</p></div>
    <hr>
    <div class="version2"><p>別Class指定(mountされない)</p></div>
    <hr>

    <script src="/laravel/tag/riot.tag" type="riot/tag"></script>
    <script src="https://cdn.jsdelivr.net/g/riot@2.2(riot.min.js+compiler.min.js)"></script>
    <script>
        // カスタムタグ名 or riot-tag属性で指定した名前でmount
        riot.mount('general', {title: 'riotAPI', source:'/laravel/riot-api'});
        riot.mount('general2', {title: 'riotAPI2', source:'/laravel/riot-api'});
        // クラス名でmount
        riot.mount('.version', 'version');
        // CSS Parse
        riot.parsers.css.cssParse = function(tag, css) {
            return css.replace(/@cssParse/, tag);
        };
/    </script>
</body>
</html>

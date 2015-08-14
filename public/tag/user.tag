<user>
    <h3>{opts.title}</h3>
    <div>{username}</div>

    <abc />
    <a href="#tag1">tag1</a>
    <a href="#tag2">tag2</a>

    <script>
        this.username = 'Default User';
        var request = window.superagent;
        request
            .get(opts.source)
            .end(function(err, res) {
                this.username = res.body.user_name;
                this.update();
            }.bind(this));

        this.on('mount', function() {
            riot.route.start();

            // routerに変更があったら実行される
            riot.route(function(tag) {
                // <abc /> に tag を展開する
                riot.mountTo('abc', tag);
            });

            // ブラウザをリロードした時用
            riot.route(location.hash.replace('#', ''));
        });
    </script>
</user>

<tag1>
    <h3>tag1</h3>
</tag1>

<tag2>
    <h3>tag2</h3>
</tag2>

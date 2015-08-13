<user>
    <h3>{opts.title}</h3>
    <div>{username}</div>

    <script>
    this.username = 'Default User';
    var request = window.superagent;
    request
        .get(opts.source)
        .end(function(err, res) {
            this.username = res.body.user_name;
            this.update();
            console.info(this);
            console.info(res.body);
        }.bind(this));
    </script>
</user>
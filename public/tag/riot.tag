<general>
    <h3>{opts.title}</h3>
    <div>{general}</div>

    <div riot-tag="version" name="nameVersion">
        <h3>Riot Version(Custom Tag側では[yield]で定義しておく)</h3>
    </div>

    <script>
        // superagent
        var request = window.superagent;

        this.general = 'Default';

        // superagentでget処理
        var gene = this;
        request
            .get(opts.source)
            .end(function(err, res) {
                gene.general = res.body.general;
                // 画面を更新(ここで更新すると、後ろの処理分が反映されない)
//                gene.update();

                // isMountedで判定してもいいのかな
                if (gene.tags.nameVersion.isMounted === true) {
                    gene.tags.nameVersion.version = ('generalバージョン');
                }

                // 画面を更新(ここで更新すると、子供タグも含めて反映される)
                gene.update();
            });

        // 子供タグ一覧
        console.info(this.tags);

        // mount時の挙動
        this.on('mount', function() {
            // ネストしたタグのfunctionを呼び出し
            // (mount前だと、呼び出せないので、必ずmount後の処理でアクセスする)
            this.tags.nameVersion.version_console('on_mountの中');
        });
    </script>
</general>

<general2>
    <h3>{opts.title}</h3>
    <div>{general}</div>
    <button type="button" onclick={this.unmountDefault}>unmount default</button>
    <button type="button" onclick={this.unmountTrue}>unmount true</button>

    <aaabtn></aaabtn>

    <script>
        // superagent
        var request = window.superagent;

        this.general = 'Defaultでゴザル';

        // superagentでget処理
        var gene2 = this;
        request
            .get(opts.source)
            .end(function(err, res) {
                // 画面を更新(データ指定版)
                gene2.update({
                    general: res.body.general2
                });
            });

        // 親のタグ(今回の場合<div riot-tag="general2"></div>)が残らない
        this.unmountDefault = function() {
            this.unmount();
        };
        // 親のタグ(今回の場合<div riot-tag="general2"></div>)が残ったまま
        this.unmountTrue = function() {
            // 引数にtrueを指定すると残る
            // (引数 == true)の場合はtrue判定される。=== ではなくて == 。
            this.unmount(true);
        };

        this.on('unmount', function() {
            console.info('unmount');
        });
    </script>
</general2>

<version>
    <yield />
    <span>{version}</span>
    <script>
        this.version = riot.version;

        this.version_console = function(str) {
            console.info('[' + str + '] Version:' + riot.version);
        }
    </script>
</version>

<css-parse>
    <yield />
    <style type="text/cssParse">
        @cssParse > p {background-color: #ac2525;}
    </style>
</css-parse>

<js-parse>
    <yield />
    <p>{jsparse}</p>
    <script type="text/jsParse">
        this.jsparse = '@jsParse';
    </script>
</js-parse>

<car>
    <yield />
    <script>
        function Car() {
            riot.observable(this);

            this.on('start', function() {
                console.log('Car');
            });
        }

//        var car = new Car();
//        car.trigger('start');

//        var child = new Car();
//        child.on('start', function() {
//            console.log('Child Car');
//        });
//        child.trigger('start');
//        child.trigger('start');

//        var multi = new Car();
//        multi.on('start stop', function(type) {
//            console.log('Multi Car [' + type + ']');
//        });
//        multi.trigger('start');
//        multi.trigger('stop');
//        multi.off('start stop');
//        multi.trigger('start');
//        multi.trigger('stop');

//        var once = new Car();
//        once.one('start', function() {
//            console.log('Once Car');
//        });
//        once.trigger('start');
//        once.trigger('start');

        var opt = new Car();
        opt.on('start', function(obj, str, arr) {
            console.log('Option Car');
            console.log(obj);
            console.log(str);
            console.log(arr);
        });
        opt.trigger('start', {obj1: 'object1', obj2: 'object2'}, 'string', ['arr1', 'arr2']);
    </script>
</car>

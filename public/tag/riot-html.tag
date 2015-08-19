<riot-header>
    <p class="aaa">Riot Header</p>
    <span>{test}</span>

    <style scoped>
        :scope {
            background-color: #aae;
            height: 100px;
        }
        .aaa {
            background-color: #aea;
       }
    </style>

    <script>
        this.test = 'aiueo';
    </script>
</riot-header>

<riot-main>
    <section riot-tag="riot-sub"></section>
    <p class="aaa">Riot Main</p>

    <script>
        this.subMount = function(target) {
            riot.mount(target);
        };
    </script>
</riot-main>

<riot-aside>
    <p class="aaa">Riot Aside</p>
</riot-aside>

<riot-footer>
    <p class="aaa">Riot Footer</p>
</riot-footer>
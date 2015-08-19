<riot-user>
	<h3>{opts.title}</h3>
	<p>{tmp}</p>
	<ul>
		<li each={users}>
			<p>{name}</p>
		</li>
	</ul>

	<script>
		// superagent
		var request = window.superagent;

		this.users = [];
		this.tmp = 'Default tmp';

		// superagentで処理
		var gene = this;
		request
			.get(opts.source)
//			.post(opts.source)
			.end(function(err, res) {
				console.debug(res.body);
				gene.users = res.body.users;
				gene.tmp = res.body.tmp;

				// 画面を更新(ここで更新すると、子供タグも含めて反映される)
				gene.update();
			});
	</script>
</riot-user>
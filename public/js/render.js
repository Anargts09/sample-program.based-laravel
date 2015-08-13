var UserList = React.createClass({
	getInitialState: function() {
		return {
			username: '',
			id: '',
			address: ''
		};
	},

	getDefaultProps: function() {
		return {
			source: '/laravel/react'
		};
	},

	componentDidMount: function() {
		$.get(this.props.source, function(result) {
			if (this.isMounted()) {
				console.info(result);
				this.setState({
					username: result.user_name,
					id: result.user_id,
					address: result.address
				});
			}
		}.bind(this));
	},

	render: function() {
		return (
			<div>
				user:{this.state.username} / {this.state.address} / {this.state.id}
			</div>
		);
	}
});

React.render(
	<UserList />,
	document.getElementById('content')
);
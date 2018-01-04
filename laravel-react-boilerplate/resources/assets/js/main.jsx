var React = require('react');

var App = React.createClass({
	render: function() {
		return (
			<div>
			Hello, world! - <strong>&lt;3 React.</strong>
			</div>
		);
	}
});

React.render(
	<App />,
	document.getElementById('react-it')
);


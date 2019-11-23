import React from 'react';
import { render } from 'react-dom';

export default function Example() {
	return (
		<div className="container">
			<div className="row justifyContent-center">
				<div className="col-md-8">
					<div className="c-card">
						<h3>Example Component</h3>
						<p>I'm an example component!</p>
					</div>
				</div>
			</div>
		</div>
	);
}

if (document.getElementById('root')) {
	render(<Example />, document.getElementById('root'));
}

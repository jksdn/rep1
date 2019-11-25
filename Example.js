import React from 'react';
import { BrowserRouter, Route, useParams } from 'react-router-dom';
import { render } from 'react-dom';

export default function Example() {
    return (
        <div className="container">
            <div className="row justifyContent-center">
                <div className="col-md-8">
                    <button
                        className="c-button c-button--indigo c-button--medium"
                        type="button"
                    >
                        Button 1
                    </button>

                    <button
                        className="c-button c-button--purple c-button--medium"
                        type="button"
                    >
                        Button 2
                    </button>
                </div>
            </div>
        </div>
    );
}

if (document.getElementById('root')) {
    render(<Example />, document.getElementById('root'));
}

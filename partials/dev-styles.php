<style>
	body::before {
		content: 'Mobile';
		position: fixed;
		z-index: 1000;
		top: 0;
		left: calc(50vw - 50px);
		width: 100px;
		padding: 10px 20px;
		border-radius: 0 0 20px 20px;
		background: black;
		color: #ffffff;
		text-align: center;
	}

	header, main, body, .block {
		outline: 1px solid lightgrey;
		outline-offset: 0;
	}

	@media(min-width: 30em) {
		body::before {
			content: '30em';
		}
	}

	@media(min-width: 40em) {
		body::before {
			content: '40em';
		}
	}

	@media(min-width: 50em) {
		body::before {
			content: '50em';
		}
	}

	@media(min-width: 60em) {
		body::before {
			content: '60em';
		}
	}

	@media(min-width: 70em) {
		body::before {
			content: '70em';
		}
	}

	@media(min-width: 80em) {
		body::before {
			content: '80em';
		}
	}

	@media(min-width: 90em) {
		body::before {
			content: '90em';
		}
	}
</style>
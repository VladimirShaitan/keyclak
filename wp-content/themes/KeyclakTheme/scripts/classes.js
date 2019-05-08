class registration {

	constructor(form_id, backend_handler){
		if(qs(form_id) === null){return false;}
		this.form_id = form_id;
		this.form = qs(form_id);
		this.backend_handler = backend_handler;
		this.setEvent();
		this.pass_handler();
	};

	setEvent = () => {
		this.form.addEventListener('submit', (e) => {
			e.preventDefault();
			let data = {
				action: 'register_user',
				registration_data:jQuery(this.form).serialize()
			};
			ajax_handler(data, alert);
			console.log(jQuery(this.form).serialize());
		});

		this.form.addEventListener('change', (e) => {
			if(e.target.type === 'file'){
				e.target.parentElement.qs('span').innerHTML = e.target.value;
			} else if (e.target.type === 'radio'){
				if( e.target.getAttribute('data-eneabled') === 'true' ){
					this.form.qs('input[name=statut_du_garant]').removeAttribute('disabled');
					this.form.qs('input[name=revenu_du_garant]').removeAttribute('disabled');
				} else {
					this.form.qs('input[name=statut_du_garant]').setAttribute('disabled', 'disabled');
					this.form.qs('input[name=revenu_du_garant]').setAttribute('disabled', 'disabled');
				}
			}
		});

		this.form.addEventListener('click', (e) => {
			let video_block = e.target.parentFinder('video_upload');
			if(video_block){
				video_block.qs('input').type = 'text';
				video_block.qs('span.upload-text-btn').innerHTML = 'Mettez votre lien ici';
				video_block.qs('input').style.display = 'initial';
			}
		})
	};

	pass_handler = () => {
		this.form.addEventListener('input', (e) => {
			if (e.target.type === 'password') {
				
				let pass_first = qsa('input[type="password"]')[0].value;
				let pass_second = qsa('input[type="password"]')[1].value; 
				let pass_strength = wp.passwordStrength.meter(pass_first, [], pass_second);
				let error_block = e.target.parentElement.qs('.error');  

				if(pass_strength === 2 && e.target.name === 'password'){
					error_block.innerHTML = 'Bad password';
				} else if(pass_strength === 3 && e.target.name === 'password') {
					error_block.innerHTML = 'Good password';
		        	this.clear_error_message(error_block);
				} else if(pass_strength === 4 && e.target.name === 'password') {
					error_block.innerHTML = 'Strong password';
				    this.clear_error_message(error_block);
				} else if(pass_strength ===  5 && e.target.name != 'password'){
					error_block.innerHTML = 'Mismatch passwords';
				} else {
					error_block.innerHTML = '';
				}


			}
		})
	};

	clear_error_message = (error_block) => {
		setTimeout(() => {error_block.innerHTML = ''}, 2500);
	}

}
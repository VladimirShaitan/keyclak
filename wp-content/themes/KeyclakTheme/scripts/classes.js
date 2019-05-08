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
			ajax_handler(this.form_id, 'register_user', alert);
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

				let pass_first = qsa('input[type="password"]')[0];
				let pass_second = qsa('input[type="password"]')[1]; 
				let pass_strength = wp.passwordStrength.meter(pass_first.value, [], pass_second.value);
				let error_block = e.target.parentElement.qs('.error');  
				console.log(pass_strength);


				if(pass_strength === 2 && e.target.name != ''){
					error_block.innerHTML = 'Mot de passe faible';
					e.target.form.qs('input[type=submit]').setAttribute('disabled', 'disabled');
				} else if( pass_strength === 3 || pass_strength === 4 || e.target.value === '' ) {
					error_block.innerHTML = '';
					pass_first.parentElement.qs('.error').innerHTML = '';
					pass_second.parentElement.qs('.error').innerHTML = '';

					if(pass_first.value != '' && pass_second.value != ''){
						e.target.form.qs('input[type=submit]').removeAttribute('disabled');
					}

				} else if(pass_strength ===  5 ){
					error_block.innerHTML = 'Mot de passe non identique';
					e.target.form.qs('input[type=submit]').setAttribute('disabled', 'disabled');
				} else if (e.target.name != '') {
					error_block.innerHTML = 'Mot de passe trop court';
					e.target.form.qs('input[type=submit]').setAttribute('disabled', 'disabled');
				}

			}
		})
	};

}
const messages = {
	er_aj_registration: 'Une erreur est survenue lors de l\'envoi de la demande d\'inscription. Veuillez réessayer ultérieurement.',
	weak_pass: 'Mot de passe faible',
	non_ident_pass: 'Mot de passe non identique',
	short_pass: 'Mot de passe trop court',
	upload_text: 'Mettez votre lien ici',
}

class registration {
	constructor(form_id, backend_handler){
		if(qs(form_id) === null){return false;}
		this.form_id = form_id;
		this.form = qs(form_id);
		this.backend_handler = backend_handler;
		this.setEvent();
		this.pass_handler();
		this.loader_el = qs('.preloader');
		this.loader = {
			show: () => {
				this.loader_el.classList.remove('hidden');
				this.loader_el.style.animationName = 'preloader_show';
			},
			hide: () => {
				this.loader_el.style.animationName = 'preloader_hide';
				setTimeout(() =>{this.loader_el.classList.add('hidden')}, 200);
			}
		};
	};

	setEvent = () => {
		this.form.addEventListener('submit', (e) => {
			e.preventDefault();
			const self = this;
			self.loader.show();
			ajax_handler(this.form_id, self.backend_handler, (data) => {

				if(data.errors != undefined){
					for(let error in data.errors){
						self.form.qs('[name='+error+']').parentElement.qs('.error').innerHTML = data.errors[error];
						if(error === 'general'){alert(data.errors[error]);}
					}
					self.loader.hide();
				} else{
					window.location.href = data.url;
				}

			}, (data) => {
				self.loader.hide();
				alert(messages.er_aj_registration);
			});
		});

		this.form.addEventListener('change', (e) => {
			if(e.target.type === 'file'){
				e.target.parentElement.qs('span').innerHTML = e.target.value;
			} else if (e.target.type === 'radio'){
				let g_stat = this.form.qs('input[name=statut_du_garant]');
				let g_rev = this.form.qs('input[name=revenu_du_garant]');  
				if( e.target.getAttribute('data-eneabled') === 'true' ){
					g_stat.removeAttribute('disabled');
					g_rev.removeAttribute('disabled');
				} else {
					g_stat.setAttribute('disabled', 'disabled');
					g_rev.setAttribute('disabled', 'disabled');
					g_stat.value = g_rev.value = '';
				}
			}
		});

		this.form.addEventListener('click', (e) => {
			let video_block = e.target.parentFinder('video_upload');
			if(video_block){
				video_block.qs('input').type = 'text';
				video_block.qs('span.upload-text-btn').innerHTML = messages.upload_text;
				video_block.qs('input').style.display = 'initial';
			}
		});

		this.form.addEventListener('input', (e) => {
			if(e.target.name != 'password'){
				if(e.target.parentElement.qs('.error') != null){
					e.target.parentElement.qs('.error').innerHTML = '';
				}
			}
		});

	};

	pass_handler = () => {
		this.form.addEventListener('input', (e) => {
			if (e.target.type === 'password') {

				let pass_first = qsa('input[type="password"]')[0];
				let pass_second = qsa('input[type="password"]')[1]; 
				let pass_strength = wp.passwordStrength.meter(pass_first.value, [], pass_second.value);
				let error_block = e.target.parentElement.qs('.error');  

				if(pass_strength === 2 && e.target.name != ''){
					error_block.innerHTML = messages.weak_pass;
					e.target.form.qs('input[type=submit]').setAttribute('disabled', 'disabled');
				} else if( pass_strength === 3 || pass_strength === 4 || e.target.value === '' ) {
					error_block.innerHTML = '';
					pass_first.parentElement.qs('.error').innerHTML = '';
					pass_second.parentElement.qs('.error').innerHTML = '';

					if(pass_first.value != '' && pass_second.value != ''){
						e.target.form.qs('input[type=submit]').removeAttribute('disabled');
					}

				} else if(pass_strength ===  5 ){
					error_block.innerHTML = messages.non_ident_pass;
					e.target.form.qs('input[type=submit]').setAttribute('disabled', 'disabled');
				} else if (e.target.name != '') {
					error_block.innerHTML = messages.short_pass;
					e.target.form.qs('input[type=submit]').setAttribute('disabled', 'disabled');
				}

			}
		})
	};

}

class login {

	constructor(form_id, backend_handler){
		if(qs(form_id) === null){return false;}
		this.form_id = form_id;
		this.form = qs(form_id);
		this.backend_handler = backend_handler;
		this.setEvent();
	}

	setEvent = () => {
		this.form.addEventListener('submit', (e) => {
			const self = this;
			e.preventDefault();
			console.log(this);
			ajax_handler(this.form_id, self.backend_handler, (data) => {
				if(data.errors != undefined){
					self.form.qs('.error').innerHTML = data.errors;
				} else {
					console.log(data);
				}
			})
		});
	}


}
class registration {
	constructor(form_id, backend_handler){
		if(qs(form_id) === null){return false;}
		this.form_id = form_id;
		this.form = qs(form_id);
		this.backend_handler = backend_handler;
		this.setEvent();
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

		this.form.addEventListener('input', (e) => {
			if (e.target.type === 'password') {
				console.log( wp.passwordStrength.meter( qsa('input[type="password"]')[0], [], qsa('input[type="password"]')[1] ));
			}
		})

	}

}
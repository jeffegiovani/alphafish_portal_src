/* window.Atendimento = function () {
    return {
        loading: false,
        errors: {},
        successful: false,
        formData: {
            name: '',
            email: '',
            phone: '',
            is_customer: false,
            message: '',
        },
        submitForm() {
            this.loading = true;
            this.errors = {};

            axios.post('/pt/atendimento/send', {
                ...this.formData
            })
                .then((response) => {
                    this.successful = true;
                })
                .catch((error) => {
                    this.errors = error.response.data.errors;
                    this.successful = false;
                    this.loading = false;
                });
        },
        formatPhone() {
            let phoneSanitized = this.formData.phone.replace(/\D/g, '');
            let pattern = "(99) 9999-9999";

            if (phoneSanitized.length > 10){
                pattern = "(99) 99999-9999";
            }
            this.formData.phone = VMasker.toPattern(this.formData.phone, pattern);
        },
        backToForm() {
            this.successful = false;
            this.loading = false;

            this.formData = {
                name: '',
                email: '',
                phone: '',
                is_customer: false,
                message: '',
            };
        }
    }
} */

document.addEventListener('alpine:init', () => {
    Alpine.data('Atendimento', () => ({
        loading: false,
        errors: {},
        successful: false,
        formData: {
            name: '',
            email: '',
            phone: '',
            is_customer: false,
            message: '',
        },
        submitForm() {
            this.loading = true;
            this.errors = {};

            axios.post('/pt/atendimento/send', {
                ...this.formData
            })
                .then((response) => {
                    this.successful = true;
                })
                .catch((error) => {
                    this.errors = error.response.data.errors;
                    this.successful = false;
                    this.loading = false;
                });
        },
        formatPhone() {
            let phoneSanitized = this.formData.phone.replace(/\D/g, '');
            let pattern = "(99) 9999-9999";

            if (phoneSanitized.length > 10){
                pattern = "(99) 99999-9999";
            }
            this.formData.phone = VMasker.toPattern(this.formData.phone, pattern);
        },
        backToForm() {
            this.successful = false;
            this.loading = false;

            this.formData = {
                name: '',
                email: '',
                phone: '',
                is_customer: false,
                message: '',
            };
        }
    }))
})

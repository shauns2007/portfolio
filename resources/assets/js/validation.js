'use strict';

class Validation {
	constructor(formEl, sub) {
		this.formEl = formEl;
		this.errors = [];
		this.messages = this.messages();
		//Pass true or nothing to automatically handle displaying errors or submitting
		if (typeof sub === 'undefined') {
			this.sub = true;
		} else {
			this.sub = sub;
		}
		//Clean form of validation error classes
		this.clean();
	}

	clean() {
		let els = document.querySelectorAll('.validation-error');
		if (els.length > 0) {
			els.forEach(function(el){
				el.classList.remove('validation-error');
			});
		}
	}

	messages() {
		return [
			['required', 'The :col column is required'],
			['min', 'The :col column should be atleast :char characters long'],
			['url', 'The :col column needs to be a valid url'],
			['max', 'The :col column should be at maximum :char characters long'],
		];
	}
	// loop through the form and get all fields to validate
	run() {
		let elements = this.formEl.querySelectorAll('[data-validate]');
		elements.forEach(element => {
			let user_rules = element.getAttributeNode('data-validate').value;
			// we have the rules now for the element
			let rules = user_rules.split('|');
			rules.forEach(rule => {
				let rule_result = false;
				let split = false;
				let element_name = element.getAttribute('name').replace(/[\[\]']+/g,'');
				if (rule.indexOf(":") === -1) {
					rule_result = this.go(element, rule);
				} else {
					split = rule.split(":");
					rule_result = this.go(element, split[0], split[1]);
				}

				if (rule_result === false) {
					let msg = this.messages.filter(function(message) {
						if (!Array.isArray(split)) {
							return message[0] === rule;
						} else {
							return split[0] === message[0];
						}
					}).map(function(message) {
						if (!Array.isArray(split)) {
							return message[1].replace(':col', element_name);
						} else {
							return message[1].replace(/:col|:char/gi, function(str) {
								if (str === ':col') {
									return element_name;
								}
								return split[1];
							});
						}
					});

					this.errors.push({element: element_name, message:msg[0]});
				}
			});	
		});

		if (this.errors.length === 0) {
			if (this.sub === true) {
				this.submit();
			}
			return true;
		} else {
			if (this.sub === true) {
				this.populate_errors();
			}
			return false;
		}
	}

	go(el, fn, fp) {
		if (typeof this[fn] === "function") {
			if (typeof fp !== "undefined") {
				return this[fn](el, fp);
			} else {
				return this[fn](el);
			}
		}
	}

	get_errors() {
		return this.errors;
	}

	populate_errors() {
		this.errors.forEach(function(error){
			//Below line only works with document
			let el = document.getElementsByName(error.element)[0];
			el.className += ' validation-error';
		});
	}

	required(el) {
		return el.value.trim().length > 0;
	}

	min(el,val) {
		return el.value.trim().length >= val;
	}

	max(el,val) {
		return el.value.trim().length <= val;
	}

	url(el) {
		// https://stackoverflow.com/questions/3809401/what-is-a-good-regular-expression-to-match-a-url
		let expression = /https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,4}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
		let regex = new RegExp(expression);
		if(el.value.match(expression)) {
			return true;
		}
		return false;
	}

	submit() {
		this.formEl.submit();
	}
}

export default Validation;
'use strict';

(function () {
  // Init custom option check
  window.Helpers.initCustomOptionCheck();

  // Bootstrap validation example
  //------------------------------------------------------------------------------------------
  // const flatPickrEL = $('.flatpickr-validation');
  const flatPickrList = [].slice.call(document.querySelectorAll('.flatpickr-validation'));
  // Flat pickr
  if (flatPickrList) {
    flatPickrList.forEach(flatPickr => {
      flatPickr.flatpickr({
        allowInput: true,
        monthSelectorType: 'static'
      });
    });
  }

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const bsValidationForms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(bsValidationForms).forEach(function (form) {
    form.addEventListener(
      'submit',
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          // Submit your form
          alert('Submitted!!!');
        }

        form.classList.add('was-validated');
      },
      false
    );
  });
})();
/**
 * Form Validation (https://formvalidation.io/guide/examples)
 * ? Primary form validation plugin for this template
 * ? In this example we've try to covered as many form inputs as we can.
 * ? Though If we've miss any 3rd party libraries, then refer: https://formvalidation.io/guide/examples/integrating-with-3rd-party-libraries
 */
//------------------------------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    const formValidationExamples = document.getElementById('wizard-checkout-form'),
      formValidationSelect2Ele = jQuery(formValidationExamples.querySelector('[name="formValidationSelect2"]')),
      formValidationTechEle = jQuery(formValidationExamples.querySelector('[name="formValidationTech"]')),
      formValidationLangEle = formValidationExamples.querySelector('[name="formValidationLang"]'),
      formValidationNivEle = formValidationExamples.querySelector('[name="formValidationNiv"]'),
      formValidationHobbiesEle = jQuery(formValidationExamples.querySelector('.selectpicker')),
      tech = [
        'ReactJS',
        'Angular',
        'VueJS',
        'Html',
        'Css',
        'Sass',
        'Pug',
        'Gulp',
        'Php',
        'Laravel',
        'Python',
        'Bootstrap',
        'Material Design',
        'NodeJS'
      ];

    const fv = FormValidation.formValidation(formValidationExamples, {
      fields: {
        Nom: {
          validators: {
            notEmpty: {
              message: 'Veuillez saisir le nom/prénom'
            },
            stringLength: {
              min: 2,
              max: 20,
              message: 'Le Nom doit comporter plus de 2 et moins de 20 caractères'
            },
            regexp: {
              regexp: /^[a-zA-Z]+$/,
              message: 'Le nom ne peut être composé que de lettres alphabétiques'
            }
          }
        },
        Prenom: {
          validators: {
            notEmpty: {
              message: 'Veuillez saisir le prénom'
            },
            stringLength: {
              min: 2,
              max: 20,
              message: 'Le Prenom doit comporter plus de 2 et moins de 20 caractères'
            },
            regexp: {
              regexp: /^[a-zA-Z]+$/,
              message: 'Le Prenom ne peut être composé que de lettres alphabétiques'
            }
          }
        },
        CIN: {
          validators: {
            notEmpty: {
              message: 'Veuillez saisir le CIN'
            },
            stringLength: {
              min: 5,
              max: 10,
              message: 'Le CIN doit comporter 5 caractères minimum'
            },
            regexp: {
              regexp: /^[a-zA-Z0-9]+$/,
              message: 'Le CIN ne peut être composé que de chiffres et lettres alphabétiques'
            }
          }
        },

        Email: {
          validators: {
            notEmpty: {
              message: "Veuillez saisir l'email"
            },
            emailAddress: {
              message: "La valeur n'est pas une adresse e-mail valide"
            }
          }
        },

        LieuNaissance: {
          validators: {
            notEmpty: {
              message: "Veuillez saisir le lieu de naissance"
            }
          }
        },

        NombreEnfants: {
          validators: {
            notEmpty: {
              message: "Veuillez saisir le Nombre d'enfants"
            },
            regexp: {
              regexp: /^[0-9]+$/,
              message: 'Le Nombre d\'enfants ne peut être composé que de chiffres'
            }
          }
        },

        Nationalite: {
          validators: {
            notEmpty: {
              message: "Veuillez saisir la nationalité"
            }
          }
        },

        Adresse_1: {
          validators: {
            notEmpty: {
              message: "Veuillez saisir l'adresse"
            }
          }
        },

        Code_Postal: {
          validators: {
            notEmpty: {
              message: "Veuillez saisir le code postal"
            },
            regexp: {
              regexp: /^[0-9]+$/,
              message: 'Le code postal ne peut être composé que de chiffres'
            }
          }
        },

        TelephoneFixe: {
          validators: {
            notEmpty: {
              message: "Veuillez saisir le numéro de téléphone fixe"
            },
            stringLength: {
              max: 10,
              message: 'Le CIN doit comporter 10 caractères maximum'
            },
            regexp: {
              regexp: /^[0-9 ]+$/,
              message: 'Le numéro de téléphone fixe ne peut être composé que de chiffres'
            }
          }
        },

        TelephonePortable: {
          validators: {
            notEmpty: {
              message: "Veuillez saisir le numéro de téléphone mobile"
            },
            stringLength: {
              max: 10,
              message: 'Le CIN doit comporter 10 caractères maximum'
            },
            regexp: {
              regexp: /^[0-9 ]+$/,
              message: 'Le numéro de téléphone mobile ne peut être composé que de chiffres'
            }
          }
        },

        NumeroCNSS: {
          validators: {
            notEmpty: {
              message: "Veuillez saisir le numéro de CNSS"
            },
            regexp: {
              regexp: /^[0-9]+$/,
              message: 'Le numéro de CNSS ne peut être composé que de chiffres'
            }
          }
        },

        ContratTravailNumero : {
          validators: {
            notEmpty: {
              message: "Veuillez saisir le contrat de travail numéro"
            },
            regexp: {
              regexp: /^[0-9]+$/,
              message: 'Le numéro de contrat de travail ne peut être composé que de chiffres'
            }
          }
        },

        ao_name : {
          validators: {
            notEmpty: {
              message: "Veuillez saisir le nom de l'appel d'offer"
            },
            stringLength: {
              min: 4,
              message: 'Le Nom doit comporter plus de 4 caractères'
            }
          }
        },

        marche_nbr : {
          validators: {
            notEmpty: {
              message: "Veuillez saisir le numéro de marché"
            },
            regexp: {
              regexp: /^[0-9/]+$/,
              message: 'Le numéro de CNSS ne peut être composé que de chiffres'
            }
          }
        }



        
      
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: function (field, ele) {
            // field is the field name & ele is the field element
            switch (field) {
              case 'Nom':
              case 'Prenom':
              case 'CIN':
              case 'Email':
              case 'Adresse_1':
              case 'Code_Postal':
              case 'TelephoneFixe':
              case 'TelephonePortable':
              case 'NumeroCNSS':
              case 'ContratTravailNumero':                
                return '.col-md-6';
              case 'formValidationPlan':
                return '.col-xl-3';
              case 'formValidationSwitch':
              case 'formValidationCheckbox':
                return '.col-12';
              default:
                return '.row';
            }
          }
        }),
        submitButton: new FormValidation.plugins.SubmitButton(),
        // Submit the form when all fields are valid
        // defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
        autoFocus: new FormValidation.plugins.AutoFocus()
      },
      onValidate: function (isValid) {
        if (!isValid) {
          alert('Please correct the errors before submitting the form.');
        }
      },
      init: instance => {
        instance.on('plugins.message.placed', function (e) {
          //* Move the error message out of the `input-group` element
          if (e.element.parentElement.classList.contains('input-group')) {
            // `e.field`: The field name
            // `e.messageElement`: The message element
            // `e.element`: The field element
            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
          }
          //* Move the error message out of the `row` element for custom-options
          if (e.element.parentElement.parentElement.classList.contains('custom-option')) {
            e.element.closest('.row').insertAdjacentElement('afterend', e.messageElement);
          }
        });
      }
    });

    //? Revalidation third-party libs inputs on change trigger

    // Flatpickr
    flatpickr(formValidationExamples.querySelector('[name="formValidationDob"]'), {
      enableTime: false,
      // See https://flatpickr.js.org/formatting/
      dateFormat: 'Y/m/d',
      // After selecting a date, we need to revalidate the field
      onChange: function () {
        fv.revalidateField('formValidationDob');
      }
    });

    // Select2 (Country)
    if (formValidationSelect2Ele.length) {
      formValidationSelect2Ele.wrap('<div class="position-relative"></div>');
      formValidationSelect2Ele
        .select2({
          placeholder: 'Select country',
          dropdownParent: formValidationSelect2Ele.parent()
        })
        .on('change.select2', function () {
          // Revalidate the color field when an option is chosen
          fv.revalidateField('formValidationSelect2');
        });
    }

    // Typeahead

    // String Matcher function for typeahead
    const substringMatcher = function (strs) {
      return function findMatches(q, cb) {
        var matches, substrRegex;
        matches = [];
        substrRegex = new RegExp(q, 'i');
        $.each(strs, function (i, str) {
          if (substrRegex.test(str)) {
            matches.push(str);
          }
        });

        cb(matches);
      };
    };

    // Check if rtl
    if (isRtl) {
      const typeaheadList = [].slice.call(document.querySelectorAll('.typeahead'));

      // Flat pickr
      if (typeaheadList) {
        typeaheadList.forEach(typeahead => {
          typeahead.setAttribute('dir', 'rtl');
        });
      }
    }
    formValidationTechEle.typeahead(
      {
        hint: !isRtl,
        highlight: true,
        minLength: 1
      },
      {
        name: 'tech',
        source: substringMatcher(tech)
      }
    );

    // Tagify
    let formValidationLangTagify = new Tagify(formValidationLangEle);
    formValidationLangEle.addEventListener('change', onChange);
    function onChange() {
      fv.revalidateField('formValidationLang');
      console.log("test")
    }

    let formValidationNivTagify = new Tagify(formValidationNivEle);
    formValidationNivEle.addEventListener('change', onChange);
    function onChange() {
      fv.revalidateField('formValidationNiv');
    }

    //Bootstrap select
    formValidationHobbiesEle.on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
      fv.revalidateField('formValidationHobbies');
    });
  })();
});

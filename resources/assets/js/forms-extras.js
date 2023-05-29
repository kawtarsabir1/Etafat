/**
 * Form Extras
 */

'use strict';

(function () {
  const textarea = document.querySelector('#autosize-demo'),
    creditCard = document.querySelector('.credit-card-mask'),
    phoneMask = document.querySelector('.phone-number-mask'),
    dateMask = document.querySelector('.date-mask'),
    timeMask = document.querySelector('.time-mask'),
    numeralMask = document.querySelector('.numeral-mask'),
    blockMask = document.querySelector('.block-mask'),
    delimiterMask = document.querySelector('.delimiter-mask'),
    customDelimiter = document.querySelector('.custom-delimiter-mask'),
    prefixMask = document.querySelector('.prefix-mask');

  // Autosize
  // --------------------------------------------------------------------
  if (textarea) {
    autosize(textarea);
  }

  // Cleave JS Input Mask
  // --------------------------------------------------------------------

  // Credit Card
  if (creditCard) {
    new Cleave(creditCard, {
      creditCard: true,
      onCreditCardTypeChanged: function (type) {
        if (type != '' && type != 'unknown') {
          document.querySelector('.card-type').innerHTML =
            '<img src="' + assetsPath + 'img/icons/payments/' + type + '-cc.png" height="28"/>';
        } else {
          document.querySelector('.card-type').innerHTML = '';
        }
      }
    });
  }

  // Phone Number
  if (phoneMask) {
    new Cleave(phoneMask, {
      phone: true,
      phoneRegionCode: 'US'
    });
  }

  // Date
  if (dateMask) {
    new Cleave(dateMask, {
      date: true,
      delimiter: '-',
      datePattern: ['Y', 'm', 'd']
    });
  }

  // Time
  if (timeMask) {
    new Cleave(timeMask, {
      time: true,
      timePattern: ['h', 'm', 's']
    });
  }

  //Numeral
  if (numeralMask) {
    new Cleave(numeralMask, {
      numeral: true,
      numeralThousandsGroupStyle: 'thousand'
    });
  }

  //Block
  if (blockMask) {
    new Cleave(blockMask, {
      blocks: [4, 3, 3],
      uppercase: true
    });
  }

  // Delimiter
  if (delimiterMask) {
    new Cleave(delimiterMask, {
      delimiter: '·',
      blocks: [3, 3, 3],
      uppercase: true
    });
  }

  // Custom Delimiter
  if (customDelimiter) {
    new Cleave(customDelimiter, {
      delimiters: ['.', '.', '-'],
      blocks: [3, 3, 3, 2],
      uppercase: true
    });
  }

  // Prefix
  if (prefixMask) {
    new Cleave(prefixMask, {
      prefix: '+63',
      blocks: [3, 3, 3, 4],
      uppercase: true
    });
  }
})();

// bootstrap-maxlength & repeater (jquery)
// $(function () {
//   var maxlengthInput = $('.bootstrap-maxlength-example'),
//     formRepeater = $('.form-repeater');

//   // Bootstrap Max Length
//   // --------------------------------------------------------------------
//   if (maxlengthInput.length) {
//     maxlengthInput.each(function () {
//       $(this).maxlength({
//         warningClass: 'label label-success bg-success text-white',
//         limitReachedClass: 'label label-danger',
//         separator: ' out of ',
//         preText: 'You typed ',
//         postText: ' chars available.',
//         validate: true,
//         threshold: +this.getAttribute('maxlength')
//       });
//     });
//   }

//   // Form Repeater
//   // ! Using jQuery each loop to add dynamic id and class for inputs. You may need to improve it based on form fields.
//   // -----------------------------------------------------------------------------------------------------------------

//   if (formRepeater.length) {
//     var row = 2;
//     var col = 1;
//     formRepeater.on('submit', function (e) {
//       e.preventDefault();
//     });
//     formRepeater.repeater({
//       show: function () {
//         var fromControl = $(this).find('.form-control, .form-select');
//         var formLabel = $(this).find('.form-label');

//         fromControl.each(function (i) {
//           var id = 'form-repeater-' + row + '-' + col;
//           $(fromControl[i]).attr('id', id);
//           $(formLabel[i]).attr('for', id);
//           col++;
//         });

//         row++;

//         $(this).slideDown();
//       },
//       hide: function (e) {
//         confirm('Are you sure you want to delete this element?') && $(this).slideUp(e);
//       }
//     });
//   }
// });

$(function () {
  var contentWrapper = $('.content-wrapper-language'),
    content = $('.content-language'),
    btnAdd = $('.btn-add-language'),
    btnRemove = $('.btn-remove');

  // Add new language
  btnAdd.click(function () {
    var clone = content.clone();
    clone.find('input').val('');
    clone.find('select').prop('selectedIndex', 0);
    clone.find('input').each(function () {
      var name = $(this).attr('name');
      var index = $('.content-language').length;
      $(this).attr('name', name + index);
    });
    clone.find('select').each(function () {
      var name = $(this).attr('name');
      var index = $('.content-language').length;
      $(this).attr('name', name + index);
    });
    clone.appendTo(contentWrapper);
  });

  // Remove language
  contentWrapper.on('click', '.btn-remove', function () {
    $(this).closest('.content-language').remove();
  });
});

$(function () {
  var btnSave = $('.btn-save'),
    contentCursus = $('.content-cursus-map'),
    formationsArray = JSON.parse(localStorage.getItem('formationsArray')) || [];
  if (formationsArray) {
    localStorage.removeItem('formationsArray');
  }

  // Add new cursus
  btnSave.click(async function () {
    let diplome = $('#diplome').prop('files')[0];
    let intitule = $('#intitule').val();
    let etablissement = $('#etablissement').val();
    let obtention = $('#obtention').val();
    let extentionDiplome = $('#diplome').val().split('.').pop().toLowerCase();

    if (diplome != null) {
      let reader = new FileReader();
      reader.readAsDataURL(diplome);
      await new Promise(resolve => reader.onload = resolve);
      var base64String = reader.result.split(',')[1];
    }

    if (!intitule || !etablissement || !obtention) {
      alert('Veuillez remplir tous les champs');
      return;
    }

    let formation = {
      diplome: base64String,
      intitule: intitule,
      etablissement: etablissement,
      obtention: obtention,
      extention: extentionDiplome
    };
    formationsArray.push(formation);
    localStorage.setItem('formationsArray', JSON.stringify(formationsArray));

    //add card to contentCursus
    let card = `
    <div class="col-lg-6 col-xl-4 mb-3 content-one-cursus">
        <div class="card card-action mb-4">
            <div class="card-alert"></div>
            <div class="card-header">
                <div class="card-action-title">Cursus ${formationsArray.length}</div>
                <div class="card-action-element">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" id="cursus-${formationsArray.length}" class="card-close"><i class="tf-icons ti ti-x ti-sm"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text niveau_etude-cursus">${formation.intitule}</p>
                <p class="card-text">Niveau d’études : ${formation.etablissement}</p>
                <p class="card-text">Date from ${formation.obtention} </p>
            </div>
        </div>  
    </div>
    `;
    contentCursus.append(card);

    diplome = $('#diplome').val('');
    intitule = $('#intitule').val('');
    etablissement = $('#etablissement').val('');
    obtention = $('#obtention').val('');

  });

  contentCursus.on('click', '.card-close', function () {
    let id = $(this).attr('id');
    let index = id.split('-')[1];
    let formationsArray = JSON.parse(localStorage.getItem('formationsArray'));
    formationsArray.splice(index - 1, 1);
    localStorage.setItem('formationsArray', JSON.stringify(formationsArray));
    $(this).closest('.content-one-cursus').remove();
    let cursus = $('.content-one-cursus');
    cursus.each(function (index) {
      $(this).find('.card-action-title').text(`Cursus ${index + 1}`);
      $(this).find('.card-close').attr('id', `cursus-${index + 1}`);
    }
    );
  });
});

$(function () {
  var btnSave = $('.btn-save-ref'),
    contentRefs = $('.content-refs'),
    refsArray = JSON.parse(localStorage.getItem('refsArray')) || [];
  if (refsArray) {
    localStorage.removeItem('refsArray');
  }

  // Add new cursus
  btnSave.click(async function () {
    let employeur = $('#ref-employeur').val();
    let poste = $('#ref-poste').val();
    let range = $('#ref-range').val();
    let taches = $('#ref-taches').val();

    if (!employeur || !poste || !range || !taches) {
      alert('Veuillez remplir tous les champs');
      return;
    }

    let ref = {
      employeur: employeur,
      poste: poste,
      range: range,
      taches: taches.split(',')
    };
    let refsArray = JSON.parse(localStorage.getItem('refsArray')) || [];
    refsArray.push(ref);
    localStorage.setItem('refsArray', JSON.stringify(refsArray));

    //add card to contentCursus
    let card = `
    <div class="col-lg-6 col-xl-4 mb-3 content-one-ref">
        <div class="card card-action mb-4">
            <div class="card-alert"></div>
            <div class="card-header">
                <div class="card-action-title">Reference n°${refsArray.length}</div>
                <div class="card-action-element">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" id="ref-${refsArray.length}" class="card-close"><i class="tf-icons ti ti-x ti-sm"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text niveau_etude-cursus"><span class="card-title">Employeur : </span>${ref.employeur}</p>
                <p class="card-text"><span class="card-title">Poste : </span>${ref.poste}</p>
                <p class="card-text">Date from ${ref.range} </p>
                <span class="card-title">Taches : </span>
                <ul class="list-group list-group-flush">
                  ${ref.taches.map(tache => `<li class="list-group-item">${tache}</li>`).join('')}
                </ul>
            </div>
        </div>  
    </div>
    `;
    contentRefs.append(card);

    $('#employeur').val('');
    $('#poste').val('');
    $('#range').val('');
    $('#taches').val('');

  });

  contentRefs.on('click', '.card-close', function () {
    let id = $(this).attr('id');
    let index = id.split('-')[1];
    let refsArray = JSON.parse(localStorage.getItem('refsArray'));
    refsArray.splice(index - 1, 1);
    localStorage.setItem('refsArray', JSON.stringify(refsArray));
    $(this).closest('.content-one-ref').remove();
    let cursus = $('.content-one-ref');
    cursus.each(function (index) {
      $(this).find('.card-action-title').text(`Reference n°${index + 1}`);
      $(this).find('.card-close').attr('id', `ref-${index + 1}`);
    }
    );
  });
});




//start projects section
$(function () {
  var btnSave = $('.btn-save-projet'),
    contentprojets = $('.content-projets'),
    contentprojetsMap = $('.content-projets-map'),
    projetsArray = JSON.parse(localStorage.getItem('projetsArray')) || [];
  if (projetsArray) {
    localStorage.removeItem('projetsArray');
  }

  // Add new cursus
  btnSave.click(async function () {
    let idRef = $('.projet-idRef option:selected').val();
    let poste = $('.projet-poste option:selected').val();
    let missions = $('#projet-missions').val();
    let desc = $('#projet-desc').val();

    if (idRef=="") {
      alert('Veuillez remplir Reference');
      return;
    }else if(poste==""){
      alert('Veuillez remplir Poste');
      return;
    }else if(missions==""){
      alert('Veuillez remplir Missions');
      return;
    }else if(desc==""){
      alert('Veuillez remplir Description');
      return;
    }

    //check if the idRef is already used
    let projetsArray = JSON.parse(localStorage.getItem('projetsArray')) || [];
    let isUsed = projetsArray.find(projet => projet.idRef == idRef.split('-')[0]);
    if (isUsed) {
      alert('Reference deja utilisé');
      return;
    }

    let projet = {
      idRef: idRef.split('-')[0],
      poste: poste,
      ref: idRef.split('-')[1],
      missions: missions.split(','),
      desc: desc
    };
    projetsArray.push(projet);
    localStorage.setItem('projetsArray', JSON.stringify(projetsArray));

    //add card to contentCursus
    let card = `
    <div class="col-lg-6 col-xl-4 mb-3 content-one-projet">
        <div class="card card-action mb-4">
            <div class="card-alert"></div>
            <div class="card-header">
                <div class="card-action-title">Projet n°${projetsArray.length}</div>
                <div class="card-action-element">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" id="projet-${projetsArray.length}" class="card-close"><i class="tf-icons ti ti-x ti-sm"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text niveau_etude-cursus"><span class="card-title">Reference : </span>${projet.ref}</p>
                <p class="card-text"><span class="card-title">Poste : </span>${projet.poste}</p>
                <p class="card-text"><span class="card-title">Missions :</p>
                <ul class="list-group list-group-flush">
                  ${projet.missions.map(mission => `<li class="list-group-item">${mission}</li>`).join('')}
                </ul>
            </div>
        </div>  
    </div>
    `;
    contentprojetsMap.append(card);

    $('#projet-missions').val('');
    $('#projet-desc').val('');
  });

  contentprojets.on('click', '.card-close', function () {
    let id = $(this).attr('id');
    let index = id.split('-')[1];
    let projetsArray = JSON.parse(localStorage.getItem('projetsArray'));
    projetsArray.splice(index - 1, 1);
    localStorage.setItem('projetsArray', JSON.stringify(projetsArray));
    $(this).closest('.content-one-projet').remove();
    let cursus = $('.content-one-projet');
    cursus.each(function (index) {
      $(this).find('.card-action-title').text(`Projet n°${index + 1}`);
      $(this).find('.card-close').attr('id', `projet-${index + 1}`);
    }
    );
  });
});
//end projects section




$(function () {
  var contentWrapper = $('.content-wrapper-cvs'),
    content = $('#modal-add-cv'),
    btnAdd = $('.btn-add-cv'),
    btnRemove = $('.btn-remove');

  //check if cvsArray exist in localstorage
  var cvsArray = JSON.parse(localStorage.getItem('cvsArray'));
  if (cvsArray) {
    localStorage.removeItem('cvsArray');
  }

  //check if cardsCvs exist in localstorage
  var cardsCvs = JSON.parse(localStorage.getItem('cardsCvs'));
  if (cardsCvs) {
    localStorage.removeItem('cardsCvs');
  }


  $.ajax({
    url: '/cv/gestion/allEmployees',
    type: 'GET',
    success: function (data) {
      let employees = data.data;
      console.log(employees)
      employees.forEach(employee => {
        let option = `<option value="${employee.id}">${employee.Nom} ${employee.Prenom}</option>`;
        $('#employees').append(option);
      });
    }
  });

  //onhover on .card element in document
  $(document).on('mouseenter', '.card', function () {
    $(this).find('.card-overlay').css('display', 'block');
  });
  $(document).on('mouseleave', '.card', function () {
    $(this).find('.card-overlay').css('display', 'none');
  });





  // Add new cvs
  btnAdd.click(function () {

    var cvsArray = JSON.parse(localStorage.getItem('cvsArray')) || [],
      exist = false,
      employee = content.find('#employees').val(),
      role = content.find('#roles').val();

    if (employee == '' || role == '') {
      alert('please select employee and role');
      return;
    } else {
      if (cvsArray.length == 0) {
        let cvs = {
          employee: employee,
          role: role
        };
        cvsArray.push(cvs);
        localStorage.setItem('cvsArray', JSON.stringify(cvsArray));
      } else {
        cvsArray.forEach(cvs => {
          if (cvs.employee == employee) {
            exist = true;
          }
        });
        if (!exist) {
          let cvs = {
            employee: employee,
            role: role
          };
          cvsArray.push(cvs);
          localStorage.setItem('cvsArray', JSON.stringify(cvsArray));
        }
      }
    }
    if (exist) {
      alert('cvs exist');
      return;
    }
    if (cvsArray.length != 0) {
      //dispaly none .no-data element
      $('.no-data').css('display', 'none');
    }
    ListeCvs();
    //if cvsArray is empty
  });

  // Remove cvs
  contentWrapper.on('click', '.btn-remove', function () {
    //get cvsArray from localstorage
    let cvsArray = JSON.parse(localStorage.getItem('cvsArray'));
    //get this content-cvs parent
    let content = $(this).closest('.content-cvs');
    //get value of employee and role
    let employee = content.find('#employees').val();
    let role = content.find('#roles').val();
    //search in cvsArray
    //get index of content-cvs
    let index = $('.content-cvs').index(content);
    //get number of content-cvs in contentWrapper
    let number = $('.content-cvs').length;
    if (number != index + 1) {
      cvsArray.forEach(cvs => {
        if (cvs.employee == employee) {
          //remove cvs from cvsArray
          cvsArray.splice(cvsArray.indexOf(cvs), 1);
          //save cvsArray to localstorage
          localStorage.setItem('cvsArray', JSON.stringify(cvsArray));
        }
      });
    }
    //remove content-cvs
    $(this).closest('.content-cvs').remove();
    //if cvsArray is empty
    if (cvsArray.length == 0) {
      //dispaly block .no-data element
      $('.no-data').css('display', 'block');
    }
    
  });
});


function ListeCvs() {
  //get content-list-cvs element
  let contentListCvs = $('#content-list-cvs');
  //get cvsArray from localstorage
  let cvsArray = JSON.parse(localStorage.getItem('cvsArray'));
  //get cardsCvs from localstorage
  let cardsCvs = JSON.parse(localStorage.getItem('cardsCvs')) || [];

  //get the last cv in cardsCvs
  let lastCv = cvsArray[cvsArray.length - 1];
  var backgrounds = [
    'bg-primary',
    'bg-success',
    'bg-danger',
    'bg-secondary',
    'bg-warning',
    'bg-info',
    'bg-dark'
  ];


  //get employee from database  
  $.ajax({
    url: `/cv/generate/employee/${lastCv.employee}`,
    type: 'GET',
    success: function (data) {
      data.role = lastCv.role;
      cardsCvs.push(data);
      let index = cardsCvs.indexOf(data);

      localStorage.setItem('cardsCvs', JSON.stringify(cardsCvs));
      let card = `<div class="col-lg-4 col-md-6 mb-4" id="cv-card-${index}">
                    <div class="card rounded shadow-sm border-0 cursor-pointer">
                        <div class="card-body p-0">
                            <div class="card-overlay" style="display:none;z-index: 1;">
                              <div class="bg-dark p-2 text-dark position-absolute w-100 h-100 rounded" style="opacity: 0.3;">
                              </div>
                                <a onclick="removeCv(${index})" class="btn btn-danger btn-sm text-white" style="position: absolute; bottom: 10px; right: 10px;opacity: 1;">Remove</a>
                                <a onclick="editCv(${index})" class="btn btn-primary btn-sm text-white" style="position: absolute; bottom: 10px; left: 10px;opacity: 1;">Personnaliser</a>
                            </div>
                            
                            <div class="${backgrounds[index % backgrounds.length]} px-5 py-4 text-center card-img-top"><img src="/storage/photos/${data.photo}" alt="..." width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                <h5 class="text-white mb-0">${data.nom} ${data.prenom}</h5>
                                <p class="small text-white mb-0">${data.role}</p>
                            </div>
                            <div class="p-4 d-flex justify-content-center">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <h6 class="font-weight-bold mb-0 d-block">Poste</h6><small class="text-muted"><i class="fa fa-picture-o mr-1 text-info"></i>${data.Poste}</small>
                                    </li>
                                    <li class="list-inline-item">
                                        <h6 class="font-weight-bold mb-0 d-block">Departement</h6><small class="text-muted"><i class="fa fa-user-circle-o mr-1 text-info"></i>${data.DepartementAffectation}</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>`;
      contentListCvs.append(card);
    }
  });

  //append cardsCvs to contentListCvs


}

function generateCvs() {
  //post request to generate cvs
  $.ajax({
    url: '/cv/generateCvs',
    type: 'POST',
    data: {
      "ao_name": "AO2023A4",
      "ao_type": "topographie",
      "num_marche": "112023",
      "cvs": [
        {
          "nom": "Ayoub",
          "prenom": "Basidi",
          "email": "ayoub@gmail.com",
          "phone": "0612345678",
          "nationalite": "Marocaine",
          "date_naissance": "1998-01-01",
          "poste": "Developpeur"
        },
        {
          "nom": "Jhon",
          "prenom": "Doe",
          "email": "jhondoe@gmail.com",
          "phone": "0612345608",
          "nationalite": "Marocaine",
          "date_naissance": "1998-01-01",
          "poste": "Responsable RH"
        }
      ],
      "model": "model1.docx"
    }
  }).done(function (data) {
    console.log(data);
  });
}

function editCv(index) {
  let cardsCvs = JSON.parse(localStorage.getItem('cardsCvs'));
  let cv = cardsCvs[index];
  localStorage.removeItem('formationsArray');
  
  //Set Languages
  let modal = $('#editUser');
  modal.find('#id').val(cv.id);
  let languageElem = modal.find('.content-language-custumize');

  let Langues = cv.langue.split(',');
  let Niveaux = cv.niveauLangue.split(',');
  for (let i = 0; i < Langues.length; i++) {
    var clone = languageElem.find('.row:first').clone();
    let inputLanguage = clone.find('#language-input');
    let inputNiveau = clone.find('#level-select');
    inputLanguage.val(Langues[i]);
    let name = inputLanguage.attr('name');
    inputLanguage.attr('name', name + (i + 1));
    inputNiveau.find(`option[value="${Niveaux[i]}"]`).attr('selected', true);
    name = inputNiveau.attr('name');
    inputNiveau.attr('name', name + (i + 1));
    languageElem.append(clone);
  }
  languageElem.find('.language-elem').first().remove();
  $('#editUser').modal('show');

  //Set Formations
  var contentCursus = $('.content-cursus-custumize'),
  formations = cv.formations;
  localStorage.setItem('formationsArray', JSON.stringify(formations));
  for (let i = 0; i < formations.length; i++) {
    let card = `
          <div class="col-lg-6 col-xl-4 mb-3 content-one-cursus">
              <div class="card card-action mb-4">
                  <div class="card-alert"></div>
                  <div class="card-header">
                      <div class="card-action-title">Formation n°${i + 1}</div>
                      <div class="card-action-element">
                          <ul class="list-inline mb-0">
                              <li class="list-inline-item">
                                  <a href="javascript:void(0);" id="cursus-${i + 1}" class="card-close"><i class="tf-icons ti ti-x ti-sm"></i></a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-body">
                      <p class="card-text niveau_etude-cursus">Intitulé : ${formations[i].intitule}</p>
                      <p class="card-text">Etablisement : ${formations[i].etablissement}</p>
                      <p class="card-text">Date d'obtention : ${formations[i].obtention}</p>
                  </div>
              </div>
          </div>`;
    contentCursus.append(card);
  }

  //Set Experiences
  var contentExperiences = $('.content-experiences-custumize'),
  experiences = cv.experiences;
  localStorage.setItem('experiencesArray', JSON.stringify(experiences));
  for (let i = 0; i < experiences.length; i++) {
    var taches = experiences[i].taches;
    let card = `
        <div class="col-lg-6 col-xl-4 mb-3 content-one-experience">
        <div class="card card-action mb-4">
            <div class="card-alert"></div>
            <div class="card-header">
                <div class="card-action-title">Experience n°${i+1}</div>
                <div class="card-action-element">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" id="experience-${experiences[i].id}" class="card-close"><i class="tf-icons ti ti-x ti-sm"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text"><span class="card-title">Employeur : </span>${experiences[i].employeur}</p>
                <p class="card-text"><span class="card-title">Poste : </span>${experiences[i].poste}</p>
                <p class="card-text">Date De ${experiences[i].dateDebut} Au ${experiences[i].dateFin} </p>
            </div>
        </div>  
    </div>`;
    contentExperiences.append(card);
  }


  //set Refs
  var contentRefs = $('.content-custumize-refs');
  let refs = cv.refs;
  localStorage.setItem('refsArray', JSON.stringify(refs));
  for (let i = 0; i < refs.length; i++) {
    let ref = refs[i];

    if(ref.missions == null || ref.missions == ''){
      var missions = [];
    }else{
      var missions = ref.missions.split(',');
    }
    

    if(ref.missionsParticipe == null || ref.missionsParticipe == ''){
      var missionsParticipe = [];
    }else{
      var missionsParticipe = ref.missionsParticipe.split(',');
    }
    

    let checkbox = `
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input check" id="ref-${ref.id}" name="ref${i}" value="${ref.id}">
          ${ref.client} (${ref.category}) - ${ref.annee}
          ${missions.map(mission => `
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input sous-check" id="mission-${ref.id}" value="${mission}" name="ref${i}">
                ${mission}
              </label>
            </div>
          `).join('')}
          ${missionsParticipe.map(mission => `
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input sous-check" id="mission-${ref.id}" value="${mission}" name="ref${i}" checked>
                ${mission}
              </label>
            </div>
          `).join('')}
        </label>
      </div>
    `;
    contentRefs.append(checkbox);
  }

  

}

$(function () {
  var contentRefs = $('.content-custumize-refs');

  contentRefs.on('change', '.sous-check', function () {
    let id = $(this).attr('id');
    let refId = id.split('-')[1];
    let ref = $(`#ref-${refId}`);
    let missions = $(`#ref-${refId}`).parent().find('.sous-check');
    let missionsChecked = missions.filter(':checked');
    if (missions.length == missionsChecked.length) {
      ref.prop('checked', true);
    } else {
      ref.prop('checked', false);
    }
  });

  contentRefs.on('change', '.check', function () {
    let id = $(this).attr('id');
    let refId = id.split('-')[1];
    let missions = $(`#ref-${refId}`).parent().find('.sous-check');
    if ($(this).is(':checked')) {
      missions.prop('checked', true);
    }
    else {
      missions.prop('checked', false);
    }

  });

});

function removeCv(index){
  //remove cv from local storage
  let cardCvs = JSON.parse(localStorage.getItem('cardsCvs'));
  let cvs = JSON.parse(localStorage.getItem('cvsArray'));

  cardCvs.splice(index, 1);
  cvs.splice(index, 1);

  localStorage.setItem('cardsCvs', JSON.stringify(cardCvs));
  localStorage.setItem('cvsArray', JSON.stringify(cvs));

  let content = $('#cv-card-' + index);
  content.remove();

  if (cvs.length == 0) {
    $('.no-data').css('display', 'block');
  }
}

$(function () {
  var contentWrapper = $('.content-language-custumize'),
    content = $('.content-language-custumize'),
    btnAdd = $('.btn-custumize-language'),
    count = $('.content-language-custumize').length;

  btnAdd.click(function () {
    count++
    var clone = content.find('.row:first').clone();
    clone.find('input').val('');
    clone.find('select').prop('selectedIndex', 0);
    clone.find('input').each(function () {
      var name = $(this).attr('name');
      var index = parseInt(name.slice(-1)) + count + 1;
      name = name.slice(0, -1);
      $(this).attr('name', name + index);
    });
    clone.find('select').each(function () {
      var name = $(this).attr('name');
      var index = parseInt(name.slice(-1)) + count + 1;
      name = name.slice(0, -1);
      $(this).attr('name', name + index);
    });
    clone.appendTo(contentWrapper);
  });

  // Remove language
  contentWrapper.on('click', '.btn-remove', function () {
    $(this).closest('.language-elem').remove();
  });
});

$(function () {
  //get div content-cursus-custumize
  var contentCursus = $('.content-cursus-custumize'),
    btnAdd = $('.btn-custumize-cursus');

  btnAdd.click(async function () {
    //get inputs values
    var form = $('.content-custumize-cursus');
    var intitule = form.find('#intitule').val();
    var etablissement = form.find('#etablissement').val();
    var obtention = form.find('#obtention').val();
    var diplome = form.find('#diplome').prop('files')[0];
    let extentionDiplome = form.find('#diplome').val().split('.').pop().toLowerCase();

    if (diplome != null) {
      let reader = new FileReader();
      reader.readAsDataURL(diplome);
      await new Promise(resolve => reader.onload = resolve);
      var base64String = reader.result.split(',')[1];
    }

    if(!intitule || !etablissement || !obtention) {
      alert('Veuillez remplir tous les champs');
      return;
    }

    let formation = {
      diplome: base64String || null,
      intitule: intitule,
      etablissement: etablissement,
      obtention: obtention,
      extention: extentionDiplome
    };
    var formationsArray = JSON.parse(localStorage.getItem('formationsArray'));
    formationsArray.push(formation);
    localStorage.setItem('formationsArray', JSON.stringify(formationsArray));
    var index = formationsArray.indexOf(formation);

    //add card
    var card = `
        <div class="col-lg-6 col-xl-4 mb-3 content-one-cursus">
            <div class="card card-action mb-4">
                <div class="card-alert"></div>
                <div class="card-header">
                    <div class="card-action-title">Formation n°${index + 1}</div>
                    <div class="card-action-element">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" id="cursus-${index + 1}" class="card-close"><i class="tf-icons ti ti-x ti-sm"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text niveau_etude-cursus">Intitulé : ${formation.intitule}</p>
                    <p class="card-text">Etablisement : ${formation.etablissement}</p>
                    <p class="card-text">Date d'obtention : ${formation.obtention}</p>
                </div>
            </div>
        </div>`;
    contentCursus.append(card);
    form.find('input').val('');
    form.find('select').prop('selectedIndex', 0);
    form.find('#diplome').val('');
  });

  // Remove cursus
  contentCursus.on('click', '.card-close', function () {
    var id = $(this).attr('id');
    var index = parseInt(id.slice(-1)) - 1;
    var formationsArray = JSON.parse(localStorage.getItem('formationsArray'));
    formationsArray.splice(index, 1);
    localStorage.setItem('formationsArray', JSON.stringify(formationsArray));
    $(this).closest('.content-one-cursus').remove();
    //change card title
    var cards = $('.content-one-cursus');
    for (let i = 0; i < cards.length; i++) {
      var card = $(cards[i]).find('.card-action-title');
      card.text(`Formation n°${i + 1}`);
      card.attr('id', `cursus-${i + 1}`);
    }
});




})

$(function () {
  //get div content-cursus-custumize
  var contentExperience = $('.content-experiences-custumize'),
    btnAdd = $('.btn-custom-Exp');

  btnAdd.click(async function () {
    //get inputs values
    var form = $('.content-wrapper-experiences');
    var employeur = form.find('#ref-employeur').val();
    var range = form.find('#ref-range').val();
    var poste = form.find('#ref-poste').val();
    var taches = form.find('#ref-taches').val();

    if(!employeur || !range || !poste || !taches) {
      alert('Veuillez remplir tous les champs');
      return;
    }

    let experience = {
      employeur: employeur,
      range: range,
      poste: poste,
      taches: taches.split(',')
    };
    var experiencesArray = JSON.parse(localStorage.getItem('experiencesArray'));
    experiencesArray.push(experience);
    localStorage.setItem('experiencesArray', JSON.stringify(experiencesArray));
    var index = experiencesArray.indexOf(experience);
    console.log(index)

    //add card
    var card = `
        <div class="col-lg-6 col-xl-4 mb-3 content-one-experience">
            <div class="card card-action mb-4">
                <div class="card-alert"></div>
                <div class="card-header">
                    <div class="card-action-title">Experience n°${index + 1}</div>
                    <div class="card-action-element">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" id="experience-${index + 1}" class="card-close"><i class="tf-icons ti ti-x ti-sm"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Employeur : ${experience.employeur}</p>
                    <p class="card-text">Poste : ${experience.poste}</p>
                    <p class="card-text">Date de ${experience.taches[0]} Au ${experience.taches[1]}</p>
                </div>
            </div>
        </div>`;
    contentExperience.append(card);
    form.find('input').val('');
    form.find('textarea').val('');
  });

  // Remove experience
  contentExperience.on('click', '.card-close', function () {
    var id = $(this).attr('id');
    var index = parseInt(id.slice(-1)) - 1;
    var experiencesArray = JSON.parse(localStorage.getItem('experiencesArray'));
    experiencesArray.splice(index, 1);
    localStorage.setItem('experiencesArray', JSON.stringify(experiencesArray));
    $(this).closest('.content-one-experience').remove();
    //change card title
    var cards = $('.content-one-experience');
    for (let i = 0; i < cards.length; i++) {
      var card = $(cards[i]).find('.card-action-title');
      card.text(`Experience n°${i + 1}`);
      card.attr('id', `experience-${i + 1}`);
    }
});




})

$(function () {
  var formCostumize = $('#personaliserCv'),
  btnCustomize = $('#btn-custumize'),
  btnCancelCv = $('#btn-cancel-cv'),
  btnCloseCv = $('#btn-close-cv');


  btnCustomize.click(function () {
    var id = formCostumize.find('#id').val();
    var cardsCv = JSON.parse(localStorage.getItem('cardsCvs'));
    var card = cardsCv.find(card => card.id == id);
    var formData = new FormData(formCostumize[0]);
    var languagesData = [];
    var niveauxData = [];
    for (var key of formData.keys()) {
      if (key.includes('langue')) {
        languagesData.push(formData.getAll(key));
      }
      if (key.includes('niveau')) {
        niveauxData.push(formData.getAll(key));
      }
    }
    card['langue'] = languagesData.join(',');
    card['niveauLangue'] = niveauxData.join(',');

    var formationsArray = JSON.parse(localStorage.getItem('formationsArray'));
    card['formations'] = formationsArray;

    var experiencesArray = JSON.parse(localStorage.getItem('experiencesArray'));
    card['experiences'] = experiencesArray;

    //get all checked missions with class sous-check
    var missions = $('.sous-check:checked');
    var missionsArray = [];
    for (let i = 0; i < missions.length; i++) {
      //get mission value
      var mission = $(missions[i]).val();
      //get mission id
      var id = $(missions[i]).attr('id').split('-')[1];
      //get the ref id from mission id mission-${ref.id}
      var obj = {
        id: id,
        mission: mission
      }
      missionsArray.push(obj);
    }
    //get all unchecked missions with class sous-check
    var missionsUnchecked = $('.sous-check:not(:checked)');
    var missionsUncheckedArray = [];
    for (let i = 0; i < missionsUnchecked.length; i++) {
      //get mission value
      var mission = $(missionsUnchecked[i]).val();
      //get mission id
      var id = $(missionsUnchecked[i]).attr('id').split('-')[1];
      //get the ref id from mission id mission-${ref.id}
      var obj = {
        id: id,
        mission: mission
      }
      missionsUncheckedArray.push(obj);
    }
    //check every ref in refs in card
    var refs = card.refs;
    for (let i = 0; i < refs.length; i++) {
      var ref = refs[i];
      var uncheckedMissions = [];
      var checkedMissions = [];
      for (let j = 0; j < missionsArray.length; j++) {
        var mission = missionsArray[j];
        if (ref.id == mission.id) {
          checkedMissions.push(mission.mission);
        }
      }

      for (let j = 0; j < missionsUncheckedArray.length; j++) {
        var mission = missionsUncheckedArray[j];
        if (ref.id == mission.id) {
          uncheckedMissions.push(mission.mission);
        }
      }
      ref.missions = uncheckedMissions.join(',');
      ref.missionsParticipe = checkedMissions.join(',');
      refs[i] = ref;
    }
    card.refs = refs;
    var index = cardsCv.indexOf(card);
    cardsCv[index] = card;
    localStorage.setItem('cardsCvs', JSON.stringify(cardsCv));

    


    // var formData = new FormData(formCostumize[0]);
    // var languagesData = [];
    // var niveauxData = [];
    // var refsData = [];
    // for (var key of formData.keys()) {
    //   if (key.includes('langue')) {
    //     languagesData.push(formData.getAll(key));
    //   }
    //   if (key.includes('niveau')) {
    //     niveauxData.push(formData.getAll(key));
    //   }
    //   if(key.includes('ref')) {
    //     var refId = formData.get(key);
    //     var cardsCv = JSON.parse(localStorage.getItem('cardsCvs'));
    //     console.log(cardsCv)
    //     var card = cardsCv.find(card => card.id == id);
    //     var refs = card.refs;
    //     for(let i = 0; i < refs.length; i++) {
    //       if(refs[i].id == refId) {
    //         refsData.push(refs[i]);
    //       }
    //     }
    //   }
    // }
    // //get all other informations from localStorage cardsCv without formations and niveauLangue and langue
    // var cardsCv = JSON.parse(localStorage.getItem('cardsCvs'));
    // var card = cardsCv.find(card => card.id == id);
    // var cardKeys = Object.keys(card);
    // for(let i = 0; i < cardKeys.length; i++) {
    //   if(cardKeys[i] == 'langue') {
    //     card[cardKeys[i]] = languagesData.toString()
    //   }
    //   if(cardKeys[i] == 'niveauLangue') {
    //     card[cardKeys[i]] = niveauxData.toString()
    //   }
    //   if(cardKeys[i] == 'refs') {
    //     card[cardKeys[i]] = refsData;
    //   }
    //   if(cardKeys[i] == 'formations') {
    //     var formationsArray = JSON.parse(localStorage.getItem('formationsArray'));
    //     card[cardKeys[i]] = formationsArray;
    //   }
    // }
    // //delete old card from localStorage cardsCvs
    // var index = cardsCv.indexOf(card);
    // cardsCv.splice(index, 1);
    // //add new card to localStorage cardsCvs
    // cardsCv.push(card);
    // localStorage.setItem('cardsCvs', JSON.stringify(cardsCv));

    intialiseLanguageForm();
    intialiseCursusEtRefsEtExp();
  });

  btnCancelCv.click(function () {
    intialiseLanguageForm();
    intialiseCursusEtRefsEtExp();
  });

  btnCloseCv.click(function () {
    intialiseLanguageForm();
    intialiseCursusEtRefsEtExp();
  });
});

function intialiseLanguageForm(){
  var modal = $('#editUser'),
    languageElem = modal.find('.content-language-custumize');
    languageElem.find('.language-elem').remove();
    var languageForm = `<div class="row language-elem">
                            <div class="col-lg-6 col-xl-4 col-12 mb-3">
                              <label class="form-label" for="language-input">Langues</label>
                              <input type="text" id="language-input" name="langue" class="form-control" placeholder="Language name">
                            </div>
                            <div class="col-lg-6 col-xl-4 col-12 mb-3">
                              <label class="form-label" for="level-select">Niveau</label>
                              <select id="level-select" class="form-select" name="niveau">
                                <option value="Débutant">Débutant</option>
                                <option value="Intermédiaire">Intermédiaire</option>
                                <option value="Avancé">Avancé</option>
                                <option value="Courant">Courant</option>
                                <option value="Langue maternelle">Langue maternelle</option>
                              </select>
                            </div>
                            <div class="col-lg-12 col-xl-2 col-12 d-flex align-items-end mb-3">
                              <button class="btn btn-danger btn-remove"><i class="fa fa-trash"></i> Delete</button>
                            </div>
                          </div>`;
    languageElem.append(languageForm);
}

function intialiseCursusEtRefsEtExp() {
  var contentCustumizeRefs = $('.content-custumize-refs'),
  contentCursusCustumize = $('.content-cursus-custumize'),
  contentExperiencesCustumize = $('.content-experiences-custumize');
  contentCustumizeRefs.empty();
  contentCursusCustumize.empty();
  contentExperiencesCustumize.empty();
}













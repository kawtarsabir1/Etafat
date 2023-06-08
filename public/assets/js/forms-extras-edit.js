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
   var contentWrapper = $('.content-wrapper-cvs'),
     content = $('.content-cvs'),
     btnAdd = $('.btn-add'),
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
     url: baseUrl + 'cv/gestion/allEmployees',
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
 
 
 
   // Add new cvs
   btnAdd.click(function () {
 
     var cvsArray = JSON.parse(localStorage.getItem('cvsArray')) || [];
     var exist = false;
 
     var lastContent = $('.content-cvs').last();
     var employee = lastContent.find('#employees').val();
     var role = lastContent.find('#roles').val();
 
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
           if (cvs.employee == employee && cvs.role == role) {
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
     } else {
       var clone = content.clone();
       clone.find('select').prop('selectedIndex', 0);
       clone.find('select').each(function () {
         var name = $(this).attr('name').slice(0, -1);
         var index = $('.content-cvs').length;
         $(this).attr('name', name + index);
       });
       //add btn remove 
       clone.find('.btn-remove').removeClass('d-none');
       clone.appendTo(contentWrapper);
     }
     //call ListeCvs
     ListeCvs();
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
   });
 });
 
 

$(function () {
  var btnSave = $('.btn-update-formations'),
  contentCursus = $('.content-cursus-map');

  // Add new cursus
  btnSave.click(async function () {
    let diplome = $('#diplome').prop('files')[0];
    let intitule = $('#intitule').val();
    let etablissement = $('#etablissement').val();
    let obtention = $('#obtention').val();
    let extentionDiplome = $('#diplome').val().split('.').pop().toLowerCase();
    let formationsArray = JSON.parse(localStorage.getItem('formationsArray')) || [];

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
    formationsArray.push(formation);
    localStorage.setItem('formationsArray', JSON.stringify(formationsArray));

    //add card to contentCursus
    let card = `
    <div class="col-lg-6 col-xl-4 mb-3 content-one-cursus">
        <div class="card card-action mb-4">
            <div class="card-alert"></div>
            <div class="card-header">
                <div class="card-action-title">Formation n°${formationsArray.length}</div>
                <div class="card-action-element">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" id="cursus-${formationsArray.length}" class="card-close"><i class="tf-icons ti ti-x ti-sm"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text niveau_etude-cursus">Intitulé : ${formation.intitule}</p>
                <p class="card-text">Niveau d’études : ${formation.etablissement}</p>
                <p class="card-text">Date d'obtention : ${formation.obtention} </p>
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
      $(this).find('.card-action-title').text(`Formation n°${index + 1}`);
      $(this).find('.card-close').attr('id', `cursus-${index + 1}`);
    }
    );
  });
});

$(function () {
  var btnSave = $('.btn-save-ref'),
  contentRefs = $('.content-refs-map');

  // Add new cursus
  btnSave.click(async function () {
    let employeur = $('#ref-employeur').val();
    let poste = $('#ref-poste').val();
    let dateDebut = $('#exp-dateAu').val();
    let dateFin = $('#exp-dateDu').val();
    let taches = $('#ref-taches').val();
    let diplome = $('#diplome').prop('files')[0] || null;

    if(!employeur || !poste || !dateDebut || !dateFin || !taches) {
      alert('Veuillez remplir tous les champs');
      return;
    }

    let ref = {
      employeur: employeur,
      poste: poste,
      dateDebut: dateDebut,
      dateFin: dateFin,
      taches: taches.split(','),
      diplome: diplome
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
                <div class="card-action-title">Experience n°${refsArray.length}</div>
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
    $('#diplome').val('');

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
      $(this).find('.card-action-title').text(`Experience n°${index + 1}`);
      $(this).find('.card-close').attr('id', `ref-${index + 1}`);
    }
    );
  });
});

$(function () {
  //wrapper projets 
  var btnSave = $('.btn-save-projet'),
  contentProjets = $('.content-projets'),
  contentprojetsMap = $('.content-projets-map');

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

  contentprojetsMap.on('click', '.card-close', function () {
    let id = $(this).attr('id');
    let index = id.split('-')[1];
    let projetsArray = JSON.parse(localStorage.getItem('projetsArray'));
    projetsArray.splice(index - 1, 1);
    localStorage.setItem('projetsArray', JSON.stringify(projetsArray));
    $(this).closest('.content-one-projet').remove();
    let projets = $('.content-one-projet');
    projets.each(function (index) {
      $(this).find('.card-action-title').text(`Projet n°${index + 1}`);
      $(this).find('.card-close').attr('id', `projet-${index + 1}`);
    }
    );
  });
});

  

$(function () {
  var inputValue = $('#myDataInput').val();

    if (inputValue !== '') {
        // Store the data in localStorage
        var jsonData = JSON.parse(inputValue);
        console.log(jsonData)
        //get formationsArray
        let formationsArray = JSON.parse(localStorage.getItem('formationsArray')) || [];
        let projetsArray = JSON.parse(localStorage.getItem('projetsArray')) || [];
        let refsArray = JSON.parse(localStorage.getItem('refsArray')) || [];

        localStorage.setItem('formationsArray', JSON.stringify(jsonData.formations));
        localStorage.setItem('projetsArray', JSON.stringify(jsonData.projets));
        localStorage.setItem('refsArray', JSON.stringify(jsonData.refs));


    }
});

$(function () {
  var contentWrapper = $('.content-wrapper-language'),
    content = $('#language-elem'),
    btnAdd = $('.btn-add-language'),
    btnRemove = $('.btn-remove'),
    count = $('.language-elem').length;

  // Add new language
  btnAdd.click(function () {
    var clone = content.clone();
    clone.find('input').val('');
    clone.find('select').prop('selectedIndex', 0);
    clone.find('input').each(function () {
      var name = $(this).attr('name');
      $(this).attr('name', name + count);
    });
    clone.find('select').each(function () {
      var name = $(this).attr('name');
      $(this).attr('name', name + count);
    });
    count++;
    clone.appendTo(contentWrapper);
  });
  
  // Remove language
  contentWrapper.on('click', '.btn-remove', function () {
    $(this).closest('.language-elem').remove();
  });
});
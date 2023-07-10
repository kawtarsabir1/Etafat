/**
 * Selects & Tags
 */

 'use strict';

 $(function () {
   const selectPicker = $('.selectpicker'),
     select2 = $('.select2'),
     select2Icons = $('.select2-icons');
 
   // Bootstrap Select
   // --------------------------------------------------------------------
   if (selectPicker.length) {
     selectPicker.selectpicker();
   }
 
   // Select2
   // --------------------------------------------------------------------
 
   // Default
   if (select2.length) {
     select2.each(function () {
       var $this = $(this);
       if($this.hasClass('ao-select')){
        console.log('ao-select');
          $this.wrap('<div class="position-relative mb-4"></div>').select2({
            placeholder: "Sélectionnez Appel d'Offre",
            dropdownParent: $this.parent()
          });
       }else if($this.hasClass('cv-select')){
          $this.wrap('<div class="position-relative"></div>').select2({
            placeholder: "Sélectionnez un cv",
            dropdownParent: $this.parent()
          });
       }
       else if($this.hasClass('pays-select')){
        $this.wrap('<div class="position-relative"></div>').select2({
          placeholder: "Sélectionnez un pays",
          dropdownParent: $this.parent()
        });
      }else{
          $this.wrap('<div class="position-relative"></div>').select2({
            placeholder: "Sélectionnez une option",
            dropdownParent: $this.parent()
          });
       }
     });
   }
 
   // Select2 Icons
   if (select2Icons.length) {
     // custom template to render icons
     function renderIcons(option) {
       if (!option.id) {
         return option.text;
       }
       var $icon = "<i class='" + $(option.element).data('icon') + " me-2'></i>" + option.text;
 
       return $icon;
     }
     select2Icons.wrap('<div class="position-relative"></div>').select2({
       templateResult: renderIcons,
       templateSelection: renderIcons,
       escapeMarkup: function (es) {
         return es;
       }
     });
   }
 });
 
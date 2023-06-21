/**
 * Tagify
 */

 'use strict';

 (function () {
    // Users List suggestion
    //------------------------------------------------------
    const TagifyUserListEl = document.querySelector('#TagifyUserList');
  
    let rhs = [];
  
    function getRhsData() {
      return new Promise(function (resolve, reject) {
        $.ajax({
          url: baseUrl + 'cv/all/rhs',
          type: 'GET',
          dataType: 'json',
          success: function (data) {
            resolve(data);
          },
          error: function (error) {
            reject(error);
          }
        });
      });
    }
  
    async function initializeTagify() {
      try {
        rhs = await getRhsData();
  
        function tagTemplate(tagData) {
            return `
            <tag title="${tagData.rhNom}"
              contenteditable='false'
              spellcheck='false'
              tabIndex="-1"
              class="${this.settings.classNames.tag} ${tagData.class ? tagData.class : ''}"
              ${this.getAttributes(tagData)}
            >
              <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
              <div>
                <span class='tagify__tag-text'>${tagData.rhNom}</span>
              </div>
            </tag>
          `;
        }
  
        function suggestionItemTemplate(tagData) {
            return `
            <div ${this.getAttributes(tagData)}
              class='tagify__dropdown__item align-items-center ${tagData.class ? tagData.class : ''}'
              tabindex="0"
              role="option"
            >
              <strong>${tagData.rhNom}</strong>
            </div>
          `;
        }
  
        // initialize Tagify on the above input node reference
        let TagifyUserList = new Tagify(TagifyUserListEl, {
            tagTextProp: 'rhNom', // very important since a custom template is used with this property as text. allows typing a "value" or a "name" to match input with whitelist
            enforceWhitelist: true,
            skipInvalid: true, // do not remporarily add invalid tags
            dropdown: {
              closeOnSelect: false,
              enabled: 0,
              classname: 'users-list',
              searchKeys: ['rhNom'] // very important to set by which keys to search for suggesttions when typing
            },
            templates: {
              tag: tagTemplate,
              dropdownItem: suggestionItemTemplate
            },
            whitelist: rhs
          });
  
        TagifyUserList.on('dropdown:show dropdown:updated', onDropdownShow);
        TagifyUserList.on('dropdown:select', onSelectSuggestion);
  
        let addAllSuggestionsEl;
  
        function onDropdownShow(e) {
            let dropdownContentEl = e.detail.tagify.DOM.dropdown.content;
        
            if (TagifyUserList.suggestedListItems.length > 1) {
              addAllSuggestionsEl = getAddAllSuggestionsEl();
        
              // insert "addAllSuggestionsEl" as the first element in the suggestions list
              dropdownContentEl.insertBefore(addAllSuggestionsEl, dropdownContentEl.firstChild);
            }
          }
  
          function onSelectSuggestion(e) {
            if (e.detail.elm == addAllSuggestionsEl) TagifyUserList.dropdown.selectAll.call(TagifyUserList);
          }
  
          function getAddAllSuggestionsEl() {
            // suggestions items should be based on "dropdownItem" template
            return TagifyUserList.parseTemplate('dropdownItem', [
              {
                class: 'addAll',
                rhNom: 'Add all',
                email:
                  TagifyUserList.settings.whitelist.reduce(function (remainingSuggestions, item) {
                    return TagifyUserList.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1;
                  }, 0) + ' Members'
              }
            ]);
          }
      } catch (error) {
        console.error('Failed to fetch RHS data:', error);
      }
    }
  
    initializeTagify();
  })();
  
 
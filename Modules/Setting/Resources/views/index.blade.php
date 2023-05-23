@extends('setting::layouts.master')

@section('content')
<div class="container">
    <h4 class="fw-bold mb-4 py-3"><span class="text-muted fw-light">Settings /</span> Menu</h4>
    <div>
        <div class="card mb-4">
            <div class="card-body card-header-flex">
                <h5 class="card-title">Menu Schema</h5>
                <div>
                    <button class="btn btn-label-primary me-3 waves-effect" id="upload-btn" onclick="uploadFile()">Upload Menu</button>
                    <input type="file" id="upload-file" style="display: none" onchange="saveFile()">
                    <button class="btn btn-primary waves-effect waves-light" id="create-tab">Create New Tab</button>
                </div>
            </div>
            <div class="schema-container">
                <div class="meun-schema">
                    @foreach($menu as $item)
                    @if($item->parent_id == null)
                    <div class="main-menu">
                        <div class="tab-menu">
                            <div class="tab-content">
                                <i class="{{$item->icon}}"></i>
                                <p>{{$item->name}}</p>
                            </div>
                            <a class="menu-setting">
                                <i class="menu-icon tf-icons ti ti-settings" id="setting-tab" onclick="saveId('{{$item->id}}')"></i>
                            </a>
                        </div>
                        <div class="submenus">
                            @foreach($menu as $subitem)
                            @if($subitem->parent_id == $item->id)
                            <div class="tab-submenu">
                                <div class='arrow'></div>
                                <div class="tab-content">
                                    <i class="{{$subitem->icon}}"></i>
                                    <p>{{$subitem->name}}</p>
                                </div>
                                <a class="menu-setting">
                                    <i class="menu-icon tf-icons ti ti-settings" onclick="saveId('{{$subitem->id}}')"></i>
                                </a>
                            </div>

                            <div class="submenus sub-submenus">
                                @foreach($menu as $subsubitem)
                                @if($subsubitem->parent_id == $subitem->id)
                                <div class="tab-submenu sub-tab-submenu">
                                    <div class='arrow sub-arrow'></div>
                                    <div class="tab-content">
                                        <i class="{{$subsubitem->icon}}"></i>
                                        <p>{{$subsubitem->name}}</p>
                                    </div>
                                    <a class="menu-setting">
                                        <i class="menu-icon tf-icons ti ti-settings" onclick="saveId('{{$subsubitem->id}}')"></i>
                                    </a>
                                </div>
                                @endif
                                @endforeach
                                <div class="new-submenu" onclick="createNewSub('{{$subitem->id}}')">
                                    <div class='arrow sub-arrow'></div>
                                    <div class="tab-content new-sub">
                                        <p>New Submenu</p>
                                    </div>
                                    <a class="menu-setting">
                                        <i class="menu-icon tf-icons ti ti-plus"></i>
                                    </a>
                                </div>
                            </div>

                            @endif
                            @endforeach
                            <div class="new-submenu" onclick="createNewSub('{{$item->id}}')">
                                <div class='arrow'></div>
                                <div class="tab-content">
                                    <p>New Submenu</p>
                                </div>
                                <a class="menu-setting">
                                    <i class="menu-icon tf-icons ti ti-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="modal fade" id="tabOperationModal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form method="post" action="{{ route('updateTab') }}" enctype="multipart/form-data" style="width: 100%;">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Setting Tab "Dashboard"</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-setting-tab-modal-top"></button>
                        </div>
                        <div class="modal-header">
                            <p class="modal-title choices" id="modalCenterTitle">Update Tab</p>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" class="tabId" name="id">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Url</label>
                                    <input type="text" name="url" class="form-control" placeholder="Enter Url">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Icon (You can choose any icon you want in tabler)</label>
                                    <input type="text" name="icon" class="form-control" placeholder="Enter Icon ex : ti ti-360">
                                </div>
                            </div>
                            <div>
                                <p class="modal-title choices" id="modalCenterTitle">Or</p>
                            </div>
                            <div class="btn-delete">
                                <button type="button" class="btn btn-danger" onclick="deleteTab()">Delete</button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" id="close-setting-tab-modal">Close</button>
                                <button type="submit" class="btn btn-success">Save changes</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>

    </div>

    <div class="modal fade" id="modalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Create New Tab</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-new-tab-modal-top"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Name</label>
                            <input type="text" name="name" id="nameWithTitle" class="form-control mainInputs" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Icon (You can choose any icon you want in tabler)</label>
                            <input type="text" name="icon" id="nameWithTitle" class="form-control mainInputs" placeholder="Enter Icon">
                        </div>
                    </div>
                    <input type="hidden" name="parent_id" class="mainInputs" id="create_id">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Url</label>
                            <input type="text" name="url" id="url-input" class="form-control mainInputs" placeholder="Enter Url">
                        </div>
                    </div>
                    <div id="submenus" class="submenus-main">
                    </div>

                    <div class="btn-sub mt-1">
                        <button type="button" class="btn btn-primary" id="newSubBtn" onclick="newSubMenu(0)">New SubMenu</button>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" id="close-new-tab-modal">Close</button>
                        <button type="button" class="btn btn-success" onclick="saveDataTab()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script text="text/javascript">
        let subMenuCount = 0;
        let subSubMenuCount = 0;

        function saveId(tabId) {
            localStorage.setItem('tabId', tabId);
            const tabOperationModal = document.getElementById('tabOperationModal');
            tabOperationModal.classList.add('show');
            tabOperationModal.style.display = 'block';
            tabOperationModal.style.background = 'rgba(0,0,0,0.4)';
            document.body.style.overflow = 'hidden';
            const tabIdInput = document.getElementsByClassName('tabId');
            tabIdInput[0].value = tabId;
        }

        function newSubMenu(id) {
            subMenuCount++;
            const subMenu = document.createElement('div');
            subMenu.className = 'sub-menu sub-main';
            subMenu.id = `subMenu${subMenuCount}`;
            subMenu.innerHTML = `
                <h5>Sub Menu ${subMenuCount}</h5>
                <div class="row">
                <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Name</label>
                    <input type="text" id="nameWithTitle" name="name" class="form-control subInputs" placeholder="Enter Name">
                </div>
                </div>
                <div class="row">
                <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Icon</label>
                    <input type="text" id="nameWithTitle" name="icon" class="form-control subInputs" placeholder="Enter Icon">
                </div>
                </div>
                <input type="hidden" name="parent_id" class="subInputs" value="${id}">
                <div class="row">
                <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Url</label>
                    <input type="text" name="url" class="form-control subInputs" placeholder="Enter Url">
                </div>
                </div>
                <div id="subsubmenus${subMenuCount}" class="subsubmenu"></div>
                <div class="btn-sub mt-1">
                <button type="button" class="btn btn-primary" onclick="newSubSubMenu(${subMenuCount})">New SubMenu</button>
                </div>
            `;
            document.getElementById('submenus').appendChild(subMenu);
        }

        function newSubSubMenu(id) {
            subSubMenuCount++;
            let subSubMenu = document.createElement('div');
            subSubMenu.setAttribute('class', 'sub-menu sub-submain');
            subSubMenu.setAttribute('id', 'subSubMenu' + subSubMenuCount);
            let subMenu = document.getElementById('subMenu' + id).getElementsByClassName('subsubmenu')[0];
            let count = subMenu.childElementCount;
            subSubMenu.innerHTML = `
                <h5>Sub Sub Menu ${count+1}</h5>
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameWithTitle" class="form-label">Name</label>
                        <input type="text" id="nameWithTitle" name="name" class="form-control sub-subInputs" placeholder="Enter Name">
                    </div>
                </div>
                <input type="hidden" name="icon" class="sub-subInputs">
                <input type="hidden" name="parent_id" class="sub-subInputs" value="${id}">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameWithTitle" class="form-label">Url</label>
                        <input type="text" name="url" class="form-control sub-subInputs" placeholder="Enter Url">
                    </div>
                </div>
            `;
            document.getElementById('subsubmenus' + id).append(subSubMenu);
        }

        function saveDataTab() {
            const mainForm = document.getElementsByClassName('modal-body')[1];
            const formInputs = mainForm.getElementsByClassName('mainInputs');
            const formData = [];
            let obj = {};

            // Save main form inputs
            for (let i = 0; i < formInputs.length; i++) {
                obj[formInputs[i].name] = formInputs[i].value || null;
            }
            formData.push(obj);
            obj = {};

            // Save submenus and subsubmenus inputs
            const submenus = mainForm.getElementsByClassName('submenus-main')[0];
            const submenuDivs = submenus.getElementsByClassName('sub-main');
            for (let i = 0; i < submenuDivs.length; i++) {
                const subMenuInputs = submenuDivs[i].getElementsByClassName('subInputs');
                for (let j = 0; j < subMenuInputs.length; j++) {
                    obj[subMenuInputs[j].name] = subMenuInputs[j].value || null;
                }
                formData.push(obj);
                obj = {};

                const subsubmenu = submenuDivs[i].getElementsByClassName('subsubmenu')[0];
                const subsubmenuDivs = subsubmenu.getElementsByClassName('sub-submain');
                for (let i = 0; i < subsubmenuDivs.length; i++) {
                    const subsubMenuInputs = subsubmenuDivs[i].getElementsByClassName('sub-subInputs');
                    for (let j = 0; j < subsubMenuInputs.length; j++) {
                        obj[subsubMenuInputs[j].name] = subsubMenuInputs[j].value || null;
                    }
                    formData.push(obj);
                    obj = {};
                }
            }

            // Determine the API endpoint URL and data to send
            let url = '/api/setting/newTab';
            let data = formData;
            if (document.getElementById('create_id').value !== '') {
                url = '/api/setting/newSubMenu';
                data = formData[0];
            }

            // Send the data to the server
            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                })
                .then(() => {
                    alert('Data Saved Successfully');
                    location.reload();
                })
                .catch(error => console.error(error));
        }

        function deleteTab() {
            let tabId = localStorage.getItem('tabId');
            if (confirm('Are you sure you want to delete this tab?')) {
                fetch('/api/setting/deleteTab/' + tabId, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                })
                alert('Data Deleted Successfully');
                location.reload();
            } else {
                return false;
            }
        }

        function createNewSub(parent_id) {
            document.getElementById('newSubBtn').style.display = 'none';
            document.getElementById('create_id').value = parent_id;
            var modal = document.getElementById("modalCenter");
            modal.classList.add("show");
            modal.style.display = "block";
            document.body.style.overflow = "hidden";
            modal.style.background = "rgba(0,0,0,0.4)";
        }

        function uploadFile() {
            document.getElementById('upload-file').click();
        }

        function saveFile() {
            let file = document.getElementById('upload-file').files[0];
            let formData = new FormData();
            formData.append('file', file);
            fetch('/api/setting/newMenu', {
                    method: 'POST',
                    body: formData
                })
                .then(() => {
                    alert('File Uploaded Successfully');
                    location.reload();
                })
                .catch((error) => {
                    console.error('Error uploading file:', error);
                    alert('Error uploading file');
                });
        }
    </script>
    @endsection
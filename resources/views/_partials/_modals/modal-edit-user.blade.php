<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-simple modal-edit-user">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="mb-2">Edit User Information</h3>
          <p class="text-muted">Updating user details will receive a privacy audit.</p>
        </div>
        <form id="editUserForm" class="row g-3" onsubmit="return false">
          <div class="col-12">
            <h6 class="mt-2 fw-semibold">1. Cursus / Formations</h6>
            <hr class="mt-0" />
          </div>
          <div class="content-wrapper-cursus">
            <div class="content-cursus">
              <div class="row">
                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label class="form-label" for="level-select">Niveau d’études</label>
                  <select id="niveau_etude" class="form-select">
                    <option value="BAC">BAC</option>
                    <option value="BAC+1">BAC+1</option>
                    <option value="BAC+2">BAC+2</option>
                    <option value="LICENCE">LICENCE</option>
                    <option value="MASTER">MASTER</option>
                    <option value="DOCTORAT">DOCTORAT</option>
                  </select>
                </div>

                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label class="form-label" for="cursus-input">Intitulé diplôme</label>
                  <input type="text" id="intitule" class="form-control" placeholder="Entrer Intitulé diplôme">
                </div>

                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label class="form-label" for="cursus-range">Date de</label>
                  <input type="text" class="form-control" placeholder="YYYY-MM-DD Au YYYY-MM-DD" id="cursus-range" />
                </div>

                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label class="form-label" for="cursus-input">Etablissement Scolaire</label>
                  <input type="text" id="etablissement" class="form-control" placeholder="Entrer Etablissement Scolaire">
                </div>

                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label class="form-label" for="cursus-input">Pays Etablissement Scolaire</label>
                  <input type="text" id="pays" class="form-control" placeholder="Entrer Pays Etablissement Scolaire">
                </div>

                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label for="formValidationFile" class="form-label">Diplôme</label>
                  <input class="form-control" type="file" id="diplome-cursus">
                </div>
                <div class="actions mb-4">
                  <button type="button" class="btn btn-primary btn-save"><i class="fa fa-plus"></i>Save</button>
                </div>
                <div class="row content-cursus-map">
                </div>
                <hr class="mt-0" />
              </div>
            </div>
          </div>
          <div class="col-12">
            <h6 class="mt-2 fw-semibold">2. Experiences Professionels</h6>
            <hr class="mt-0" />
          </div>
          <div class="content-wrapper-cursus">
            <div class="content-cursus">
              <div class="row">
                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label class="form-label" for="level-select">Niveau d'études</label>
                  <select id="niveau_etude" class="form-select">
                    <option value="BAC">BAC</option>
                    <option value="BAC+1">BAC+1</option>
                    <option value="BAC+2">BAC+2</option>
                    <option value="LICENCE">Bac+3</option>
                    <option value="MASTER">Bac+4</option>
                    <option value="DOCTORAT">Bac+6</option>
                  </select>
                </div>

                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label class="form-label" for="cursus-input">Intitulé diplôme</label>
                  <input type="text" id="intitule" class="form-control" placeholder="Entrer Intitulé diplôme">
                </div>

                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label class="form-label" for="cursus-range">Date de</label>
                  <input type="text" class="form-control" placeholder="YYYY-MM-DD Au YYYY-MM-DD" id="cursus-range" />
                </div>

                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label class="form-label" for="cursus-input">Etablissement Scolaire</label>
                  <input type="text" id="etablissement" class="form-control" placeholder="Entrer Etablissement Scolaire">
                </div>

                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label class="form-label" for="cursus-input">Pays Etablissement Scolaire</label>
                  <input type="text" id="pays" class="form-control" placeholder="Entrer Pays Etablissement Scolaire">
                </div>

                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                  <label for="formValidationFile" class="form-label">Diplôme</label>
                  <input class="form-control" type="file" id="diplome-cursus">
                </div>
                <div class="actions mb-4">
                  <button type="button" class="btn btn-primary btn-save"><i class="fa fa-plus"></i>Save</button>
                </div>
                <div class="row content-cursus-map">
                </div>
                <hr class="mt-0" />
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->
<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-simple modal-edit-user">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" id="btn-close-cv" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="mb-2">Personnaliser Cv Information</h3>
          <p class="text-muted">Personnaliser cv details just for generating.</p>
        </div>
        <form id="personaliserCv" class="row g-3" onsubmit="return false">
          <div class="col-12">
            <div class="col-12">
              <h6 class="mt-2 fw-semibold">1. Personnaliser les languages</h6>
              <hr class="mt-0" />
            </div>
            <input type="hidden" name="id" id="id">
            <div class="content-custumize-language">
              <div class="content-language-custumize">
                <div class="row language-elem">
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
                </div>
              </div>

            </div>
            <div class="actions mb-4">
              <button type="button" class="btn btn-primary btn-custumize-language"><i class="fa fa-plus"></i> Add Language</button>
            </div>
          </div>

          <div class="col-12">
            <div class="col-12">
              <h6 class="mt-2 fw-semibold">2. Personaliser les cursus et formations</h6>
              <hr class="mt-0" />
            </div>
            <div class="content-custumize-cursus">
              <div class="content-cursus">
                <div class="row">
                  <div class="col-lg-6 col-xl-4 col-12 mb-3">
                    <label class="form-label" for="cursus-input">Intitulé diplôme</label>
                    <input type="text" id="intitule" class="form-control" placeholder="Entrer Intitulé diplôme">
                  </div>

                  <div class="col-lg-6 col-xl-4 col-12 mb-3">
                    <label class="form-label" for="formValidationEmbauche">Année d'obtention</label>
                    <input type="text" class="form-control flatpickr-validation" id="obtention" placeholder="YYYY-MM-DD" />
                  </div>

                  <div class="col-lg-6 col-xl-4 col-12 mb-3">
                    <label class="form-label" for="cursus-input">Etablissement Scolaire</label>
                    <input type="text" id="etablissement" class="form-control" placeholder="Entrer Etablissement Scolaire">
                  </div>

                  <div class="col-lg-6 col-xl-4 col-12 mb-3">
                    <label for="formValidationFile" class="form-label">Attestation / Diplôme (s'il y a)</label>
                    <input class="form-control" type="file" id="diplome">
                  </div>

                  <div class="actions mb-3">
                    <button type="button" class="btn btn-primary btn-custumize-cursus"><i class="fa fa-plus"></i>Save Cursus</button>
                  </div>
                  <div class="row content-cursus-custumize">
                  </div>
                  <hr class="mt-0" />
                </div>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="col-12">
              <h6 class="mt-2 fw-semibold">3. Select les references</h6>
              <hr class="mt-0" />
            </div>
            <div class="content-custumize-refs">
            </div>
          </div>

          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1" id="btn-custumize" data-bs-dismiss="modal" aria-label="Close">Submit</button>
            <button type="reset" class="btn btn-label-secondary" id="btn-cancel-cv" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->


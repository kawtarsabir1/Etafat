    <div class="expanel expanel-default">
        <div class="expanel-heading">
            <h4 class="expanel-title">

                <a data-bs-container="body"
                   data-bs-content="{{$description}}"
                   data-bs-placement="top"
                   data-bs-popover-color="default"
                   data-bs-toggle="popover"
                   title=""
                   data-bs-original-title="Popover top"
                   aria-describedby="popover107066">{{$name}}</a>
            </h4>
        </div>
        <div class="expanel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-2" id="{{$id}}">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dropzone-panel mb-lg-0 mb-2">
                                    <a class="dropzone-btn btn btn-success float-start">Attach files</a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="dropzone-items">
                                    <div class="dropzone-item alert alert-primary" style="display:none">
                                        <button type="button" class="btn-close" data-dz-remove>
                                            <span aria-hidden="true"><i class="fa fa-trash"></i></span>
                                        </button>

                                        <div class="dropzone-file row">
                                            <div class="col-md-2 icon">
                                            </div>
                                            <div class="col-md-10">
                                                <div class="dropzone-filename" title="">
                                                    <span data-dz-name></span>
                                                    <strong>(<span data-dz-size>...kb</span>)</strong>
                                                    <span class="dropzone-delete" ></span>
                                                </div>
                                                <p class="mb-0 text-danger" data-dz-errormessage></p>
                                                <div class="dropzone-progress">
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-primary"
                                                            role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@push("component-script")

    <script>
        new MyDropZone("#{{$id}}",'{{$name}}',{
            url : "{{ route('admin.files.storeMedia') }}",
            maxFiles : {{$maxfiles}},
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
        });
    </script>
@endpush

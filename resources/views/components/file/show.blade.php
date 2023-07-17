<table class="table table-bordered table-striped">
    <tbody>
    @foreach ($files as $f)
        <tr>
            <th>
                {{ $f->name }}
            </th>
            <td>
                <ul>
                    @foreach ($f->files as $file)
                        <div class="alert alert-primary file" role="alert">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="fi fi-{{$file->mime_type}}">
                                        <div class="fi-content">{{$file->mime_type}}</div>
                                    </div>
                                </div>
                                <div class="col-md-10">{{$file->name}}</div>
                            </div>

                            <div class="btn-list file-btn-list">
                                <button type="button" class="file-btn btn btn-icon  btn-primary" onclick="showFile(1)"><i class="fe fe-eye"></i>
                                </button>
                                <button type="button" class="file-btn btn btn-icon  btn-secondary"><i class="fe fe-download"></i>
                                </button>
                                <button type="button" class="file-btn btn btn-icon  btn-warning"><i class="fe fe-info"></i>
                                </button>
                            </div>


                        </div>

                    @endforeach
                </ul>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

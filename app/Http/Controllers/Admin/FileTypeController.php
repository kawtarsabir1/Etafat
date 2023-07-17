<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\DataTables\FileTypesDataTable;
use App\Http\Headers\FileTypeHeader;
use App\Http\Requests\MassDestroyFileTypeRequest;
use App\Http\Requests\StoreFileTypeRequest;
use App\Http\Requests\UpdateFileTypeRequest;
use App\Models\FileType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FileTypeController extends Controller
{

    public function index(FileTypesDataTable $dataTable, Request $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!empty($request->datatable_content)) {
            return $dataTable->datatable()->make(true);
        } else {
            // dd($dataTable);
            return view('admin.fileTypes.index')->with("header", FileTypeHeader::index())->with("tableDefinition",$dataTable->tableDefinition);
        }
    }

    public function create()
    {
        abort_if(Gate::denies('file_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $types = FileType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.fileTypes.create',compact('types'))->with("header", FileTypeHeader::create());
    }

    public function store(StoreFileTypeRequest $request)
    {
        $fileType = FileType::create($request->all());

        return redirect()->route('admin.file-types.index');
    }

    public function edit(FileType $fileType)
    {
        abort_if(Gate::denies('file_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fileTypes.edit', compact('fileType'));
    }

    public function update(UpdateFileTypeRequest $request, FileType $fileType)
    {
        $fileType->update($request->all());

        return redirect()->route('admin.file-types.index');
    }

    public function show(FileType $fileType)
    {
        abort_if(Gate::denies('file_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fileTypes.show', compact('fileType'));
    }

    public function destroy(FileType $fileType)
    {
        abort_if(Gate::denies('file_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fileType->delete();

        return back();
    }

    public function massDestroy(MassDestroyFileTypeRequest $request)
    {
        FileType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

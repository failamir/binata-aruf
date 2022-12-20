@extends('layouts.admin')
@section('content')
@can('user_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.users.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.user.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.nama_panggilan') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email_verified_at') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.umur') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.approved') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.roles') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.tempt_tanggal_lahir') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.alamat_asal') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.domisili') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.pekerjaan') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.suku') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.tinggi_badan') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.berat_badan') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.warna_kulit') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.nomor') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.no_wa') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.alamat_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.akun_instagram') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.akun_facebook') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.telegram') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.twiter') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.tik_tok') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.web') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                        <tr data-entry-id="{{ $user->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $user->id ?? '' }}
                            </td>
                            <td>
                                {{ $user->email ?? '' }}
                            </td>
                            <td>
                                {{ $user->name ?? '' }}
                            </td>
                            <td>
                                {{ $user->nama_panggilan ?? '' }}
                            </td>
                            <td>
                                {{ $user->email_verified_at ?? '' }}
                            </td>
                            <td>
                                {{ $user->umur ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $user->approved ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $user->approved ? 'checked' : '' }}>
                            </td>
                            <td>
                                @foreach($user->roles as $key => $item)
                                    <span class="badge badge-info">{{ $item->title }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $user->tempt_tanggal_lahir ?? '' }}
                            </td>
                            <td>
                                {{ $user->alamat_asal ?? '' }}
                            </td>
                            <td>
                                {{ $user->domisili ?? '' }}
                            </td>
                            <td>
                                {{ $user->pekerjaan ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\User::STATUS_SELECT[$user->status] ?? '' }}
                            </td>
                            <td>
                                {{ $user->suku ?? '' }}
                            </td>
                            <td>
                                {{ $user->tinggi_badan ?? '' }}
                            </td>
                            <td>
                                {{ $user->berat_badan ?? '' }}
                            </td>
                            <td>
                                {{ $user->warna_kulit ?? '' }}
                            </td>
                            <td>
                                {{ $user->nomor ?? '' }}
                            </td>
                            <td>
                                {{ $user->no_wa ?? '' }}
                            </td>
                            <td>
                                {{ $user->alamat_email ?? '' }}
                            </td>
                            <td>
                                {{ $user->akun_instagram ?? '' }}
                            </td>
                            <td>
                                {{ $user->akun_facebook ?? '' }}
                            </td>
                            <td>
                                {{ $user->telegram ?? '' }}
                            </td>
                            <td>
                                {{ $user->twiter ?? '' }}
                            </td>
                            <td>
                                {{ $user->tik_tok ?? '' }}
                            </td>
                            <td>
                                {{ $user->web ?? '' }}
                            </td>
                            <td>
                                @can('user_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', $user->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('user_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', $user->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('user_delete')
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('user_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
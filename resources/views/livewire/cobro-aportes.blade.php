<div>
    @section('title', 'Cobro Aportes')

    @section('content_header')
        <h1>Cobro Aportes</h1>
    @stop

    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    Listado
                                </span>

                                <div class="float-right">
                                    <button class="btn btn-info btn-sm float-right" data-placement="left" data-toggle="modal"
                                        data-target="#nuevoCobro">
                                        <i class="fas fa-plus"></i> Nuevo
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="nuevoCobro" tabindex="-1" aria-labelledby="nuevoCobroLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="nuevoCobroLabel">Pago de Aporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label><small>Miembros:</small></label>
                        <div class="form-group">
                            <select name="miembros" id="miembros" class="select2" wire:model='selid'>
                                <option value="">Seleccione un miembro</option>
                                @foreach ($miembros as $item)
                                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""><small>Aportes de la Gestión:</small></label>
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm" style="font-size: 12px;">
                                    <thead class="table-primary">
                                        <tr class="text-center text-uppercase">
                                            <th>Codigo</th>
                                            <th>Estado</th>
                                            <th>Monto</th>
                                            <th>Sel.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($aportesgestion)
                                            @foreach ($aportesgestion as $item)
                                                <tr class="text-center">

                                                    <td class="align-middle">{{ $item->codigo }}</td>
                                                    <td class="align-middle">Impaga</td>
                                                    <td class="align-middle">{{ $item->importe }}</td>
                                                    <td class="align-middle">
                                                        <input type="checkbox" id="sel1">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>

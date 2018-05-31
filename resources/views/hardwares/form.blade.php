{!! csrf_field() !!}
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name-hardware">Nombre Hardware</label>
            <input type="text" value="{{ $hardware->name or old('name-hardware') }}" name="name-hardware" class="form-control" placeholder="Enter ...">
            {!! $errors->first('name-hardware', '<span class=alert alert-danger>:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <select class="form-control select2" style="width: 100%;" name="quantity">
                @if(isset($stock))
                    @for($i = 1; $i < 51; $i++)
                        <option value="{{  $i }}" {{ $i == $stock->quantity ? 'selected' : '' }}>{{  $i }}</option>
                    @endfor
                        <option value="Other">Otra Cantidad</option>
                @else
                    @for($i = 1; $i < 51; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                        <option value="Other">Otra Cantidad</option>
                @endif                    
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="providers">Proveedor</label>
            <select class="form-control select2" style="width: 100%;" name="providers">
                @if(isset($hardware))
                    @foreach($providers as $pro)
                        <option value="{{$pro->id}}" {{ $pro->id == $hardware->provider_id ? 'selected' : '' }}>{{ $pro->name }}</option>
                    @endforeach
                @else
                    @foreach($providers as $pro)
                        <option value="{{$pro->id}}">{{ $pro->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group" id="other-quantity"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <input type="submit" value="Ingresar" class="btn btn-block btn-success btn-flat">
    </div>
</div>
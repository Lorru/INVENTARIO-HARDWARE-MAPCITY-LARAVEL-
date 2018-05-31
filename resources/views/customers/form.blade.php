{!! csrf_field() !!}
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name-client">Nombre Cliente</label>
            <input type="text" name="name-client" value="{{ $customer->name_client or  old('name-client') }}" class="form-control" placeholder="Enter ...">
            {!! $errors->first('name-client', '<span class=alert alert-danger>:message</span>') !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="name-enriched">Nombre Encargado</label>
            <input type="text" name="name-enriched" class="form-control" value="{{ $customer->name_enriched or old('name-enriched') }}" placeholder="Enter ...">
            {!! $errors->first('name-enriched', '<span class=alert alert-danger>:message</span>') !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="email-enriched">Correo Encargado</label>
            <input type="text" name="email-enriched" class="form-control" value="{{ $customer->email or old('email_enriched') }}" placeholder="Enter ...">
            {!! $errors->first('email-enriched', "<span style='color: #dd4b39;'>:message</span>") !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="place">Piso</label>
            <select name="place" id="" class="form-control select2" style="width: 100%;">
                @if(isset($customer))
                    @for($i = 1; $i < 6; $i++)
                        <option value="{{ $i .'°Piso' }}" {{$i.'°Piso' == $customer->place ? 'selected' : ''}}>{{ $i .'°Piso' }}</option>
                    @endfor
                @else
                    @for($i = 1; $i < 6; $i++)
                        <option value="{{ $i .'°Piso' }}">{{ $i .'°Piso' }}</option>
                    @endfor
                @endif                    
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="dependence">Dependencia</label>
            <select name="dependence" id="" class="form-control select2" style="width: 100%;">
                @if(isset($customer))
                    @foreach($dependences as $dep)
                        <option value="{{ $dep->id }}" {{$dep->id == $customer->dependence_id ? 'selected' : ''}}>{{ $dep->name }}</option>
                    @endforeach
                @else
                    @foreach($dependences as $dep)
                        <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                    @endforeach
                @endif                    
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-grouo">
            <input type="submit" value="Ingresar" class="btn btn-block btn-success btn-flat">
        </div>
    </div>
</div>
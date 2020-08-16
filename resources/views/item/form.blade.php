@if (@$item)
    <div class="form-group">
        <label for="id" class="col-sm-2 control-label">Código</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="Código" value="{{old('id', @$item->id)}}">
        </div>
    </div>
@endif

<div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{old('name', @$item->name)}}">
    </div>
</div>
<div class="form-group">
    <label for="description" class="col-sm-2 control-label">Descrição</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="description" name="description" rows="3"  placeholder="Adicione uma descrição do item...">{{old('', @$item->description)}}</textarea>
    </div>
</div>
<div class="form-group">
    <label for="quantity" class="col-sm-2 control-label">Quantidade</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="quantity" min="0" name="quantity" value="{{old('quantity', @$item->quantity)}}">
    </div>
</div>
<div class="form-group">
    <label for="image" class="col-sm-2 control-label">Imagem</label>
    <div class="col-sm-10">
        @if (@$item)
        <div class="d-flex justify-content-sm-start">
            <img src="{{ asset('storage/' . Str::after($item->image, 'public/')) }}" class="img-thumbnail" height="80" width="80">
        </div>
        @endif
        <input type="file" class="form-control" id="image" name="image">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-outline-success">
            <i class="fa fa-save"> Salvar</i>
        </button>
    </div>
</div>

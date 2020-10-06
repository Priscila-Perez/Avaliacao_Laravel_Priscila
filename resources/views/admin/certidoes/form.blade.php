<div class="form-group">
    <label for="tipo_certidao">Tipo de certidão</label>
    <input type="text" class="form-control" id="tipo_certidao" name="tipo_certidao" value="{{$item->tipo_certidao ?? ''}}">
</div>
<div class="form-group">
    <label for="nome_envolvido_1 ">Nome do Envolvido 1</label>
    <input type="text" class="form-control" id="nome_envolvido_1 " name="nome_envolvido_1 " value="{{$item->nome_envolvido_1 ?? ''}}">
</div>
<div class="form-group">
    <label for="envolvido2">Nome do Envolvido 2</label>
    <input type="text" class="form-control" id="envolvido2" name="envolvido2" value="{{$item->nome_envolvido_2 ?? ''}}">
</div>
<div class="form-group">
    <label for="dataCertidao">Data da certidão</label>
    <input type="date" class="form-control" id="dataCertidao" name="dataCertidao" value="{{$item->data_certidao ?? ''}}">
</div>

<div class="form-group">
    <label for="tabeliao">Tabelião</label>
    <select id="tabeliao" class="form-control">
        
        <option>Priscila</option>
        <option>Fabio</option>
        <option>Beatriz</option>

    </select>
</div>

<form action="{{route('link.update','1')}}" method="PUT" enctype="multipart/form-data">
<td colspan="2" align="center">
    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-datos-personales-foto-edit-1">
        Cambiar foto
    </button>
</td>
<td colspan="2">
    <img src="{{asset('imagenes/a.jpg')}}" alt="{{''}}" style="width:80%;max-height:400px" class="img-fluid img-thumbnail mx-auto d-block my-4 card-img-top" >
</td>
</form>

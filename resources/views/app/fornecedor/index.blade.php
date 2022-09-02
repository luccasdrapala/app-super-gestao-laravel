<h3>Página index (Fornecedor)</h3>

{{--Comentario do blade--}}

@php
    


@endphp

{{-- @dd($fornecedores) Lista array na tela--}}


@if (count($fornecedores)> 0 && count($fornecedores)<10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores)>10)
    <h3>Existem mais de 10</h3>
@endif

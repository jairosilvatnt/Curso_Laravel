<h1>Fornecedor</h1>
<p>Estudo sobre comentarios, utilizando php e blade </p>


{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

{{-- {{ 'Testando um conteudo {}' }}
<br>
<?= 'Deixando outro comentario'  ?> --}}
<br>
@php
    // Para deixar aqui os comentarios em blade
    /*
        Para comentários de multiplas linhas
    */
@endphp

{{-- @unless executa se o retorno for falso --}}

{{-- @if($fornecedores[0]['status'] == 'N')
    Fornecedor inativo
@endif
<br>
 --}}
<!-- se o retorno da condição for false -->
{{-- @unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo (Método unless)
@endunless --}}


{{-- retorna true se a variável esteiver definida --}}

@isset($fornecedores)
    @foreach ($fornecedores as $indice => $fornecedor)
        Interação atual: {{ $loop->iterarion }}
        <br>
        Fornecedores: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        @if($fornecedor['status'] == 'N')
        Fornecedor inativo
        @endif
        <br>
        @isset($fornecedor['CNPJ'])
            CNPJ: {{ $fornecedor['CNPJ'] }}
            @empty($ffornecedor['CNPJ'])
            -Vazio
            @endempty
        @endisset
        <br>
        <hr>
    @endforeach
@endisset

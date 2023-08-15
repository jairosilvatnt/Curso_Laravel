<h1>Fornecedor</h1>
<p>Estudo sobre comentarios, utilizando php e blade </p>


{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

{{ 'Testando um conteudo {}' }}
<br>
<?= 'Deixando outro comentario'  ?>
<br>
@php
    // Para deixar aqui os comentarios em blade

    /*
        Para comentários de multiplas linhas 
    */

    echo 'Testando comentarios (echo)';

@endphp

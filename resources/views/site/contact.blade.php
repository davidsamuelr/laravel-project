{{-- <h3>Contato</h3>

<ul>
    <li><a href="{{ route('site.default') }}">Principal</a></li>
    <li><a href="{{ route('site.contact') }}">Contato</a></li>
    <li><a href="{{ route('site.about') }}">Sobre</a></li>
</ul> --}}

@extends('site.layouts.basic') {{-- determina o template a ser extendido na view --}}

@section('title', $title) {{-- enviando valor do controlador para yield title --}}

@section('content') {{-- definição da sessão conteúdo --}}

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                <form action={{route('site.contact')}} method="get">
                    <input name="name" type="text" placeholder="Nome" class="borda-preta">
                    <br>
                    <input name="phone" type="text" placeholder="Telefone" class="borda-preta">
                    <br>
                    <input name="mail" type="text" placeholder="E-mail" class="borda-preta">
                    <br>
                    <select name="reason" class="borda-preta">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="1">Dúvida</option>
                        <option value="2">Elogio</option>
                        <option value="3">Reclamação</option>
                    </select>
                    <br>
                    <textarea name="message" class="borda-preta">Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection

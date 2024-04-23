<style>


    .content__logout {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }

</style>

<body>

    <div class="content">

        @if(session()->has('user'))
            <h3>Seja bem-vindo, {{ session('name') }}!</h3>
            
            <a href="/logout">Sair...</a>

        @else
        
        <div class="content__logout">            
            <h3>Usuário não logado.</h3>
            <a href="/login"><p>Fazer login</p></a>
        </div>


        @endif


    </div>

</body>
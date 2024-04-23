<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Tahoma;
    }
    
    .body__login {
        background-color: #535DEC;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
    }
    
    .container__login {
        display: flex;
        width: 800px;
        border-radius: 7px;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        overflow: hidden;
    }
    
    .container_login__logo {
        
    }
    
    .container_login__form {       
        background-color: #DDE8F7;
        width: 100%;
        padding: 30px;
        display: flex;
        justify-content: center;        
    }

    .container_login__form h1 {       
        text-align: center;
        margin-bottom: 15px;        
    }
    
    .container_login__form  form {       
        width: 250px;
        display: flex;
        flex-direction: column;        
    }
    
    .container_login__form  form button[type=submit] {   
        color: #fff;
        background-color: #535DEC;   
        cursor: pointer;  
        height: 35px;
        border: none;
        border-radius: 3px;
        margin-top: 20px;
    }
    
    .container_login__form  form button[type=submit]:hover {   
        background-color: #4446E9;        
    }
    
    .box__input {
        display: flex;
        margin-bottom: 10px;
        height: 30px;
    }

    .box__input .box_input__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 3px 10px;
        background-color: #91B3FA;
        color: #fff;
        height: 100%;
    }

    .box__input .box_input__desc {
        width: 100%;
        background-color: #E4EBFD;
        height: 100%;
    }

    .box__input .box_input__desc input {
        width: 100%;
        border: none;
        background-color: #E4EBFD;
        height: 100%;
        padding: 5px;
    }
    
    .box__input .box_input__desc input:focus {
        background-color: #91B3FA;
        color: #fff;
        outline: none;
    }

    .btn-secondary {
        background-color: #FE7062;
        color: #fff;
        cursor: pointer;  
        height: 35px;
        border: none;
        border-radius: 3px;
        margin-top: 10px;
        width: 100%;
    }

    .title {
        color: #FE7062;
    }

    .footer {
        color: #91B3FA;
    }

    label {
        color: #7D97F4;
    }
    
</style>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<body class="body__login">

    <h1 class="title"><ion-icon name="logo-laravel"></ion-icon> Laravel</h1>

    <div class="container__login">

        <div class="container_login__logo">
            
            <img src="img/img__login.jpg" width="400px" alt="">

        </div>

        <div class="container_login__form">

            <form action="/check-login"  method="POST">
                @csrf
                <h1>Login</h1>
                <label for="user">Usuário</label>
                <div class="box__input">
                    <div class="box_input__icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div class="box_input__desc">
                        <input type="text" id="user" name="user">
                    </div>
                </div>

                <label for="pass">Senha</label>
                <div class="box__input">
                    <div class="box_input__icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </div>
                    <div class="box_input__desc">
                        <input type="password" id="pass" name="pass">                        
                    </div>
                </div>

                <button type="submit">Entrar</button>

                <a href="/">
                    <input type="button" class="btn-secondary" value="Voltar">
                </a>                    

            </form>

        </div>


    </div>

    <h5 class="footer">Desenvolvido por Francis Campos - 2024</h5>

</body>


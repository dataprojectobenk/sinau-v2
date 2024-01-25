<template>
    <div  class="bg-primary bg-gradient vh-100 d-flex align-items-end">
        <div class="login-container w-100 mx-auto">
            <h1 class="text-center text-white logo"><i class="bi bi-rocket-fill"></i></h1>
            <div class="title ">
                <h1 class="h1 fw-bold text-center text-white mb-0">WELCOME BACK</h1>
                <h6 class="h6 text-center text-white mt-0">Sign in to continue</h6>
            </div>
            <div class="card card-body rounded-bottom-0 login-box" >
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="NISN" class="form-label">Nomor Induk Siswa</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-square"></i></span>
                            <input type="text" class="form-control" placeholder="Masukkan NISN">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                            <input type="password" class="form-control" placeholder="Kata sandi">
                            <i class="bi bi-eye-fill show-pass"></i>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary form-control fw-bold">Sign in</button>
                    </div>
                    <a href="#">Lupa password?</a>
                </form>
            </div>
        </div>        
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>
    div.login-container{
        max-width: 500px;
        .logo{
            font-size: 80px;
        }
        div.title{
            margin-bottom: 4rem;
        }
        div.login-box{
            border-top-right-radius: 3rem;
            border-top-left-radius: 3rem;
        }
        form{
            max-width: 300px;
            margin: auto;
            margin-top: 50px;
            margin-bottom: 25px;
            input[type="password"]{
                padding-right: 25px;
            }
            .show-pass{
                position: absolute;
                right: 0.5rem;
                top: .5rem;
                cursor: pointer;
                z-index: 100;
            }
        }
    }
    @media screen and (max-width=767px){
        div.login-container{
            width:100% ;
        }
    }
</style>
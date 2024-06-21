<style scoped>
@media screen and (min-width: 768px) {
    .desktop-only {
        margin-left: 400px;
    }

    p,
    a {
        color: white;
        text-decoration: none;
    }
}

input[type="date"]::-webkit-calendar-picker-indicator {
    color: rgba(0, 0, 0, 0);
    opacity: 1;
    display: block;
    background: url(data:image/png;base64,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) no-repeat;
    width: 20px;
    height: 20px;
    border-width: thin;
}
</style>
<template>
    <div class="header_area" style="position: fixed; width: 100%">
        <div class="container-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="/image/Logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav desktop-only">
                        <li class="nav-item active"><router-link to="/" class="nav-link">Home</router-link></li>
                        <li class="nav-item"><router-link to="/check" class="nav-link">Check Booking</router-link></li>
                        <li class="nav-item"><router-link to="/feedback" class="nav-link">Feedback</router-link></li>
                        <li class="nav-item"><router-link to="/map" class="nav-link">Map</router-link></li>
                        <li class="nav-item" v-if="role === 'tamu'" @click="keluar"><router-link to="" class="nav-link">LogOut</router-link></li>
                        <li class="nav-item" v-else><router-link to="/login" class="nav-link">Login</router-link></li>
                        <li class="nav-item" @click="checkHistory"><router-link to=""class="nav-link">History</router-link></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--================Header Area =================-->
</template>


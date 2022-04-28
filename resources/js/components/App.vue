<template>
    <div>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <router-link class="nav-link active navbar-brand" exact-active-class="active" to="/" aria-current="page">
      <img src="http://www.rh1hernando.com.ar/img/noticias/mercadolibre-logo-nuevo-codos_12190.jpg" alt="" width="50" height="50">
  </router-link>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <router-link exact-active-class="active" to="/" class="nav-link active" aria-current="page">Home</router-link>
      </li>
      <li class="nav-item">
          <router-link exact-active-class="active" to="/agent" class="nav-link active">Agents</router-link>
      </li>
      <li class="nav-item">
        <router-link exact-active-class="active" to="/customer" class="nav-link active">Customers</router-link>
      </li>
      <li class="nav-item">
        <router-link exact-active-class="active" to="/order" class="nav-link active">Orders</router-link>  
      </li>
    </ul>

  </div>
</nav>
        </div>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>
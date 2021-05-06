<template>
<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">InertiaJs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="/welcome">Welcome page <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="/contatti">Contatti</a>
      <a class="nav-link" href="#">Pricing</a>
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
  </nav>
  <div class="container">
    <h1>Questa è la pagina di benvenuto! Inertia</h1>
    <div class="card" style="width: 18rem;">
      <ul class="list-group list-group-flush">
        <li class="list-group-item" v-for="(message, index) in messages" :key="index">{{message.text}}</li>
      </ul>
    </div>
  </div>
</div>
</template>

<script>
export default {
  props: {
    messages: Array
  },
  mounted() {
    console.log(this.messages);
  }
}
</script>
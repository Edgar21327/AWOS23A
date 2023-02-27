<!-- Account page navigation-->
<nav class="nav nav-borders">
    <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Perfil</a>
    <a class="nav-link ms-0" href="registro" target="__blank">Editar</a>
<form action="/logout" method="POST">
    @csrf
    <a class="nav-link" href="#" onclick="this.closest('form').submit()">Cerrar Sesion</a>

</form>

</nav>
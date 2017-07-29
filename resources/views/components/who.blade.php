@if (Auth::guard('web')->check())
  <p class="text-success">
    Você está conectado como um <strong>USER</strong>
  </p>
@else
<!--
  <p class="text-danger">
    Você esta conectado como um <strong>USER</strong>
  </p> -->
@endif

@if (Auth::guard('admin')->check())
  <p class="text-success">
    Você está conectado como um <strong>ADMIN</strong>
  </p>
@else
<!--
  <p class="text-danger">
    Você esta conectado como um <strong>ADMIN</strong>
  </p> -->
@endif
